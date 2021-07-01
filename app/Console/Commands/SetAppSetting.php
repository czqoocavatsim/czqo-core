<?php

namespace App\Console\Commands;

use App\AppSettings;
use Illuminate\Console\Command;

class SetAppSetting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appsettings:set {key} {value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set an app setting.';

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

        $settings->put($this->argument('key'), $this->argument('value'));

        $this->info("Setting put.");
    }
}
