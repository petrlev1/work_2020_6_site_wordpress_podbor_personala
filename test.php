
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>

<body>

Форма добавления имени:
<form action="test.php" method="post">
    Имя:  <input type="text" name="mastername" /><br />
    <input type="submit" name="submit" value="Отправить" />
</form>


Форма редактирования:
<form action="test.php" method="post">
    Имя:  <input type="text" name="edit_mastername" /><br />
    <input type="submit" name="submit" value="Отправить" />
</form>

<form action="test.php" method="post">
    <input type="submit" name="del_masters" value="Удалить все" />
</form>




<?php

//Коннектимся к базе
$servername = "localhost";
$database = "levendeev2_ts1";
$username = "levendeev2_ts1";
$password = "testSite1";

// Create connection

/* $conn = mysqli_connect($servername, $username, $password, $database);
mysql_query("set names utf8"); */

$conn = mysqli_connect( localhost, levendeev2_ts1, testSite1, levendeev2_ts1 );


// Set_charset
$conn -> set_charset("utf8");

//mysql_query("set names utf8");

/* <?php  
  $conn = mysql_connect (localhost,"levendeev2_ts1","testSite1"); 
  mysql_select_db("levendeev2_ts1",$conn); 
  //mysql_query("set names utf8");
?> */



// Check connection

 if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully <br>";
 
 
 
 
  //Берем значения из формы
 $name = $_POST['mastername'];
 
 
 
 
//Добавляем в базу записи
//$sql = "INSERT INTO `Students` (`name`, `lastname`) VALUES ('$name', '- Имя мастера')";


//Редактируем значения
//$edit_mastername = $_POST['edit_mastername'];
//$sql = "UPDATE `Students` SET `name` = '$edit_mastername' WHERE `Students`.`ID` = 126;";


//Удалить все
//$del_masters = $_POST['del_masters'];
//$sql = "DELETE FROM `Students` WHERE `Students`.`ID` = 141";




mysqli_query($conn, $sql);






//Выводим список пользователей

echo "<br><br>";

$query = "SELECT * FROM wp_users";

$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     

    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
       
            for ($j = 0 ; $j < 10 ; ++$j) echo "$row[$j] | ";
       echo "<br>";
    }
	
	echo "<br><br>";

     
    // очищаем результат
    mysqli_free_result($result);
}






//Выводим из базы Students

$query = "SELECT * FROM Students";

$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th></th><th>Id</th><th></th></tr>";
	
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}






/* if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} */

mysql_close();

?>





</body>

</html>