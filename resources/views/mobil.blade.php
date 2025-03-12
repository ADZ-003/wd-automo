<table border="1">
    <h1>list mobil</h1>
    <a href="{{ url('barang') }}">barang</a>
    <a href="{{ url('c_mobil') }}">Tambah</a>
    <thead>
        <tr>
            <td>no</td>
            <td>nama</td>
            <td>merk</td>
            <td>aksi</td>
    </tr>
    </thead>
    <tbody>
        
        @foreach ($mobils as $m)
        <tr>
            <td>{{ $m ->id }}</td>
            <td>{{ $m ->nama }}</td>
            <td>{{ $m ->merk }}</td>
            <td>
                <a href="{{ route('edit.mobil',  $m->id) }}">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>