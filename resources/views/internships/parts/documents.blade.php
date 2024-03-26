<h2>Приєднані документи</h2>
<table id="tabemp" class="table table-striped">
    <thead>
        <tr>
            <th>
                Номер
            </th>
            <th>
                Дата
            </th>
            <th>
                Тип
            </th>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($internship->documents as $document)
            <tr>
                <td>
                    {{ $document->number }}
                </td>
                <td>
                    {{ $document->date_start->format('d.m.Y') }}
                </td>
                <td>
                    {{ $document->documentType->title }}
                </td>
                <td>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
