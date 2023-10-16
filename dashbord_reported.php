<?php
include('db/DbConnect.php');
//session_start();
$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['address'];
$d = $_POST['type'];
$e = $_POST['lat'];
$f = $_POST['lng'];
// query

$sql= "INSERT INTO 'colleges' ('id', 'name', 'address', 'type', 'lat', 'lng') VALUES (:a,:b,:c,:d,:e,:f,:i,:g,:h,now())";
$stmt = $conn->prepare($sql);
$stmt->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':i'=>$i,':g'=>$g,':h'=>$h))

// if($d){

//     echo("<br>Input data is succeed");

//     }else{

//     echo("<br>Input data is fail");
//     }





// $d->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
// {
// if($d){
//       header("location:report-offence.php?success=true");
//         }else{
//             header("location:report_offence.php?failed=true");
//         } 

//     }
?>