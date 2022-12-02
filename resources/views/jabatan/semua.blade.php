@extends("blank")

@section("konten")

<table class="table">
    <a href="{{ route("buat_jabatan") }}">Add Data</a>

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
            @foreach($data as $jabatan)
            <tbody>
                <tr>
                    <td>{{ $jabatan->nama }}</td>
                    <td>{{ $jabatan->keterangan }}</td>
                    <td>{{ $jabatan->created_at }}</td>
                    <td>{{ $jabatan->updated_at }}</td>
                    <td><a href="{{ route('ubah_jabatan', ['id' => $jabatan->id]) }}">Ubah</a></td>
                    <td><a href="{{ route('tampil_jabatan', ['id' => $jabatan->id]) }}">Tampil</a></td>
                    <td><form action="{{ route('hapus_jabatan', ['id' => $jabatan->id]) }}" method="post">
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