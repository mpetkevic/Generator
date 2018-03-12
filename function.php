<?php



function show()
{
    $number = $_GET['number'];

    $random = rand(0,10);
    echo $random. "<hr>";

    for($i = 0; $i < $number; $i++) {
        $word = word();
        echo "Word is: " . $word."<br>";

    }

}

function word()
{
    $word = "";
    $wordsArray = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u', 'v','w','x','y','z'];
    for($i = 0; $i < rand(0,10); $i++) {
        $letter = $wordsArray[rand(0,24)];
        $word .= $letter;
    }
    return $word;
}