<div class="testimonials section">
    
    <div class="testimonials__list section__body masonry-grid">
        @foreach($testimonials as $item)
            @component('frontend.components.testimonial-card', ['testimonial'=>$item])
            @endcomponent
        @endforeach
    </div>
    
</div>