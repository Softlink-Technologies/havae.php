<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Retrieve wallpaper data
$sql = "SELECT * FROM wallpapers";
$result = mysqli_query($conn, $sql);

// Display wallpapers
while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="wallpaper">';
    echo '<img src="' . $row['image_url'] . '" alt="' . $row['title'] . '">';
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['description'] . '</p>';
    echo '</div>';
}

// Close database connection
mysqli_close($conn);
?>
