<?php

if ($_POST['token'] === md5('senha')){
    var_dump($_POST);
}