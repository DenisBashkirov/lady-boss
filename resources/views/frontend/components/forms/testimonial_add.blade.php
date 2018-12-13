<div class="testimonial-add section container">

    <div class="section__header">
        <p class="h2">Оставить отзыв</p>
    </div>

    <div class="section__body">
        <div class="testimonial-add__form">
            <form action="{{ route('thanks.testimonial') }}" class="form" method="post">
                @csrf
                <input class="form__input" type="text" name="author" placeholder="Ваше имя" required>
                <textarea class="form__textarea" name="text" cols="30" rows="10" placeholder="Текст вашего отзыва" required></textarea>
                <input type="hidden" name="thanks_for" value="testimonial">
                <button class="btn btn_size_md btn_color_green">Готово</button>
            </form>
        </div>
    </div>

</div>