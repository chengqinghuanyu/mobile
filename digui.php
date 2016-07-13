<?php
function amorizationtable($pNum, $periodicPayment, $balance, $monthlyInterrest){
	//计算支付利息
	$paymentInterrest = round($balance * $monthlyInterrest, 2);

	//计算还款额
	$paymentPrincipal = round($periodicPayment - $paymentInterrest, 2);

	//用余额减去还款额
	$newBalance = round($balance - $paymentPrincipal, 2);

	//如果余额<每月还款，设置为0
	if($newBalance < $paymentPrincipal){

		$newBalance = 0;
	}

	printf("<tr><td>%d</td>",$pNum);
	printf("<td>$%s</td>",number_format($newBalance, 2));
	printf("<td>$%s</td>",number_format($periodicPayment, 2));
	printf("<td>$%s</td>",number_format($paymentPrincipal, 2));
	printf("<td>$%s</td></tr>",number_format($paymentInterrest, 2));

	if($newBalance > 0){

		$pNum++;
		amorizationtable($pNum, $periodicPayment, $newBalance, $monthlyInterrest);
	}else{
		return 0;
	}


}

?>