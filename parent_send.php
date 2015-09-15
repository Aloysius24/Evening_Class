<?php
//connection to the database
$slau = mysql_connect("localhost", "root", "");
mysql_select_db("slau_reg", $slau);
//get data
$a = $_POST['id'];
$b = $_POST['fname'];
$c = $_POST['nationality'];
$d = $_POST['gender'];
$e = $_POST['tel'];

//insert into the table
$sql = "insert into parent(id,fname,nationality,gender,tel) values('$a', '$b', '$c', '$d', '$e')";
$res = mysql_query($sql);
// if($res){
// echo "thanks you <a href="">go back</a>";
// }else{
// 	echo "Error Check your administration";

// }



?>