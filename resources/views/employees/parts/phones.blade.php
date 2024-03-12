<h2>Телефони</h2>

<table id="tabemp" class="table table-striped">
    <thead>
        <tr>
            <th>
                Телефон
            </th>
            <th>
                Тип
            </th>
            <th>
                Статус
            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employee->phones as $phone)
            <tr>
                <td>
                    {{ $phone->phone }}
                </td>
                <td>
                    {{ $phone->type_str }}
                </td>
                <td>
                    {{ $phone->status_str }}
                </td>
                <td>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
