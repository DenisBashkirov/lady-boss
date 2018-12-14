<div class="testimonials section">
    
    <div class="testimonials__list section__body masonry-grid">
        @foreach($testimonials as $item)
            @component('frontend.components.testimonial-card', ['testimonial'=>$item])
            @endcomponent
        @endforeach
    </div>

    <div class="section__btns">
        <div class="btn btn_size_md btn_color_white js-action_elem" data-target="testimonial-add" data-effect="slideDown">Написать отзыв</div>
    </div>

    @component('frontend.components.forms.testimonial_add')
    @endcomponent
    
</div>