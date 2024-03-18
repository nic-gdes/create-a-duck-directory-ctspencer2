<?php

$duck_is_live

if (isset($_GET['id']))
    $id = htmlspecialchars($_GET['id']);

        require('./config/db.php');

        $sql = "SELECT id, name, favorite_foods, bio, img_src FROM ducks WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        $duck = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

?>




<?php include('components/head.php'); ?>
<?php include('components/nav.php'); ?>
<main>
    <section>
        <img src="<?php echo $duck['img_src']; ?>" alt="Duck Name">
        <h1>Duck Name</h1>
        <ul>
            <li>Favorite Food 1</li>
            <li>Favorite Food 2</li>
        </ul>
        <p>Duck biography...</p>
    </section>
</main>
<?php include('components/footer.php'); ?>
