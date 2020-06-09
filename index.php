<!DOCTYPE html>

<html lang="en">

<head>
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<title>Mirror Fashion</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/estilos.css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
	type="text/css">

<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css"
	rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>
<?php	include("cabecalho.php");	?>

	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
			<form>
				<input type="search">
				<button>Buscar</button>
			</form>
		</section>
		<!-- fim .busca -->
		<section class="menu-departamentos">
			<h4>Departamentos</h4>
			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>
		<!-- fim .menu-departamentos -->
		<section class="banner-destaque">
			<figure>
				<a href="#" class="pause"></a>
				<img src="img/destaque-home.png" alt="Promoção: Big City Night">
			</figure>
			
		</section>
		<!-- fim .banner-destaque -->
	</div>
	<!-- fim .container .destaque -->

	<div class="container paineis">
		<!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
		<section class="painel novidades painel-aberto">
			<h2>Novidades</h2>
			<ol>
			<ol>
			<?php
					$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"test");
					$dados	=	mysqli_query($conexao,		"SELECT	*	FROM	produtos	ORDER BY data DESC LIMIT	0,	12");
					while	($produto	=	mysqli_fetch_array($dados)):
			?>
			<li>
					<a	href="produto.php?id=<?=	$produto['id']	?>">
							<figure>
									<img	src="img/produtos/miniatura<?=	$produto['id']	?>.png"
														alt="<?=	$produto['nome']	?>">
									<figcaption><?=	$produto['nome']	?>	por	<?=	$produto['preco']	?></figcaption>
							</figure>
					</a>
			</li>
			<?php	endwhile;	?>
	</ol>
	
			
			<button type="button">Mostrar mais</button>
		</section>
		<section class="painel mais-vendidos painel-aberto">
			<h2>Mais Vendidos</h2>
			<ol>
			<?php
					$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"test");
					$dados	=	mysqli_query($conexao,		"SELECT	*	FROM	produtos	ORDER BY vendas DESC LIMIT	0,	12");
					while	($produto	=	mysqli_fetch_array($dados)):
			?>
			<li>
					<a	href="produto.php?id=<?=	$produto['id']	?>">
							<figure>
									<img	src="img/produtos/miniatura<?=	$produto['id']	?>.png"
														alt="<?=	$produto['nome']	?>">
									<figcaption><?=	$produto['nome']	?>	por	<?=	$produto['preco']	?></figcaption>
							</figure>
					</a>
			</li>
			<?php	endwhile;	?>	
			
			<!--<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura12.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura7.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura9.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura5.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura6.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura11.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura17.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura18.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura13.png" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
					-->
			</ol>
			<button type="button">Mostrar mais</button>
		</section>
	</div>
	<!-- fim .container .paineis -->
	<?php	include("rodape.php");	?>
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Page level plugin JavaScript-->
	<script src="vendor/chart.js/Chart.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>

	<!-- Demo scripts for this page-->
	<script src="js/demo/chart-area-demo.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
	<script type="text/javascript" src="js/banner.js"></script>
	<script type="text/javascript" src="js/home.js"></script>

</body>

</html>
