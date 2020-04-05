<?php

$css =  "../CSS/index_style.css";
$title = "Platforms";


require_once "../_header.php";?>


<?php require_once '../../../connec.php';

$pdo = new \PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM platforms";
$statement = $pdo -> query($query);
$platforms = $statement -> fetchAll(PDO::FETCH_ASSOC);
?>

<div class="table_platform_content">
    <h2>Gestion of Platforms</h2>

<table class="table">
    <thead>
    <tr class="table_content">
        <th>#</th>
        <th>Platforms</th>
        <th>Image</th>
        <th>Years</th>
        <th>Price</th>
        <th>Is Visible</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($platforms as $platform) { ?>
    <tr>
        <td><?= $platform['id'];?></td>
        <td><?= $platform['platforms'];?></td>
        <td><img src="<?= $platform['image'];?>" height="50" /></td>
        <td><?= $platform['years'];?></td>
        <td><?= $platform['price'];?></td>
        <td>
            <form method="POST" action="/Admin/platforms/toggle_visibility.php">
                <?php if ($platform['is_visible']) : ?>
                    <button name="visible" value="0">YES</button>
                <?php else : ?>
                    <button type="submit" name="visible" value="1">NO</button>
                <?php endif; ?>
                <input type="hidden" name="id" value="<?= $platform['id'];?>" >
            </form>
        </td>

        <td>
            <form method="POST" action="/Admin/platforms/delete.php">
                <input type="hidden" name="id" value="<?= $platform['id'];?>" >
                <input type="submit" class="red_button" value="X">
            </form>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<button type="submit"><a href="/Admin/platforms/create.php">Add platforms</a></button>

</div>
<?php require_once "../_footer.php";?>
