<?php 
	function administrar($preco){

		if($preco == 1){
			require 'telas-paginas/produtos.php';
		}
		else if($preco == 2){
			include('telas-paginas/sobre.php');
		}
		else if($preco == 3){
			include('telas-paginas/contatar.php');
		}
		else if($preco == 4){
			include('telas-paginas/localidade.php');
		}
		else if($preco == 5){
			include('telas-paginas/detalheProduto.php');
		}
		else{
			require 'telas-paginas/produtos.php';
		}



	}


 ?> <!-- FIM DA FUNCTION EM PHP -->
