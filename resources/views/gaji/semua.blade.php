@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $gaji)
        Gaji Pokok : {{ $gaji->gaji }} <br>
        Tunjangan: {{ $gaji->tunjangan }} <br>
        Upah Lembur: {{ $gaji->upah }} <br>
        Created: {{ $gaji->created_at }}<br>
        Updated: {{ $gaji->updated_at }}<br>
        <a href="{{ route('ubah_gaji', ['id' => $gaji->id]) }}">Ubah</a>
        <a href="{{ route('tampil_gaji', ['id' => $gaji->id]) }}">Tampil</a>

        <form action="{{ route('hapus_gaji', ['id' => $gaji->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection