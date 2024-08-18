<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        Сумма выплат: {{$form['overPay']}}
        <br>
        Процентная ставка: {{$form['interestRate']}}
        <br>
        Платеж в месяц: {{$form['monthPayment']}}
        <br>
        <a href="/creditRequest/create?loanTerm={{$form['loanTerm']}}&interestRate={{$form['interestRate']}}
        &monthlyPayment={{$form['monthPayment']}}&programId={{$form['programId']}}
        &carId={{$form['carId']}}"><button>Отправить заявку</button></a>
    </div>


</body>
</html>
