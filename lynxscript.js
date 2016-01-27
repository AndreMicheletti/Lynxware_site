// JavaScript Document

var paginaAgora = "";

var imgIndex = 2;

function carregar(pagina) {
	if (paginaAgora != pagina) {
	paginaAgora = pagina;
	$.ajax({
		url:pagina,
		success:function(retorno){
			$("#conteudo").hide(0);
			$("#conteudo").stop();
			$("#conteudo").html(retorno);
			$("#conteudo").fadeIn(500);
			window.scrollTo(0, 0);
			if( pagina == "portfolio.php")
				$("#showcase").html("<img src='images/portfolio/print" + imgIndex + ".png' class='big' />");
		}
	});
	}
}

function nextImg() {
	imgIndex += 1;
	if (imgIndex > 6) imgIndex = 0;
	$("#showcase").hide(0);
	$("#showcase").stop();
	$("#showcase").html("<img src='images/portfolio/print" + imgIndex + ".png' class='big' />");
	$("#showcase").fadeIn(500);
}

function previousImg() {
	imgIndex -= 1;
	if (imgIndex < 0) imgIndex = 6;
	$("#showcase").hide(0);
	$("#showcase").stop();
	$("#showcase").html("<img src='images/portfolio/print" + imgIndex + ".png' class='big' />");
	$("#showcase").fadeIn(500);
}

function clearMsg() {
	$("#message-div").hide(0);
	$("#message-div").html();
}

function showErrMsg(msg) {
	$("#message-div").hide(0);
	$("#message-div").stop();
	$("#message-div").html(
		"<font style='font-size:28px; margin-top:10px; margin-left:6%;color:#F00;'>" + msg + "</font>"
	);
	$("#message-div").fadeIn(1000);
}

function showOkMsg(msg) {
	$("#message-div").hide(0);
	$("#message-div").stop();
	$("#message-div").html(
		"<font style='font-size:28px; margin-top:10px; margin-left:40px;color:#00F;'>" + msg + "</font>"
	);
	$("#message-div").fadeIn(1000);
}

function sendContact() {
	var nome = $("#nome").val();
	var email = $("#email").val();
	var assunto = $("#assunto").val();
	var mensagem = $("#mensagem").val();
	if (nome == '' || email == '' || assunto == '') {
		showErrMsg("Preencha todos os campos !");
	} else {
		// Returns successful data submission message when the entered information is stored in database.
		$.post("lynxact.php", {
			nome1: nome,
			email1: email,
			assunto1: assunto,
			mensagem1: mensagem,
			send: true,
		}, function(data) {
			if (data == 'email') {
				showErrMsg("Insira um email válido !");
			} else if (data == 'ok') {
				showOkMsg('Enviado com sucesso !');
				$('#form')[0].reset(); // To reset form fields
			}
		});
	}
}