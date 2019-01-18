<?php 
	//Pra seguir um padrão de organização iremos colocar exatamente o nome da pasta
	namespace Cliente;

	// Essa Classe Extende do Cadastro principal mais essa Classe precisa ser informado ao PHP
	// que ela esta em Unamespace, pois só colocando em uma subpasta o PHP não vai entender isso pois não é automatico
	class Cadastro extends \Cadastro {
		public function registrarVenda(){
			echo "Foi registrado uma venda para o cliente ".$this->getNome();
		}
	} //End: class Cadastro

 ?>