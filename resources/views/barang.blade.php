<table border="1">
    <thead>
        <tr>
            <td><a href="c_barang">tambah</a></td>
            <td><a href="/">kembali</a></td
        </tr>
        <tr>
            <td>no</td>
            <td>id mobil</td>
            <td>nama barang</td>
            <td>harga</td>
            <td>stok</td>
            <td>aksi</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $b)
        <tr>
            <td>{{ $b ->id }}</td>
            <td>{{ $b ->id_mobil }}</td>
            <td>{{ $b ->nama_barang }}</td>
            <td>{{ $b ->harga }}</td>
            <td>{{ $b ->stok }}</td>
            <td>
                <a href="{{ route('edit.barang', $b->id) }}">Detail</a>
            </td>
        
        @endforeach
    </tbody>
</table>
