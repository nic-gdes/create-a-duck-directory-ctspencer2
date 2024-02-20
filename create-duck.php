<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ('config/db.php');
    
    $duckName = htmlspecialchars($_POST['duckName']);
    $favoriteFoods = htmlspecialchars($_POST['favoriteFoods']);
    $biography = htmlspecialchars($_POST['biography']);
    $targetFile = "";

    if (isset($_FILES['duckImage']) && $_FILES['duckImage']['error'] == 0) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["duckImage"]["name"]);
        $targetFile = $targetDir . $fileName;
        if (!move_uploaded_file($_FILES["duckImage"]["tmp_name"], $targetFile)) {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }

    $sql = $conn->prepare("INSERT INTO ducks (name, favorite_foods, bio, image) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $duckName, $favoriteFoods, $biography, $targetFile);
    
    if ($sql->execute()) {
        echo "<p>Duck successfully added!</p>";
    } else {
        echo "Error: " . $sql->error;
    }
    $sql->close();
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
