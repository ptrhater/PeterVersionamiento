<?php  

$a = array(    
    1 => Suma,
    2 => Resta,
    3 => Multiplicacion,
    4 => Division
   );

foreach ( $a as $key => $value)
    {
    echo "<select type='combobox' from ='$a'>" .$value. "</select>";
}


?>