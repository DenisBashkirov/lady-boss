@if(count($testimonials) > 0)
    <section class="testimonials-section section container">

        <h2 class="h2 testimonials-section__header section__header">Отзывы</h2>

        <div class="testimonials-section__body section__body">

            @foreach($testimonials as $item)
                @component('frontend.components.testimonial-card', ['testimonial'=>$item])
                @endcomponent
            @endforeach

        </div>

        <div class="testimonials-section__btns section__btns">
            <a href="{{ route('testimonials') }}" class="btn btn_size_md btn_color_green">Все отзывы</a>
            <div class="btn btn_size_md btn_color_white js-action_elem" data-target="testimonial-add" data-effect="slideDown">Написать отзыв</div>
        </div>

    </section>
@endif