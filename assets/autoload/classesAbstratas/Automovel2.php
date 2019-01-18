<?php 

	interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
  } // End: interface Veiculo
                
	abstract class Automovel2 implements Veiculo{
    public function acelerar($velocidade){
      echo "O veículo acelerou até ". $velocidade. " km/h";
    }

    public function frenar($velocidade){
      echo "O veículo frenou até ". $velocidade. " km/h";
    }

    public function trocarMarcha($marcha){
      echo "E o veículo engatou a marcha ". $marcha;
    }
  } // End: abstract class Automovel2 implements Veiculo
 ?>