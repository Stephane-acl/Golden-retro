<?php $errors = [];
$platforms = $image = $years = $price = $isVisible = "";

if (!empty($_POST)) {


$platforms = trim($_POST['platforms']);
$image = trim($_POST['image']);
$years = intval($_POST['years']);
$price= floatval($_POST['price']);
$isVisible = isset($_POST['isVisible']) ? 1 : 0;

if (empty($platforms)) {
$errors['platforms'] = "Field required";
}

if (empty($image)) {
$errors['image'] = "Field required";
}

if (empty($years)) {
$errors['years'] = "Field required";
}

if (empty($price)) {
    $errors['price'] = "Field required";
}


if (empty($errors)) {

require_once '../../../connec.php';

$pdo = new \PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO platforms (platforms, image, years, price, is_visible) VALUES (:platforms, :image, :years, :price, :is_visible) ";
$statement = $pdo->prepare($query);

$statement->bindValue(':platforms', $platforms, PDO::PARAM_STR);
$statement->bindValue(':image', $image, PDO::PARAM_STR);
$statement->bindValue(':years', $years, PDO::PARAM_INT);
$statement->bindValue(':price', $price);
$statement->bindValue(':is_visible', $isVisible);

$statement->execute();

header('location: /Admin/platforms');

}
}

?>


<h2>Add a new platforms</h2>

<form action="" method="POST" >

    <p>
    <label for = "platforms">Platforms</label>
    <input class="first-form-element" type="text" id="platforms" name="platforms" value="<?php echo $platforms;?>" >
    <?php if (isset($errors['platforms'])) { ?>
        <small class="color_errors"><?php echo $errors['platforms'];?></small>
    <?php } ?>
    </p>

    <p>
    <label for = "image">Image</label>
    <input type="text" id="image" name="image" value= "<?php echo $image;?>" >
    <?php if (isset($errors['image'])) { ?>
        <small class = "color_errors"><?php echo $errors['image'];?></small>
    <?php } ?>
    </p>

    <p>
    <label for = "years">Years</label>
    <input type="number" step="any" id="years" name="years" value= "<?php echo $years;?>" >
    <?php if (isset($errors['years'])) { ?>
        <small class="color_errors"><?php echo $errors['years'];?></small>
    <?php } ?>
    </p>

    <p>
    <label for = "price">Price</label>
    <input type="number" id="price" name="price" value= "<?php echo $price;?>">
    <?php if (isset($errors['price'])) { ?>
        <small class="color_errors"><?php echo $errors['price'];?></small>
    <?php } ?>
    </p>

    <p>
    <input type="checkbox" name="isVisible" id="checkInput" value="<?= $isVisible;?>">
    <label for ="checkInput">Display on website</label>
    </p>

    <button type="submit">ADD</button>

</form>

