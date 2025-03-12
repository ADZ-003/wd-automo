<form method="POST" action="{{ route('barang.store') }}">
    @csrf
    <h1>tambah mobil</h1>
    <table border="1">
        <tr>
            <td> nama barang: <input type="text" name="nama_barang"></td>
            <td> id mobil: <input type="text" name="id_mobil"></td>
            <td> harga: <input type="text" name="harga"></td>
            <td> stok: <input type="text" name="stok"></td>
            <td> <button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>