<?php

$userData = file ("userData.txt");

include_once("DBConn.php"); // une seule connexion


echo "Number of entries in the file : ".count($userData);  // compte et affiche le nombre de lignes
/*
echo "<pre>";
echo "<h1> Output of userData Array </h1>";
	print_r($userData); // permet d'afficher toutes les lignes
echo "</pre>";
*/


// Drop Table tbl_User

$sqlDropT ="drop table tbl_User";
//$selectResult = $DBConnect->query($selectSQL);
$QResultDT = $DBConnect->query($sqlDropT);
if ($QResultDT === FALSE) //test tbl_user  question 2b
    echo "<p> No Way Hose - Unable to perform SQL Drop Table </p>";
else
    echo "<p>  Well done my mate ".$sqlDropT. " done ". mysqli_info($DBConnect)."</p>";

// Create Table tbl_User

$sqlCreateT = "create table tbl_User (ID smallint (6) primary key auto_increment,
                                      FName varchar (120),
                                      LName varchar(120),
                                      Email varchar(120),
                                      CellNum varchar(120),
                                      Password varchar(120),
                                      userImage varchar(120))";


$QResultCT = $DBConnect->query($sqlCreateT);
if ($QResultCT === FALSE)
    echo "<p> Unable to perform SQL Create Table </p>";
else
    echo "<p> tbl_User created</p>";


// Insert userData in tbl_User
foreach ($userData as $ind=> $DataValue)
{
    $Data = explode(" ", $DataValue);
    //echo "<p>$DataValue</p>";
    addslashes($Data[0]);
    //echo "<p> Slashes added ".$DataValue."</p>";
    $sqlInsP = "Insert into tbl_User (FName, LName, Email, CellNum,userImage, Password) values ('$Data[0]', '$Data[1]', '$Data[2]', '$Data[3]','$Data[5]', '$Data[4]')";
    $QresultA = $DBConnect->query($sqlInsP);
    if ($QresultA === FALSE)
        echo "<p> No Way Hose - Unable to perform SQL Insert </p>";
    else
        echo "<p>  Well done my mate ".$sqlInsP. " done ". $DBConnect->host_info."</p>";
}
?>