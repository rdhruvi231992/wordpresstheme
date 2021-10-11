<div id="chats"> <?php

    if($chat == "ChatOnline")
    {
    echo "hello";
}
else {
  echo "we are here to help";
}
    ?>



<form  action="index.php" method="post" class="form2">
  <input type="text" name="user" value="type msg">
</form>


<?php

  $user =$_POST[user];//live ChatOnline box
  echo "you:",$user;

  if ($user== "hello"||$user =="hi"||$user =="goodmorning") {
    echo "</br>";

    echo "</br>";
  echo "agent :","welcome to our live chat";
  echo "</br>";



  } elseif($user=="help"){
    echo "</br>";

    echo "</br>";
  echo "agent :","please tell us about ur issues more";
  echo "</br>";
  }else {
    echo "agent :","visit for more info";

  }

  $user1 = $_POST[user];
  if ($user1 == "internet") {
    echo "agent :","please visit our page for fixing internet issue";
    // code...
  } else {

    echo "agent :","visit for more info";
  }



?>
</div>
