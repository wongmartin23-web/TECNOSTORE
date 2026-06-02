<?php

session_start();

$_SESSION = [];

session_destroy();

echo "Sesión eliminada";