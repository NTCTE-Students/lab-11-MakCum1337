<?php
$datePattern = "/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[0-2])\.(\d{4})$/";
$date = "29.02.2023"; //дата
$isValidDate = preg_match($datePattern, $date);
echo 'Дата ' . ($isValidDate ? 'правильная' : 'неправильная') . '<br>';
?>