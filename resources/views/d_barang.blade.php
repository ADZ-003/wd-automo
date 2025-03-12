<form method="POST" action="{{ route('barang.update') }}">
    @csrf
    @method('PUT')
    <h1>Edit barang</h1>
    <input type="hidden" name="id"  value="{{ $barang->id }}"/>
    <table border="1">
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required></td>
        </tr>
        <tr>
            <td>id_mobil:</td>
            <td><input type="text" name="id_mobil" value="{{ $barang->id_mobil }}" required></td>
        </tr>
        <tr>
            <td>harga:</td>
            <td><input type="text" name="harga" value="{{ $barang->harga }}" required></td>
        </tr>
        <tr>
            <td>stok:</td>
            <td><input type="text" name="stok" value="{{ $barang->stok }}" required></td>
        </tr>
        <tr>
            <td><button type="submit">Update</button></td>
            <td><a href="{{ url('/barang') }}">kembali</a></td>
        </tr>
    </table>
</form>