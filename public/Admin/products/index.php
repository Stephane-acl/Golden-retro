<?php

$css =  "../CSS/index_style.css";
$title = "Products";


require_once "../_header.php";?>


<?php require_once '../../../connec.php';

$pdo = new \PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM products";
$statement = $pdo -> query($query);
$products = $statement -> fetchAll(PDO::FETCH_ASSOC);
?>

<div class="table_platform_content">
    <h2>Gestion of Products</h2>

    <table class="table">
        <thead>
        <tr class="table_content">
            <th>#</th>
            <th>Products</th>
            <th>Image</th>
            <th>Years</th>
            <th>Price</th>
            <th>Is Visible</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?= $product['id'];?></td>
                <td><?= $product['products'];?></td>
                <td><img src="<?= $product['image'];?>" height="50" /></td>
                <td><?= $product['years'];?></td>
                <td><?= $product['price'];?></td>
                <td>
                    <form method="POST" action="/Admin/products/toggle_visibility.php">
                        <?php if ($product['is_visible']) : ?>
                            <button name="visible" value="0">YES</button>
                        <?php else : ?>
                            <button type="submit" name="visible" value="1">NO</button>
                        <?php endif; ?>
                        <input type="hidden" name="id" value="<?= $product['id'];?>" >
                    </form>
                </td>

                <td>
                    <form method="POST" action="/Admin/products/delete.php">
                        <input type="hidden" name="id" value="<?= $product['id'];?>" >
                        <input type="submit" class="red_button" value="X">
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <button type="submit"><a href="/Admin/products/create.php">Add products</a></button>

</div>
<?php require_once "../_footer.php";?>


