<!DOCTYPE html>
	<html lang="ru">

	  <head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <link rel="stylesheet" href="/app_22/css/style.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  
	  <title>Мой сайт</title>
	  
	  
	  
	  </head>

	  <body >
	  
	  
		<?php
			echo "Сегодня: " . date("Y-m-d") . "<br>"; // Дата и время
			echo "День: " . date("l");
		?>
	    		
		<div class="container">
        <h1> Сообщение </h1> <hr>       

        <form action="/app_22/add.php" method="post">
            <input class="form-control" type="text" name="data" id ="data" placeholder="Введите текст сообщения"><br/>
            <button class="btn btn-danger" type="submit" name="send"> Добавить </button><hr>
			Комментарии: <textarea name="comment" rows="5" cols="65"><?php echo $comment;?></textarea>
			<button class="btn btn-danger" type="submit" name="send"> Добавить </button>

		
		</form>
		
		<?php
			require '/app_22/confdb.php';
			echo '<ul>';
					# Получаем данные из таблицы
			$query = $pdo->query('SELECT * FROM `mydata`');
					# В цикле выводим только поле data в список.
			while($tmp = $query->fetch(PDO::FETCH_OBJ)) {
				echo '<li><b>'.$tmp->data.'</b></li>';
			}
			echo '</ul>';
			echo '<li><b>'.$tmp->data.'</b><a href="del.php?id='.$tmp->id.'"><button class="btn btn-danger"> Удалить</button></a></li>';
		?>
		
    </div>
	
	
		
	  </body>

	</html>
	
	
