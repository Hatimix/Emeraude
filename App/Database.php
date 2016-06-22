<?php

$DB = new PDO('mysql:host=localhost;dbname=emeraude','root','');
$DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
