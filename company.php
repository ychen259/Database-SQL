<html>
<body>
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
<!****************************************************************************>
<?php

 if(empty($_POST['symbol']) ){
    header('Location: http://localhost/DB%20UI/company.html');
 }
 else{
    $symbol = $_POST['symbol'];
    $company = "Company Name";
    $exchange = "Stock Market";
    $country = "country";
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
  <li><a href="http://localhost/DB%20UI/return.html">Net Return on Investment</a></li>
  <li><a href="http://localhost/DB%20UI/riskstock.html">Risk Stock</a></li>
  <li><a href="http://localhost/DB%20UI/stablestock.html">Stable Stock</a></li>
  <li><a href="http://localhost/DB%20UI/highestvolume.html">Highest Volume Date</a></li>
  <li><a href="http://localhost/DB%20UI/company.html">Stock Company Info</a></li>
</ul>

<div id="section">
<form action="http://localhost/DB%20UI/return.html" method ="post">
<font color = "white">
Company symbol:<br>
<input type="text" value='<?php echo "$symbol"; ?>'/> <br>
Comapny :<br> 
<input type="text" value='<?php echo "$company"; ?>'/> <br>
Stock Market: <br>
<input type="text" value='<?php echo "$exchange"; ?>'/> <br>
Country: <br>
<input type="text" value='<?php echo "$country"; ?>'/> <br>
<br><br>
<input type="submit" value="Try again">
</form> 
</div>

</body>
</html>
