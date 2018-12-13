<div class="category-card section" data-aos="fade-in">

    {{ $header  }}

    <div class="category-card__body">
        <div class="category-card__subcategories category-card__subcategories_cols_{{ $category->subcategories->count() }}">
            @foreach($category->subcategories as $subcategory)
                @component('frontend.components.subcategory-card', ['subcategory'=>$subcategory])
                @endcomponent
            @endforeach
        </div>
    </div>
</div>