<?php
// PHP code to handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $duckName = htmlspecialchars($_POST['duckName']);
    $favoriteFoods = htmlspecialchars($_POST['favoriteFoods']);
    $biography = htmlspecialchars($_POST['biography']);

    echo "<p>Submitted Name: $duckName</p>";
    echo "<p>Favorite Foods: $favoriteFoods</p>";
    echo "<p>Biography: $biography</p>";

}
?>
<?php include('components/head.php'); ?>
<?php include('components/nav.php'); ?>
<main>
    <form action="create-duck.php" method="POST" enctype="multipart/form-data">
        <label for="duckName">Duck Name:</label>
        <input type="text" id="duckName" name="duckName" required>
        
        <label for="favoriteFoods">Favorite Foods:</label>
        <input type="text" id="favoriteFoods" name="favoriteFoods" required>
        
        <label for="duckImage">Duck Image:</label>
        <input type="file" id="duckImage" name="duckImage" required>
        
        <label for="biography">Biography:</label>
        <textarea id="biography" name="biography" required></textarea>
        
        <button type="submit">Create Duck</button>
    </form>
</main>
<?
