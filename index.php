<?php

ini_set("display_errors", 1);
error_reporting(-1);

require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";

require "abbdin/MyLog.php";
require "abbdin/LinearEquation.php";
require "abbdin/QuadraticEquation.php";
require "abbdin/AbbdinException.php";

$solver = new abbdin\QuadraticEquation();

try {
    abbdin\MyLog::log("Version: " . trim(file_get_contents("version")) . ".\n");
    echo "Enter 3 numbers: a, b, c.\n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    abbdin\MyLog::log("Equation is "."x=".$a."x2+".$b."x+".$c.".\n\r");

    $result = $solver->solve($a, $b, $c);
    $str = implode("; ", $result);

    abbdin\MyLog::log("Equation roots: ".$str."\n\r");
} catch (abbdin\AbbdinException $err) {
    $message = $err->getMessage();
    abbdin\MyLog::log($message);
}

abbdin\MyLog::write();