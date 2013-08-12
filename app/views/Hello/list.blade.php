<table>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Pilihan</th>
    @foreach($data as $person)
        <tr>
            <td>{{ $person->id }}</td>
            <td>{{ $person->nama }}</td>
            <td>{{ $person->alamat }}</td>
            <td>
                {{ HTML::linkRoute('crud_form', 'Rubah', array($person->id)) }}
                |
                {{ HTML::linkRoute('crud_delete', 'Hapus', array($person->id)) }}
            </td>
        </tr>
    @endforeach
</table>
<p align="center">{{ HTML::linkRoute('crud_form', 'Tambah') }}</p>