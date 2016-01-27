<style type="text/css">

div.contato {
	width:850px;
	height:700px;
	border-left:2px solid #000;
	color:#000;
}

div.emailform {
	margin-left:80px;
	color:#000;
	font-size:28px;
	float:left;
}

div.input {
	width:400px;
	float:left;
}

div.txtarea {
	width:485px;
	float:left;
}

div.text {
	width:80px;
	color:#000;
	font-size:24px;
	text-align:right;
	margin-right:10px;
	float:left;
}

p.title {
	color:#000;
	font-size:48px;
	margin-left:20px;
	text-indent:40px;
}

input { color:#000;	} textarea { color:#000; resize:none; }

input.btn {
	width:80px;
}

div.left {
	float:left;
	width:60%;	
	margin-right:15px;
	height:450px;
}

div.right {
	float:left;
	width:35%;	
	height:450px;	
	border-left:1px solid #000;
}

a.clink {
	font-size:28px;
	color:#006;
	text-decoration:underline;	
} a.clink:hover { color:#004; }
</style>

<div class="contato">
	<br /><p class="title">Contato</p>
    <div class="left">
	<br /><p style="color:#000;font-size:34px;margin-left:80px;">Enviar Comentário</p><br />
    <div class="message-div" id="message-div">
    </div>
    <div class="emailform">
    	<form method="post" onSubmit="return false;" id="form">
        	<div class="text">Nome:</div><div class="input"><input type="text" name="nome" id="nome" style="width:400px" /></div><br /><br />
        	<div class="text">Email:</div><div class="input"><input type="text" name="email" id="email"  style="width:400px" /></div><br /><br />
        	<div class="text">Assunto:</div><div class="input"><input type="text" name="assunto" id="assunto"  style="width:400px" /></div><br /><br />
        	<div class="txtarea"><textarea name="mensagem" id="mensagem" style="width:425px; margin-top:10px;" rows="10" ></textarea></div><br /><br />
            <div style="float:right; margin-right:80px;"><input class="btn" type="reset" value="Limpar" onclick="clearMsg();" /></div>
            <div style="float:right; margin-right:10px;"><input class="btn" type="button" value="Enviar" name="send" id="send" onclick="sendContact()" /></div>
       	</form>    
    </div>
    
	<br />
    </div>
    
    <div class="right">
	<br /><p style="color:#000;font-size:34px;margin-left:40px;">Telefone de Contato</p><br />
    <p style="margin-left:80px;color:#000;font-size:28px;float:left;">(11) 96072-2771 [TIM]</p><br /><br />
	<br /><p style="color:#000;font-size:34px;margin-left:40px;">Email</p><br />
    <p style="margin-left:80px;color:#000;font-size:28px;float:left;">andreluizmtmicheletti@hotmail.com</p><br /><br /><br />
	<br /><p style="color:#000;font-size:34px;margin-left:40px;">Página do Facebook</p><br />
    <p style="margin-left:80px;color:#000;font-size:28px;float:left;">
    <a class="clink" href='https://www.facebook.com/lynxware' target='_blank'>LynxWare</a>
    </p><br /><br /><br />
    
    </div>
    

</div>