//本項で扱った各メソッドに関して、1つずつ自分で例題をつくって試してみましょう。
<br>
//凝ったものである必要はありません。
<br>
//マルチバイト対応の関数はやらなくてもよいです（mb_strlenなど）
<br>
<?php
$num =3.1;
echo ceil($num);
?>

<br>

<?php
$num=2.1;
echo floor($num);
?>

<br>

<?php
$num=5.6;
echo round($num);
?>

<br>

//index.php
<?php
echo pi();
function circleArea($num){
$circle_area=$num* $num*pi();
}
//半径が5の円の面積の計算
circleArea(5);
?>

<br>

<?php
for($i=1; $i<=10; $i++){
$num =mt_rand(1,100);
echo"{$num},";
}
?>

<br>

<?php
$id ="Peace";
$length =strlen($id);
for($i=0; $i<$length; $i++){
$chr =$id[$i];
echo "{$i}-",$chr,PHP_EOL;
}
?>

<br>

<?php

$str ="All is well that ends well.";
echo strpos($str,"well");
echo"<br><br>";
echo strpos($str,"well",-5);
?>

<br>

<?php
$str="abcdef";
echo substr($str,1,4);
?>

<br>

<?php
$subject="吾輩は猫である。";
echo str_replace("猫","犬",$subject);
echo str_replace("猫","馬",$subject);
echo $subject;
?>


<br>

<?php
printf('円周率%.2fです。',M_PI);
?>

<br>

<?php
$year=2022;
$seq=621;
$type="P8";
$id =sprintf('%04d%06d-%s',$year,$seq,$type);
echo "製品は",$id,"です。";
?>
