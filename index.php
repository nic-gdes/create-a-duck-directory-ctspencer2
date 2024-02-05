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
<main>
    <section>
        <h1>Welcome to the Duck Directory</h1>
        <div class="grid">
            <!-- Placeholder for ducks; replace with dynamic content later -->
            <div class="duck-item">
                <img src="./assets/images/placeholder-duck.jpg" alt="Duck Name">
                <h2>Duck Name</h2>
                <ul>
                    <li>Favorite Food 1</li>
                    <li>Favorite Food 2</li>
                </ul>
            </div>
            <div class="duck-item">
                <img src="./assets/images/placeholder-duck.jpg" alt="Duck Name">
                <h2>Duck Name</h2>
                <ul>
                    <li>Favorite Food 1</li>
                    <li>Favorite Food 2</li>
                </ul>
            </div>
            <div class="duck-item">
                <img src="./assets/images/placeholder-duck.jpg" alt="Duck Name">
                <h2>Duck Name</h2>
                <ul>
                    <li>Favorite Food 1</li>
                    <li>Favorite Food 2</li>
                </ul>
            </div>
            
            <!-- Repeat for each duck -->
        </div>
    </section>
</main>
<?php include('components/footer.php'); ?>
