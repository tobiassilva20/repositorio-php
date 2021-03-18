<?php  
// Funções para datas

date_default_timezone_set('America/Brasilia');
//echo date('d/m/Y h:i:s');

// Formatação de datas para o banco de dados

//Date
$date = date('Y-m-d');

//Datetime
$dateTime = date('Y-m-d H:i:s');

echo "$date <br> $dateTime";
echo "<hr>";

// Time
$time = time();
echo date('d/m/Y', $time);
echo "<hr>";

//MKTime
$data_pagamento = mktime(13, 50, 05, 10, 02, 2020);
echo date('d/m/Y - H:i', $data_pagamento);

echo "<hr>";

//strtotime
$str_data = '2019-04-12 13:30:10';
$data = strtotime($str_data);
echo(date('d/m/Y H:i:s', $data));

?>