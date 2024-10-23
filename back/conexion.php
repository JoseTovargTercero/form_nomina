<?php
function connect()
{
    return new mysqli("localhost", "root", "", "caracterizacion");
}

$db = connect();
