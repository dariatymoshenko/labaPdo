<?php
require 'config.php';
$date1 = !empty($_POST['firstdate']) ? $_POST['firstdate'] : '';
if ($date1 != ''){
    $queryDate =  $pdo->prepare('SELECT cars.name FROM `cars` INNER JOIN rent ON cars.ID_Cars = rent.FID_Car
                                                        WHERE :date1 NOT BETWEEN date_start AND date_end');
    $queryDate->execute(array('date1' => $date1));}

	$result = $queryDate->fetchAll(); 
	echo "Свободные автомобили на момент $date1 :";
	foreach ($result as $row) {
                echo '<tr>';
                foreach ($row as $key => $value) {
                    
                    echo '<td><br>' . $value . '</br></td>';
                }
				echo '</tr>';
				
}
     echo '<br><a href="." style="display: block; text-align: start;">&ltНа главную страницу</a></br>';       