<div class="categories container">

    <div class="section">
        <div class="section__text">
            <p class="text_center">Салон Lady-Boss предоставляет широкий спектр услуг для отдыха и ухода за собой. Наши программы рассчитаны не только на прекрасных женщин, но и мужчин. Кроме того, можно посещать наш салон вдвоем - со своей половинкой, подругой или другом.</p>
        </div>
    </div>

    @foreach($categories as $category)

        @component('frontend.components.category-card', ['category'=>$category])
            @slot('header')
                <div class="category-card__header">
                    <h2 class="h2">{{ $category->name }}</h2>
                </div>
            @endslot
        @endcomponent

    @endforeach

</div>