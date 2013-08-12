{{ Form::open(array('route' => array('crud_save'))) }}
    <td>{{ Form::hidden('id', $data->id) }}</td>
    <table>
        <tr>
            <td>{{ Form::label('nama', 'Nama') }}</td>
            <td>{{ Form::text('nama', $data->nama) }}</td>
        </tr>
        <tr>
            <td>{{ Form::label('alamat', 'Alamat') }}</td>
            <td>{{ Form::textarea('alamat', $data->alamat) }}</td>
        </tr>
    </table>
    <p align="center">{{ Form::submit('Simpan') }}  {{ Form::reset('Batal') }}</p>
{{ Form::close() }}
<p align="center">{{ HTML::linkRoute('crud_index', 'Kembali') }}</p>