<a href="{{ route('programs', $subcategory->slug) }}" class="subcategory-card">
    <div class="subcategory-card__img" style="background-image: url('/public/img/subcategories/{{ $subcategory->slug }}_small.jpg')">
        <div class="subcategory-card__overlay overlay"></div>
        <span class="subcategory-card__background"></span>
    </div>
    <p class="subcategory-card__title">{{ $subcategory->name }}</p>
    <div class="subcategory-card__btn">
        <div class="btn btn_color_green btn_size_md">подробнее</div>
    </div>
</a>