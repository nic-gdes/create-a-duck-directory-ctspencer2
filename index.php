<?php

// Connect to the database using mysqli
$conn = mysqli_connect("db", "db", "db", "db");

// Check for a connection error
if (mysqli_connect_errno()) {
    // If there is an error, display it and exit the script
    echo "Connection error: " . mysqli_connect_error();
    exit();
}

// Define the SQL query
$sql = "SELECT * FROM ducks";

// Execute the query and store the result
$result = mysqli_query($conn, $sql);

// Convert the result into an associative array
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Iterate over the data array and print each record (for demonstration purposes)
foreach ($data as $row) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

// Free up the memory used by the result set
mysqli_free_result($result);

// Close the database connection
mysqli_close($conn);

// Always check if $result is not false and if $ducks is not empty before using it
if ($result === false || empty($ducks)) {
    // Handle error or set $ducks to an empty array to avoid the warnings
    $ducks = [];
}

print_r($data);

?>


<?php 

// include('./config/db.php'); 

// $sql = "SELECT name,favorite_foods,img_src FROM ducks";

// $result = mysqli_query($conn,$sql);
// $ducks = mysqli_fetch_all($result, MYSQLI_ASSOC);

// mysqli_free_result($result);
// mysqli_close($conn);

// print_r($ducks);

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
        <?php foreach ($ducks as $duck) { ?>
            <!-- Placeholder for ducks; replace with dynamic content later -->
            <div class="duck-item">
                <img src="./assets/images/daffy.jpg" alt="<?php echo htmlspecialchars($duck["img_src"]); ?>">
                <h2><?php echo htmlspecialchars($duck["name"]); ?></h2>
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
        <?php } ?>
        </div>
    </section>
</main>
<?php include('components/footer.php'); ?>
