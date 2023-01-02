<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// tablica z id produktów zamówionych
$cart = $_SESSION['cart'];
//$firstName = $_REQUEST['firstName'];
//$lastName = $_REQUEST['lastName'];
//$address = $_REQUEST['address'];
//$phone = $_REQUEST['phone'];
require_once "connect.php";
$db = @new mysqli($host, $db_user, $db_password, $db_name);
// skrypt wkładania do bazy danych osobowych zamawiającego

//$q = $db->prepare("INSERT INTO zamowienie VALUES (NULL, ?, ?, ?, ?)");
//$q->bind_param('ssss', $firstName,$lastName,$address,$phone);
//$q->execute();

// skrypt wkładania do bazy zamówionych produktów
$klientid = $_SESSION['id']; 

$q = $db->prepare("INSERT INTO klientProdukt VALUES (NULL, ?, ?)");

foreach($cart as $produktid) {
     $q->bind_param('ii', $klientid, $produktid);
     $q->execute();
//echo "its work!";

}


?>
</body>
</html>