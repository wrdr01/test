<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div>
    @dump("бренд: " . $car->brand)
    @dump("модель: " . $car->model)
    @dump("цена: " . $car->price)
    <img src={{$car->photo_url}} width="350" height="250">
    <br>

    <form action="{{URL::to('/form') . "/" . $car->id}}" method="get">
        <div><label for="initial_payment">Первоначальный взнос <input type="number" step="0.01" name="initial_payment"></label></div>
        <div><label for="monthly_payment">Готов платить в месяц <input type="number" name="monthly_payment"></label></div>
        <div><label for="loan_term">Срок кредита <input type="number" name="loan_term"></label></div>
        <div><input type="submit" value="Рассчитать условия"/></div>
    </form>

</div>
</body>
</html>
