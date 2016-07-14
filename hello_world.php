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

$states = array(0=> "Alabama",1=> "Alaska",2=>"Wyoming");

echo $states[0];

$states1 = array("OH" => "ohio", "PA" => "pennsyvania", "NY" => "New York");

printf("<br/>");
echo $states1["OH"];
printf("<br>");

$states2 = array(
	"Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
	"Nebraska" => array("population" => "1,711,263", "captital" => "Omaha")
	);

echo $states2["Ohio"]["population"];

//php创建一个数组
$status3["中国"] = "china";
$status3["美国"] = "Amric";
$status3["日本"] = "Japan";
$status3["香港"] = "Hokong";
$status3["台湾"] = "Tianwan";
printf("<br/>");
echo $status3["台湾"];
echo $status3["香港"];

$languges = array("EN", "CH", "FN", "JAPA", "Dra");
$languges[0];
printf("<br/>");
printf("<br/>");
printf("<br/>");
echo $languges[0];
echo $languges[3];

$languges1 = array(
	"adf" => "ADF",
	"AD" => "ad",
	"ps" => "PS",
	"ypx" => "尹鹏孝"
	);
printf("<br>");
echo $languges1["ypx"];
//打开user.txt文件
/*$users = fopen("users.txt","r");


while( $line1 = fgets($users, 8182)){
	//用explode()分离数据段;
	list($name, $occupation, $color) = explode("|", $line1);

	//格式化输出
	printf("name: %s <br />", $name);

	printf("occupation: %s <br />", $occupation);

	printf("Favorate: %s <br />", $color);
}
fclose($users);*/
echo "</br>";
echo is_array($languges1);
echo "</br>";
$die = range(0, 30, 3);
forEach($die AS $d){
echo "{$d}<br/>";
}


echo "</br>";

$customers = array();
$customers[] = array("js", "css", "php");
$customers[] = array("maya", "ps", "AI");
$customers[] = array("ypx", "wp", "llg");

forEach($customers AS $customer){
	vprintf("<p>编成学科: %s<br/> 设计学科: %s <br/> 姓名: %s <br/></p>", $customer);

}

print_r($customers);
print_r($states2);

print_r($states1);
print_r($states);

echo("<br/>");
$s=array("A", "B", "C", "D", "E");
array_unshift($s,"尹鹏孝");
print_r($s);

echo "<br/>";
$ms = array(
	"ypx" => array("js"),
 	"wc" => array("php", "java"), 
 	"ljm" => array("maya", "ps"), 
 	"wp" => array("扯淡"));

array_unshift($ms,"班长");
print_r($ms);

$mg = array("good", "well", "yes", "match");
array_push($mg, "hello,everyone");
print_r($mg);

//shift删除数组
$del = array("good", "well");
array_shift($mg);

echo "<br/>";
print_r($mg);


//从数组末尾删除
array_pop($del);
echo "<br/>";
print_r($del);


echo "<br/>";
$opl = array("del", "pdiv", "dhje", "bv", "lop");

//索搜数组的特殊值
$br = in_array("1pdiv",$opl);
printf("{$br}");

$pol["dem"] = 12;
$pol["nov"] = 11;
$pol["OcO"] = 10;
//搜索关联数组的的键
if(!array_key_exists("OcO", $pol)){

	print_r($pol);
}else{
	print_r("none");
}
echo "<br/>";

//搜索关联数组的值
if(array_search(12, $pol)){
	print_r($pol);
}else{
	print_r("09");
}

echo "<br/>";
//获取数组的键
print_r(array_keys($pol));


//获取数组的值
echo "<br/>";
print_r(array_values($pol));


//遍历数组
//获取当前数组键key($pol)
echo "<br/>";
while($key = key($pol)){
	print_r($key);
	echo "<br/>";
	next($pol);
}
//获取当前数组值
$pol1["7"]="ste";
$pol1["6"]="step";
$pol1["5"]="may";
echo "<br/>";
while($key1 = current($pol1)){
	print_r($key1);
	echo "<br/>";
	next($pol1);
}

//同一个数组使用了next再次使用时将找不到在哪里所以不执行：如下：
/*echo "<br/>";
while($key1 = current($pol)){
	print_r($key1);
	echo "<br/>";
	next($pol);
}*/
$pol2 = array("adf" => "ADF",
	"AD" => "ad",
	"ps" => "PS",
	"ypx" => "尹鹏孝")
//print_r(each($pol2));



?>

