<?php 

include __DIR__.'/../../../config/conection.php';

$id = $_GET["id"];
$delete_reservation = "DELETE FROM `reservation` WHERE id = $id";
$result = mysqli_query($connect, $delete_reservation);

if ($result) {
  header("Location: reservation.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}

?>