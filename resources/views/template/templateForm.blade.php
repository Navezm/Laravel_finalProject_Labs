<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:green; border:solid 1px orange; text-align:center;">You have a new question from a user: {{$infos->name}}</h1>
    <div style="text-align: center; margin-top: 2vh; background-color:lightblue;">
        <p style="color: blanchedalmond;">Email: {{$infos->email}}</p>
        <p style="color: blanchedalmond;">Subject: {{$infos->subject}}</p>
        <p style="color: blanchedalmond;">Content: {{$infos->content}}</p>
    </div>
</body>
</html>