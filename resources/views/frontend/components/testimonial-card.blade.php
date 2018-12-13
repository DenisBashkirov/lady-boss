<div class="testimonial-card" data-aos="fade-up">
    <div class="testimonial-card__video">
        <video controls="controls" poster="{{ asset('video/testimonials/' . $testimonial->video . '.jpg') }}" class="testimonial-card__video-src">
            <source src="{{ asset('video/testimonials/' . $testimonial->video . '.mp4') }}">
        </video>
    </div>
    <div class="testimonial-card__info">
        <p class="testimonial-card__date">16.11.2018</p>
    </div>
</div>