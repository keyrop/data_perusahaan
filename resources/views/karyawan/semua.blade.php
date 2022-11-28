@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $karyawan)
        Nama : {{ $karyawan->nama }} <br>
        Keterangan: {{ $karyawan->keterangan }} <br>
        Created: {{ $karyawan->created_at }}<br>
        Updated: {{ $karyawan->updated_at }}<br>
        <a href="{{ route('ubah_karyawan', ['id' => $karyawan->id]) }}">Ubah</a>
        <a href="{{ route('tampil_karyawan', ['id' => $karyawan->id]) }}">Tampil</a>

        <form action="{{ route('hapus_karyawan', ['id' => $karyawan->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection