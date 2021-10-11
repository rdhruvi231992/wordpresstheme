

<div id="form1">
  <div id="h1"><b>My First calculator</b></div></br>
<form method="post" action="index.php" >
<input type="number" name="n1">
<input type="number" name="n2">
<input type="submit" name="+" value="+">
<input type="submit" name="-" value="-">
<input type="submit" name="*" value="*">
<input type="submit" name="/" value="/">
 </form>


  <?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$sum = $_POST["+"];
$sub = $_POST["-"];
$multy = $_POST["*"];
$div = $_POST["/"];



if($sum == "+")
{
  echo "your ans is :",$n1 + $n2;
}
elseif ($sub == "-")
 {
  echo $n1 - $n2;  // c//calculators



}
elseif ($div == "/"){
  echo $n1 / $n2;
}
elseif ($multy == "*") {
  echo $n1 * $n2;
}
else {
  echo "unvalid oprators";
}

   ?>
   </div>
