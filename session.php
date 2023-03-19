<?php
    session_start();
    echo $_SESSION['data'][] = $_POST['tambah'].' = '.md5($_POST['tambah']);
?>