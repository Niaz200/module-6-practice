<?php 

/*

//code1:

$hostname = '192.168.0.101';
$username = 'root';
$password = '';
$database = 'ostad_mod_6';

$mysqli = new mysqli($hostname, $username, $password, $database);



echo "connected";

echo "<br><br>";

$sql = "SELECT * FROM ACCOUNT";

$result = $mysqli->query($sql);

echo 'Number of rows: '.$result->num_rows;
echo "<br><br>";

*/


/*
//code2:

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ostad_mod_6';

$mysqli = new mysqli($hostname, $username, $password, $database);



echo "connected";

echo "<br><br>";

$sql = "SELECT * FROM ACCOUNT";

$result = $mysqli->query($sql);

echo 'Number of rows: '.$result->num_rows;
echo "<br><br>";

// while($row = $result->fetch_row()){
// while($row = $result->fetch_assoc()){
while($row = $result->fetch_array()){
    // var_dump($row);
    // echo $row[0];
    // echo "<br>";
    // echo $row[1];

    echo $row['ACCOUNT_ID'];
    echo "<br>";
    echo $row['AVAIL_BALANCE'];
    echo "<br><br>";
}

*/

//code3:

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ostad_mod_6';

$mysqli = new mysqli($hostname, $username, $password, $database);

if($mysqli->connect_error){
    echo "Field";
}else{
    
echo "connected";

echo "<br><br>";

$sql = "SELECT * FROM ACCOUNT";

$result = $mysqli->query($sql);

echo 'Number of rows: '.$result->num_rows;
echo "<br><br>";

// while($row = $result->fetch_row()){
// while($row = $result->fetch_assoc()){
while($row = $result->fetch_array()){
    // var_dump($row);
    // echo $row[0];
    // echo "<br>";
    // echo $row[1];

    echo $row['ACCOUNT_ID'];
    echo "<br>";
    echo $row['AVAIL_BALANCE'];
    echo "<br><br>";
}

}

$mysqli->close();

?>