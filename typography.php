<?php include "head.php"; ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    
<meta charset="UTF-8">
<meta name="description" content="Filmagens e fotos aéreas com drones, caluguel de drones">
    
<meta name="keywords" content="drone, filmagem, fotos, laudo, pericia, agricultura, pecuária, aluguel, transporte medico">
    
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="7 day">
<meta name="language" content="Portuguese">
<meta name="generator" content="N/A">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<title>Encomendas</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" />
<link rel="stylesheet" type="text/css" href="style/js/player/mediaelementplayer.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/retina.js"></script>
<script type="text/javascript" src="style/js/selectnav.js"></script>
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="style/js/mediaelement.min.js"></script>
<script type="text/javascript" src="style/js/mediaelementplayer.min.js"></script>
<script type="text/javascript" src="style/js/jquery.dcflickr.1.0.js"></script>
<script type="text/javascript" src="style/js/twitter.min.js"></script>
<script type="text/javascript">
	$.backstretch("style/images/bg/fundo.jpg");
</script>
</head>
<body>
<div class="scanlines"></div>


<div class="header-wrapper opacity">

</div>



<div class="wrapper">
    <!--SLOGAN
<div class="intro">A Solução para todas as empresas, a qualquer hora e a qualquer momento. A experiência que inova e a excelência que lidera. </div> -->
 


<div class="content box">

	<center><h1 class="title"><strong> Encomendas </strong></h1></center>
	
	<div class="outer none">
		<h1> </h1>
            <center><h3> Chegou no mercado uma nova forma de entregar as suas encomendas de forma rápida e segura, pois podem ser reduzidas de 40 para 8 minutos,em média por entrega. 
            Tudo funciona de uma forma bem simples, a partir de uma rota personalizada, criada exclusivamente para os clientes, é necessário a identificação do serviço que vai utilizar e suas credenciais e depois inserir o material em uma caixa específica para isso, em seguida, um veículo não tripulado, que utiliza de inteligência artificial e outros dados de localização para reduzir o tempo normal de entrega. O drone possui vários sistemas de emergência para o caso de imprevistos — como no caso de uma tempestade repentina — e é possível acompanhá-lo durante todo o trajeto.
            <br>
            <br>
                         	
            "<a href=/page-with-sidebar.php>PARA CONSULTAR OS VALORES CLIQUE AQUI<a/>"  </h3></center>
            	<div class="item">
        <img src="imagens/ORÇAMENTO/123.jpg" style="padding-left:30px" style="width:30%;">
      </div>   
            	<br>
            	 <br>
            <br>
            <br>
            	 <br>
            <br>
	</div>            
            	
<center><h1 class="title"><strong> CONSULTE A SUA ENCOMENDA AQUI </strong></h1></center>

  
<?php
$servername = "3.128.7.77";
$username = "admin";
$password = "Alohomora01";
$dbname = "database1";

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>ID</th><th>Codigo Rastreio</th><th> Empresa</th><th>Status</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
} 

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare(('select id, codigorastreio, empresa, stats from encomendas'));
  $stmt->execute();

 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  } 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
$conn = null;

?>

 
						
</div>
	
 
</div>

<div class="clear"></div>

 
	<div class="clear"></div>
	<hr />
	
</div>
		</div>
		

<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>