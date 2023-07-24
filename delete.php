<?php

require "database.php";
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    return;
}

$id = $_GET["id"];
$statement = $connection->prepare("SELECT * FROM contacts WHERE id = :id LIMIT 1");
$statement->bindParam(":id", $id);
$statement->execute();
if ($statement->rowCount() == 0) {
    http_response_code(404);
    echo "HTTP 404 NOT FOUND";
    return;
}
$contact = $statement->fetch(PDO::FETCH_ASSOC);
if ($contact["user_id"] != $_SESSION["user"]["id"]) {
    http_response_code(403);
    echo "HTTP 403 UNAUTHORIZED";
    return;
}

$statement = $connection->prepare("DELETE FROM contacts WHERE id = :id");
$statement->bindParam(":id", $id);
$statement->execute();
$_SESSION["flash"] = ["message" => "Contact {$_POST['name']} deleted successfully"];
header("Location: home.php");
return;
