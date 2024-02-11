<?php 

include('./config/db.php'); 

$sql = "SELECT name,favorite_foods,img_src FROM ducks";

$result = mysqli_query($conn,$sql);
$ducks = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

print_r($ducks);

?>

<?php include('components/head.php'); ?>
<?php include('components/nav.php'); ?>
<div id="hero">
    <div class="container">
        <div class="info">
            <h1>Welcome to the Duck Directory</h1>
        </div>
    </div>
</div>
<main>
    <section>
        <div class="grid">
            <!-- Placeholder for ducks; replace with dynamic content later -->
            <div class="duck-item">
                <img src="./assets/images/daffy.jpg" alt="Duck Name">
                <h2>Daffy</h2>
                <ul>
                    <li>Chicken Fried Rice</li>
                    <li>Sushi</li>
                </ul>
            </div>
            <div class="duck-item">
                <img src="./assets/images/howard.jpg" alt="Duck Name">
                <h2>Howard</h2>
                <ul>
                    <li>Double Cheeseburger</li>
                    <li>Beer</li>
                </ul>
            </div>
            <div class="duck-item">
                <img src="./assets/images/rubber.jpg" alt="Duck Name">
                <h2>Rubber</h2>
                <ul>
                    <li>Dawn Dish Soap</li>
                    <li>Spaghetti</li>
                </ul>
            </div>
            
            <!-- Repeat for each duck -->
        </div>
    </section>
</main>
<?php include('components/footer.php'); ?>
