<!doctype html>
<?php
  /*Name: Settbon
	Surname: Benjamin
	Student#: 218327862
	Title of Project
	Declaration: This is my own work and 
	  any code obtained from other sources
	  will be referenced
*/  
	?>
<html lang="en">
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--link rel="stylesheet" type="text/css" href="Task1/css/ShowStudents.css"-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="Task1/css/main.css">
    <link rel="stylesheet" type="text/css" href="Task1/css/ShowStudents.css">
    <link rel="stylesheet" type="text/css" href="Task1/css/util.css">
	<title>Show Students</title>
</head>
<body>
<pre>
<?php
include_once("DBConn.php"); // une seule connexion
?>
    <div class="container">
        <div class="container-login100" style="background-image: url('Task1/images/capetown.jpg');">
	<div class="row">
		<h2>Show Students</h2>
        <div class="well">

		<table class="table">
				<tr>
					<th>First name</th>
					<th>Surname</th>
					<th>Email</th>
					<th>Phone number</th>
					<th>Photo</th>
				</tr>


			    <?php
                $sqlReadT = "Select FName, LName, Email, CellNum, userImage From tbl_user";
                $QResultRT = $DBConnect->query($sqlReadT);

                if ($QResultRT === FALSE)
                {
                    exit;
                }
                else
                {
                    while ($row = $QResultRT->fetch_assoc()){
                        ?>
                        <tr class="odd">
					<td><?= $row["FName"] ?></td>
					<td><?= $row["LName"] ?></td>
					<td><?= $row["Email"] ?></td>
					<td><?= $row["CellNum"] ?></td>
					<td><button>
                        <?php if(!$row['userImage'] ){?>
                            <img height=70,width=60 src='images/Default.jpg' onclick="window.open(this.src,'_blank', 'location=yes,height=128,width=128,status=yes')">
                        <?php } else{ ?>
                            <img height=70,width=60 src='images/<?= $row['userImage']?>.jpg' onclick="window.open(this.src,'_blank', 'location=yes,height=128,width=128,status=yes')">
                        <?php } ?>
                            <!--img height=70,width=60 src='images/<!--?= $row['UserImage']?>.jpg' onclick="window.open(this.src,'_blank', 'location=yes,height=128,width=128,status=yes')"-->
                    </button></td>
                        </tr>
                        <?php
                    }
                    $QResultRT->free();
                }
                ?>

		</table>
	</div>
    </div>
</div>
</pre>
</body>
</html>