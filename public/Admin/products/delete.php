<?php


if (!empty($_POST)) {
    require_once '../../../connec.php';

    $pdo = new \PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM products WHERE id = :id";
    $statement = $pdo->prepare($query);

    $statement->bindValue(':id', $_POST['id']);
    $statement->execute();

    header('Location: /Admin/products' );

}