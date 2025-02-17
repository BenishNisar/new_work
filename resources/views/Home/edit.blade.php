<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>work</title>
    <style>
        body{
            margin: 0px;
            padding:0px;
            display: flex;
    justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            margin-top: 100px;


        }
        input {
                width: 150px;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
        .container{
            width: 500px;
            height:200px;
            padding: 20px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
      background-color: pink;
      border-radius: 5%;
      border: 2px solid blue;

        }
        </style>
</head>
<body>
    <div class="container">
    <form action="{{ route("edit.update",$user->id) }}" method="POST">
        @csrf
        @method("PUT")

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
    <input type="text" name="firstname" value={{$user->firstname  }}>
    <label for="">lastname</label>

    <input type="text" name="lastname" value={{$user->lastname  }} >
    <label for="">email</label>

    <input type="text" name="email" value={{$user->email  }}>
    <label for="">password</label>

    <input type="text" name="password" value={{$user->password  }} >

    <input type="submit" value="submit">

        </form>
        </div>
</body>
</html>
