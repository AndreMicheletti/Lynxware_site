<?php



$url = "localhost";

$user = "*************";

$password = "********";

$database = "***********";



if($con = @mysql_connect($url, $user, $password)) {

	if(@mysql_select_db($database, $con)) {

			mysql_query("SET NAMES 'utf8'");

			mysql_query('SET character_set_connection=utf8');

			mysql_query('SET character_set_client=utf8');

			mysql_query('SET character_set_results=utf8');

	}

}  else {

	if($con = @mysql_connect("localhost", "root", "")) {

		if(@mysql_select_db("db_lynx", $con)) {

			mysql_query("SET NAMES 'utf8'");

			mysql_query('SET character_set_connection=utf8');

			mysql_query('SET character_set_client=utf8');

			mysql_query('SET character_set_results=utf8');

		}

	}

}



if(isset($_POST['send'])) {

	

	$nome = $_POST['nome1'];

	$email = $_POST['email1'];

	$assunto = $_POST['assunto1'];

	$mensagem = $_POST['mensagem1'];

	

	if ($nome != '') {

		if ($email != '' and strpos($email, '@') !== false and strpos($email, '.') !== false) {

			if ($assunto != '') {

				

				$query = "insert into tb_contato values (NULL, '$nome', '$email', '$assunto', '$mensagem' )";

				if (mysql_query($query, $con)) {

					echo "ok";

				} else {

					echo "<script>showErrMsg('Erro ao conectar-se com o banco')</script>";

				}

								

			} else {

				echo "<script>showErrMsg('Insira um assunto')</script>";

			}

		} else {

			echo "email";

		}

	} else {

		echo "<script>showErrMsg('Insira seu nome')</script>";

	}

	

	/*

	$from = $_POST['email'];

	$subject = $_POST['name'] . "<".$_POST['subject'].">";

	$content =  $_POST['email-content'];

	$content = wordwrap($content, 70);

	

	if ($from != '' and $subject != '' and $content != '') {

		$to = "andreluizmtmicheletti@hotmail.com";

		$headers = "From : " . $from . "\r\n";

		

		//if (mail($to,$subject,$content,$headers)) {

		if (mail('andreluizmtm@hotmail.com','php test','ayehhooo')) {

			echo "<script>alert('Comentário Enviado, Obrigado!')</script>";	

		} else {

			echo "<script>alert('Erro ao enviar comentário')</script>";	

		}

	} else {

		echo "<script>alert('Preencha todos os Campos'); carregar('contanto.php')</script>";	

	}

	*/

}



?>
