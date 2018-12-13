<div class="programs section container">

    <div class="programs__list">
        @foreach($subcategory->programs as $program)
            @component('frontend.components.program-card', ['program'=>$program])
                @slot('button')
                @endslot
            @endcomponent
        @endforeach
    </div>

</div>