<html>
<body>

<?php 
     if(!empty($_POST['user']) && !empty($_POST['password'])){
     $user =  $_POST['user'];
     $password = $_POST['password'];
     //$query = mysql_query("select * from users where Username = '$user'");
     //if(mysql_num_rows($query) > 0){
     //   echo 'Username already exists';
     //}
     //else{
       //mysql_query("Insert into user(User, password) values ('$user',       //'$password')");
       //header("location")
     //}
   }

  header('Location: http://localhost/DB%20UI/main.html');
?><br>


</body>
</html>
