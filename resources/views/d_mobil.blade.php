<form method="POST" action="{{ route('mobil.update') }}">
    @csrf
    @method('PUT')
    <h1>Edit Mobil</h1>
    <input type="hidden" name="id"  value="{{ $mobil->id }}"/>
    <table border="1">
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="nama" value="{{ $mobil->nama }}" required></td>
        </tr>
        <tr>
            <td>Merk:</td>
            <td><input type="text" name="merk" value="{{ $mobil->merk }}" required></td>
        </tr>
        <tr>
            <td><button type="submit">Update</button></td>
            <td><a href="{{ url('/') }}">kembali</a></td>
            <td><a href="{{ url('barang') }}">pembelian</a></td>
        </tr>
    </table>
</form>