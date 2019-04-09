<?php
    session_start();
    include('config/db.php');
    $user_id = $conn->real_escape_string(($_SESSION['user_id']));
    $title=$conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $stmt = "INSERT INTO blogs(user_id,title, content) VALUES ('$user_id','$title', '$content')";
    
    if($conn->query($stmt)) {
        header('Location: home.php');
    }
    else {
        echo 'Adding Post failed ' . $conn->error;
    }
?>