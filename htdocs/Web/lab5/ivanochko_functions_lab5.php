<?php
function task1()
{
    $arr = start_task();
    out_wrapped("Splited text:");
    out_wrapped(implode(", ", $arr), "p");

    out_wrapped("Sorted text:");
    // sort words
    sort($arr);
    out_wrapped(implode(", ", $arr), "p");
}
function task2()
{
    $arr = start_task();

    $counts = array();
    foreach ($arr as $word)
        if (array_key_exists($word, $counts))
            $counts[$word]++;
        else
            $counts[$word] = 1;

    arsort($counts);
    $i = 0;
    foreach ($counts as $word => $c) {
        if ($i == 3) break;
        echo "Слово";
        out_wrapped($word);
        echo " кількість повторень - $c. <br>";
        $i++;
    }
}
function task3()
{
    $arr = start_task();
    $max_length = 0;
    foreach ($arr as $word)
        if ($max_length < strlen($word))
            $max_length = strlen($word);

    foreach ($arr as $word)
        if ($max_length == strlen($word))
            out_wrapped("$word<br>");

    $max_length /= 2;
    echo "Max length word of the text:";
    out_wrapped("$max_length<br>");
}
function task4()
{
    $arr = start_task();
    foreach ($arr as $word) {
        if (stripos($word, 'і') === 0)
            echo "$word<br>";
    }
}
function task5()
{
    $file_text = open_and_read_file("files/ivanochko_text2.txt");
    $paragraphs = explode("&new-inline;", $file_text);
    $paragraph_to_out = rand(0, 4);
    out_wrapped($paragraphs[$paragraph_to_out], "p");
}


function start_task()
{
    $file_text = open_and_read_file("files/ivanochko_text.txt");
    // Out text from file
    out_wrapped("Readed text:");
    echo "<br>";

    out_wrapped($file_text, "pre");

    // get words from str
    $arr = str_get_words($file_text);

    return $arr;
}
