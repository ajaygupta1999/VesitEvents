<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder(s) via SMS using Twilio.';

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
     * @return mixed
     */
    public function handle()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('208c20c2', 'dOEtRew2SEbYZwzS');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '918291597204',
            'from' => 'Vonage APIs',
            'text' => 'test message from abc'
        ]);
        $this->info('Successfully sent remainder');
    }
}
