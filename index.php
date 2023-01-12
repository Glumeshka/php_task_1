<?php
    $a0 = 0;
    $a1 = 1;
    $b0 = 0;
    $b1 = 1;
    $var_true = true;
    $var_false = false;
    $var_1 = 1;
    $var_0 = 0;
    $var_minus1 = -1;
    $var_str1 = "1";
    $var_null = null;
    $var_php = "php";
?>


<!DOCTYPE html>
    <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="Description" content="Enter your description here" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="style.css">
            <title>Таблицы сравнения</title>
        </head>
    <body>
        <div class="table-responsive-sm">
            <table class="table table-dark table-striped table-hover table-bordered border-primary">
                <div>
                    <h3>Таблица истинности PHP</h3>
                </div>
                <thead>
                    <tr>
                        <th scope="col"><strong>A</strong></th>
                        <th scope="col"><strong>B</strong></th>
                        <th scope="col"><strong>!A</strong></th>
                        <th scope="col"><strong>A || B</strong></th>
                        <th scope="col"><strong>A &amp;&amp; B</strong></th>
                        <th scope="col"><strong>A xor B</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $a0; ?></td>
                        <td><?php echo $b0; ?></td>
                        <td><?php echo var_export(!$a0); ?></td>
                        <td><?php echo var_export($a0 || $b0); ?></td>
                        <td><?php echo var_export($a0 && $b0); ?></td>
                        <td><?php echo var_export($a0 xor $b0); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $a0; ?></td>
                        <td><?php echo $b1; ?></td>
                        <td><?php echo var_export(!$a0); ?></td>
                        <td><?php echo var_export($a0 || $b1); ?></td>
                        <td><?php echo var_export($a0 && $b1); ?></td>
                        <td><?php echo var_export($a0 xor $b1); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $a1; ?></td>
                        <td><?php echo $b0; ?></td>
                        <td><?php echo var_export(!$a1); ?></td>
                        <td><?php echo var_export($a1 || $b0); ?></td>
                        <td><?php echo var_export($a1 && $b0); ?></td>
                        <td><?php echo var_export($a1 xor $b0); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $a1; ?></td>
                        <td><?php echo $b1; ?></td>
                        <td><?php echo var_export(!$a1); ?></td>
                        <td><?php echo var_export($a1 || $b1); ?></td>
                        <td><?php echo var_export($a1 && $b1); ?></td>
                        <td><?php echo var_export($a1 xor $b1); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-dark table-striped table-hover table-bordered border-primary">
                <div>
                    <h3>Таблица гибкого сранвения PHP '=='</h3>
                </div>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"><?php echo var_export($var_true);?></th>
                        <th scope="col"><?php echo var_export($var_false);?></th>
                        <th scope="col"><?php echo var_export($var_1);?></th>
                        <th scope="col"><?php echo var_export($var_0);?></th>
                        <th scope="col"><?php echo var_export($var_minus1);?></th>
                        <th scope="col"><?php echo var_export($var_str1);?></th>
                        <th scope="col"><?php echo var_export($var_null);?></th>
                        <th scope="col"><?php echo var_export($var_php);?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_true);?></strong></td>
                        <td><?php echo var_export($var_true == $var_true);?></td>
                        <td><?php echo var_export($var_true == $var_false);?></td>
                        <td><?php echo var_export($var_true == $var_1);?></td>
                        <td><?php echo var_export($var_true == $var_0);?></td>
                        <td><?php echo var_export($var_true == $var_minus1);?></td>
                        <td><?php echo var_export($var_true == $var_str1);?></td>
                        <td><?php echo var_export($var_true == $var_null);?></td>
                        <td><?php echo var_export($var_true == $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_false);?></strong></td>
                        <td><?php echo var_export($var_false == $var_true);?></td>
                        <td><?php echo var_export($var_false == $var_false);?></td>
                        <td><?php echo var_export($var_false == $var_1);?></td>
                        <td><?php echo var_export($var_false == $var_0);?></td>
                        <td><?php echo var_export($var_false == $var_minus1);?></td>
                        <td><?php echo var_export($var_false == $var_str1);?></td>
                        <td><?php echo var_export($var_false == $var_null);?></td>
                        <td><?php echo var_export($var_false == $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_1);?></strong></td>
                        <td><?php echo var_export($var_1 == $var_true);?></td>
                        <td><?php echo var_export($var_1 == $var_false);?></td>
                        <td><?php echo var_export($var_1 == $var_1);?></td>
                        <td><?php echo var_export($var_1 == $var_0);?></td>
                        <td><?php echo var_export($var_1 == $var_minus1);?></td>
                        <td><?php echo var_export($var_1 == $var_str1);?></td>
                        <td><?php echo var_export($var_1 == $var_null);?></td>
                        <td><?php echo var_export($var_1 == $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_0);?></strong></td>
                        <td><?php echo var_export($var_0 == $var_true);?></td>
                        <td><?php echo var_export($var_0 == $var_false);?></td>
                        <td><?php echo var_export($var_0 == $var_1);?></td>
                        <td><?php echo var_export($var_0 == $var_0);?></td>
                        <td><?php echo var_export($var_0 == $var_minus1);?></td>
                        <td><?php echo var_export($var_0 == $var_str1);?></td>
                        <td><?php echo var_export($var_0 == $var_null);?></td>
                        <td><?php echo var_export($var_0 == $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_minus1);?></strong></td>
                        <td><?php echo var_export($var_minus1 == $var_true);?></td>
                        <td><?php echo var_export($var_minus1 == $var_false);?></td>
                        <td><?php echo var_export($var_minus1 == $var_1);?></td>
                        <td><?php echo var_export($var_minus1 == $var_0);?></td>
                        <td><?php echo var_export($var_minus1 == $var_minus1);?></td>
                        <td><?php echo var_export($var_minus1 == $var_str1);?></td>
                        <td><?php echo var_export($var_minus1 == $var_null);?></td>
                        <td><?php echo var_export($var_minus1 == $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_str1);?></strong></td>
                        <td><?php echo var_export($var_str1 == $var_true);?></td>
                        <td><?php echo var_export($var_str1 == $var_false);?></td>
                        <td><?php echo var_export($var_str1 == $var_1);?></td>
                        <td><?php echo var_export($var_str1 == $var_0);?></td>
                        <td><?php echo var_export($var_str1 == $var_minus1);?></td>
                        <td><?php echo var_export($var_str1 == $var_str1);?></td>
                        <td><?php echo var_export($var_str1 == $var_null);?></td>
                        <td><?php echo var_export($var_str1 == $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_null);?></strong></td>
                        <td><?php echo var_export($var_null == $var_true);?></td>
                        <td><?php echo var_export($var_null == $var_false);?></td>
                        <td><?php echo var_export($var_null == $var_1);?></td>
                        <td><?php echo var_export($var_null == $var_0);?></td>
                        <td><?php echo var_export($var_null == $var_minus1);?></td>
                        <td><?php echo var_export($var_null == $var_str1);?></td>
                        <td><?php echo var_export($var_null == $var_null);?></td>
                        <td><?php echo var_export($var_null == $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_php);?></strong></td>
                        <td><?php echo var_export($var_php == $var_true);?></td>
                        <td><?php echo var_export($var_php == $var_false);?></td>
                        <td><?php echo var_export($var_php == $var_1);?></td>
                        <td><?php echo var_export($var_php == $var_0);?></td>
                        <td><?php echo var_export($var_php == $var_minus1);?></td>
                        <td><?php echo var_export($var_php == $var_str1);?></td>
                        <td><?php echo var_export($var_php == $var_null);?></td>
                        <td><?php echo var_export($var_php == $var_php);?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-dark table-striped table-hover table-bordered border-primary">
                <div>
                    <h3>Таблица жесткого сранвения PHP '==='</h3>
                </div>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"><?php echo var_export($var_true);?></th>
                        <th scope="col"><?php echo var_export($var_false);?></th>
                        <th scope="col"><?php echo var_export($var_1);?></th>
                        <th scope="col"><?php echo var_export($var_0);?></th>
                        <th scope="col"><?php echo var_export($var_minus1);?></th>
                        <th scope="col"><?php echo var_export($var_str1);?></th>
                        <th scope="col"><?php echo var_export($var_null);?></th>
                        <th scope="col"><?php echo var_export($var_php);?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_true);?></strong></td>
                        <td><?php echo var_export($var_true === $var_true);?></td>
                        <td><?php echo var_export($var_true === $var_false);?></td>
                        <td><?php echo var_export($var_true === $var_1);?></td>
                        <td><?php echo var_export($var_true === $var_0);?></td>
                        <td><?php echo var_export($var_true === $var_minus1);?></td>
                        <td><?php echo var_export($var_true === $var_str1);?></td>
                        <td><?php echo var_export($var_true === $var_null);?></td>
                        <td><?php echo var_export($var_true === $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_false);?></strong></td>
                        <td><?php echo var_export($var_false === $var_true);?></td>
                        <td><?php echo var_export($var_false === $var_false);?></td>
                        <td><?php echo var_export($var_false === $var_1);?></td>
                        <td><?php echo var_export($var_false === $var_0);?></td>
                        <td><?php echo var_export($var_false === $var_minus1);?></td>
                        <td><?php echo var_export($var_false === $var_str1);?></td>
                        <td><?php echo var_export($var_false === $var_null);?></td>
                        <td><?php echo var_export($var_false === $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_1);?></strong></td>
                        <td><?php echo var_export($var_1 === $var_true);?></td>
                        <td><?php echo var_export($var_1 === $var_false);?></td>
                        <td><?php echo var_export($var_1 === $var_1);?></td>
                        <td><?php echo var_export($var_1 === $var_0);?></td>
                        <td><?php echo var_export($var_1 === $var_minus1);?></td>
                        <td><?php echo var_export($var_1 === $var_str1);?></td>
                        <td><?php echo var_export($var_1 === $var_null);?></td>
                        <td><?php echo var_export($var_1 === $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_0);?></strong></td>
                        <td><?php echo var_export($var_0 === $var_true);?></td>
                        <td><?php echo var_export($var_0 === $var_false);?></td>
                        <td><?php echo var_export($var_0 === $var_1);?></td>
                        <td><?php echo var_export($var_0 === $var_0);?></td>
                        <td><?php echo var_export($var_0 === $var_minus1);?></td>
                        <td><?php echo var_export($var_0 === $var_str1);?></td>
                        <td><?php echo var_export($var_0 === $var_null);?></td>
                        <td><?php echo var_export($var_0 === $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_minus1);?></strong></td>
                        <td><?php echo var_export($var_minus1 === $var_true);?></td>
                        <td><?php echo var_export($var_minus1 === $var_false);?></td>
                        <td><?php echo var_export($var_minus1 === $var_1);?></td>
                        <td><?php echo var_export($var_minus1 === $var_0);?></td>
                        <td><?php echo var_export($var_minus1 === $var_minus1);?></td>
                        <td><?php echo var_export($var_minus1 === $var_str1);?></td>
                        <td><?php echo var_export($var_minus1 === $var_null);?></td>
                        <td><?php echo var_export($var_minus1 === $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_str1);?></strong></td>
                        <td><?php echo var_export($var_str1 === $var_true);?></td>
                        <td><?php echo var_export($var_str1 === $var_false);?></td>
                        <td><?php echo var_export($var_str1 === $var_1);?></td>
                        <td><?php echo var_export($var_str1 === $var_0);?></td>
                        <td><?php echo var_export($var_str1 === $var_minus1);?></td>
                        <td><?php echo var_export($var_str1 === $var_str1);?></td>
                        <td><?php echo var_export($var_str1 === $var_null);?></td>
                        <td><?php echo var_export($var_str1 === $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_null);?></strong></td>
                        <td><?php echo var_export($var_null === $var_true);?></td>
                        <td><?php echo var_export($var_null === $var_false);?></td>
                        <td><?php echo var_export($var_null === $var_1);?></td>
                        <td><?php echo var_export($var_null === $var_0);?></td>
                        <td><?php echo var_export($var_null === $var_minus1);?></td>
                        <td><?php echo var_export($var_null === $var_str1);?></td>
                        <td><?php echo var_export($var_null === $var_null);?></td>
                        <td><?php echo var_export($var_null === $var_php);?></td>
                    </tr>
                    <tr>
                        <td scope="col"><strong><?php echo var_export($var_php);?></strong></td>
                        <td><?php echo var_export($var_php === $var_true);?></td>
                        <td><?php echo var_export($var_php === $var_false);?></td>
                        <td><?php echo var_export($var_php === $var_1);?></td>
                        <td><?php echo var_export($var_php === $var_0);?></td>
                        <td><?php echo var_export($var_php === $var_minus1);?></td>
                        <td><?php echo var_export($var_php === $var_str1);?></td>
                        <td><?php echo var_export($var_php === $var_null);?></td>
                        <td><?php echo var_export($var_php === $var_php);?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <h3>
                Выводы:
                <hr>
                <p>При вы выведении строковых переменных "php" использует одинарные кавычки '</p>
                <p>При жестком сравнении "php" не производит приведение данных к одному типу</p>
                <p>При мягком сравнении "php" производит приведение данных к одному типу</p>
                <p>null - это NULL и ни как иначе</p>
            </h3>
        </div>
    </body>
</html>