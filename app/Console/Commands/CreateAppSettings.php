<?php

namespace App\Console\Commands;

use App;
use App\AppSettings;
use Illuminate\Console\Command;

class CreateAppSettings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appsettings:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the app settings file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $settings = app(AppSettings::class);
        $settings->flush();
        $settings->put([
            'copyright_year' => "2018-" . now()->year,
            'show_twitch_on_home' => false,
            'banner_display' => false,
            'banner_text' => null,
            'banner_icon' => null,
            'banner_url' => null,
            'allow_sign_in' => true,
            'allow_new_applications' => true,
            'director' => config('mail.from.address'),
            'deputy_director' => config('mail.from.address'),
            'training' => config('mail.from.address'),
            'marketing' => config('mail.from.address'),
            'it' => config('mail.from.address'),
            'operations' => config('mail.from.address'),
            'general' => config('mail.from.address'),
            'confidential' => config('mail.from.address')
        ]);
    }
}
