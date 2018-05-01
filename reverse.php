<?php
$num=123;
$n=0;
do
{
	$d=$num%10;
	$n=$n*10+$d;
	$num=(int)$num/10;
}while($num!=0);
echo $n/10;

?>