<!doctype html>
 <html lang="ru">
 <?php
     include('connection1.php');
    ?>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>Последний найм</title>
 </head>
<body>

    <div class="container mtb-3">
        <div class="table-responsive">

<?php
//запрос по отбору последних принятых сотрудников в каждый отдел организации, с выводом даты приемы и наименования отдела
$inquiry3=$pdo->query ("SELECT   p.description, concat( u.last_name,' ',u.first_name) as fl, u.created_at
FROM (SELECT up.department_id, d.description, max(up.user_id) as uid FROM user_position up
left join department d on
up.department_id=d.id
group by up.department_id) p
join user u on p.uid = u.id");

//создаем переменную и помещаем в нее результат запроса, преобразованный в таблицу
$table3 = '<table class="table", style="float: left;" >';
$table3.='<tr><th>Фамилия Имя</th><th>Дата найма</th><th>Отдел</th></tr> ';
    while ($res3= $inquiry3->fetch()){
        $table3.='<tr><td>'.$res3['fl'].'</td>
        <td>'.$res3['created_at'].'</td>
        <td>'.$res3['description'].'</td></tr>';
    }
    $table3.='</table>';
    echo $table3;

?>

	  </div>
    </div>
    <div class="buttons">
            <button class="button1" id="b1" onclick="window.location.href='index.php'">В начало</button>
            <button class="button2" id="b2" onclick="window.location.href='inquiry1.php'">Испытательный срок</button>
            <button class="button3" id="b3" onclick="window.location.href='inquiry2.php'">Уволенные</button>
        </div>
</body>

</html>
