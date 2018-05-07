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
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Task1/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Task1/css/util.css">
</head>
<body>






<!--===============================================================================================-->
<script src="Task1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="Task1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="Task1/vendor/bootstrap/js/popper.js"></script>
<script src="Task1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="Task1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="Task1/vendor/daterangepicker/moment.min.js"></script>
<script src="Task1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="Task1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="Task1/js/main.js"></script>

<!--html UserDetails-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <?php
    function AffichageRegister(){
    ?>
<!--h1 style="color:yellow;">S I G N  I N</h1>
    <form action = "<-?php echo $_SERVER['SCRIPT_NAME'] ?>" method = 'POST' class="form-signsin">
         <div align = "center">

        User's name : <input type="text" name="pers_data[name]" size="50" value = "<-?php if(isset($_POST['pers_data'])){ echo $_POST['perso_data']['name'];}?>" required>

        Surname : <input type="text" name="pers_data[Surname]" size="50" value = "<-?php if(isset($_POST['pers_data'])){ echo $_POST['perso_data']['Surame'];}?>" required>

        Email Adress : <input type="text" name="pers_data[Email]" size="50" value = "<-?php if(isset($_POST['pers_data'])){ echo $_POST['perso_data']['Email'];}?>" required>

        Password : <input type="password" name="pers_data[Password]" size="50" value= "<-?php if(isset($_POST['pers_data'])){ echo $_POST['perso_data']['Password'];}?>" required>

        <input type="submit" name="submit" value="Send My Login">

        </div>
    </form-->
<div class="limiter">
    <div class="container-login100" style="background-image: url('Task1/images/capetown.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method='POST'>
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>

                <div class="wrap-input100 validate-input" data-validate="Enter Name">
                    <input class="input100" type="text" name="pers_data[FName]" placeholder="Name">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter Surname">
                    <input class="input100" type="text" name="pers_data[LName]" placeholder="Surname">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter Email">
                    <input class="input100" type="email" name="pers_data[Email]" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter Phone Number">
                    <input class="input100" type="text" name="pers_data[CellNumber]" placeholder="Phone Number">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pers_data[Password]" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" name="submit" class="login100-form-btn">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
} ?>
<?php
        function UserDetails($row)
        {
            ?>
            <div class="container-login100" style="background-image: url('Task1/images/capetown.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="well well-sm">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <img src="images/<?= $row["userImage"] ?>.jpg" alt="" class="img-rounded img-responsive" />
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <h4>Bienvenue <?= $row["FName"] ?> </h4>

                                        <p>
                                            <i class="glyphicon glyphicon-gift"></i><?= $row["FName"] ?>
                                            <br/>
                                            <i class="glyphicon glyphicon-gift"></i><?= $row["LName"] ?>
                                            <br/>
                                            <i class="glyphicon glyphicon-envelope"></i><?= $row["Email"] ?>
                                            <br />
                                            <i class="glyphicon glyphicon-globe"></i><?= $row["CellNum"] ?>
                                            <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

        }
        ?>

        <?php



    if(isset($_POST['submit']))
    {
        include_once("DBConn.php");
        $data = $_POST['pers_data'];
        $name = $data['FName'];
        $Surname = $data['LName'];
        $Email = $data['Email'];
        $Password = md5($data['Password']);
        $PhoneNumber = $data['CellNumber'];
        $userImage = $data['userImage'];

        $sqlReadT = "Insert into tbl_User (FName, LName, Email, CellNum, Password, userImage) values('$name', '$Surname', '$Email', '$PhoneNumber', '$Password', '$userImage');";

        $QResultRT = $DBConnect->query($sqlReadT);

        if ($QResultRT === FALSE)
        {
            AffichageRegister();
        }
        else
        {
            $sqlReadT1 = "Select FName, LName, Email, CellNum, userImage From tbl_User where Password = '$Password' AND Email = '$Email'";
            $QResultRT1 = $DBConnect->query($sqlReadT1);
            if ($QResultRT1 === FALSE){
                AffichageRegister();
            }
            else
            {
                while ($row = $QResultRT1->fetch_assoc())
                 {
                     UserDetails($row);
                     exit;
                 }
                $QResultRT1->free();
            }
        }
    }
    else {

        AffichageRegister();
    }

    ?>

<div id="dropDownSelect1"></div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
