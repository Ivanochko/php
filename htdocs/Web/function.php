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

function out_array_with_index($arr, $end = 0)
{
    echo "<div class=\"array-out\">";
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            echo "[$key] = <br>";
            out_array_with_index($value, $end + 3);
            echo "<br>";
        } else {
            for ($i = 0; $i < $end; $i++) {
                echo "  ";
            }
            echo "[$key] = $value <br>";
        }
    }
    echo "</div>";
}

function out_reversed_array($arr)
{
    for ($i = count($arr) - 1; $i > -1; $i--) {
        echo $arr[$i] . ", ";
    }
    echo '<br>';
}

function out_reversed_array_with_index($arr)
{
    for ($i = count($arr) - 1; $i > -1; $i--) {
        echo "[$i] = " . $arr[$i] . '<br>';
    }
}

function out_matrix(
    $matrix,
    $border = 1,
    $cellpadding = 3,
    $cellspacing = 3
) {
    echo "<table class=\"created-table\" border=$border cellpadding=$cellpadding cellspacing=$cellspacing>";
    foreach ($matrix as $i) {
        echo '<tr>';
        foreach ($i as $j) {
            echo '<td>' . $j . '</td>';
        }
        echo '</tr>'; 
    }
    echo '</table>' . '<br>';
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

function get_avg($arr)
{
    $avg = 0;
    foreach ($arr as $i) {
        if ((gettype($i) == "integer" || gettype($i) == "double")) {
            $avg += $i;
        }
    }
    $avg /= count($arr);
    return $avg;
}

function power_all_elems(&$arr, $pow)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ((gettype($arr[$i]) == "integer" || gettype($arr[$i]) == "double")) {
            $arr[$i] *= $arr[$i];
        }
    }
}

function get_last_vals_of_matrix($matrix)
{
    $arr = array();
    $size = count($matrix);
    for ($i = 0; $i < $size; $i++) {
        $arr[$i] = $matrix[$i][$size - 1];
    }
    return $arr;
}

function get_min_vals_of_matrix($matrix)
{
    $arr = array();
    foreach ($matrix as $i) {
        array_push($arr, $i[get_min_index($i)]);
    }
    return $arr;
}

function task6($N)
{
    $arr = array();
    for ($i = 0; $i < $N; $i++) {
        $arr[$i] = pow(($i + 1), 2);
    }

    out_array_with_index($arr);
}

function out_foreach_in_table($arr)
{

    echo "<table class=\"table-generated-data table-countries\">";
    echo "<tr class=\"table-header\"><th>Name</th><th>Capital</th><th>Population</th></tr>";
    $i = 0;
    foreach ($arr as $country => $data) {
        if ($i % 2) {
            echo "<tr class=\"odd\">";
        } else {
            echo "<tr class=\"even\">";
        }
        $i++;
        foreach ($data as $value) {
            echo "<td>";
            echo "$value";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}

function out_foreach_tences($arr)
{
    foreach ($arr as $country => $data) {
        echo "<p> Столиця ";
        echo get_name($data['name']);
        echo " - " . $data['capital'];
        echo ", населення - " . $data['population'] . " млн. людей! </p>";
    }
}

function get_name($name)
{
    $letters = preg_split('//u', $name, -1, PREG_SPLIT_NO_EMPTY);
    switch ($letters[count($letters) - 1]) {
        case 'а':
            return substr($name, 0, -2) . "и";
            break;
        case 'я':
            return substr($name, 0, -2) . "ї";
            break;
        case 'і':
            return substr($name, 0, -2) . "і";
            break;
        case 'ь':
            return substr($name, 0, -2) . "і";
            break;
        default:
            return substr($name, 0, -2) . "у";
            break;
    }
}
function swap_key_value_in_array(&$array)
{
    $new = array();
    foreach ($array as $key => $value)
        $new[$value] = $key;
    $array = $new;
}
