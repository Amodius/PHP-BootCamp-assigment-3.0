<!-- Text Filter: A PHP Function to Filter Inappropriate Words from User-Generated Content -->

<?php 
function filterInappropriateWords($text, $inappropriateWords){
    // Replace each inappropriate word with asterisks (*)
    foreach ($inappropriateWords as $word){
        $text = preg_replace("/\b" . $word . "\b/i", str_repeat("*", strlen($word)), $text);
    }

    // Return the filtered text
    return $text;
}
    $text = "I can't believe he said that! This is fuck. That gal has a smelling pussy. That nigger is arrongant. Sometimes i think that maybe he is a gay. that asshole";
    $inappropriateWords = array("fuck", "shit", "asshole", "bitch", "cunt", "dick", "pussy", "whore", "slut", "bastard", "nigger", "retard", "gay");


    $filteredText = filterInappropriateWords($text, $inappropriateWords);

    echo $filteredText;

 ?>