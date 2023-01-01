@extends("blank")

@section("konten")

<table class="table">
    <a href="{{ route("buat_perusahaan") }}">Add Data</a>

    <h1>Semua Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            <thead>
            @foreach($data as $perusahaan)
            <tbody>
                <tr>
                    <td>{{ $perusahaan->nama }}</td>
                    <td>{{ $perusahaan->keterangan }}</td>
                    <td>{{ $perusahaan->created_at }}</td>
                    <td>{{ $perusahaan->updated_at }}</td>
                    <td><a href="{{ route('ubah_perusahaan', ['id' => $perusahaan->id]) }}">Ubah</a></td>
                    <td><a href="{{ route('tampil_perusahaan', ['id' => $perusahaan->id]) }}">Tampil</a></td>
                    <td><form action="{{ route('hapus_perusahaan', ['id' => $perusahaan->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Hapus</button>
                    </form></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    {{-- @endforeach --}}
@endsection