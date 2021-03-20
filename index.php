<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div>
        Выберите действие:
        <form action="rent.php" method="post">
		<ul class="list-group list-group-flush">
            <li class="list-group-item">Полученный доход с проката по состоянию на выбранную дату: <input type="date" name="firstdate"></li>
            </ul>
            <input type="submit" value="Искать" class="btn btn-outline-success">
			</form>
			</div>
			<form action="maker.php" method="post">
			<ul class="list-group list-group-flush">
            <li class="list-group-item">Производитель: <select name="maker" id="">
                    <?php
                    require 'config.php';

                    $query = $pdo->query('SELECT * FROM `vendors`');
                    while($row = $query->fetch()){
                        echo "<option value=".$row['ID_Vendors'].">".$row['Name']."</option>";
                    }
                    ?>
                </select></li></ul>
				<input type="submit" value="Искать" class="btn btn-outline-success">
        </form>
		
		<form action="cars.php" method="post">
		<ul class="list-group list-group-flush">
            <li class="list-group-item">Свободные автомобили на выбранную дату: <input type="date" name="firstdate"></li>
            </ul>
            <input type="submit" value="Искать" class="btn btn-outline-success">
			</form>
			
		Добавление в БД информации об аренде для выбранного автомобиля на указанные даты:
		<form action="addRent.php" method="post">
		<div class="form-group">
		<select name="cars" id="">
                   
                    <?php
                    require 'config.php';

                    $query = $pdo->query('SELECT * FROM `cars`');
                    while($row = $query->fetch()){
                        echo "<option value=".$row['ID_Cars'].">".$row['Name']."</option>";
                    }
                    ?>
                </select>
				</div>
  <div class="form-group">
    <input type="date" class="form-control" name="firstdate" value="" placeholder="Дата начала аренды"/>
  </div>
  <div class="form-group">
    <input type="time" class="form-control" name="firsttime" value="" placeholder="Время начала аренды"/>
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="seconddate" value="" placeholder="Дата конца аренды"/>
  </div>
  <div class="form-group">
    <input type="time" class="form-control" name="secondtime" value="" placeholder="Время конца аренды"/>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="cost" value="" placeholder="Стоимость"/>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
</form>
	Изменение данных о пробеге для выбранного автомобиля:
	<form action="update_go.php" method="post">
	<div class="form-group">
		<select name="cars" id="">
                    <?php
                    require 'config.php';
                    $query = $pdo->query('SELECT * FROM `cars`');
                    while($row = $query->fetch()){
                        echo "<option value=".$row['ID_Cars'].">".$row['Name']."</option>";
                    }
                    ?>
                </select>
				</div>
        	<div class="form-group">
        		<input type="number" class="form-control" name="edit_race" value="" placeholder="Пробег">
        	</div>
			<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        </form>	
    
</div>
</body>
</html>