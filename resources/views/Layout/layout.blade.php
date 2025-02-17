<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
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
        height:500px;
        padding: 20px;
        font-weight: bold;
        display: flex;
        flex-direction: column;
  background-color: rgb(206, 173, 179);
  border-radius: 5%;
  border: 2px solid blue;

    }
    </style>
</head>
<body>

@yield("workcontent")
</body>
</html>
