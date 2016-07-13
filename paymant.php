<?php
require_once("digui.php");
//贷款余额
$balance = 10000.00;

//贷款利率
$interrestRate = .0575;

//每月利息
$monthlyInterreset = $interrestRate / 12;

//贷款期限
$termLength = 5;

//每年支付次数
$paymentsPerYear = 12;

//付款迭代
$paymentNumber = 1;

//确定支付总次数
$totalPayments = $termLength * $paymentsPerYear;

//确认分期付款的利息部分
$inCalc = 1 + $interrestRate / $paymentsPerYear;

//确定定期付款
$periodicPayment = $balance * pow($inCalc,$totalPayments) * ($inCalc -1);

//每月还款额限制到小数点后两位
$periodicPayment = round($periodicPayment,2);

//创建表
echo "<table width='50%' align='center' border= '1' >";
echo "<tr>";
echo "<th> paymentNumber</th><th>Balance</th>";
echo "<th> payment </th> <th>Pricepal</th><th>Interrest</th>";

amorizationtable($paymentNumber, $periodicPayment, $balance, $monthlyInterreset);
echo "</table>"
?>