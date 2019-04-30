<?php
    session_start();
    include('config/db.php');
    $id=$conn->real_escape_string($_POST['id']);
    $title=$conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $stmt = "UPDATE blogs set title='$title', content='$content' where id='$id'";
    if($conn->query($stmt)) {
        header('Location: home.php');
    }
    else {
        echo 'Updating Post failed ' . $conn->error;
    }
?>