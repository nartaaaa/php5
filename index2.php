<?php
// function helloWorld(){
// 	echo "Hello World <br>";
// }
// helloWorld();

// function sum(){
// 	$vlera=50+40;
// 	echo $vlera;
// }
// sum();

// function maximum($x,$y){
// 	if($x > $y){
// 		return $x;
// 	}else{
// 		return $y;
// 	}
// }
// $a=50;
// $b=40;
// $test=maximum($a,$b);
// echo "The max of $a and $b is <br> $test";

// function dkmcv($n){
// 	if (($n % 2)==0){
// 		return "$n eshte i plotepjestueshem me 2";
// 	}else{
// 		return "$n nuk eshte i plotpjestueshem me 2";
// 	}
// }

// print_r(dkmcv(4));
// echo "<br>";
// print_r(dkmcv(9));
// echo "<br>";
// print_r(dkmcv(10));
// echo "<br>";
// print_r(dkmcv(12));

// $x=5;
// function localVariable(){
// 	$y=10;
// 	echo $y;
// }

// localVariable();
// echo "/n,$x";

// $x=5;
// $y=9;
// function sum(){
// 	global $x, $y ;
// 	$y=$x+$y;
// }
// sum();
// echo $y;

// function callCounter(){
// 	static $count=0;
// 	$count++;
// 	echo "the values of count is:$count <br>";
// }
// callCounter();
// callCounter();
// callCounter();
// callCounter();

$sports=array('Football','Basketball','Handball','Volleyball');
// echo $sports[0];
// echo end ($sports);
// echo count($sports);

// for ($i=0; $i<4; $i++){
// 	echo $sports[$i],"/n";
// }
$len=count($sports);
for($i=0; $i < $len; $++){
	echo $sports[$i],"/n";
}


?>