<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>
  <div class="container">
    <?php
    include('config/db.php');
    $user_id = $_SESSION['user_id'];
    $stmt = "SELECT * FROM blogs where user_id=$user_id order by date desc";
    $res = $conn->query($stmt);
    if($res->num_rows > 0) {
        echo '<center><label for="addtodo"><h2 style="color:white;">My Blogs</h2></label></center><br>';
        $post = '<ul class="list-group">';
        while($row = $res->fetch_assoc()) {
            $post .= '
            <li class="list-group-item">'.'<h2>'.$row['title'].'</h2><br>'
            . $row['content'].
            '<hr style="height: 3px;
            color: green;
            background-color: green;
            border: none;"><form method="POST" action="deleteblog.php">
            <h5 align="right"><button class="btn btn-danger" name='. $row['id'] .'><h5 style="color:white;">Delete</h5></button></h5>
            </form>
            </li><hr>';
        }
        $post .= '</ul>';
        echo $post;
    }
    else {
        echo '<h3 style="color:white;">Write A Blog your Dashboard is Empty</h3>';
    }

    ?>

  </div>
    <script>
    
    </script>
  <?php include('templates/footer.php'); ?>
</html>