<?php
if($_POST){
	if ($_POST['gender']==1){
	if(($_POST['age'])>17){
		echo"ok";
	}
	else{
		echo "ინფორმაცია არ შეინახა, ასაკი არ აკმაყოფილებს მოთხოვნებს";
	}}

	if ($_POST['gender']==2){
	if(($_POST['age'])>19){
		echo "ok";
	}
	else{
		echo "ინფორმაცია არ შეინახა, ასაკი არ აკმაყოფილებს მოთხოვნებს";
	}}

	if($_POST['name']){
		$file = fopen("./{$_POST['name']}.txt", "w");
		fwrite($file, $_POST['lastname']);
	}

}
 

?>