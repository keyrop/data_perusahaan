@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $jabatan)
        Nama : {{ $jabatan->nama }} <br>
        Keterangan: {{ $jabatan->keterangan }} <br>
        Created: {{ $jabatan->created_at }}<br>
        Updated: {{ $jabatan->updated_at }}<br>
        <a href="{{ route('ubah_jabatan', ['id' => $jabatan->id]) }}">Ubah</a>
        <a href="{{ route('tampil_jabatan', ['id' => $jabatan->id]) }}">Tampil</a>

        <form action="{{ route('hapus_jabatan', ['id' => $jabatan->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection