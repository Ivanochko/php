<?php
function seqq($val) {
    while ($seq=pg_fetch_row($val)){
    $val_new=$seq[0]-1;
    echo "<p>function.php: значення послідовності= $seq[0] перепризначено new=$val_new<p>";
        }
return $val_new;

    }

?>
