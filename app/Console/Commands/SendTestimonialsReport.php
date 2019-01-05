<?php

namespace App\Console\Commands;

use App\Mail\TestimonialsReport;
use Illuminate\Console\Command;
use Mail;

class SendTestimonialsReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends report about new testimonials to email';

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
        Mail::to(['era-digital@yandex.ru'])->send(new TestimonialsReport());
    }
}
