<?php



function show()
{
    $file = 'text.txt';
    $wordsArray = splitter($file);
    $number = $_GET['number'];
    for($i = 1; $i <= $number; $i++) {
        $random = rand(6,10);
        $sent = $wordsArray[rand(0, count($wordsArray)-1)];
        $word = $sent[rand(0, count($sent) -1)];
        if ($i == 1) {
            echo ucfirst($word);
        } elseif ($i % $random == 0) {
            echo ". " . ucfirst($word);
        } else {
            echo " " .$word;
        }
    }
}


function splitter($file)
{
    $text = file_get_contents($file);
    $text = str_replace(". ", "=|=", $text);
    $text = strtolower($text);
    $sentence = explode("=|=", trim($text));
    array_pop($sentence);
    $words = [];
    for($i = 0; $i < count($sentence); $i++) {
        $word = explode(" ", $sentence[$i]);
        $words[] = $word;
    }
    return $words;
}



