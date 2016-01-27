<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lynxware Administration Page</title>

<!-- Links -->
<link type="text/css" rel="stylesheet" href="style.css" />
<link rel="icon" href="images/lynx_icon.png" />
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<!-- END Links -->

<!-- JQuery -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- END JQuery -->

<style type="text/css">
td {
	color:#000;
	font-weight:normal;
	font-size:24px;
	overflow: auto;
	width:200px;
	height:auto;
}

tr {
	color:#000;
	font-weight:normal;
	font-size:24px;
	overflow: auto;	
	margin-bottom:1px solid #000;
}
</style>

</head>

<body>

<div class="adm">


	<div class="login" id="adm_login">
    	<form method="post" class="loginadm">
            Login: <input class="loginadm" type="text" name="admlogin" /><br />
            Pass : <input class="loginadm" type="password" name="admpass" /><br />
            <input class="loginadm" type="submit" value="Logar" name="login_go" />
    	</form>
    </div>
    
    <div id="contatos"> 
    
    
<?php 

	include ('lynxact.php');
	
	if(isset($_POST['login_go'])) {
		$login = $_POST['admlogin'];
		$pass = $_POST['admpass'];
		
		if ($login == 'lynxw_adm' and $pass == 'lynxandre') {
			echo '<style type="text/css">
					#adm_login {
						display: none;
					}
					#contatos {
						display:block;	
					}
				  </style>';
				  
			$result = mysql_query('select * from tb_contato', $con);
			
			if ($result) {
			
				echo "<table class='tbc' border='0'>
					<tr>
						<td>Nome</td><td>Email</td><td>Assunto</td><td>Mensagem</td>
					</tr>";
				
				while ($linha = mysql_fetch_array($result)) {
					$nome = $linha[1];	
					$email = $linha[2];
					$assunto = $linha[3];
					$mensagem = $linha[4];
					echo "<tr>
						<td>$nome</td><td>$email</td><td>$assunto</td><td>$mensagem</td>
						</tr>
					";
				}
				
				echo "</table>";
			} else {
			
				echo "<table class='tbc' border='0'>
						<tr>
							<td>Não há nada para mostrar !</td>
						</tr>
					  </table>";
			}
			
		} else {
			echo "<script>alert('Login e Senha errados !')</script>";	
		}
	}

?>
    </div>
    

</div>

</body>
</html>