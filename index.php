<?php

require 'core/EquationInterface.php';
require 'core/LogInterface.php';
require 'core/LogAbstract.php';

require 'abbdin/LinearEquation.php';
require 'abbdin/QuadraticEquation.php';
require 'abbdin/MyLog.php';

$equation = new abbdin\QuadraticEquation();
try
{
    $result = $equation->solve(4, 44, 4);
    $str = implode("; ", $result);
    abbdin\MyLog::Instance()::log($str);
}
catch (Error $error)
{
    abbdin\MyLog::Instance()::log($error->getMessage());
}
abbdin\MyLog::write();