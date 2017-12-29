<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-image: url("https://s-media-cache-ak0.pinimg.com/originals/20/e9/95/20e995b3230740e1051c509c12a01f3d.jpg");
    background-size: 1600px 800px;
    background-repeat: no-repeat;
}
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:10px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: lightblue;
}

li {
    float: right;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: white;
}
#section {
    width:350px;
    padding:10px;
    position: absolute;
    left: 700px;	
    top: 250px; 	 
}
#out{
    position: absolute;
    right: 20px;
}
</style>
</head>
<body>

<!****************************************************************************>
<?php

 if(empty($_POST['symbol']) ){
    header('Location: http://localhost/DB%20UI/strategy.html');
 }
 else if(empty($_POST['start_date']) ){
    header('Location: http://localhost/DB%20UI/strategy.html');
 }
 else if(empty($_POST['end_date']) ){
    header('Location: http://localhost/DB%20UI/strategy.html');
 }
 else if(empty($_POST['volume']) ){
    header('Location: http://localhost/DB%20UI/strategy.html');
 }
 else{
    $symbol = $_POST['symbol'];
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];
    $volume = $_POST['volume'];
    $balance = "balance need to talk to DB";
 }
?>
<!****************************************************************************>

<div id="header">
<h1>Stock</h1>
</div>

<div id = "out">
<a href="http://localhost/DB%20UI/login.html"><strong>Log out </strong></a>
</div>

<ul>
  <li><a href="http://localhost/DB%20UI/main.html"><strong style="font-size:20px">Main</strong></a></li>  
</ul>

<div id="section">
<form action="http://localhost/DB%20UI/strategy.html" method ="post">

<font color = "white">
Company Ticker:<br>
<input type="text" value='<?php echo "$symbol"; ?>'/> <br>
Start date:<br> 
<input type="date" value='<?php echo "$start"; ?>' /> <br>
End date:<br> 
<input type="date" value='<?php echo "$end"; ?>'/> <br>
Volume:<br> 
<input type="number" value='<?php echo "$volume"; ?>'/>  <br>
Balance:<br> 
<input type="text" value='<?php echo "$balance"; ?>'/>  <br>
<br><br>
<input type="submit" value="Try again">

</form> 
</div>

</body>
</html>
