<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div>
    @foreach($cars as $car)
    @dump("brand: " . $car->brand)
    @dump("model: " . $car->model)
    @dump("от " . $car->price . "Р")
        <a href={{"/car/" . $car->id}}><img src={{$car->photo_url}} width="150" height="100"></a>
    @endforeach
</div>
</body>
</html>
