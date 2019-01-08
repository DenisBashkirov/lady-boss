@extends('backend.templates.main')

@section('page_content')

    <div class="masonry">
        @foreach($gallery_items as $item)
            <div class="ui card">
                <div class="image">
                    <a data-fancybox="gallery" href="{{ asset('img/gallery/' . $item->filename) }}.jpg"><img src="{{ asset('img/gallery/' . $item->filename) }}_small.jpg" class="gallery-item-card__img-src"></a>
                </div>
                <div class="extra content">
                    <a href="{{ route('gallery.destroy', $item->id) }}" class="ui red button mini" data-method="DELETE" data-token="{{ @csrf_token()}}"><i class="icon trash"></i>Удалить</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection