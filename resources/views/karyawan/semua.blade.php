@extends("blank")

@section("konten")

<table class="table">
    <a href="{{ route("buat_karyawan") }}">Add Data</a>

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
            @foreach($data as $karyawan)
            <tbody>
                <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->keterangan }}</td>
                    <td>{{ $karyawan->created_at }}</td>
                    <td>{{ $karyawan->updated_at }}</td>
                    <td><a href="{{ route('ubah_karyawan', ['id' => $karyawan->id]) }}">Ubah</a></td>
                    <td><a href="{{ route('tampil_karyawan', ['id' => $karyawan->id]) }}">Tampil</a></td>
                    <td><form action="{{ route('hapus_karyawan', ['id' => $karyawan->id]) }}" method="post">
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