<div class="gallery section">
    
    <div class="gallery__list section__body masonry-grid">
        @foreach($gallery as $item)
            @component('frontend.components.gallery-item-card', ['item'=>$item])
            @endcomponent
        @endforeach
    </div>
    
</div>