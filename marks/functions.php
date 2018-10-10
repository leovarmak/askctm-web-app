<?php
class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 


function table_gen($name,$sem,$conn,$rollno)
{
    
    echo "<center>".$name."</center><br/>";
    echo "<table>";
    echo "<tr class='mnx'>";

    $stmt = $conn->prepare("show columns from ".$sem);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt->fetchAll() as $k=>$v) { 
        echo "<td>".$v["Field"]."</td>";
    }
    echo "</tr>";
    try {
    $stmt = $conn->prepare("select * from ".$sem." where ID='".$rollno."'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
     }
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    echo "</table>";
}


function validation($rollno){
try {
$stmt = $conn->prepare("select id from 1_1 where ID='".$rollno."'"); 
$stmt->execute();
if ($res->fetchColumn() > 0) {
return true;
} else {
return false;
} 
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
} 
?>