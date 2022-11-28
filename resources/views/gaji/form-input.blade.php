@extends("blank")

@section("konten")

    <form action="{{ route("simpan_gaji") }}" method="post">
        @csrf

        Gaji Pokok : <input type="text" name="gaji"> <br>
        Tunjangan : <textarea name="tunjangan" id="" cols="30" rows="10"></textarea> <br>
        Upah Lembur : <textarea name="upah" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection