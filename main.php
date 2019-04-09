<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>
  <center><h1 style="color:white;">Blogs</h1></center><br>
    <?php
    include('config/db.php');
    $user_id = $_SESSION['user_id'];
    $stmt = "SELECT a.title,a.content,b.name FROM blogs a,user b where a.user_id=b.id order by date desc";
    $res = $conn->query($stmt);
    if($res->num_rows > 0) {
        $post = '<div class="container"><ul class="list-group">';
        while($row = $res->fetch_assoc()) {
            $post .= '
            <li class="list-group-item">'.'<h2>'.$row['title'].'</h2><br>'
            . $row['content'].'<p style="color:grey;">By-'.$row['name'].
            '</p></li><hr>';
        }
        $post .= '</ul></div>';
        echo $post;
    }
    else {
        echo '<center><h3 style="color:white;">No blogs on the site</h3></center>';
    }
    ?>

  </div>
    <script>
    
    </script>
  <?php include('templates/footer.php'); ?>
</html>