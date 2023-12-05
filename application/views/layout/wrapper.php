<?php
// Proteksi halaman
$this->check_login->cek_login();

// Menggabungkan seluruh bagian layout
require_once('head.php');
require_once('header.php');
require_once('menu.php');
require_once('content.php');
require_once('footer.php');