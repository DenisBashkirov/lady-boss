<h2>Поступил новый отзыв</h2>

<table style="border: none; text-align: left;">
    <tr>
        <td style="font-weight: bold">Имя автора:</td>
    </tr>
    <tr>
        <td>{{ $testimonial->author }}</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Текст:</td>
    </tr>
    <tr>
        <td>
            <div style="max-width: 600px;">
                {{ $testimonial->text }}
            </div>
        </td>
    </tr>
</table>

<h2>Опубликовать?</h2>
<table style="border: none">
    <tr>
        <td>
            <a href="{{ route('testimonial.publish', $testimonial->id) }}"
               style="background-color: #6bb42f; color: #fff; padding: 15px 20px; border-radius: 10px; text-decoration: none;">
                Опубликовать
            </a>
        </td>
    </tr>
</table>