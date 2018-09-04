<?php
namespace Projeto;
	class Pessoa{
		protected $nome;
		protected $idade;
		protected $altura;
			

		function __construct($nome,$idade,$altura){
				$this->nome = $nome;
				$this->idade = $idade;
				$this->altura = $altura;

			}
		public function andar(){
			echo "andando\n";
		} 	
		public function indentificacao(){
			return "
			nome: {$this->nome}
			idade: {$this->idade}
			altura: {$this->altura}
			";
		}
	}
?>
