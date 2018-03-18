<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ol>
    <?php
        $arr = [
            " 451° по Фаренгейту",
            "Шантарам",
            "1984", 
            "Мастер и Маргарита",
            "Три товарища",
            "Портрет Дориана Грея",
            "Вино из одуванчиков",
            "Цветы для Элджернона",
            "Над пропастью во ржи",
            "Маленький принц",
            "Анна Каренина",
            "Сто лет одиночества",
            "Тень горы",
            "Атлант расправил плечи",

        ];
        for($i = 0 ; $i < count($arr);$i++){
            echo '<li>' . $arr[$i] . '</li>'; 
        }
    ?>
    </ol>
</body>
</html>