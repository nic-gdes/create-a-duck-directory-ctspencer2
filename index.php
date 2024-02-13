<?php

// Connect to the database using mysqli
$conn = mysqli_connect("db", "db", "db", "db");

// Check for a connection error
if (mysqli_connect_errno()) {
    echo "Connection error: " . mysqli_connect_error();
    exit();
}

// Define the SQL query
$sql = "SELECT * FROM ducks";

// Execute the query and store the result
$result = mysqli_query($conn, $sql);

// Check if $result is not false
if ($result === false) {
    echo "Error executing query: " . mysqli_error($conn);
    exit();
}

// Convert the result into an associative array
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Always check if $data is not empty before using it
if (empty($data)) {
    echo "No ducks found.";
    // Optionally set $data to an empty array to avoid warnings
    $data = [];
} else {
    // Debugging line to print the fetched data
    print_r($data);
}

// Free up the memory used by the result set
mysqli_free_result($result);

// Close the database connection
mysqli_close($conn);

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
            <?php foreach ($data as $duck) { ?>

                <div class="duck-item">

                    <img src="<?php echo htmlspecialchars($duck["img_src"]); ?>" alt="<?php echo htmlspecialchars($duck["name"]); ?>">

                    <h2><?php echo htmlspecialchars($duck["name"]); ?></h2>

                    <ul>
                        <li><?php echo htmlspecialchars($duck["favorite_foods"]); ?></li>
                    </ul>

                </div>
            <?php } ?>
        </div>
    </section>
</main>

<?php include('components/footer.php'); ?>
