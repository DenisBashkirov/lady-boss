$(document).ready(function () {

    /*
    * SEMANTIC-UI
    */

    $('.ui.dropdown')
        .dropdown()
    ;

    $('select.dropdown')
        .dropdown()
    ;


    /*
    *  MASONRY
    */

    $('.masonry').masonry({
        gutter: 30,
        horizontalOrder: false
    });

    /*
    *   SUMMERNOTE WYSIWYG
     */

    $('.summernote').summernote({
        lang: 'ru-Ru',
        height: 250,
    });





    var stringsToCountChars = document.querySelectorAll('.js-chars_count');
    for (var i = 0; i < stringsToCountChars.length; i++)
    {
        var counter = document.querySelector('.' + stringsToCountChars[i].getAttribute('data-counter'));
        counter.innerHTML = stringsToCountChars[i].value.length;

        stringsToCountChars[i].addEventListener('keyup', function () {
            var length = this.value.length;
            var counter = document.querySelector('.' + this.getAttribute('data-counter'));

            counter.innerHTML = length;
        });
    }

});