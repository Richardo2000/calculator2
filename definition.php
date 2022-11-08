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
        $operation_name = "Add";
        $operation = new Add ($a, $b );
        break;
    case "subtract":
        $operation_name = "Subtract";
        $operation = new Subtract ($a, $b );
        break;
    case "divide":
        $operation_name = "Divide";
        $operation = new Divide ($a, $b );
        break;
    case "multiply":
        $operation_name = "Multiply";
        $operation = new Multiply ($a, $b );
        break;
    default:
        echo 'error';
}

if (!empty($operation) && !empty($operation_name)) {
    header("Content-type: text/plain");
    echo 'operation: ' . $operation_name . PHP_EOL;
    echo 'result: ' . $operation->solve();
}

