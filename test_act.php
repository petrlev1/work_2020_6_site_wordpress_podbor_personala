
Спасибо!
<br>

<?php

//Коннектимся к базе
$servername = "localhost";
$database = "levendeev2_ts1";
$username = "levendeev2_ts1";
$password = "testSite1";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
 
 
 
 //Берем значения из формы
 $name = $_POST['username'];
 $email = $_POST['email'];



//Печатаем эти значения
echo " $name" . " | " .  "$email ";

 
//Добавляем в базу записи
//$sql = "INSERT INTO Students (name, lastname) VALUES ('$name', '$email')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
