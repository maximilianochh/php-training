<?php
function edad($edad){
	$var="";
	if(empty ($edad)){
		echo "error, dato invalido";
	}else{
		if(is_numeric($edad)){
			if(('18'<=$edad)&($edad<='65')){
				$var='adulto';
			}else{
				if($edad<'18'){
					$var='joven';
				}else{
					$var='jubilado';
				}
			}
		}else{
			echo 'error dato mal ingresado';
		}
	}
	return $var;
}
	$edad="";
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		$edad=$_GET["edad"];
	}else{
		$edad=$_POST['edad'];
	}
	$sale=edad($edad);
	echo $sale;
?>