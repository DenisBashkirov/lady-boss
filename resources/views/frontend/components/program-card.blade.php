<div class="program-card" data-aos="fade-in">
    <div class="program-card__cover">
        <div class="program-card__img" style="background-image: url('/public/img/programs/{{ $program->subcategory->category->slug }}/{{ $program->subcategory->slug }}/{{ $program->slug }}.jpg')"></div>
        <div class="program-card__cover-overlay overlay"></div>
        <h2 class="program-card__title">{!! $program->name !!}</h2>
    </div>
    {{ $button }}
    <div class="program-card__body">
        @if($program->text)
            <div class="program-card__text text">
                {!! $program->text !!}
            </div>
        @endif
        @if($program->list)
            <ul class="program-card__list">
                {!! $program->list !!}
            </ul>
        @endif
        @if(count($program->price_list_items) > 0)
            <div class="program-card__price-list">
                @foreach($program->price_list_items as $item)
                    <div class="program-card__price-list-item">
                        <p>{{ $item->text }}</p>
                        @if($item->price)
                            <p>{{ $item->price }}&nbsp;р.</p>
                        @endif
                        @if($item->price_range)
                            <div class="program-card__price-range">
                                @if($item->price_range->min)
                                    <p>от {{ $item->price_range->min }} р.</p>
                                @endif
                                @if($item->price_range->max)
                                    <p>&nbsp;до {{ $item->price_range->max }} р.</p>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    @if($program->time || $program->price)
        <div class="program-card__info text_size_lg">
            @if($program->time)
                <p class="program-card__time text_iconed">
                    <span class="icon-clock"></span>&nbsp;<span>{{ $program->time }}</span>
                </p>
            @endif
            <p class="program-card__price">
                <span>{{ $program->price }} р.</span>
            </p>
        </div>
    @endif
</div>