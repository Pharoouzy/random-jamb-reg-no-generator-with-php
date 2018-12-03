<?php
	
	// if the request method is POST
	if (isset($_POST)) {
		$integer = '';
		$output = '';
		//generate random numbers between 81000000 and 89999900
		$integer = rand(81000000,89999900);
		$output = $integer.randLetter();
		//$output format 82818182AB
		echo $output;
	}
	else{
		echo "Invalid request method!";
	}

	// randLetter() generates 2 random letters
	function randLetter(){
 		$alphabets = array_merge(range('A','Z'));
 		$chars = '';
 		for($i = 0; $i<2; $i++){
 			$rand = rand(0,10);
 			$chars .= $alphabets[$rand];
 		}
 		return strtoupper($chars);
	}

?>