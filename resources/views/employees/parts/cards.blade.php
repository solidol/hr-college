<h2>Посади</h2>
<table id="tabemp" class="table table-striped">
    <thead>
        <tr>
            <th>
                Посада
            </th>
            <th>
                Ставка
            </th>
            <th>
                Тип
            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employee->cards as $card)
            <tr>
                <td>
                    {{ $card->position->title }}
                </td>
                <td>
                    {{ $card->volume }}
                </td>
                <td>
                    {{ $card->type_str }}
                </td>

                <td>
                   
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
