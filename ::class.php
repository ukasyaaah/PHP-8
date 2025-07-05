<?php

class Login {}
$login = new Login();

// Cara utk mendapatkan class
var_dump($login::class);
var_dump(get_class($login));
var_dump(Login::class);
