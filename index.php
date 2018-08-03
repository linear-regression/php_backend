



<?php


//The URL that we want to GET.
$url = 'https://exploring-runkit-mfyo1owvkb2z.runkit.sh/';

//Use file_get_contents to GET the URL in question.
$contents = file_get_contents($url);

//If $contents is not a boolean FALSE value.
if($contents !== false){
    //Print out the contents.
    echo $contents;
}
?>


