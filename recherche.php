<?php

if(isset($_GET['q'])){
    echo $_GET['q'];
} else {
    echo "il n'y a pas de recherche";
}