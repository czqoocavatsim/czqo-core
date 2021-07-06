<?php

namespace App\Http\Controllers;

use App\AppSettings;
use App\Models\Events\Event;
use App\Models\News\HomeNewControllerCert;
use App\Models\News\News;
use App\Models\Roster\RosterMember;
use Atymic\Twitter\Facade\Twitter;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Vatsimphp\VatsimData;

class ViewsController extends Controller
{
    /**
     * Shows home page.
     *
     * @return View
     */
    public function home(AppSettings $settings): View
    {
        //Get VATSIM data
        $onlineControllers = [];
        $vatsim = new VatsimData();
        if ($vatsim->loadData()) {
            $onlineControllers = array_merge($vatsim->searchCallsign('CZQX_')->toArray(), $vatsim->searchCallsign('EGGX_')->toArray());
        } else {
            Log::alert('VATSIM Data failed to load', [
                'url' => url()->current(),
                'time' => now(),
                'data' => $vatsim->getConfig()
            ]);
        }

        //Latest news article
        $news = News::whereVisible(true)->orderBy('published')->first();

        //Next event
        $nextEvent = Event::where('start_timestamp', '>', now())->orderBy('start_timestamp')->first();

        //Top controllers
        $topControllers = RosterMember::where('monthly_hours', '>', 0)->orderByDesc('monthly_hours')->limit(3)->get();

        //Latest certifications
        $certifications = HomeNewControllerCert::orderByDesc('timestamp')->limit(3)->get();

        //Twitter
        $tweets = Cache::remember('twitter.timeline', now()->addHours(4), function () {
            try {
                return Twitter::getUserTimeline(['screen_name' => 'ganderocavatsim', 'count' => 2, 'format' => 'array']);
            } catch (\Exception $ex) {
                return null;
            }
        });

        //CTP Mode?
        $ctpMode = config('app.ctp_home_page');

        //Return view
        return view('index', [
            'onlineControllers' => $onlineControllers,
            'topControllers' => $topControllers,
            'news' => $news,
            'certifications' => $certifications,
            'nextEvent' => $nextEvent,
            'tweets' => $tweets,
            'ctpMode' => $ctpMode,
            '_pageTitle' => 'Welcome'
        ]);
    }

    /**
     *
     * Shows controller roster page.
     *
     * @return View
     */
    public function controllerRoster(): View
    {
        $roster = RosterMember::paginate(15);

        return view('roster.index', ['roster' => $roster, '_pageTitle' => 'Controller Roster']);
    }
}
