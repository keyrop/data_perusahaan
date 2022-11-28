@extends("blank")

@section("konten")

    <form action="{{ route("simpan_jabatan") }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Keterangan : <textarea name="keterangan" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection