<form method="POST" action="{{ route('mobil.store') }}">
    @csrf
    <h1>tambah mobil</h1>
    <table border="1">
        <tr>
            <td> nama: <input type="text" name="nama"></td>
            <td> merk: <input type="text" name="merk"></td>
            <td> <button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>