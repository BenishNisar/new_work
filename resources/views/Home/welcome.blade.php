@extends("Layout.layout")
@section('workcontent')
<div class="container">
    <h1 style="text-align:center;">Data</h1>
    <form action="{{ route("welcome.store") }}" method="POST">
        @csrf

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
        </div>
 @endif

        <label for="">firstname</label>
    <input type="text" name="firstname" >
    <label for="">lastname</label>

    <input type="text" name="lastname" >
    <label for="">email</label>

    <input type="text" name="email" >
    <label for="">password</label>

    <input type="text" name="password" >

    <input type="submit" value="submit">
    </form>


    <table border="1px">
        <tr>
            <th>id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr>


            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
    <td><a href="{{ route("edit.index",$user->id) }}" class="btn">Edit</a>
        <form action="{{ route("welcome.delete",$user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn">Delete</button>

        </form>
    </td>



        </tr>
        @endforeach
    </table>
    </div>



@endsection
