<?php
session_start();
/* DECLARE VARIABLES */
$username = 'xsplus';
$password = '123456';
$random1 = 'secret_key1';
$random2 = 'secret_key2';
$hash = md5($random1 . $password . $random2);
$self = $_SERVER['REQUEST_URI'];
/* USER LOGOUT */
if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}
/* USER IS LOGGED IN */
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash)
{
	logged_in_msg($username);
}
/* FORM HAS BEEN SUBMITTED */
else if (isset($_POST['submit']))
{
	if ($_POST['username'] == $username && $_POST['password'] == $password)
	{
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOGIN SESSION
		$_SESSION["login"] = $hash;
		header("Location: $_SERVER[PHP_SELF]");
	}
	else
	{
		// DISPLAY FORM WITH ERROR
		display_login_form();
		display_error_msg();
	}
}
/* SHOW THE LOGIN FORM */
else
{
	display_login_form();
}
/* TEMPLATES */
function display_login_form()
{
?>
<!DOCTYPE html>
<html b:css='false' b:responsive='true' lang='es' xml:lang='es' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="https://tonplayecuador.ga/tonplaylogo.png/>	
<title>Login Tonplay</title>
<!--JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Los iconos tipo Solid de Fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<!-- Nuestro css-->
</head>
<style type="text/css">
body{
    background: url(https://www.udrop.com/file/66YU/Portadaxsplus.jpg) no-repeat center center fixed;
    background-size: cover;
}

.main-section{
    margin:0 auto;
    margin-top:25%;
    padding: 0;
}

.modal-content{
    background-color: transparent;
    opacity: .85;
    padding: 0 20px;
    box-shadow: 0px 0px 0px transparent;
}
.user-img{
    margin-top: -50px;
    margin-bottom: 35px;
}

.user-img img{
    width: 100xp;
    height: 100px;
    box-shadow: 0px 0px 0px transparent;
    border-radius: 50%;
}

.form-group input{
    height: 42px;
    font-size: 18px;
    border:0;
    padding-left: 54px;
    border-radius: 5px;
}

.form-group::before{
    font-family: "Font Awesome\ 5 Free";
    position: absolute;
    left: 28px;
    font-size: 22px;
    padding-top:4px;
}

.form-group#user-group::before{
    content: "\f007";
}

.form-group#contrasena-group::before{
    content: "\f023";
}

button{
    width: 60%;
    margin: 5px 0 25px;
}

.forgot{
    padding: 5px 0;
}

.forgot a{
    color: white;
}
</style>
<body>
<div class="modal-dialog text-center">
<div class="col-sm-8 main-section">
<div class="modal-content">
<div class="col-12 user-img">
<img src="https://www.udrop.com/file/68A6/Xsplus.png"/>
</div>


<?php echo '<form class="col-12" action="' . isset($self) . '" method="post">' .
'<div class="form-group" id="user-group">' .
'<input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="username"/>' .
'</div>' .
'<div class="form-group" id="contrasena-group">' .
'<input type="password" class="form-control" placeholder="Contrasena" name="password" id="password"/>' .
'</div>' .
'<button type="submit" name="submit" class="btn btn-primary"> <i class="fas fa-sign-in-alt"></i>  Ingresar </button>' .
'</form>';
}
function logged_in_msg($username)
{
?>
</div>
</div>
</div>
</body>
</html>
<!-- Aqui va tu html de home -->


<!---No borrar esto--->
<?php
	}
function display_error_msg()
{
	echo '';
}
?>
<style>
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;
}
</style>
</body>
</html>