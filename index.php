<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stule.css">
    <title>Часы</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>

<body>

    <header>
        <h1>Калькулятор часов</h1>
    </header>
    <div class="head">
        <h1>Калькулятор</h1>
    </div>

    <div class="wrapper">
        <div class="inputblock">
        <form action="" method="post" id="ajax_form">
            <p>Введите время в формате градусов. Данные должны быть в формате от 0 до 360: </p>

            <input type="text" placeholder="Введите даныне" name="info">

            <button class="" id="btn">Рассчитать</button>

        </form>
        </div>
        <div class="piechart">
            <div class="clock" id="clock">
                
            </div>

            <div>
                <canvas id="piechart"></canvas>
            </div>
        </div>
    </div>

    
    <script src="blocks/scrioptpiechart.js"></script>        
</body>

</html>