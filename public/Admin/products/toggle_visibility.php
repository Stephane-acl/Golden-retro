<?php


if (!empty($_POST)) {
    require_once '../../../connec.php';

    $pdo = new \PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE products SET is_visible = :visible WHERE id = :id";
    $statement = $pdo->prepare($query);

    $statement->bindValue(':id', $_POST['id']);
    $statement->bindValue(':visible', $_POST['visible']);
    $statement->execute();

    header('Location: /Admin/products' );

}