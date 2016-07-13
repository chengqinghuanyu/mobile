<?php
header("Content-type:text/html;charset=utf-8"); //不要有空格，这里的输出
//echo "你好世界！";
$total = 5;
$count = "15";
$total += $count;
//echo $total;

$totl1 = "45 fire engines";
$incoming = 20;
$total2 = $incoming + $totl1;

//echo $total2;
if($total2){
//echo "we are family！";
}

$vall = "1.2e3";
$val2 = 2;
//echo $val2 * $vall; 
$item = 43;
/*printf(is_array($item));
printf(is_integer($item));
printf(is_numeric($item));*/
$a = "good";
$b =& $a;
$b = "well";
//echo $a;

$x = 4;
function assigin() {
	$x = 0;
	printf("\$x inside function is %d <br>",$x);

}

assigin();

printf("\$x inside function is %d <br>",$x);

function x10($value){
	$value = $value * 10;
	return printf("\$value inside function is %d <br>",$value);
}
x10(100);


$somevar = 15;
function addlist(){

	global $somevar;
	$somevar++;
	echo "\$somevar is $somevar";
}
addlist();


STATIC $somevar;
function keep_track(){
	static $count = 0;
	$count++;
	echo "<br />";
	echo $count;
	echo "<br />";
}
keep_track();
keep_track();
keep_track();

/*forEach($_SERVER as $var => $value){
	echo "$var => $value <br />";
}*/

/*printf($_SERVER['REMOTE_ADDR']);
printf($_SERVER['HTTP_USER_AGENT']);*/


/*$_POST['email'] = 'jason@example.com';
$_POST['pswd'] = 'rainday';
$_POST['subscribe'] = 'subscribe';*/
/*ss*/


//主机域名
/*$_ENV['HOSTNAME'];
$_EVN['SHELL'];*/

/*$recipe = "spaghtti";
$$recipe = "& meatballs";*/

//echo $recipe $spaghtti;
//echo $recipe ${$recipe};
/*define("PI",3.1415926);

printf('fff %f',PI);
$pi2 = 2*PI;
printf('fff %f',$pi2);

$sport = "boxing";
echo "Jason's favorite sport is $sport";

$output = "This is one line.\nAnd this is another line.";
echo $output;

//echo "The capital of Ohio is {$captitals['ohio']}";


echo <<< mingPian
<div style="background:rgba(0,0,0,0.4);color:#fff;line-height:100px;height:100px;padding-left:100px;font-size:30px;">hello,heredoc语法</div>
mingPian*/



/*$count=1;
while($count < 5){
	printf("%d sq = %d <br>",$count,pow($count, 2));
	$count++;
}*/

$line = 1;
$fh = fopen("sports.txt","r");
while(!feof($fh) && $line<=5){
	$line = fgets($fh,4096);
	echo $line. "<br />";
	$line;
}

$counts = 11;
do{
	printf("%d qs = %d",$counts,pow($counts,3));

}while($counts<10);


$links = array("www.apress.com","www.php.net","www.baidu.com");
echo "<br> Online Resours<br/> :<br/>";
foreach($links as $link){
	echo "<a href=\"http://$link\">$link</a><br/>";
}

$primes = array(2,3,4,5,7,11,17,19,23,29,31,37,41,43,47);
for($countq = 1;$countq++;$countq < 1000){
	$randomNumber = rand(1,50);
	if(in_array($randomNumber,$primes)){
		break;
	}else{
		printf("Non-prime number found: %d <br/>",$randomNumber);
	}
}

if(1){
	echo "php";
	include("error.php");
	include("error.php");
}else{
	include_once("error.php");
	include_once("error.php");
}


printf("<br/>");
$value = pow(5,3);
echo $value;

printf("<br/>");
echo pow(5,3);

printf("<br/>");

function generaterFooter(){
	echo "Copyright 2010 尹鹏孝";
}
generaterFooter();


printf("<br/>");
function calcSalesTax($price,$tax){
	$total = $price+$price*$tax;
	echo "Total cost is :$total";
}


$pricingtag = 15.00;
$salestax = .75;
calcSalesTax($pricingtag, $salestax);

$cost = 20.5;
$tax = 0.0575;
function calculateCost(&$cost, $tax){
	$cost = $cost + $cost*$tax;
	$tax += 4;
}
calculateCost($cost, $tax);
printf("Tax is %01.2f%%", $tax*100);

printf("Tax is $%01.2f", $cost);


function calculateSalesTax($price, $tax=.0675){
	$total = $price + ($price * $tax);
	echo "Total cost :$total";
}
$price = 15.47;
calculateSalesTax($price);

function calculateSalesTax1($price, $tax=""){
	$total = $price + ($price * $tax);
	echo "Total cost :$total";
}
calculateSalesTax1(42);
printf("<br/>");
function calculate($price, $price2="",$price3=""){
	echo $price + $price2 + $price3;
}

calculate(10, "", 3);


$colors = array("red","yellow","blue", "green");

list($red, $blue, $green ) = $colors;

function retrivceUserProfile(){
	$user[] = "json Gilmore";
	$user[] = "jason@bai.com";
	$user[] = "enghlsh";
	return $user;

}
list($name, $email, $languge) = retrivceUserProfile();
echo "name:$name, emile:$email, language:$languge";
?>
