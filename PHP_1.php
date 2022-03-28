<?php 
echo "<br>";
echo sqrt(1024);
echo "<br>";
echo round(69.506);
echo "<br>";
echo(rand());
echo "<br>";
echo(rand(10,/*  30, 56, 31, 25, 60, 79, 45, 89, 40, */ 100));
echo "<br>";
echo "The result is:";
define("OKEY", (130241-(130*(10/(10*5)))));
echo OKEY;
echo "<br>";
define('get', [
    'BMW','CMW','KMW','MMW','RMW','NMW','PMW','XDM','IDM','AMD'
]);

echo get[5];
echo "<br>";
echo "<br>";
echo "<br>";

$x1 = "okey";
$x2 = 'fryuhjfg';
$x3 = 30;
$x4 = 35;
$x5 = 40;

if($x1 != $x2){
    echo "True";
}else{
    die("false");
}
echo "<br>";
echo "<br>";


echo "<br>";
    $x = '10';

    switch($x){
        case '10':
        echo "My faourite colour is dark";
        break;
    case '20':
        echo "My faourite colour is green";
        break;
    case '30':
        echo "My faourite colour is jhama";
        break;
    case '40':
        echo "My faourite colour is yellow";
        break;
    case '50':
        echo "My faourite colour is gray";
        break;
    default:
        echo "My faourite colour is Nothing";
    }


echo "<br>";

    for($x=0; $x <= 10; $x++){
        echo "The number is: $x <br>";
    }
echo "<br>";



?>
