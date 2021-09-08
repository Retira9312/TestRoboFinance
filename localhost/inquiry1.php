 <!doctype html>
 <html lang="ru">
 <?php
	 include('connection1.php');
    ?>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>Испытательный срок</title>
 </head>
<body>

    <div class="container mtb-3">
        <div class="table-responsive">
<?php

	$inquiry1 =$pdo->query("SELECT user.first_name,user.last_name,user.created_at FROM `user` WHERE DATEDIFF(CURDATE(), created_at) <= 90 ORDER BY user.last_name");


	$table1 = '<table class="table">';
	$table1.='<tr><th>Фамилия</th><th>Имя</th><th>Дата приема</th></tr> ';
	while ($res1 = $inquiry1->fetch()){
		$table1.='<tr><td>'.$res1['last_name'].'</td>
		<td>'.$res1['first_name'].'</td>
		<td>'.$res1['created_at'].'</td></tr>';
	}
	$table1.='</table>';
	echo $table1;
?>


	  </div>
    </div>
</body>

</html>
