<?php 



/* 
//$var is integer now
$var = 2;

//$var is string now
$var = "John";
*/


/* 
if(is_null($variable)){
	echo "Empty!";
}
*/


/* 
$var = "7.256";

$var = (float)$var;
*/



/* 
$elements = [
	"name" => "John",
	"age" => 22,
	"salary" => 500
];
*/



/* 
const VEHICLE = "Auto";
define("CITY","New York"); 

//Ok!
if(defined("VEHICLE")){
	echo "Ok!";
}

//Ok!
if(defined("CITY")){
	echo "Ok!";
}
*/



/* 
$line_1 = __LINE__;
echo $line_1;

$line_2 = __LINE__;
echo $line_2;
*/


/* 
$file_with_path = __FILE__;

// C:\Users\Lenovo\xampp\htdocs\index.php
echo $file_with_path; 
*/


/* 
$variable = 2;
$x = "variable";
$y = $$x;
echo $y;
*/


/* 
//going to work
if(print "a string"){
	
}

//error
if(echo "a string"){

} 
*/



/* 
$x = 2;
$y = 2;

// 2
echo $x++;

// 3
echo ++$y;
*/



/* 
$x = true;
$y = true;

//Ok!
if($x or $y){
	echo "Ok!";
}

//Nothing happens
if($x xor $y){
	echo "Ok!";
}
*/



/* 
$a = 2;
$b = 3;

// first solution
if($a>$b){
	print "Bigger";
} else {
	print "Smaller";
}

// second, the much better
$a>$b ? print("Bigger") : print("Smaller");
*/



/* 
//nothing happens
$i = 7; 
while($i<5){
	echo $i;
	$i++;
}

// writes "7"
$i = 7; 
do{
	echo $i;
	$i++;
} while($i<5);
*/



/* 
$elements = ["name" => "John","age" => 22,"salary" => 500];

//working properly
foreach($elements as $key => $value){
	echo $key. " ". $value;
}

// not working at all
for($i=0;$i<count($elements);$i++){
	echo $elements[$i];
}
*/



/* 
function addNums($x,$y){
	return $x + $y;
}

echo ADDNUMS(2,3);
*/




/* 
class Person{

}

function setProperty($x){
	$x->name = "Andrea";
	return $x;
}

$andrea = new Person;

setProperty($andrea);

print_r($andrea);
*/



/* 
function someFunc(int $arg, string $arg2){
	return print $arg." ".$arg2;
}

// going to run
echo someFunc(2, "sds");
*/	



/* 
function someFunc($arg) : int{
	return $arg;
}
*/


/* 
function someFunc(int $arg) : bool{
	return $arg;
}

var_dump(someFunc(2));
*/


/* 
function myFunc(Auto $arg){
	return $arg;
}
*/


/* 
function myFunction() { 
	static $var = 0; 
	$var++; 

	return $var; 
} 
*/


/* 
$arg = 6;

function myFunction(){
	global $arg;
	return $arg;
}

//6
echo myFunction();

$GLOBALS['arg'] = 7;

function myFunctionWithSuperglobal(){
	return $GLOBALS['arg'];
}

//7
echo myFunctionWithSuperglobal();
*/



/*
$min = 3;
$elements = [2,3,4,5,6];

$result = array_filter($elements, function($el) use ($min){ 
	return $el > $min; 
});

//4, 5, 6
print_r($result);
*/


/* 
$array = ["dog","giraffe","cat"];
*/


/* 
$arr_1 = [
	"name" => "John",
	"hobby" => "biking",
	"salary" => 500,
];

$arr_2 = [
	"name" => "John",
	"hobby" => "riding",
	"born" => 1995,
];

$result=array_diff($arr_1,$arr_2);
*/





/* 
$array = explode(', ',"John, Peter, Andras");

//Array ( [0] => John [1] => Peter [2] => Andras )
print_r($array);
*/





/* 
$elements = ["mango","apple","orange"];

//3
echo sizeof($elements);

//3
echo count($elements);
*/



/* 
$elements = ["banana","mango","apple"];
array_pop($elements);

// Array ( [0] => banana [1] => mango )
print_r($elements);
*/


/* 
$elements = [
	"name" => "John",
	"age" => 22,
	"degree_year" => 22,
	"salary" => 5000
];

// Array ( [name] => John [age] => 22 [salary] => 5000 )
print_r(array_unique($elements));
*/


/* 
$string = "this is a string";

//This is a string
echo ucfirst($string);

//This Is A String
echo ucwords($string);
*/


/* 
include('test.php');

// is going to run
echo "This is running!";

require('test.php');

// is not going to run
echo "This is running!";
*/


/* 
header("Location: https://google.com");
*/



/* 
//hour, minute, second, month, day, year
$date = mktime(14, 30, 0, 6, 11, 2028);

//1844339400
echo var_dump($date);
*/


/* 
//year-month-day
echo "The date is now: ". date("Y-m-d");


$date = mktime(14, 30, 0, 6, 11, 2028);

//2028-06-11
echo date("Y-m-d",$date);
*/

/* 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<input type="text" name="name" placeholder="name">
	<input type="submit" value="Send!">
</form>
*/

/* 
$string_from_db = "What the shirt\'s color?";

//"What the shirt's color?" - this is the format that you would like to show the users.
echo stripslashes($string_from_db);
*/


/* 
if(!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z?%!@|#>$]{6,30}$/', $password)) {
    echo 'the password is not OK!';
} else {
	echo 'the password is OK!';
}
*/


/* 
class Auto{
	public static $total_count = 200;
}

echo Auto::$total_count;
*/



/* 
ini_set('display_errors', '0');

//not throwing an error
echo $variable;
*/


/* 
$elements = ["el1","el2","el3"];

//Notice error
echo $elements;

//Warning error
echo PERSON;

//Fatal error
$instance = new Vehicle;
*/


/* 
$elements = ["el1","el2","el3"];

//Notice error
echo $elements;

//Warning error
echo PERSON;

//Fatal error
$instance = new Vehicle;
*/


/* 
class A
{
	//bad
	var $prop_1 = 2;

	//ideal
	public $prop_2 = 4;
}
*/


/* 
// good
class Vehicle {

}

// bad
class vehicle {

}
*/

