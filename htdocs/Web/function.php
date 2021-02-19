<?php
function seqq($val)
{
    while ($seq = pg_fetch_row($val)) {
        $val_new = $seq[0] - 1;
        echo "<p>function.php: значення послідовності= $seq[0] перепризначено new=$val_new<p>";
    }
    return $val_new;
}

function create_table2(
    $data,
    $border = 1,
    $cellpadding = 4,
    $cellspacing = 4
) {
    echo "<table class=\"created-table\" border=$border cellpadding=$cellpadding cellspacing=$cellspacing>";
    reset($data); // вказуємо початок
    $value = current($data);
    while ($value) {
        echo "<tr><td>$value</td></tr>\n";
        $value = next($data);
    }
    echo '</table>';
    echo 'Кількість параметрів:';
    echo func_num_args() . '<br>';
    $args = func_get_args();
    foreach ($args as $arg) {
        if (is_array($arg)) {
            echo implode(", ", $arg);
            echo '<br>';
        } else {
            echo $arg . '<br>';
        }
    }
}

function create_array($count_elems, $a = 0)
{
    $arr = array();
    for ($i = 0; $i < $count_elems; $i++) {
        $arr[$i] = mt_rand(1, $a + 10);
    }
    return $arr;
}

function out_array($arr)
{
    echo implode(", ", $arr);
    echo '<br>';
}

function out_array_with_index($arr)
{
    for ($i=0; $i < count($arr); $i++) { 
        echo "[$i] = ".$arr[$i].'<br>';
    }
}

function get_max_index($arr)
{
    $index = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ((gettype($arr[$i]) == "integer" || gettype($arr[$i]) == "double")
            && $arr[$index] < $arr[$i]
        ) {
            $index = $i;
        }
    }
    return $index;
}

function get_min_index($arr)
{
    $index = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ((gettype($arr[$i]) == "integer" || gettype($arr[$i]) == "double")
            && $arr[$index] > $arr[$i]
        ) {
            $index = $i;
        }
    }
    return $index;
}

function get_avg_index($arr)
{
    $avg = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ((gettype($arr[$i]) == "integer" || gettype($arr[$i]) == "double")) {
            $avg += $arr[$i];
        }
    }
    $avg /= count($arr);

    $temp = abs($arr[0] - $avg);
    $index = 0;

    for ($i = 1; $i < count($arr); $i++) {
        if ((gettype($arr[$i]) == "integer" || gettype($arr[$i]) == "double")
            && abs($arr[$i] - $avg) < $temp
        ) {
            $temp = abs($arr[$i] - $avg);
            $index = $i;
        }
    }

    return $index;
}

function power_all_elems(&$arr, $pow)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ((gettype($arr[$i]) == "integer" || gettype($arr[$i]) == "double")) {
            $arr[$i] *= $arr[$i];
        }
    }
}
