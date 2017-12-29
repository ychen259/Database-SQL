<?php
$link = mysqli_connect("oracle.cise.ufl.edu", "yuzhuo", "Aa947496", "orcl");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
//<?php
//    define('DB_HOST', 'localhost');
//    define('DB_USER', 'yuzhuo');
//    define('DB_PASS', 'Aa947496');
//    define('DB_NAME', 'oracle.cise.ufl.edu');

//    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("cannot connect");
//    $query = "INSERT INTO test VALUES ('test', 20)";
//    mysqli_query($dbc, $query);
//    echo DB_HOST;
  //$conn = oci_connect('yuzhuo', 'Aa947496', '//localhost/orcl');
 // if(!$conn){
   // $m = oci_error();
   // echo "fail";
    //exit;
 // }
 // else{
 //   print "connect to Oracle!";
 // }
  //oci_close($conn);
//?>