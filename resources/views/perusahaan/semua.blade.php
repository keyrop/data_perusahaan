@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $perusahaan)
        Nama : {{ $perusahaan->nama }} <br>
        Keterangan: {{ $perusahaan->keterangan }} <br>
        Created: {{ $perusahaan->created_at }}<br>
        Updated: {{ $perusahaan->updated_at }}<br>
        <a href="{{ route('ubah_perusahaan', ['id' => $perusahaan->id]) }}">Ubah</a>
        <a href="{{ route('tampil_perusahaan', ['id' => $perusahaan->id]) }}">Tampil</a>

        <form action="{{ route('hapus_perusahaan', ['id' => $perusahaan->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection