<div class="socials">
    @foreach($socials as $social)
        <div class="socials__item">
            <a href="{{ $social->link }}" class="socials__icon socials__icon_size_{{ $size }} socials__icon_color_{{ $color }} link_inherit">
                <span class="icon-{{ $social->name }}-logo"></span>
            </a>
        </div>
    @endforeach
</div>