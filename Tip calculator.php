<!-- PHP function to calculate tip amount and total bill including tip for a table of 4 customers -->
<?php 
function calculateTip($totalBillAmount, $tipPercentage) {
  // Calculate the tip amount
  $tipAmount = $totalBillAmount * ($tipPercentage / 100); 

  // Add the tip amount to the bill amount to get the total amount including the tip
  $totalAmount = $totalBillAmount + $tipAmount; 

  // Calculate the total tip amount per customer
  $totalTipAmountPerCustomer = $tipAmount / 4;

  // Return the tip amount, total amount including tip, and total tip amount per customer as a string
  return "Tip amount: $" . $tipAmount . "<br>Total amount (including tip): $" . $totalAmount . "<br>Total tip amount per customer: $" . $totalTipAmountPerCustomer; 
}

// Total bill amount
$totalBillAmount = 100000; 

// 10% tip
$tipPercentage = 10; 

// Call the calculateTip function with the total bill amount and tip percentage
$result = calculateTip($totalBillAmount, $tipPercentage); 

// Output the results
echo $result;

 ?>