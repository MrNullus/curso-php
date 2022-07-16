<?php

class Reservs {
	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getReservs($data_inicio, $data_fim) {
		$array = array();

		$sql = "
		SELECT 
			* 
		FROM reservas 
		WHERE  
			( NOT (data_inicio > :data_fim OR data_fim < :data_inicio)
			)
		";
		$sql = $this->pdo->prepare($sql);
		$find_array = array(
			":data_inicio" => $data_inicio,
			":data_fim" => $data_fim
		);
		replace_values($sql, $find_array);
		$sql->execute();
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
 
	public function verify_disponibility($carro, $data_inicio, $data_fim) {
		$sql = "
		SELECT 
			* 
		FROM reservas 
		WHERE 
			id_carro = :carro AND 
			( NOT (data_inicio > :data_fim OR data_fim < :data_inicio)
			)
		";
		$sql = $this->pdo->prepare($sql);

		$find_array = array(
			":carro" => $carro,
			":data_inicio" => $data_inicio,
			":data_fim" => $data_fim
		);

		replace_values($sql, $find_array);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function reservar($carro, $data_inicio, $data_fim, $pessoa) {
		$sql = "INSERT INTO reservas (id_carro, data_inicio, data_fim, pessoa) VALUES (:id_carro, :data_inicio, :data_fim, :pessoa)";
		$sql = $this->pdo->prepare($sql);
		$find_array = array(
			":id_carro" => $carro,
			":data_inicio" => $data_inicio,
			":data_fim" => $data_fim,
			":pessoa" => $pessoa
		);
		
		replace_values($sql, $find_array);
		$sql->execute();
	}

}
?>