<?php

namespace App\Models\Events;

use App\Models\Users\UserAccount;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\HtmlString;
use Parsedown;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * App\Models\Events\Event
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon $start_timestamp
 * @property \Illuminate\Support\Carbon $end_timestamp
 * @property int $user_id
 * @property string $description
 * @property string|null $image_url
 * @property int $controller_applications_open
 * @property string|null $departure_icao
 * @property string|null $arrival_icao
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $allow_not_certified_sign_ups
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Events\ControllerApplication[] $controllerApplications
 * @property-read int|null $controller_applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Events\EventUpdate[] $updates
 * @property-read int|null $updates_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Query\Builder|Event onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereAllowNotCertifiedSignUps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereArrivalIcao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereControllerApplicationsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDepartureIcao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStartTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Event withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Event withoutTrashed()
 * @mixin \Eloquent
 */
class Event extends Model
{
    use SoftDeletes;
    use LogsActivity;

    protected static $logUnguarded = true;

    protected $fillable = [
        'id', 'name', 'start_timestamp', 'end_timestamp', 'user_id', 'description', 'image_url', 'controller_applications_open', 'departure_icao', 'arrival_icao', 'slug', 'allow_not_certified_sign_ups',
    ];

    protected $dates = [
        'start_timestamp', 'end_timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'user_id');
    }

    public function updates()
    {
        return $this->hasMany(EventUpdate::class);
    }

    public function controllerApplications()
    {
        return $this->hasMany(ControllerApplication::class);
    }

    public function starts_in_pretty()
    {
        $t = $this->start_timestamp;

        return $t->diffForHumans();
    }

    public function start_timestamp_pretty()
    {
        $t = $this->start_timestamp;

        return $t->day.' '.$t->monthName.' '.$t->year.' '.$t->format('H:i').' Zulu';
    }

    public function flatpickr_limits()
    {
        $start = $this->start_timestamp;
        $end = $this->end_timestamp;

        return [
            $start->format('H:i d-m-Y'),
            $end->format('H:i d-m-Y'),
        ];
    }

    public function end_timestamp_pretty()
    {
        $t = $this->end_timestamp;

        return $t->day.' '.$t->monthName.' '.$t->year.' '.$t->format('H:i').' Zulu';
    }

    public function departure_icao_data()
    {
        if (!$this->departure_icao) {
            return null;
        }

        $output = Cache::remember('events.data.'.$this->departure_icao, 172800, function () {
            $url = 'https://api.flightplandatabase.com/nav/airport/'.$this->departure_icao;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $json = curl_exec($ch);
            error_log('Grabbing info from API');
            curl_close($ch);

            return json_decode($json);
        });

        return $output;
    }

    public function arrival_icao_data()
    {
        if (!$this->arrival_icao) {
            return null;
        }

        $output = Cache::remember('events.data.'.$this->arrival_icao, 172800, function () {
            $url = 'https://api.flightplandatabase.com/nav/airport/'.$this->arrival_icao;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $json = curl_exec($ch);
            curl_close($ch);
            error_log('Grabbing info from API');

            return json_decode($json);
        });

        return $output;
    }

    public function event_in_past()
    {
        $end = $this->end_timestamp;
        if (!$end->isPast()) {
            return false;
        }

        return true;
    }

    public function html()
    {
        return new HtmlString(app(Parsedown::class)->text($this->description));
    }

    public function userHasApplied()
    {
        if (ControllerApplication::where('event_id', $this->id)->where('user_id', Auth::id())->first()) {
            return true;
        }

        return false;
    }

    public function userCanSignUp()
    {
        if ($this->allow_not_certified_sign_ups && Auth::user()->rating_id >= 5) {
            return true;
        } elseif (Auth::user()->rosterProfile) {
            return true;
        }

        return false;
    }
}
