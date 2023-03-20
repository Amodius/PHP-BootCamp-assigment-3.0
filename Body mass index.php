<!-- PHP function to calculate body mass index (BMI) using height and weight -->
<?php 
function calculateBMI($height, $weight){
    // Convert height from centimeters to meters
    $height = $height / 100;

    // Calculate BMI using the formula
    $bmi = $weight / ($height * $height);

    // Return the BMI value
    return $bmi;
}
	$height = 180;
	$weight = 80;

	$bmi = calculateBMI($height, $weight);

	echo "The BMI of a customer who is " . $height . " cm tall and weighs " . $weight . " kg is " . $bmi;

 ?>