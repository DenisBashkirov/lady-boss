@extends('backend.templates.main')

@section('page_content')

    <div class="masonry">
        @foreach($testimonials as $testimonial)
            <div class="ui card testimonial-card">
                @if ($testimonial->video)
                    <div class="image">
                        <video controls="controls" poster="{{ asset('video/testimonials/' . $testimonial->video . '.jpg') }}" class="testimonial-card__video-src">
                            <source src="{{ asset('video/testimonials/' . $testimonial->video . '.mp4') }}">
                        </video>
                    </div>
                @endif
                @if ($testimonial->text)
                    <div class="content">
                        {!! $testimonial->text !!}
                    </div>
                @endif
                <div class="extra content">
                    @if ($testimonial->author)
                        <p><i class="user icon"></i>{{ $testimonial->author }}</p>
                    @endif
                    <p><i class="icon calendar outline"></i>{{ date('d-m-Y', strtotime($testimonial->created_at)) }}</p>
                </div>
                <div class="extra content">
                    <a href="{{ route('testimonials.destroy', $testimonial->id) }}" class="ui red button mini" data-method="DELETE" data-token="{{ @csrf_token()}}"><i class="icon trash"></i>Удалить</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection