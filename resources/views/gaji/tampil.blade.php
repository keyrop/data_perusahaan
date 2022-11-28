@extends("blank")

@section("konten")

    <h1>{{ $gaji->gaji }}</h1>

    {{ $gaji->tunjangan }}
    {{ $gaji->upah }}

@endsection