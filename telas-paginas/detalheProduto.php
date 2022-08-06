<?php 
include_once("info/pdts.php");
$codigo = $_GET['codigo'];

?>

<div id="imagemPaginaPrincipal">

	<div class="imgDestaqueInformacaoProduto">

		<img src=" <?php echo $pdts[$codigo]['img']?>">
		
	</div>
	<div class="destaque">
		<h1><?php echo $pdts[$codigo]['nome']  ?></h1>
		<p>
			<?php echo $pdts[$codigo]['detalhes']  ?>
		</p>
		<h2>R$: <?php echo $pdts[$codigo]['preco']  ?></h2>
		<select name="select">
			<option value="#" selected>Quantas marmitas?</option>
			<option value="preco1"> 1</option>
			<option value="preco2"> 2</option>
			<option value="preco3"> 3</option>
			<option value="preco4"> 4</option>
			<option value="preco5"> 5</option>
		</select><br>
		<a href="index.php?pag=5&codigo=<?php echo$codigo ?>"> <p class="selecionar">SELECIONAR ITEM</p></a>
		
	</div> <!-- FIM DA DIV DESTAQUE-->

</div>
