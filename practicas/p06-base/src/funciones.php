<?php

function es_multiplo7y5($num){

if ($num %5 == 0 && $num%7 == 0)
{
    echo '<h3>R= El numero ' .$num.' SI es multiplo de 5 y 7';
}
else
{
    echo '<h3>R= El numero ' .$num.' NO es multiplo de 5 y 7';
}

}

?>