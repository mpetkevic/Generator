<?php



function show()
{
    $file = 'text.txt';
    $wordsArray = splitter($file);
    $number = $_GET['number'];
    for($i = 1; $i <= $number; $i++) {
        $sent = $wordsArray[rand(0, count($wordsArray)-1)];
        $word = $sent[rand(0, count($sent) -1)];
        echo $i . ": " . $word. " ";
    }
}


function splitter($file)
{
    $text = file_get_contents($file);
    $text = str_replace(". ", "=|=", $text);
    $sentence = explode("=|=", trim($text));
    array_pop($sentence);
    $words = [];
    for($i = 0; $i < count($sentence); $i++) {
        $word = explode(" ", $sentence[$i]);
        $words[] = $word;
    }
    return $words;
}



//define('SIZE_LIST_CHAR', 25);
//define('MIN_SIZE_WORD', 1);
//define('MAX_SIZE_WORD', 10);
//
///**
// * @param int $countWords
// * @return string
// */
//function getText($countWords)
//{
//    $text = [];
//
//    for ($i = 0; $i < $countWords; $i++) {
//        $size = rand(MIN_SIZE_WORD, MAX_SIZE_WORD);
//        $word[] = createWord($size);
//    }
//
//    return implode(" ", $countWords);
//}
//
///**
// *
// * @param int $position
// * @return string
// */
//function getChar($position)
//{
//    $data = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
//        'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u',
//        'v', 'w', 'x', 'y', 'z'];
//
//    return $data[$position];
//}
//
///**
// *
// * @param string $size
// * @return string
// */
//function createWord($size)
//{
//    $word = "";
//
//    for ($i = 0; $i < $size; $i++) {
//        $word .= getChar(rand(0, SIZE_LIST_CHAR));
//    }
//
//    return $word;
//}
//
///**
// * @return null
// */
//function main()
//{
//    if (empty($_GET['number']) || $_GET['number'] < 1) {
//        return null;
//    }
//
//    getText((int)$_GET['number']);
//}