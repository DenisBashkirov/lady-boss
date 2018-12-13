<div class="testimonial-card" data-aos="fade-up">
    @if($testimonial->video)
        <div class="testimonial-card__video">
            <video controls="controls" poster="{{ asset('video/testimonials/' . $testimonial->video . '.jpg') }}" class="testimonial-card__video-src">
                <source src="{{ asset('video/testimonials/' . $testimonial->video . '.mp4') }}">
            </video>
        </div>
    @endif
        @if($testimonial->text)
            <div class="testimonial-card__text">
                {!! $testimonial->text !!}
            </div>
        @endif
    <div class="testimonial-card__info">
        @if($testimonial->author)
            <p>{{ $testimonial->author }}</p>
        @endif
        <p class="testimonial-card__date">{{ date('d-m-Y', strtotime($testimonial->created_at)) }}</p>
    </div>
</div>