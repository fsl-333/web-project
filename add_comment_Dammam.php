<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for updating a comment
if (isset($_POST['update_comment'])) {
    $edit_id = $_POST['edit_id'];
    $edit_comment = $_POST['edit_comment'];
    $update_sql = "UPDATE comments SET comment='$edit_comment' WHERE id=$edit_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "Comment updated successfully";
    } else {
        echo "Error updating comment: " . $conn->error;
    }
} else {
    // Add a new comment to the database
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $insert_sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Comment added successfully";
    } else {
        echo "Error adding comment: " . $conn->error;
    }
}

$conn->close();

// Redirect back to the main page
header("Location: Dammam.php");
exit();
?>
