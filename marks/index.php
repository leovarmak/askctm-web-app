<style>
table {
    border-collapse: collapse;
}
table td {
    padding:10px;
    text-align:center;
}
.mnx td {
    background :orangered;
    color:white;
    border:1px solid black;
}
</style>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="roll_no" value="Enter roll number here" />
<input type="submit" name="submit" value="Get details" />
</form>

<?php
global $conn,$rollno;
require_once("db_connection.php");
require_once("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["roll_no"]) && validation($_POST["roll_no"]) == true) {

$rollno = strtoupper($_POST["roll_no"]);
table_gen("1st Year - 1st Sem","1_1",$conn,$rollno);

} else {
$msg="Sorry not existed...";
} 
?>