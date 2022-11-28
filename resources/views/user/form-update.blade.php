@extends("blank")

@section("konten")

<form action="{{ route("user_update", ['id'=> $id]) }}" method="post">
@csrf
@method("put") 
Nama : <input type="text" name="name"> <br>
Email : <input type="text" name="email"> <br>
Password : <input type="password" name="password"> <br>
Level : <input type="text" name="level"> <br>

<button type="submit">Simpan</button>

</form>
@endsection