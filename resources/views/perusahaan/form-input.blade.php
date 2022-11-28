@extends("blank")

@section("konten")

    <form action="{{ route("simpan_perusahaan") }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Keterangan: <textarea name="keterangan" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>

    <script src="//cdn.ckeditor.com/4.20../full/ckeditor.js"></script>

    <script>

@endsection