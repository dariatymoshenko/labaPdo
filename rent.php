<?php
require 'config.php';

$date1 = !empty($_POST['firstdate']) ? $_POST['firstdate'] : '';

if ($date1 != ''){
    $queryDate =  $pdo->prepare('SELECT SUM(Cost) FROM `rent` WHERE :date1 BETWEEN date_start AND date_end');
    $queryDate->execute(array('date1' => $date1));
	$result = (int) $queryDate->fetchColumn(); 
}
if ($result !== 0) 
{
echo "Полученный доход на момент $date1 : $result";
}
else 
{
	echo 'В этот промежуток времени никто ничего не арендовал! Денюшек нет((((';
}

echo '<br><a href="." style="display: block; text-align: start;">&ltНа главную страницу</a></br>';

 