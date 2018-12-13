<h2>Поступил новый отзыв</h2>

<table style="border: none">
    <tr>
        <td style="font-weight: bold">Имя автора:</td>
        <td>{{ $testimonial->author }}</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Текст:</td>
    </tr>
    <tr>
        <td>{{ $testimonial->text }}</td>
    </tr>
</table>

<h2>Опубликовать?</h2>
<table style="border: none">
    <tr>
        <td><a href="{{ route('testimonial.publish', $testimonial->id) }}">Опубликовать</a></td>
    </tr>
</table>