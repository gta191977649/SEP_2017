<?php
  require_once("notify.php");
  
  $usrName;
  $pwd;
  $first_name;
  $last_name;
  $gender;
  $email;
  $type;



  
  if(isset($_POST["usr"]) || isset($_POST["pwd"]) || isset($_POST["gender"]) || isset($_POST["mail"]) || isset($_POST["type"]))
  {
    if(isset($_POST["usr"])) $usrName = $_POST["usr"];
    if(isset($_POST["pwd"])) $pwd = $_POST["pwd"];
    if(isset($_POST["firtname"])) $first_name  = $_POST["firtname"];
    if(isset($_POST["lastname"])) $last_name = $_POST["lastname"];
    if(isset($_POST["gender"])) $gender = $_POST["gender"];
    if(isset($_POST["mail"])) $email = $_POST["mail"];
    if(isset($_POST["type"])) $type = $_POST["type"];
  }
  else { // 当注册表单没有填入要求的东西时
    die("ERROR"); // 结束程序...
  }
  
  //debug
  //echo $user." : ".$pwd;
  //Gender判断
  if($gender)
  {
    switch ($_POST["gender"])
    {
      case "M":
      {
        $gender = 0;
        break;
      }
      case "F":
      {
        $gender = 1;
      }
      default://保密
      {
        $gender = "NULL";
        break;
      }

    }
  }
 

  
  require_once("UserController.php");
  require_once("user.php");
  $usrController = new UserController();
  if($usrController->isUserExist($usrName)) die("ERROR");

  $usr = new User();
 
  $usr->setUsername($usrName);
  $usr->setPassword($pwd);
  $usr->setName($first_name, $last_name);
  $usr->setGender($gender);
  $usr->setEmail($email);
  $usr->setType($type);

  


  $usrController->saveUser($usr);
  

  /*
  //保存 Session (登录信息)
  
  session_start();

  $_SESSION['login_user']= $uid;
  */
  //Redirect to home page
  //notify("Welcome, ".$user,"You have registed, you will be redirect to home.","../../home.php");
  

?>
