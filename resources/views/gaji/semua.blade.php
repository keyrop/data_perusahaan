@extends("blank")

@section("konten")

<table class="table">
    <a href="{{ route("buat_gaji") }}">Add Data</a>

    <h1>Semua Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Tunjangan</th>
                    <th scope="col">Upah</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            <thead>
            @foreach($data as $gaji)
            <tbody>
                <tr>
                    <td>{{ $gaji->gaji }}</td>
                    <td>{{ $gaji->tunjangan }}</td>
                    <td>{{ $gaji->upah }}</td>
                    <td>{{ $gaji->created_at }}</td>
                    <td>{{ $gaji->updated_at }}</td>
                    <td><a href="{{ route('ubah_gaji', ['id' => $gaji->id]) }}">Ubah</a></td>
                    <td><a href="{{ route('tampil_gaji', ['id' => $gaji->id]) }}">Tampil</a></td>
                    <td><form action="{{ route('hapus_gaji', ['id' => $gaji->id]) }}" method="post">
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

