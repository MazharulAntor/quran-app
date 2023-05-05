<table>
    <thead>
        <tr>
            <th>Ayah Id</th>
            <th>Saheeh International</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
            <td>{{ $row['ayah_id'] }}</td>
            <td>{{ $row['data'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

