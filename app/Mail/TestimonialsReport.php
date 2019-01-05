<?php

namespace App\Mail;

use App\Testimonial;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestimonialsReport extends Mailable
{
    use Queueable, SerializesModels;

    public $testimonials;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->testimonials = Testimonial::all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('admin@lady-boss-spa.ru')
            ->subject('Отчёт по отзывам')
            ->view('emails.testimonials_report');
    }
}
