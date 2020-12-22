<?php
$db = mysqli_connect("localhost","root","","prison");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
Echo $firstname;

$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
Echo $lastname;

$email = mysqli_real_escape_string($db, $_POST['email']);
Echo $email;

$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
Echo $phonenumber;


$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
Echo $password_1;

$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
Echo $password_2;

/*$sql="INSERT INTO login (firstname) VALUES ('sandeep')";

if (!mysqli_query($db, $sql)) {
  printf("%d Row inserted.\n", mysqli_affected_rows($db));
}
*/
$sql="INSERT INTO login (firstname, lastname, email, phonenumber, password_1, password_2) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password_1', '$password_2')";

if (!mysqli_query($db, $sql)) {
  printf("%d Row inserted.\n", mysqli_affected_rows($db));
  
}

mysqli_close($db);
?>