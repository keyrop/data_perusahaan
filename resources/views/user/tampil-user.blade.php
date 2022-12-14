@extends("blank")


@section("konten")

<table class="table">
    <a href="{{ route("user_input") }}">Add Data</a>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Create at</th>
            <th scope="col">Update at</th>
        </tr>
    <thead>
    <tbody>
@foreach($data_user as $user)
<tr>
    <th scope="row">{{ $user->id}}</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->password }}</td>
    <td>{{ $user->level }}</td>
    <td>{{ $user->created_at }}</td>
    <td>{{ $user->updated_at }}</td>
    <td>
        <a href="{{ route("user_edit", ["id"=> $user->id]) }}">edit</a>
        <a href="{{ route("user_show", ["id"=> $user->id]) }}">show</a>

        <form action="{{ route("user_hapus", ["id"=> $user->id]) }}" method="post">
            @csrf
            @method("delete")
            <button type="submit">Hapus</button>
        </form>

    </td>
</tr>
@endforeach

    </tbody>
</table>
{{-- {{-- <!-User Id {{ $user->id }} <br>
Nama {{ $user->nama }} <br>
Username {{ $user->username }} <br>
Level {{ $user->level }} <br>
Password {{ $user->password }} <br>
Create at {{ $user->created_at }} <br>
Update at {{ $user->updated_at }} <br>
<hr>
@include("menu") 

@endforeach --}}

@endsection