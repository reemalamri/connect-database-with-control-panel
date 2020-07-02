<?php


$servername = "localhost"; 
$username = "root";    
$password = "";  
$dbname = "control_robot";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    echo "the connect is error \n" . $conn->connect_error;
}
else
{
  echo "the connect is corect\n";

}

$Backward=isset($_POST['Backward'])?$_POST['Backward']:"";
$Forward=isset($_POST['Forward'])?$_POST['Forward']:"";
$Right1=isset($_POST['Right1'])?$_POST['Right1']:"";
$Left1=isset($_POST['Left1'])?$_POST['Left1']:"";
$Stop1=isset($_POST['Stop1'])?$_POST['Stop1']:"";


if(isset($_POST['Backward']))
{
     $sql = "INSERT INTO auto_move (ID,Backward, Forward,Right1, Left1, Stop1) VALUES ('','B','','','','')";
     if ($conn->query($sql) === TRUE) {
	echo "B" ;}
	 else {
	echo "Error: ".$sql."<br>".$conn->error;}
	$conn->close();
 }

if(isset($_POST['Forward']))
{
     $sql  = "INSERT INTO auto_move (ID,Backward, Forward,Right1, Left1, Stop1) VALUES ('','','F','','','')";
     if ($conn->query($sql) === TRUE) {
	echo "F" ;}
	 else {
	echo "Error: ".$sql."<br>".$conn->error;}
	$conn->close();
}

if(isset($_POST['Right1']))
{
     $sql = "INSERT INTO auto_move (ID,Backward, Forward,Right1, Left1, Stop1) VALUES ('','','','R','','')";
      if ($conn->query($sql) === TRUE) {
	echo "R" ;}
	 else {
	echo "Error: ".$sql."<br>".$conn->error;}
	$conn->close();
 }

 if(isset($_POST['Left1']))
{
     $sql = "INSERT INTO auto_move (ID,Backward, Forward,Right1, Left1, Stop1) VALUES ('','','','','L','')";
   if ($conn->query($sql) === TRUE) {
	echo "L" ;}
	 else {
	echo "Error: ".$sql."<br>".$conn->error;}
	$conn->close();
 }

 if(isset($_POST['Stop1']))
{
     $sql = "INSERT INTO auto_move (ID,Backward, Forward,Right1, Left1, Stop1) VALUES ('','','','','','S')";
    if ($conn->query($sql) === TRUE) {
	echo "S" ;}
	 else {
	echo "Error: ".$sql."<br>".$conn->error;}
	$conn->close();
 }



?>