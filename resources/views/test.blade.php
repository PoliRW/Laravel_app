<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($types as $type)
        <div>{{$type->name}}</div>
    @endforeach
    
    @foreach ($names as $name)
        <div>{{$name}}</div>
    @endforeach

    
</body>
</html>