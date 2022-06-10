<?php

function remove_duplicate_words($word){

    // convert to array
    $wordList = explode(" ", $word);

    // remove duplicate words
    $uniqueOnly = array_unique($wordList);

    // convert array to sentence
    return $reArrange = implode(" ", $uniqueOnly);
}

echo remove_duplicate_words("hello hello world");

// echo "hello hello world"
// output: "hello world"