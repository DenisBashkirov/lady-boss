<h2>Отчёт по отзывам</h2>

@foreach($testimonials as $testimonial)

    <table style="border: none; text-align: left; margin-bottom: 30px;">

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

@endforeach