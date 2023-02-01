<?php

$value = $_POST['annee'];

function age($value)
{
    if ($value > 18) {
        echo "vous etes habilite a voter";
    } else {
        echo "vous n'avez pas le droit de vote";
    }
}
age($value);