<SCRIPT LANGUAGE="JavaScript" SRC="isEmptty.js"></script>
<SCRIPT LANGUAGE="JavaScript">
function checkForm(){

   if(isEmpty(document.metodologia.a1.value)){
      alert("Por favor preencha seu nome");
      document.metodologia.a1.focus();
      return false;
   }

</script>

<?php
//$af1 = $_POST["a1"] * $_POST["pesoA1"];
//echo $af1 ;
//echo "-".$_POST["a1"] . "-" .$_POST["pesoA1"];
/*if ($_POST["a1"] == "na") {
	$pesoA1 = 0;
	$af1 = 0;
	echo "vc escolheu na";
	echo $af1;
    echo $pesoA1;
}
else{
	$pesoA1 = $_POST["pesoA1"];
	$af1 = $_POST["a1"] * $pesoA1;
	echo $af1;
    echo $pesoA1;
}*/


$soma = 0;
$total = 0;
$somaDaAternativa = 0;
$somaPeso = 0;
for($cont = 1; $cont <= 3; $cont++){
	if ($_POST["a$cont"] == "") { 
	"<script>
		function valida()
		{
			alert('preencha');
			metodologia.a'<?php $cont ?>'.focus();
			return false;
		}
		
	</script>";
}
}
	// echo "<script> alert ('Alguma afirmativa não foi preenchida'); </script>";
     //echo "<script>location.href='produto-formulario.php';</script>"; 
	 //echo "<script language='javascript'>history.back()</script>";



//break;


for($cont = 1; $cont <= 3; $cont++){
	if ($_POST["a$cont"] == "na") {
	$_POST["pesoA$cont"] = 0;}
	echo "Alternativa" . $cont. " eh: " . $_POST["a$cont"];
	echo " peso eh " . $_POST["pesoA$cont"] . "<br>";
	$multiplica = $_POST["a$cont"] * $_POST["pesoA$cont"];
	
	//	$somaDaAternativa = ($somaDaAternativa + ($_POST["a$cont"] * $_POST["pesoA$cont"]));
		//$somaPeso = $somaPeso + $_POST["pesoA$cont"];
	$soma = $soma + $multiplica;
	$somaPeso = $somaPeso + $_POST["pesoA$cont"];
}
		echo $soma . "<br>";
		echo $somaPeso . "<br>";
		$resultado = ($soma / $somaPeso) * 100;
		echo "A porcentagem de qualidade do software eh : " . $resultado . "%";
		echo "<script> if (a1 == '') alert ('vc deve preencher'); </script>";
		//echo $multiplica;
	//$total = $somadaAternativa / $somaPeso;
		//echo "Percentual de qualidade eh " . $total;
?>

