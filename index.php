<html>
<!--- 
$$$$$$$\                      $$\                  $$$$$\  $$$$$$\   $$$$$$\  $$$$$$$\  
$$  __$$\                     $$ |                 \__$$ |$$  __$$\ $$  __$$\ $$  __$$\ 
$$ |  $$ |$$$$$$\   $$$$$$\ $$$$$$\   $$\   $$\       $$ |$$ /  $$ |$$ /  $$ |$$ |  $$ |
$$$$$$$  |\____$$\ $$  __$$\\_$$  _|  $$ |  $$ |      $$ |$$$$$$$$ |$$$$$$$$ |$$$$$$$  |
$$  ____/ $$$$$$$ |$$ |  \__| $$ |    $$ |  $$ |$$\   $$ |$$  __$$ |$$  __$$ |$$  __$$< 
$$ |     $$  __$$ |$$ |       $$ |$$\ $$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |  $$ |
$$ |     \$$$$$$$ |$$ |       \$$$$  |\$$$$$$$ |\$$$$$$  |$$ |  $$ |$$ |  $$ |$$ |  $$ |
\__|      \_______|\__|        \____/  \____$$ | \______/ \__|  \__|\__|  \__|\__|  \__|
                                      $$\   $$ |                              .org       
                                      \$$$$$$  |                                        
                                       \______/                                        
---->
<head>
	<title>PartyJAAR | Generador de Contraseñas</title>
			<link rel="icon" href="images/icons/favicon.png" type="image/png"/>
			<link rel="shortcut icon" href="images/icons/favicon.png" type="image/png"/>
			
			<link rel="stylesheet" id="mh-style-css" href="gen.css" type="text/css" media="all">
</head>
<body>
<center>
<br />
<br />
<table width="25%">
<tr>
<td colspan="2" style="background-color: #24d81e; border-radius:14px;"><center><br /><h1 class="passGen" ><?php echo generaPass(); ?></h1></center></td>
</tr>
</table>
<table>
<tr>
<td>
<form action="" method="post">
	<center>
	<input type="submit" class="copyBTN" value=" Copiar y Generar otro " name="copy" />
	</center>
</form>
</td>
</tr>

</table>

<script>
var boton = document.querySelector('.copyBTN');
 
boton.addEventListener('click', function(event) {
  var get1 = document.querySelector('.passGen');
  var range = document.createRange();
  range.selectNode(get1);
  window.getSelection().addRange(range);
 
  try {
    var resultado = document.execCommand('copy');
    console.log(resultado ? 'Copiado' : 'Error');
  } catch(err) {
    console.log('ERROR al intentar copiar');
  }
 
  window.getSelection().removeAllRanges();
});
</script>

<?php
function generaPass(){
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $longitudCadena=strlen($cadena);
     
    $pass = "";
    $longitudPass=10;
     
    for($i=1 ; $i<=$longitudPass ; $i++){
        $pos=rand(0,$longitudCadena-1);
     
        $pass .= substr($cadena,$pos,1);
    }
    return $pass;
}

?>

<center>
</body>
</html>
