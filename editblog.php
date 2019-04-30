<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>
  <?php
    include('config/db.php');
    $user_id = $conn->real_escape_string(($_SESSION['user_id']));
    $todo_id = array_keys($_POST)[0];
    echo'
    <div class="container text-center">
    <form action="updatedb.php" method="POST">
        <div class="form-group">
        <label for="addtodo"><h2 style="color:white;">Edit Blog</h2></label><br>
        <input type="hidden" name="id" value="'.$todo_id.'">
        <input name="title" type="text" class="form-control" placeholder="Title" required><br>
        <textarea class="form-control" name="content" id="addtodo" rows="5" placeholder="Insert Your Text Here" required></textarea>
        </div>
        <input type="submit" value="Update" class="btn btn-warning">  
    </form>
  </div>';
?>
  <?php include('templates/footer.php'); ?>
</html>