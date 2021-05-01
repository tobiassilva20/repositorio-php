<?php
require_once '../../config.php';

$id = $_GET['id'];
try {//code...
    App\Model\PessoaDao::delete($id);
} catch (\Throwable $th) {
    //throw $th;
}finally{
    header('Location: ../../index.php');
}