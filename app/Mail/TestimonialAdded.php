<?php

namespace App\Mail;

use App\Testimonial;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestimonialAdded extends Mailable
{
    use Queueable, SerializesModels;

    public $testimonial;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
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
            ->subject('На сайте добавлен отзыв')
            ->view('emails.testimonial_added');
    }
}
