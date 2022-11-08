<?php

// этот файл принимает запрос от INDEX.PHP и определеяет тип действия
// с числами и исполдьзует класс с действием, возвращает на страницу результат

require __DIR__ . '/src/add.php';
require __DIR__ . '/src/subtract.php';
require __DIR__ . '/src/divide.php';
require __DIR__ . '/src/multiply.php';

//подключили классы из других файлов
$a = $_POST['a'] ;
$b = $_POST['b'] ;
$action = $_POST['action'] ;
//приняли переменные

switch ($action) {
    case "add":
        echo 'operation: add';
        echo PHP_EOL . '<br>';
         echo 'result:';
         $result = new Add ($a, $b );
         echo $result->a_add_b();
        break;
    case "subtract":
        echo 'operation: subtract';
        echo PHP_EOL . '<br>';
        echo 'result:';
        $result = new Subtract ($a, $b );
        echo $result->a_subtract_b();
        break;
    case "divide":
        echo 'operation: divide';
        echo PHP_EOL . '<br>';
        echo 'result:';
        $result = new Divide ($a, $b );
        echo $result->a_divide_b();
        break;
    case "multiply":
        echo 'operation: multiply';
        echo PHP_EOL . '<br>';
        echo 'result:';
        $result = new Multiply ($a, $b );
        echo $result->a_multiply_b();
        break;
    default:
        echo 'error';
}


