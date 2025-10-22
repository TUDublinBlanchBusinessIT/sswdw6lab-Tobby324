<?php

include 'dbcon.php';


$patientID= $_POST['ptntid'];
$visitDate = $_POST['visitDate'];
$doctorID = $_POST['docid'];
$visitTime = $_POST['visitTime'];


$sql = "INSERT INTO Visit (PatientID, DoctorID, VisitDate, visitTime)
        VALUES ('$patientID','$doctorID','$visitDate','$visitTime')";

echo $sql;
mysqli_query($conn, $sql)
?>
  