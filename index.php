<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <h2>Корзина товаров</h2>
        <table class="table">
            <thead class="thead">
                <tr class="headline">
                    <th class="">наименование</th>
                    <th class="">количество</th>
                    <th class="">стоимость</th>
                </tr>
            </thead>
            <?php
            include "./tbody.php";
            include "./tfoot.php";

            $value1 = 110000;
            $value2 = 29000;
            $value3 = 190000;
            ?>
        </table>
    </div>
</body>

</html>