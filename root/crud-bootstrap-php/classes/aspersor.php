<?php
class Aspersor {
	var $fabricante;
	var $modelo;
	var $vazao;
	var $ps;
	var $dbocal;
	var $raio;
	var $irrigando;

	function status() {
		if ($this->irrigando) {
			echo "Irrigação Funcionando";
		} else {
			echo "Irrigação Desligada";
		}

	}
	
}
