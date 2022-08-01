<?php 


 class classDateCar{

 	private $entryDate;
 	private $departureDate;
 	private $dateDifference;


 	#prices

 	private $yearValue = 220000;
 	private $monthValue = 160000;
 	private $dayValue = 90;
 	private $hourValue = 5;

 	public function __construct($entryFinal, $departureFinal)
 	{
 		$this->entryFinal = new DateTime($entryFinal, new DateTimeZone("America/Sao_paulo"));
 		$this->departureFinal = new DateTime($departureFinal, new DateTimeZone("America/Sao_paulo"));
 		$this->dateDifference = $this->entryFinal->diff($this->departureFinal);
 	}

 	public function getLocationCar(){
 		$finalValue = 0;
 		$messagem = "";


 		if($this->dateDifference->y > 0){
 			$finalValue+=$this->dateDifference->y * $this->yearValue;
 			$messagem.=" ".$this->dateDifference->y." years";
 		}

 		if($this->dateDifference->m > 0){
 			$finalValue+=$this->dateDifference->m * $this->monthValue;
 			$messagem.=" ".$this->dateDifference->m." month";
 		}


 		if($this->dateDifference->d > 0){
 			$finalValue+=$this->dateDifference->d * $this->dayValue;
 			$messagem.=" ".$this->dateDifference->d." days";
 		}

 		if($this->dateDifference->h > 0){
 			$finalValue+=$this->dateDifference->h * $this->hourValue;
 			$messagem.=" ".$this->dateDifference->h." hours";
 		} 		


 		if($this->dateDifference->i > 30){
 			$finalValue+=$this->hourValue;
 			$messagem.=" ".$this->dateDifference->i." minutes";
 		} 

 		return "

 		   <h1>Diaria<h1><br><hr>
 		   Voce selicionou o periodo de  {$messagem} <br>
 		   Voce devera pagar: <br>
 		   <strong>{$finalValue}</strong>,00
 		";

 	}


 }