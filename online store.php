<!-- PHP function to calculate shipping cost based on weight and destination country -->
<?php 

function calculateShippingCost($weight, $destination){
    // Define shipping rates for different destination countries
    $shippingRates = [
        "USA" => 5.00,
        "Canada" => 7.50,
        "Mexico" => 10.00,
        "UK" => 12.50,
        "Germany" => 15.00,
        // Add more countries and rates as needed
    ];

    // Calculate the shipping cost based on the weight and destination
    $shippingCost = 0;
    if($weight <= 1){
        $shippingCost = $shippingRates[$destination];
    } elseif($weight > 1 && $weight <= 5){
        $shippingCost = $shippingRates[$destination] + 2.50;
    } elseif($weight > 5 && $weight <= 10){
        $shippingCost = $shippingRates[$destination] + 5.00;
    } else {
        $shippingCost = $shippingRates[$destination] + 10.00;
    }

    // Return the shipping cost
    return $shippingCost;
}
	$weight = 3;
	$destination = "UK";

	$shippingCost = calculateShippingCost($weight, $destination);

	echo "The shipping cost of a " . $weight . " kg package to " . $destination . " is $" . $shippingCost;



 ?>