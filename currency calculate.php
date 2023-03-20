
<!-- PHP function to convert currency values using real-time exchange rates -->
<?php 
function convertCurrency($value, $fromCurrency, $toCurrency){
    // Fetch the current exchange rate using an API
    $url = "https://api.exchangerate-api.com/v4/latest/" . $fromCurrency;
    $json = file_get_contents($url);
    $exchangeRates = json_decode($json, true);
    $exchangeRate = $exchangeRates['rates'][$toCurrency];

    // Convert the value using the exchange rate
    $convertedValue = $value * $exchangeRate;

    // Return the converted value
    return $convertedValue;
}
    $originalValue = 100;
    $fromCurrency = "USD";
    $toCurrency = "EUR";

    $convertedValue = convertCurrency($originalValue, $fromCurrency, $toCurrency);

    echo $originalValue . " " . $fromCurrency . " is equivalent to " . $convertedValue . " " . $toCurrency;

 ?>