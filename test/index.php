<?php
session_start();
echo "hello world";

$function = function(){return 1;};
echo get_class($function);

$w = "hello";

echo '$w, world';

echo "<br/>";

$a = 1;
++$a;
$a *= $a;
echo $a;
echo $a--;
echo "<br/>";
function changeV($n)
{
  $n = $n+5;
}
$n=20;
changeV($n);
echo $n;

echo "<br/>";



class Foo
{
  protected $a;

  public function __construct()
  {
    $this->a = 1;
  }

  public static function getSomething()
  {
    return $this->a *5;
  }
}

//Foo::getSomething();

$a = "0";

var_dump(isset($a));
var_dump(empty($a));
var_dump(is_null($a));

$str = "ELEMENTARY";
$arr = str_split($str);

echo implode(array_filter($arr, function($item)
{
  return $item === "E";
}));
echo "<br/>";

$count = 0;

$_SESSION['K1'] = 2;
$_SESSION['K2'] = 4;

session_destroy();

echo count($_SESSION);



var_dump($_SESSION);

echo "**<br/>";

$x = 3;

if (++$x > 3 ) {
  echo "dosomething";
}

echo $x;

$x--;

echo $x;

?>

<script>
  /*
  console.log(typeof a);
  console.log(typeof a);

  function a() {};

  var b = function(){};
  */
  function f(x){
    x += 1;
  }

  var a;
  var b = 1;
  var c = {value: 2};
  var d = c;

  f(a);
  f(b);

  console.log(a,b,c.value);

  function foo()
  {
    var x = 3;
  }
foo();

console.log ('1' ===1 );
console.log (false =='' );
console.log ('abc' == 'abc' );
console.log ([1,2,3] == [1,2,3] );

var a = ['apple','pear', 'coconut']
console.log(a.slice())

var b = a

var c = a.slice();
a.push('date');
console.log(c);

var y = 4
y++
++y
console.log(y)

var person = {firstName: "joe", lastName: "Doe"}

var personClone = JSON.parse(JSON.stringify(person));

console.log(personClone)
console.log (person.firstName === personClone.firstName)
</script>
<div id='ab'>aaa</div>
