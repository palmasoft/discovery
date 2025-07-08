<?php
function valorEnLetras($x)
{
if ($x<0) { $signo = "menos ";}
else      { $signo = "";}
$x = abs ($x);
$C1 = $x;

$G6 = floor($x/(1000000));  // 7 y mas

$E7 = floor($x/(100000));
$G7 = $E7-$G6*10;   // 6

$E8 = floor($x/1000);
$G8 = $E8-$E7*100;   // 5 y 4

$E9 = floor($x/100);
$G9 = $E9-$E8*10;  //  3

$E10 = floor($x);
$G10 = $E10-$E9*100;  // 2 y 1


$G11 = round(($x-$E10)*100,0);  // Decimales
//////////////////////

$H6 = unidades($G6);

if($G7==1 AND $G8==0) { $H7 = "Cien "; }
else {    $H7 = decenas($G7); }

$H8 = unidades($G8);

if($G9==1 AND $G10==0) { $H9 = "Cien "; }
else {    $H9 = decenas($G9); }

$H10 = unidades($G10);

if($G11 < 10) { $H11 = "0".$G11; }
else { $H11 = $G11; }

/////////////////////////////
    if($G6==0) { $I6=" "; }
elseif($G6==1) { $I6="Millón "; }
         else { $I6="Millones "; }

if ($G8==0 AND $G7==0) { $I8=" "; }
         else { $I8="Mil "; }

$I10 = "Pesos ";
$I11 = "/100 M.N. ";

$C3 = @$H6.@$I6.@$H7.@$I7.@$H8.@$I8.@$H9.@$I9.@$H10;

return $C3; //Retornar el resultado

}

function unidades($u)
{
    if ($u==0)  {$ru = " ";}
elseif ($u==1)  {$ru = "Un ";}
elseif ($u==2)  {$ru = "Dos ";}
elseif ($u==3)  {$ru = "Tres ";}
elseif ($u==4)  {$ru = "Cuatro ";}
elseif ($u==5)  {$ru = "Cinco ";}
elseif ($u==6)  {$ru = "Seis ";}
elseif ($u==7)  {$ru = "Siete ";}
elseif ($u==8)  {$ru = "Ocho ";}
elseif ($u==9)  {$ru = "Nueve ";}
elseif ($u==10) {$ru = "Diez ";}

elseif ($u==11) {$ru = "Once ";}
elseif ($u==12) {$ru = "Doce ";}
elseif ($u==13) {$ru = "Trece ";}
elseif ($u==14) {$ru = "Catorce ";}
elseif ($u==15) {$ru = "Quince ";}
elseif ($u==16) {$ru = "Dieciseis ";}
elseif ($u==17) {$ru = "Decisiete ";}
elseif ($u==18) {$ru = "Dieciocho ";}
elseif ($u==19) {$ru = "Diecinueve ";}
elseif ($u==20) {$ru = "Veinte ";}

elseif ($u==21) {$ru = "Veintiun ";}
elseif ($u==22) {$ru = "Veintidos ";}
elseif ($u==23) {$ru = "Veintitres ";}
elseif ($u==24) {$ru = "Veinticuatro ";}
elseif ($u==25) {$ru = "Veinticinco ";}
elseif ($u==26) {$ru = "Veintiseis ";}
elseif ($u==27) {$ru = "Veintisiente ";}
elseif ($u==28) {$ru = "Veintiocho ";}
elseif ($u==29) {$ru = "Veintinueve ";}
elseif ($u==30) {$ru = "Treinta ";}

elseif ($u==31) {$ru = "Treinta y un ";}
elseif ($u==32) {$ru = "Treinta y dos ";}
elseif ($u==33) {$ru = "Treinta y tres ";}
elseif ($u==34) {$ru = "Treinta y cuatro ";}
elseif ($u==35) {$ru = "Treinta y cinco ";}
elseif ($u==36) {$ru = "Treinta y seis ";}
elseif ($u==37) {$ru = "Treinta y siete ";}
elseif ($u==38) {$ru = "Treinta y ocho ";}
elseif ($u==39) {$ru = "Treinta y nueve ";}
elseif ($u==40) {$ru = "Cuarenta ";}

elseif ($u==41) {$ru = "Cuarenta y un ";}
elseif ($u==42) {$ru = "Cuarenta y dos ";}
elseif ($u==43) {$ru = "Cuarenta y tres ";}
elseif ($u==44) {$ru = "Cuarenta y cuatro ";}
elseif ($u==45) {$ru = "Cuarenta y cinco ";}
elseif ($u==46) {$ru = "Cuarenta y seis ";}
elseif ($u==47) {$ru = "Cuarenta y siete ";}
elseif ($u==48) {$ru = "Cuarenta y ocho ";}
elseif ($u==49) {$ru = "Cuarenta y nueve ";}
elseif ($u==50) {$ru = "Cincuenta ";}

elseif ($u==51) {$ru = "Cincuenta y un ";}
elseif ($u==52) {$ru = "Cincuenta y dos ";}
elseif ($u==53) {$ru = "Cincuenta y tres ";}
elseif ($u==54) {$ru = "Cincuenta y cuatro ";}
elseif ($u==55) {$ru = "Cincuenta y cinco ";}
elseif ($u==56) {$ru = "Cincuenta y seis ";}
elseif ($u==57) {$ru = "Cincuenta y siete ";}
elseif ($u==58) {$ru = "Cincuenta y ocho ";}
elseif ($u==59) {$ru = "Cincuenta y nueve ";}
elseif ($u==60) {$ru = "Sesenta ";}

elseif ($u==61) {$ru = "Sesenta y un ";}
elseif ($u==62) {$ru = "Sesenta y dos ";}
elseif ($u==63) {$ru = "Sesenta y tres ";}
elseif ($u==64) {$ru = "Sesenta y cuatro ";}
elseif ($u==65) {$ru = "Sesenta y cinco ";}
elseif ($u==66) {$ru = "Sesenta y seis ";}
elseif ($u==67) {$ru = "Sesenta y siete ";}
elseif ($u==68) {$ru = "Sesenta y ocho ";}
elseif ($u==69) {$ru = "Sesenta y nueve ";}
elseif ($u==70) {$ru = "Setenta ";}

elseif ($u==71) {$ru = "Setenta y un ";}
elseif ($u==72) {$ru = "Setenta y dos ";}
elseif ($u==73) {$ru = "Setenta y tres ";}
elseif ($u==74) {$ru = "Setenta y cuatro ";}
elseif ($u==75) {$ru = "Setenta y cinco ";}
elseif ($u==76) {$ru = "Setenta y seis ";}
elseif ($u==77) {$ru = "Setenta y siete ";}
elseif ($u==78) {$ru = "Setenta y ocho ";}
elseif ($u==79) {$ru = "Setenta y nueve ";}
elseif ($u==80) {$ru = "Ochenta ";}

elseif ($u==81) {$ru = "Ochenta y un ";}
elseif ($u==82) {$ru = "Ochenta y dos ";}
elseif ($u==83) {$ru = "Ochenta y tres ";}
elseif ($u==84) {$ru = "Ochenta y cuatro ";}
elseif ($u==85) {$ru = "Ochenta y cinco ";}
elseif ($u==86) {$ru = "Ochenta y seis ";}
elseif ($u==87) {$ru = "Ochenta y siete ";}
elseif ($u==88) {$ru = "Ochenta y ocho ";}
elseif ($u==89) {$ru = "Ochenta y nueve ";}
elseif ($u==90) {$ru = "Noventa ";}

elseif ($u==91) {$ru = "Noventa y un ";}
elseif ($u==92) {$ru = "Noventa y dos ";}
elseif ($u==93) {$ru = "Noventa y tres ";}
elseif ($u==94) {$ru = "Noventa y cuatro ";}
elseif ($u==95) {$ru = "Noventa y cinco ";}
elseif ($u==96) {$ru = "Noventa y seis ";}
elseif ($u==97) {$ru = "Noventa y siete ";}
elseif ($u==98) {$ru = "Noventa y ocho ";}
else            {$ru = "Noventa y nueve ";}
return $ru; //Retornar el resultado
}

function decenas($d)
{
    if ($d==0)  {$rd = "";}
elseif ($d==1)  {$rd = "Ciento ";}
elseif ($d==2)  {$rd = "Doscientos ";}
elseif ($d==3)  {$rd = "Trescientos ";}
elseif ($d==4)  {$rd = "Cuatrocientos ";}
elseif ($d==5)  {$rd = "Quinientos ";}
elseif ($d==6)  {$rd = "Seiscientos ";}
elseif ($d==7)  {$rd = "Setecientos ";}
elseif ($d==8)  {$rd = "Ochocientos ";}
else            {$rd = "Novecientos ";}
return $rd; //Retornar el resultado
}

function getMes($id){
		if($id==1){
		 return 'enero';
		}else if($id==2){
		 return 'febrero';
		}else if($id==3){
		 return 'marzo';
		}else if($id==4){
		 return 'abril';
		}else if($id==5){
		 return 'mayo';
		}else if($id==6){
		 return 'junio';
		}else if($id==7){
		 return 'julio';
		}else if($id==8){
		 return 'agosto';
		}else if($id==9){
		 return 'septiembre';
		}else if($id==10){
		 return 'octubre';
		}else if($id==11){
		 return 'noviembre';
		}else if($id==12){
		 return 'diciembre';
		}

		return 'mes';
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contrato</title>
  </head>
  <body style="text-align: justify;">
    
    <style>
        .page-break {
            page-break-after: always;
        }

        body {
                margin-top: 1cm;
                margin-left: 1cm;
                margin-right: 1cm;
            }

        header {
                position: fixed;
                top: -60px;
                left: 50px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                text-align: center;
                color: #9E9E9E;
            }

            

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }


        </style>

<header>
        <table style="border-spacing: 0em;">
            <tr>
							
                <td  style="color: #9E9E9E; position: fixed; top: -10px;left: 30px; right: 0px; text-align: center; width: 640px;">
                    <center>
                        <br>
                        
                        <br>
                        <br>
						<strong>
							CONTRATO PARA LA ASIGNACIÓN DE USO Y BENEFICIOS DE DESCUENTOS EN SERVICIOS TURÍSTICOS
						</strong>
					</center>
                </td>
						</tr>
						
        </table>
</header>


<main style="font-size: 10pt;">

    <div style="text-align: center;">
		<div style="text-align: center;">

	        <h3>
			CONTRATO Nº <?php echo strtoupper(@$contrato->sede)."".@$contrato->consecutivo;?>
		    </h3>
	
	    </div>
	
	</div>

<!--	<div style="text-align: center;">

	   	<h3>
			CONTRATO Nº <?php echo strtoupper(@$contrato->sede)."".@$contrato->consecutivo;?>
		</h3>
	
	</div>-->

	<div style="text-align: justify;">
		Conste por el presente documento, un contrato para la asignación de uso y beneficios de descuentos que se otorga al tenor de las siguientes cláusulas: 

	</div>
<br>
	<div style="text-align: justify;">
		<strong>CLÁUSULA PRIMERA. - COMPARECIENTES: </strong>Comparecen a la celebración del presente contrato, por una parte:
		
	</div>
<br>
	<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td style="vertical-align: top;">
					<strong style=" margin-right: 0px;">a) </strong>
				</td>
		<td>
            <strong>Discovery Travel Discotravelcom S.A..</strong>
			,con RUC número <strong>1792994438001</strong>
			, representado por su Gerente General el señor <strong>Carlos Javier Larrea Crespo</strong>
			
			, empresa domiciliada en la ciudad de Quito, parte que en adelante y para efectos del presente contrato se le denominará simplemente
			 <strong>“EL CONTRATISTA”.</strong> o <strong>DCECUADOR”.</strong>
          </td>

			</tr>
		</table>
		
	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td style="vertical-align: top;" >
				    
			    
					<strong style=" margin-right: 0px;">b)</strong>
				</td>
				<td>

					<strong><?php echo strtoupper(@$titular->nombre." ".@$titular->apellido); ?>,</strong> mayor de edad,
					<?php if (@$titular->cedula){ ?> con cédula de identidad número <?php }else{ ?>con pasaporte número
					<?php } ?><strong><?php
					    if(@$titular->cedula){
						 	echo @$titular->cedula;
						}else{
							echo @$titular->pasaporte;
						}
                    ?></strong>, domiciliado en la ciudad de <strong><?php echo strtoupper(@$titular->ciudad);?></strong>, a quien en lo sucesivo podrá denominarse también <strong>“EL CLIENTE"</strong>.
				</td>
				</td>
			</tr>
		</table>
		
	</div>
<br>
	<div style="text-align: justify; ">
		A quienes en conjunto se les podrá denominar ´´las partes´´, quienes son capaces legalmente para contratar y obligarse, y de mutuo y común acuerdo, por sus propios derechos, convienen en suscribir el presente contrato, al tenor de las siguientes cláusulas:

	</div>
<br>
	<div style="text-align: justify;">
		<h3>
			CLÁUSULA SEGUNDA: GLOSARIO DE TÉRMINOS. -
			
		</h3>
		
	</div>	

	<div style="text-align: justify; ">
		En este instrumento y en todos sus anexos o documentos complementarios, las palabras y expresiones que se definen en esta cláusula, tienen el significado que a cada una de ellas se les da a continuación. 
	</div>
	<br>
	<div style="text-align: justify; ">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">a) </strong>
					
				</td>

				<td>

				<strong>CONTRATO:</strong> Es el presente Contrato para la Asignación de Uso y Beneficios de Descuentos en Servicios Turísticos;	
				</td>		
			</tr>
		</table>

	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 15px;">b) </strong>
				</td>


          <td>
            <strong>CONTRATISTA: Discovery Travel Discotravelcom S.A. </strong>,
			es una Sociedad Anónima legalmente constituida bajo las Leyes de la República del Ecuador  el 9 de mayo de 2019, debidamente inscrita ante la Superintendencia de Compañías y el Registro Mercantil de la ciudad de Quito con número de Registro Único de Contribuyentes 1792994438001. En calidad de propietario y comercializador del PORTAFOLIO DCECUADOR  quien garantiza la prestación de los productos o servicios contratados por EL CLIENTE por el presente contrato.
		</td>
			</tr>
		</table>
		
	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 15px;">c) </strong>
				</td>


          <td>
            <strong>CLIENTE: </strong>,
			es <strong><?php echo strtoupper(@$titular->nombre." ".@$titular->apellido); ?>,</strong> mayor de edad,
			<?php if (@$titular->cedula){ ?> con cédula de identidad número <?php }else{ ?>con pasaporte número
			<?php } ?><strong><?php
				if(@$titular->cedula){
					 echo @$titular->cedula;
				}else{
					echo @$titular->pasaporte;
				}
			?></strong>, domiciliado en la ciudad de <strong><?php echo strtoupper(@$titular->ciudad);?></strong> 
		</td>
			</tr>
		</table>
		
	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">d) </strong>
				</td>
				<td>
					<strong>EL CONTRATISTA:</strong> 
					La compañía DCECUADOR o cualquier otra que este designe, siempre que se encuentre constituida bajo las Leyes de la República del Ecuador y debidamente autorizada por la entidad pública competente, para actividades de agencias de viajes y operadores turísticos nacional e internacional para diseñar, organizar, promocionar y comercializar servicios turísticos, tales como la mediación en la reserva de plazas y venta de boletos aéreos, la reserva, adquisición y venta de alojamiento, entre otros que tengan relación con el mismo
				</td>
			</tr>
		</table>
		
	</div>


    <div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 5px;">e)</strong>
				</td>

				<td>
					<strong>VERIFICACIÓN DE CONDICIONES: </strong> 
					Documento que forma parte integrante del CONTRATO y que se adjunta como ANEXO 1. Contiene una enumeración y descripción completa de los términos y condiciones para la aplicación y uso de los descuentos y beneficios concedidos al CONTRATANTE en virtud del presente CONTRATO.
				</td>
			</tr>
		</table>
	</div>


    <div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 10px;">f)</strong>
				</td>

				<td>
				<strong>PORTAFOLIO DCECUADOR:</strong> 
				Servicios establecidos en los anexos que forma parte integral del presente CONTRATO y que se adjunta como ANEXO 2. En él se establecen los servicios y rangos de porcentajes máximos de rebaja que DCECUADOR . proporcionará al CLIENTE para cada uno de los servicios y productos que éste adquiera de conformidad a los términos establecidos en la VERIFICACIÓN DE CONDICIONES.
				</td>
			</tr>
		</table>
		
	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">g)</strong>
				</td>

				<td>
					<strong>PRODUCTOS Y/O SERVICIOS TURÍSTICOS:</strong> 
					Se encuentran entre ellos, la reserva, adquisición y venta - sea en el ámbito nacional o internacional- de alojamiento, boletos aéreos, tours, entradas a parques, entre otros., que serán ofertados y brindados por DCECUADOR. 
				</td>
			</tr>
		</table>
		
	</div>

    
	<div class="page-break"></div>

	<div style="text-align: justify;">
		<h3>
			CLÁUSULA TERCERA: OBJETO. -
		</h3>
	</div>

	<div style="text-align: justify;">
		DCECUADOR se obliga y compromete con EL CLIENTE a proporcionar los servicios y descuentos descritos en el PORTAFOLIO DCECUADOR detallado en el Anexo 2, ciñéndose a las condiciones y términos del presente contrato y así como a lo establecido en Anexo 1. 
	
	</div>	
	<br>
	<div style="text-align: justify;center;">
		<h3>
			CLÁUSULA CUARTA: PLAZO DE VIGENCIA Y RENOVACIÓN. -
		</h3>
		
	</div>

	<div style="text-align: justify; ">
		El presente contrato tendrá un plazo de vigencia de <strong><?php echo strtoupper(valorEnLetras(@$contrato->anosOtorgados)); ?>
		<?php if (@$contrato->anosOtorgados > 1) {
			echo " AÑOS";
		}else{
			echo " AÑO";
		} ?> (<?php echo @$contrato->anosOtorgados; ?>)</strong> contados a partir de su suscripción.
		No obstante que el plazo de vigencia del <strong>CONTRATO</strong> comenzará a discurrir desde su suscripción, <strong>El CLIENTE</strong> declara conocer que no podrá hacer uso del <strong>PORTAFOLIO DC ECUADOR</strong> hasta haber cancelado el valor total descrito en la cláusula quinta. Este contrato podrá ser renovado en términos similares, si así lo convinieren las partes hasta <strong>NOVENTA (90)</strong> días antes del vencimiento del plazo indicado previamente. Una vez fenecido el plazo de vigencia y de no existir un acuerdo de renovación según lo establecido en esta cláusula, el contrato se entenderá terminado.
		<br>
		<strong>EL CLIENTE,</strong> reconoce y acepta cumplir de forma obligatoria con <strong>EL CONTRATO</strong> por el plazo previsto en esta cláusula, sin posibilidad de retractarse o de solicitar la devolución de valores entregados.
		
	</div>
	<br>

	<div style="text-align: justify;">
		<h3>
			CLÁUSULA QUINTA: PRECIO Y FORMA DE PAGO. -
		</h3>
		
	</div>

	<div style="text-align: justify;">
		<strong>EL CLIENTE</strong> pagará a <strong>EL CONTRATISTA</strong> por el <strong>PORTAFOLIO DC ECUADOR</strong> descrito en este instrumento, la cantidad de 
		<strong><?php echo strtoupper(valorEnLetras($contrato->valorContrato)); ?> DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA
			 (USD <?php echo @$contrato->valorContrato ?>),</strong> pagaderos de la siguiente manera:
		
	</div>
<br>

<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">5.1</strong>
				</td>

				<td>
					El valor pactado de <strong><?php echo strtoupper(valorEnLetras($contrato->cuotaInicial)); ?>
						DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA (USD <?php echo @$contrato->cuotaInicial; ?>),</strong> que <strong>EL CONTRATISTA</strong> declara recibir a entera satisfacción a la suscripción de este instrumento.
				</td>
			</tr>
		</table>
	
	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">5.2</strong>
				</td>

				<td>
					El valor pagado a la fecha es, la cantidad de<strong>
					<?php echo strtoupper(valorEnLetras($contrato->pagoInicial)); if ($contrato->pagoInicial <=0.01) {
              echo "CERO";
            }?> DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA (USD <?php echo @$contrato->pagoInicial ?>),</strong>
					 que <strong>EL CONTRATISTA </strong> declara recibir a entera satisfacción a la suscripción de este instrumento.
				</td>
			</tr>
		</table>
    
	</div>
    
	<?php if((@$contrato->saldoFinanciado > 0) && (@$contrato->saldoInicial > 0)){ ?>
			<div style="text-align: justify;center; font-size: 12px;">
		        <table style="text-align: justify;">
		        	<tr style="vertical-align: top;">
				        <td >
							<strong style="margin-right: 0px;">5.3</strong>
						</td>

						<td>
							El saldo de la cuota inicial pactada es la cantidad de<strong>
	                        <?php echo strtoupper(valorEnLetras($contrato->saldoInicial)); ?> DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA
								(USD <?php echo @$contrato->saldoInicial; ?>), </strong>
							 mediante <strong><?php echo @$contrato->numeroCuotasIniciales; ?></strong>
							 dividendos mensuales a ser pagados a partir del día
							 <?php
							 		$date = substr($contrato->fechaPagoInicial,0,10);
									$fecha_det= explode('-', $date);
									echo @$fecha_det[2];
									echo " del ".getMes(@$fecha_det[1]);
									echo " del año ".@$fecha_det[0].".";
							  ?>
						</td>
					</tr>
				</table>
				
			</div>
        
			<div style="text-align: justify;">
		        <table style="text-align: justify;">
			        <tr style="vertical-align: top;">
    			        	<td >
    							<strong style="margin-right: 0px;">5.4</strong>
						</td>

						<td>
							El saldo del valor total por los servicios contratados descritos en la cláusula tercera de este instrumento, es la cantidad de <strong>
								<?php echo strtoupper(valorEnLetras($contrato->saldoFinanciado)); ?> DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA
								(USD <?php echo @$contrato->saldoFinanciado; ?>), </strong>
							 mediante <strong><?php echo @$contrato->numeroCuotasFinanciado; ?></strong>
							 dividendos mensuales a ser pagados a partir del día
							 <?php
                                    $date = substr($contrato->fechaPagoFinanciado,0,10);
									$fecha_det= explode('-', $date);
									echo @$fecha_det[2];
									echo " del ".getMes(@$fecha_det[1]);
									echo " del año ".@$fecha_det[0].".";
							  ?>
						</td>
					</tr>
				</table>
			</div>
			
		<?php }elseif(@$contrato->saldoInicial > 0){ ?>
		
			     <div style="text-align: justify;">
	               	<table style="text-align: justify;">
			                <tr style="vertical-align: top;">
				        <td >
							<strong style="margin-right: 0px;">5.3</strong>
						</td>

						<td>
							El saldo de la cuota inicial pactada es la cantidad de<strong>
								<?php echo strtoupper(valorEnLetras($contrato->saldoInicial)); ?> DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA
								(USD <?php echo @$contrato->saldoInicial; ?>), </strong>
							 mediante <strong><?php echo @$contrato->numeroCuotasIniciales; ?></strong>
							 dividendos mensuales a ser pagados a partir del día
							 <?php
							 		$date = substr($contrato->fechaPagoInicial,0,10);
									$fecha_det= explode('-', $date);
									echo @$fecha_det[2];
									echo " del ".getMes(@$fecha_det[1]);
									echo " del año ".@$fecha_det[0].".";
							  ?>
						</td>
					</tr>
				</table>
				
			</div>
		
		<?php }elseif(@$contrato->saldoFinanciado > 0){ ?>
		    <div style="text-align: justify;">
		        <table style="text-align: justify;">
		        	<tr style="vertical-align: top;">
			        	<td >
							<strong style="margin-right: 0px;">5.3</strong>
						</td>

						<td>
							El saldo del valor total por los servicios contratados descritos en la cláusula tercera de este instrumento, es la cantidad de <strong>
								<?php echo strtoupper(valorEnLetras($contrato->saldoFinanciado)); ?> DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA
								(USD <?php echo @$contrato->saldoFinanciado; ?>), </strong>
							 mediante <strong><?php echo @$contrato->numeroCuotasFinanciado; ?></strong>
							 dividendos mensuales a ser pagados a partir del día
							 <?php
							 		$date = substr($contrato->fechaPagoFinanciado,0,10);
									$fecha_det= explode('-', $date);
									echo @$fecha_det[2];
									echo " del ".getMes(@$fecha_det[1]);
									echo " del año ".@$fecha_det[0].".";
							  ?>
						</td>
					</tr>
				</table>
			</div>
		
		<?php }else{?><?php } ?>
	
	<div style="text-align: justify;center; ">
		<h3>
			CLÁUSULA SEXTA: OBLIGACIONES DEL CONTRATISTA:- 
		</h3>
	
	</div>

	<div style="text-align: justify;center; ">
		Durante la vigencia del CONTRATO, DCECUADOR se obliga a:

	</div>
	<br>
	<div style="text-align: justify; ">
		<table style="text-align: justify;">
			<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">a)</strong>
				</td>

				<td>
					Garantizar la vigencia y aplicación de los descuentos contenidos en el PORTAFOLIO DCECUADOR  en la adquisición de productos y/o paquetes turísticos, siempre que el CLIENTE cumpla con los términos descritos en el documento denominado VERIFICACIÓN DE CONDICIONES.	
				</td>
			</tr>
		</table>
	
	</div>
	
	<div style="text-align: justify;">
		 <table style="text-align: justify;">
		    <tr style="vertical-align: top;">
			    <td >
					<strong style="margin-right: 0px;">b)</strong>
				</td>

				<td>
					Brindar al CLIENTE cuando le  fuere requerida, utilizando los canales de comunicación previstos en el presente contrato, la información turística actualizada que pudiere recabar DCECUADOR .	
				</td>
			</tr>
		</table>
	</div>

    <div style="text-align: justify;">
		<table style="text-align: justify;">
		    <tr style="vertical-align: top;">
			 	<td >
					<strong style="margin-right: -5px;">c)</strong>
				</td>

				<td>
					Proporcionar al CLIENTE utilizando los canales de comunicación previstos en el presente contrato, las cotizaciones de PRODUCTOS Y/O SERVICIOS TURÍSTICOS que fueren elaboradas por DCECUADOR.
				</td>
			</tr>
		</table>
	
	</div>
	<br>
	<div style="text-align: justify;">
		<strong>CLÁUSULA SÉPTIMA: DERECHOS Y OBLIGACIONES DEL CLIENTE. </strong>

	</div>
	<div style="text-align: justify;">
		Durante la vigencia del presente Contrato, EL CLIENTE se obliga a: 
	</div>
    <br>
	<div style="text-align: justify;">
		<table style="text-align: justify;">
		    <tr style="vertical-align: top;">
			 	<td >
					<strong style="margin-right: 0px;">a)</strong>
				</td>

				<td>
					<strong>Respecto a los pagos,</strong> 
					Pagar en las fechas previstas los dividendos que componen el saldo del precio pactado según lo previsto en la cláusula QUINTA del presente instrumento.
				</td>
			</tr>
		</table>
		
	</div>
	<div style="text-align: justify;">
		<table style="text-align: justify;">
		    <tr style="vertical-align: top;">
			 	<td >
					<strong style="margin-right: 0px;">b)</strong>
				</td>

				<td>
					<strong>Respecto al plazo de vigencia.,</strong> 
					Cumplir de forma obligatoria el presente contrato por el plazo previsto en la cláusula CUARTA.	
				</td>
			</tr>
		</table>
		
	</div>
	<div style="text-align: justify;">
		<table style="text-align: justify;">
		    <tr style="vertical-align: top;">
			 	<td >
					<strong style="margin-right: 0px;">c)</strong>
				</td>

				<td>
					<strong>Respecto a los beneficiarios,</strong> 
					El CLIENTE podrá designar -al hacer uso por primera vez del PORTAFOLIO DCECUADOR - a un número máximo de personas que tendrán derecho a las mismas rebajas y beneficios contemplados en el ANEXO 2. EL CONTRATISTA reconoce al CLIENTE la posibilidad de alternar o cambiar uno o más de los beneficiarios designados inicialmente hasta por UNA (1) ocasión al año, pero en ningún caso podrá incluir o agregar más beneficiarios a los determinados en el ANEXO 2. Para que los beneficiarios designados puedan hacer uso del PORTAFOLIO DCECUADOR , DCECUADOR deberá ser debidamente informado de la designación o cambio con al menos CUARENTA Y OCHO (48) hora de anticipación a la reserva solicitada.
				</td>
			</tr>
		</table>
		
	</div>
	<div style="text-align: justify;">
		<table style="text-align: justify;">
		    <tr style="vertical-align: top;">
			 	<td >
					<strong style="margin-right: 0px;">d)</strong>
				</td>

				<td>
					<strong>Sobre la garantía de mejor precio,</strong> 
					Si EL CLIENTE encontrase una mejor oferta a nivel de precios en el mercado local o internacional, será la obligación de EL CONTRATISTA mejorar dicha oferta siempre y solo si, se cumplan con los siguientes parámetros y condiciones:
				
					<br>
					<ul>
						<li>
							Previo a acudir a un tercero u agencia de viajes, EL CLIENTE deberá solicitar una cotización a DCECUADOR.
						</li>
						<li>
							En el evento en que EL CLIENTE no se encuentre conforme con la tarifa ofertada por él DCECUADOR., éste podrá requerir a un tercero u agencia de viajes, una cotización idéntica, que oferte el mismo servicio con las condiciones y parámetros exactos a los ofertados por DCECUADOR, en la que el criterio de búsqueda será: las mismas fechas de uso, vuelos, horas de partida y arribo, escalas, y/o aerolíneas. Las mismas condiciones aplicarán para cualquier otro servicio ofertado.
						</li>
						<li>
							Presentar original de una cotización vigente y con disponibilidad debidamente membretada, firmada y sellada por el tercer proveedor o agencia de viajes.
						</li>
					</ul>
				</td>
			</tr>
		</table>
		
	</div>

	<div style="text-align: justify;">
		<h3>
			CLÁUSULA OCTAVA: TERMINACIÓN DEL CONTRATO. -
		</h3>
	
	</div>


	<div style="text-align: justify;">
		El presente contrato terminará por las siguientes circunstancias:  
		
	</div>
	
<br>
	<div style="text-align: justify;">
		<table style="text-align: justify;">
		  	<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 10px;">a)</strong>
				</td>

				<td>
					Por vencimiento del plazo previsto en el presente CONTRATO;
				</td>
			</tr>
		</table>

	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
		  	<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 10px;">b)</strong>
				</td>

				<td>
					Por mutuo acuerdo de las <strong>PARTES;</strong>
				</td>
			</tr>
		</table>

	</div>
	
	<div style="text-align: justify;">
		<table style="text-align: justify;">
		  	<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">c)</strong>
				</td>

				<td>
					Por incumplimiento de parte de EL CONTRATISTA de cualquier obligación contenida en la cláusula Sexta;
				</td>
			</tr>
		</table>

	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
		  	<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 0px;">d)</strong>
				</td>

				<td>
					Por incumplimiento de parte de EL CLIENTE de cualquier obligación contenida en la cláusula Séptima;
				</td>
			</tr>
		</table>

	</div>	
	
    <div style="text-align: justify;">
		<table style="text-align: justify;">
		  	<tr style="vertical-align: top;">
				<td >
					<strong style="margin-right: 8px;">e)</strong>
				</td>

				<td>
					En caso de mora en el pago de uno o más de los dividendos pactados en la cláusula Quinta.
				</td>
			</tr>
		</table>


	</div>

	<div style="text-align: justify;">
		<h3>
			CLÁUSULA NOVENA: SANCIONES. -
		</h3>
		
	</div>

	<div style="text-align: justify;">
		Las PARTES convienen en fijar una suma equivalente al valor total del CONTRATO más el 40 % calculado sobre este monto a título de CLÁUSULA PENAL en el evento en que, alguna de ellas incumpla –parcial o totalmente- con cualquiera de las obligaciones contenidas en las cláusulas SEXTA o SÉPTIMA del presente instrumento, esto sin perjuicio que -al amparo de lo establecido en la cláusula precedente- se pueda dar por terminado el CONTRATO. 
	</div>
	<div style="text-align: justify;">
		<h3>
			CLÁUSULA DÉCIMA: CONTROVERSIAS, CLAUSULA ARBITRAL-
		</h3>

	</div>
	 
	<div style="text-align: justify;">
		Cualquier dificultad, duda, inconveniente que suscite con ocasión de la ejecución del presente contrato y sus anexos, respecto de su existencia o inexistencia, validez o nulidad, cumplimiento o incumplimiento, resolución, interpretación, aplicación, ejecución, terminación o por cualquier otro motivo relacionado directa o indirectamente con el presente contrato o cualquiera de sus anexos y sus reformas, será resuelto primero, por un plazo de 60 días de forma amigable entre las partes, si, de esa manera no se hubiere resuelto el conflicto, las partes procurarán resolverlo mediante un procedimiento de Mediación frente a la Cámara de Comercio de Quito, si hubiere constancia de imposibilidad de mediación otorgada por la antedicha Cámara, las partes, renuncian a fuero y domicilio y se sujetarán a un procedimiento arbitral frente al Tribunal de Arbitraje de la Cámara de Comercio de Quito, conformado por 1 (uno) arbitro y conforme a las disposiciones de la Ley de Arbitraje y Mediación vigente y al reglamento del Centro de Arbitraje. El proceso arbitral será administrado, se decidirá en derecho y será confidencial. Por lo tanto, las partes renuncian a la jurisdicción ordinaria y se obligan a acatar el laudo arbitral y se comprometen a no interponer ningún tipo de recurso en contra del mismo. El laudo arbitral será inapelable. La reconvención, de existir, se someterá también a lo dispuesto en la presente cláusula y versará únicamente sobre la causa por la cual se interpuso la demanda inicial. 
	</div>
<br>
		<div style="text-align: justify;center;">
		<h3>
			CLÁUSULA DÉCIMO PRIMERA: DOMICILIO FÍSICO Y ELECTRÓNICO:
		</h3>
		 
	</div>
	<div style="text-align: justify;">
		Para efectos de comunicaciones o notificaciones las partes señalan como domicilio los siguientes: 
	
	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
		  	<tr style="vertical-align: top;">
		  	    <td>
					<strong style="margin-right: 0px;">12.1</strong>
				</td>
				<!--<td>
					<strong>Discovery Travel Discotravelcom S.A.:</strong> Guayaquil. Av. Carlos Julio Arosemena C.C Albán Borja puerta 2 local 48
				</td>-->
				<td>
					Discovery Travel Discotravelcom S.A.: Quito: Luis Mideros s2-208 y avenida del establo
					edificio urban tower local 404 Cumbayá 
				</td>
			</tr>
		</table>
 
	</div>

	<div style="text-align: justify;">
		<table style="text-align: justify;">
		  	<tr style="vertical-align: top;">
		  	    <td>
					<strong style="margin-right: 0px;">12.2</strong>
				</td>

				<td>
					<table>
						<tr>
							<td style="vertical-align: top;">
							CLIENTE:
							</td>

							<td>
								<?php if (@$titular->direccion==''){ ?>
									<?php echo "<b>Email: </b>".@$titular->email; ?>
								<?php }else{ ?>
									<?php echo "<b>Dir: </b>".' '.@$titular->direccion; ?>
 								 	<br>
 								 	<?php echo "<b>Email: </b>".@$titular->email; ?>
								<?php } ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

	</div>
	
	<div style="text-align: justify;center;">
		<h3>
			CLÁUSULA DÉCIMO SEGUNDA: ACEPTACIÓN:
		</h3>
		 
	</div>
	<div style="text-align: justify;">
		Las PARTES reconocen y aceptan que los PRODUCTOS Y/O SERVICIOS TURÍSTICOS son ofertados y brindados por Discovery Travel Discotravelcom S.A. Para constancia de lo expuesto, las partes se afirman y ratifican en todo el contenido de este contrato, firmándolo en unidad de acto y por duplicado, en la ciudad <?php 
		 echo '<b>'.$contrato->ciudadSede.'</b> a los '.substr($contrato->created_at,8,2).' días del mes de '.getMes(substr($contrato->created_at,5,2)).' del año '.substr($contrato->created_at,0,4); 
		 ?>.<?php if (@$contrato->cotitular > 0) { ?><?php }else{ ?>
    
	<br><br><br><br>
        <br><br>
	
	
    <?php } ?>
	
	</div>
	
	<!--<div class="page-break"></div>-->

	Firmas.

		<br><br>
		<br>

		<table style="width: 100%;">
			<br><br><br>

			<tbody>
				<tr>
				    
						<?php if (@$contrato->cotitular > 0) {

					 }else{?>
					 

					 <td style="text-align: center;width: 50%;">
					     <img src="{{asset('firma.jpeg')}}" height="60">
							<hr style="width: 50%;">
							<strong>Discovery Travel Discotravelcom S.A.</strong><br>
							<strong>RUC.1792994438001</strong>
						
							
							
					</td>

					 <?php } ?>
					<?php if (@$contrato->cotitular > 0) { ?>
					<td style="text-align: center;width: 50%;">
				        <img src="{{asset('firma.jpeg')}}" height="60">
							<hr style="width: 50%;">
							<strong>Discovery Travel Discotravelcom S.A.</strong><br>
							<strong>RUC.1792994438001</strong>
						
							
							
					</td>
					<td></td>
					</tr><tr>
					<td style="text-align: center;width: 50%;text-transform: uppercase; font-size: 10px;">
					    <br><br><br><br><br>
						<hr style="width: 50%;">
						<strong style="text-transform: uppercase;font-size: 10px;"><?php echo strtoupper(@$titular->nombre." ".@$titular->apellido); ?></strong><br>
						<strong>
							<?php
							 if (!empty(@$titular->cedula)){
								 print_r("C.I. N.o. ".@$titular->cedula);
							}else{
								print_r("Pasaporte N.o.".@$titular->pasaporte);
							}
							?>
						</strong>
						
							<strong>EL ADHERENTE</strong><br>
					</td>

						<td style="text-align: center;width: 50%;text-transform: uppercase; font-size: 10px;">
						    <br><br><br><br><br>
							<hr style="width: 50%;">
							<strong style="text-transform: uppercase;"><?php echo strtoupper(@$cotitular->nombre." ".@$cotitular->apellido); ?></strong><br>
							<strong>
								<?php
								 if (!empty(@$cotitular->cedula)){
									 print_r("C.I. N.o. ".@$cotitular->cedula);
								}else{
									print_r("Pasaporte N.o.".@$cotitular->pasaporte);
								}
								?>
							</strong>
						</td>
					<?php }else{ ?>

					<td style="text-align: center;width: 50%;text-transform: uppercase;font-size: 10px;">
					    <br><br><br><br><br>
						<hr style="width: 50%;">
						<strong style="text-transform: uppercase;"><?php echo strtoupper(@$titular->nombre." ".@$titular->apellido); ?></strong><br>
						<strong>
							<?php
							 if (!empty($titular->cedula)){
								 print_r("C.I. N.o. ".$titular->cedula);
							}else{
								print_r("Pasaporte N.o.".$titular->pasaporte);
							}
							?>
							<br>
								<strong>EL ADHERENTE</strong><br>
						</strong>
					</td>

				<?php } ?>
				</tr>

			</tbody>
		</table>


	<div class="page-break"></div>

		<div style="text-align: center;font-size: 14px;">

			<h3>
				ANEXO 1
			</h3>
		</div>
	
	<div style="text-align:justify; center; font-size: 14px;">
		<h3>
			<strong>VERIFICACION DE CONDICIONES
 </strong>
		</h3>

	</div>
	

	<div style="text-align: justify;center; font-size: 14px; ">
		Con el ánimo de ratificar que la suscripción del CONTRATO PARA LA ASIGNACIÓN Y USO DE BENEFICIOS DE DESCUENTOS EN SERVICIOS TURÍSTICOS se realizó bajo los principios de la buena fe, la transparencia y la libre voluntad contractual, de manera clara y expresa, EL CLIENTE manifiesta expresamente su aceptación a los términos, condiciones y aspectos más relevantes del PORTAFOLIO DCECUADOR. 	
		<br>
		Por lo tanto, COMO CLIENTE, USUARIO Y BENEFICIARIO, ENTIENDO QUE LOS SIGUIENTES ENUNCIADOS SON UNA SÍNTESIS DE LOS PRIVILEGIOS, BENEFICIOS Y OBLIGACIONES DEL PORTAFOLIO DCECUADOR:
	</div>
<br>
	
	<!-- aqui termina este div q agrege-->
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">1.</strong>
					</td>
	
					<td>
						____ He (mos) recibido una presentación clara y completa de los servicios y/o descuentos contenidos en el 
						PORTAFOLIO DCECUADOR .	
					</td>
				</tr>
			</table>
		
		</div>
	   
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">2.</strong>
					</td>
	
					<td>
						____ Acepto que las vías para hacer uso de los servicios y/o beneficios descritos en el CONTRATO son las siguientes: correos electrónicos, página web o a través de nuestra línea de servicio al cliente.
							
					</td>
				</tr>
			</table>
		
		</div>
	
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">3.</strong>
					</td>
	
					<td>
						____ Acepto que la atención presencial debe ser solicitada mediante cita previa.	
					</td>
				</tr>
			</table>
			
		</div>
	
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">4.</strong>
					</td>
	
					<td>
						____
						Acepto y declaro, que no existe ningún acuerdo verbal entre EL CONTRATISTA o alguno de los asesores y EL CIENTE, que no esté contenido en el CONTRATO y sus anexos.
					</td>
				</tr>
			</table>
		
		</div>
	
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">5.</strong>
					</td>
	
					<td>
						____
						Acepto que el PORTAFOLIO DCECUADOR  es el conjunto de beneficios descritos con detalle en el contrato y sus anexos
					</td>
				</tr>
			</table>
		
		</div>
	
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">6.</strong>
					</td>
	
					<td>
						____
						Acepto que como CLIENTE podrá hacer uso de los beneficios contratados una vez pagado el 100% del valor total del CONTRATO.
					</td>
				</tr>
			</table>
			
		</div>
		
	
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">7.</strong>
					</td>
	
					<td>
						____
						Acepto que las cortesías y/o bonos promocionales entregados cubren solo estadía y que bajo ningún concepto incluyen alimentos ni transporte y se regirán por las condiciones de uso al respaldo de la misma; la cuales no son parte integrante del contrato suscrito
					</td>
				</tr>
			</table>
		
		</div>
	
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">8.</strong>
					</td>
	
					<td>
						____
						Acepto que los derechos de uso sobre las cortesías y/o bonos promocionales entregados son exclusivamente a cargo del CLIENTE; éstos pueden variar según la categoría del hotel y la temporada. 
					</td>
				</tr>
			</table>
		
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">9.</strong>
					</td>
	
					<td>
						____
						Acepto que toda cotización y/o reserva debe ser solicitada por escrito indicando su número de contrato a través del formulario de reservas en la página web (www.discoverytravel.ec) o a los correos destinados para este fin, y que el tiempo de respuesta de la misma será de 24 a 48 horas.
					</td>
				</tr>
			</table>
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">10.</strong>
					</td>
	
					<td>
						____
						Acepto que las cotizaciones realizadas tienen una vigencia de 24 horas y estarán sujetas a cambios sin previo aviso y que una cotización no garantiza ni implica una reserva.
					</td>
				</tr>
			</table>
		</div>

		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">11.</strong>
					</td>
	
					<td>
						____
						Acepto que los porcentajes de descuentos que aplican para el PORTAFOLIO DCECUADOR y el mejor precio de garantía, serán solo aplicables contra adquisición de los servicios brindados por él CONTRATISTA y que bajo ningún concepto serán  exigibles en dinero.
					</td>
				</tr>
			</table>
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">12.</strong>
					</td>
	
					<td>
						____
						Acepto que todos los servicios turísticos descritos en el CONTRATO y sus ANEXOS, serán operados y proporcionados única y exclusivamente por DCECUADOR o por quien designe.
					</td>
				</tr>
			</table>
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">13.</strong>
					</td>
	
					<td>
						____
						Acepto que todo pago relacionado con el CONTRATO y los servicios adquiridos, serán en dólares de los Estados Unidos de América inclusive si llegaré a cambiar la moneda de circulación en territorio ecuatoriano.
					</td>
				</tr>
			</table>
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">15.</strong>
					</td>
	
					<td>
						____
						Acepto y declaro haber recibido información adecuada, veraz, clara, oportuna y completa sobre los servicios ofrecidos, así como los descuentos, condiciones de contratación y demás aspectos relevantes de los mismos, sin reclamo o queja de ninguna naturaleza;
					</td>
				</tr>
			</table>
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">16.</strong>
					</td>
	
					<td>
						____
						Acepto y declaro haber recibido un trato transparente, equitativo y no discriminatorio o abusivo por parte de DCECUADOR.
					</td>
				</tr>
			</table>
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">17.</strong>
					</td>
	
					<td>
						____
						Acepto y declaro que los descuentos otorgados del portafolio de servicios son aplicados únicamente a las tarifas vigentes de cotizaciones y reservas confirmadas por el CLIENTE en la fecha de las mismas, en caso de modificaciones, cambios y/o cancelaciones estas podrán incurrir en penalidades impuestas por DCECUADOR   del servicio.
					</td>
				</tr>
			</table>
		</div>
		
		<div style="margin-left: 50px;text-align: justify;center; font-size: 14px;">
			<table style="text-align: justify;">
				<tr style="vertical-align: top;">
					<td style="vertical-align: top;">
						<strong style="margin-right: 5px;">18.</strong>
					</td>
	
					<td>
						____
						Declaro que el presente anexo, ha sido leído, comprendido y ratificado en su totalidad de manera consiente, libre y espontánea, en consecuencia de lo cual estampo mi firma, que es la que utilizo en todos mis actos públicos y privados, en señal de aceptación.
					</td>
				</tr>
			</table>
		</div>
		
		<br>
		<br>

		<table style="width: 100%;">
			<tbody>
				<tr>
						<?php if (@$contrato->cotitular > 0) {

					 }else{?>

					 <td style="text-align: center;width: 50%;">
					     <img src="{{asset('firma.jpeg')}}" height="60">
							<hr style="width: 50%;">
							<strong>Discovery Travel Discotravelcom S.A.</strong><br>
							<strong>RUC.1792994438001</strong>
						
							
							
					</td>

					 <?php } ?>
					<?php if (@$contrato->cotitular > 0) { ?>
					<td style="text-align: center;width: 50%;">
				        <img src="{{asset('firma.jpeg')}}" height="60">
							<hr style="width: 50%;">
							<strong>Discovery Travel Discotravelcom S.A.</strong><br>
							<strong>RUC.1792994438001</strong>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
						
							
							
					</td>
					</tr>
					<tr>
					<td style="text-align: center;width: 50%;text-transform: uppercase;font-size: 10px;">
						<hr style="width: 50%;">
						<strong style="text-transform: uppercase;font-size: 10px;"><?php echo strtoupper(@$titular->nombre." ".@$titular->apellido); ?></strong><br>
						<strong>
							<?php
							 if (!empty(@$titular->cedula)){
								 print_r("C.I. N.o. ".@$titular->cedula);
							}else{
								print_r("Pasaporte N.o.".@$titular->pasaporte);
							}
							?>
						</strong>
						
							<strong>EL ADHERENTE</strong><br>
					</td>

						<td style="text-align: center;width: 50%;text-transform: uppercase; font-size: 10px;">
							<hr style="width: 50%;">
							<strong style="text-transform: uppercase;"><?php echo strtoupper(@$cotitular->nombre." ".@$cotitular->apellido); ?></strong><br>
							<strong>
								<?php
								 if (!empty(@$cotitular->cedula)){
									 print_r("C.I. N.o. ".@$cotitular->cedula);
								}else{
									print_r("Pasaporte N.o.".@$cotitular->pasaporte);
								}
								?>
							</strong>
						</td>
					<?php }else{ ?>

					<td style="text-align: center;width: 50%;text-transform: uppercase;font-size: 10px;">
						<hr style="width: 50%;">
						<strong style="text-transform: uppercase;"><?php echo strtoupper(@$titular->nombre." ".@$titular->apellido); ?></strong><br>
						<strong>
							<?php
							 if (!empty($titular->cedula)){
								 print_r("C.I. N.o. ".$titular->cedula);
							}else{
								print_r("Pasaporte N.o.".$titular->pasaporte);
							}
							?>
							<br>
								<strong>EL ADHERENTE</strong><br>
						</strong>
					</td>

				<?php } ?>
				</tr>

			</tbody>
		</table>

	<div class="page-break">

    </div>
	<div style="text-align: center; margin-top: 0px;">
		<h3 style="text-decoration: underline;">
			ANEXO 2
		</h3>
	</div>

	<div style="text-align: center;">
		<h3>
			BENEFICIOS Y BENEFICIARIOS
		</h3>
		<br>
	</div>
	<br>

	<div style="text-align: justify;">
		<strong style="text-transform: uppercase;">NOMBRE DEL CLIENTE: <?php print_r(strtoupper($titular->nombre.' '.$titular->apellido)) ?></strong>
		<br>
	</div>
	<br>

	<div style="text-align: justify;">
		<strong>CONTRATO No. <?php print_r($contrato->sede."".$contrato->consecutivo) ?></strong>
		<br>
	</div>
	<br>

	<div style="text-align: justify;">
		<strong>El CLIENTE</strong> tendrá derecho de recibir los siguientes beneficios durante un periodo de
		<strong><?php echo strtoupper(valorEnLetras($contrato->anosOtorgados)); ?>
			<?php
				if ($contrato->anosOtorgados > 1) {
					echo " AÑOS ";
				}else{
					echo " AÑO ";
				}
			?>
		 (<?php echo $contrato->anosOtorgados ?>)</strong>, con un número de beneficiarios máximo de <strong><?php echo strtoupper(valorEnLetras($contrato->beneficiarios)); ?>
	  	<?php
					if ($contrato->beneficiarios > 1) {
						echo " BENEFICIARIOS ";
					}else{
						echo " BENEFICIARIO ";
					}
			?>
			 (<?php echo $contrato->beneficiarios ?>)</strong>, 




			 y una cantidad total de <strong><?php echo strtoupper(valorEnLetras($contrato->noches)); ?>

			 <?php
					if ($contrato->noches > 1) {
						echo " NOCHES ";
					}else{
						echo " NOCHE ";
					}
			?>
			 (<?php echo $contrato->noches ?>)</strong>, por la vigencia del contrato contados a partir de la firma del presente contrato:

		<br><br><br><br>
	</div>

	<div style="text-align: center; text-decoration: underline;">
		<strong>PORTAFOLIO DE SERVICIOS DC ECUADOR</strong>
		<br>
	</div>
	<br>

	<div style="text-align: center;">
		<table style="width: 100%;">
			<tr>
			    <?php if(count($servNaci) > 0){ $i = 0;?>
				<td style="width: 40%;" valign="top">

					<table id="clientes" border="0" cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
        		        <thead>
        		    			<tr>
        		    				<th style="text-align: left;">Servicios Nacionales</th>
        		    			</tr>
        		    		</thead>

        		       <tbody>

        		           <?php foreach($servNaci as $servNaci){ $i++; ?>
        		             <tr>
        		               <td>

        										 <table>
        								 			<tr>
        								 				<td style="vertical-align: top;">
        								 					<strong style="margin-right: 5px;"><?php echo $i.'.'; ?></strong>
        								 				</td>

        								 				<td>
        								 					<?php echo $servNaci->servicio;?>
        								 				</td>
        								 			</tr>
        								 		</table>

        		               </td>
        		             </tr>
        		           <?php } ?>

        		       </tbody>
		            </table>

				</td>
               <?php }else{echo"";} ?>
               <?php if(count($servInter) > 0){ $i = 0;?>
				<td style="width: 60%;" valign="top">

					<table id="clientes" border="0" cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
        		        <thead>
        		    			<tr>
        		    				<th style="text-align: left;">Servicios Internacionales</th>
        		    			</tr>
        		    		</thead>

        		       <tbody>

        		           <?php foreach($servInter as $servInter){ $i++; ?>
        		             <tr>
        		               <td>
        										 <table>
        								 			<tr>
        								 				<td style="vertical-align: top;">
        								 					<strong style="margin-right: 5px;"><?php echo $i.'.'; ?></strong>
        								 				</td>

        								 				<td>
        								 					<?php echo $servInter->servicio;?>
        								 				</td>
        								 			</tr>
        								 		</table>
        		               </td>
        		             </tr>
        		           <?php } ?>

        		       </tbody>
        		      </table>

				</td>
				<?php }else{} ?>
			</tr>
		</table>
		<br>
	</div>
	<br>

	<div style="text-align: justify;">
		<h3>
			Firma:
		</h3>
		<br>
	</div>
	<br>

	<table style="width: 100%;">
		<tbody>
			<tr>
				<td style="text-align: center;width: 50%;text-transform: uppercase;">
					<hr style="width: 50%;">
					<strong style="text-transform: uppercase;"><?php print_r(strtoupper($titular->nombre.' '.$titular->apellido)) ?></strong><br>
					<strong>
						<?php
						 if (!empty($titular->cedula)){
							print_r("C.I. N.o. ".$titular->cedula);
						}else{
							print_r("Pasaporte N.o.".$titular->pasaporte);
						}
						?>
					</strong>
				</td>

				<?php if ($contrato->cotitular > 0) { ?>
					<td style="text-align: center;width: 50%;text-transform: uppercase;">
						<hr style="width: 50%;">
						<strong style="text-transform: uppercase;"><?php print_r(strtoupper($cotitular->nombre.' '.$cotitular->apellido)) ?></strong><br>
						<strong>
							<?php
							 if (!empty($cotitular->cedula)){
								print_r("C.I. N.o. ".$cotitular->cedula);
							}else{
								print_r("Pasaporte N.o.".$cotitular->pasaporte);
							}
							?>
						</strong>
					</td>
				<?php } ?>
			</tr>
		</tbody>
	</table>

	<div class="page-break">

    </div>
	<div style="text-align: center;color: #2196F3; margin-top: 0px;">
		<h3>
			Discovery Travel Discotravelcom S.A.
		</h3>
	</div>

	<div style="text-align: center;color: #2196F3;">
		<h3>
			¡Cordial Saludo de Bienvenida!
		</h3>
	</div>
	<br>

	<div style="text-align: justify;">
		Para DISCOVERY TRAVEL y su equipo de trabajo es un placer darle la más cordial bienvenida a nuestro CLUB nos permitimos felicitarlos por pertenecer al maravilloso mundo de las vacaciones preferenciales, a través de los servicios que nuestro programa PORTAFOLIO DCECUADOR  tiene preparado para ustedes. Con el ánimo de poderles atender y responder de manera eficaz e inmediata, cualquier servicio requerido por ustedes o alguno de sus beneficiarios ponemos a su disposición nuestros métodos de atención: 
		<br><br>
	</div>

	<div style="text-align: center;color: #2196F3;">
		<h5>
			Líneas de atención
		</h5>
	</div>

	<div style="text-align: center;">
		Teléfono. 0967123999
	</div>

    <br>
	<div style="text-align: center;color: #2196F3;">
		<h5>
			Correos
		</h5>
	</div>



    <div style="text-align: center;">
        reservas@discoverytravel.ec
	</div>
    <div style="text-align: center;">
        sac@discoverytravel.ec
	</div>
    <br>

	<br>
	<div style="text-align: center;color: #2196F3;">
		<h5>
			Dirección
		</h5>
		<center>
		    <!--
		    Av. Carlos Julio Arosemena C.C Alban Borja puerta 2 local 48 junto al almacén DMARY
		    -->
		    Quito: Luis Mideros s2-208 y avenida del establo
edificio urban tower local 404 Cumbayá 
		</center>
	</div>

	
	<br><br>

	<div style="text-align: center;color: #2196F3;">
		<h4>
			PARA SOLICITAR UNA RESERVA INGRESE A LA PÁGINA WEB COMO AFILIADO Y DILIGENCIE EL FORMULARIO PARA SU COTIZACION O RESERVA.
			ESTIMADO PARA UNA MAYOR, EFICAZ Y PERSONALIZADA ATENCIÓN RECUERDE SOLICITAR SU CITA PREVIA
		</h4>
		<br>
	</div><br>


</main>

<script type="text/php">
    if (isset($pdf)) {
        $x = 290;
        $y = 775;
        $text = "Página {PAGE_NUM}";
        $font = null;
        $size = 11;
        $color = array(0.5,0.5,0.5);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>

  </body>
</html>
