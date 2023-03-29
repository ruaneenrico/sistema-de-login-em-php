<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'ruanroot');
define('SENHA', 'neguinha12');
define('DB', 'localhostruan');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');