<div class="testimonial-add-form section container">

    <div class="section__header">
        <p class="h2">Оставить отзыв</p>
    </div>

    <form action="{{ route('thanks.testimonial') }}" class="form" method="post">
        @csrf

        <div class="section__body">
            <input type="text" name="author" placeholder="Ваше имя">
            <textarea name="text" cols="30" rows="10" placeholder="Текст вашего отзыва"></textarea>
            <input type="hidden" name="thanks_for" value="testimonial">
        </div>

        <div class="section__btns">
            <button class="btn btn_size_md btn_color_green">Готово</button>
        </div>

    </form>

</div>