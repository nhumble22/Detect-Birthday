<?php


  //Set default date
  date_default_timezone_set('Europe/London');

  //Dog Object
  //Change the birthday of the dog to check
  $dog = (object) ['name' => 'Jesse',
                  'birthday' => '31-05-2018'];

  //Check if its a birthday
  function checkBirthday($obj) {
    if ($obj->birthday === date('d-m-Y')) {
      echo "It's a birthday!";
      //Do something
    } else {
      echo "It's not a birthday";
    }
  }


  echo "Dog Object: <br>";
  var_dump($dog);

  echo "Current Date: " . date('d-m-Y h:i a', time()) . "<br>";
  echo "Dog " . $dog->name . "'s Birthday: " . $dog->birthday . "<br><br>";

  echo "Is it the dogs birthday?<br>";
  checkBirthday($dog);


?>
