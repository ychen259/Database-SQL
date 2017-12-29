<html>
<body>

<?php
     if(empty($_POST['username'])){
          $message = "Please provide username";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>setTimeout(\"location.href = 'http://localhost/DB%20UI/Register.html';\",0);</script>";
     }
     elseif(empty($_POST['password'])){
          $message = "Please provide password";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>setTimeout(\"location.href = 'http://localhost/DB%20UI/Register.html';\",0);</script>";
     }
     elseif(empty($_POST['password_again'])){
          $message = "Please provide password again";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>setTimeout(\"location.href = 'http://localhost/DB%20UI/Register.html';\",0);</script>";
     }
     elseif(empty($_POST['first_name'])){
          $message = "Please provide first name";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>setTimeout(\"location.href = 'http://localhost/DB%20UI/Register.html';\",0);</script>";
     }
     elseif(empty($_POST['last_name'])){
          $message = "Please provide last name";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>setTimeout(\"location.href = 'http://localhost/DB%20UI/Register.html';\",0);</script>";
     }
     elseif(empty($_POST['email'])){
          $message = "Please provide Email";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>setTimeout(\"location.href = 'http://localhost/DB%20UI/Register.html';\",0);</script>";
     }
     else{
  	  if ($_POST["password"] != $_POST["password_again"]){
          $message = "Password that you provide doesn\'t match. \\nTry again.";
          echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>setTimeout(\"location.href = 'http://localhost/DB%20UI/Register.html';\",0);</script>";
         }
  	 else{
  ///	   $user =  $_POST['username'];
    //	 $password = $_POST['password'];
    	 header('Location: http://localhost/DB%20UI/main.html');
 	  }
     //$query = mysql_query("select * from users where Username = '$user'", $db) or //die//(mysql_error());
     //if(mysql_num_rows($query) > 0){
     //   echo 'Username already exists';
     //}
     //else{
       //mysql_query("Insert into user(User, password) values ('$user','$password')");
       //header("location")
     //}
     }

  //verify in user account table
  //header('Location: http://localhost/DB%20UI/Website.html');
?><br>


</body>
</html>
