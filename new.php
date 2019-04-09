<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>
  <div class="container text-center">
    <form action="addblog.php" method="POST">
        <div class="form-group">
        <label for="addtodo"><h2 style="color:white;">Write Blog</h2></label><br>
        <input name="title" type="text" class="form-control" placeholder="Title" required><br>
        <textarea class="form-control" name="content" id="addtodo" rows="5" placeholder="Insert Your Text Here" required></textarea>
        </div>
        <input type="submit" value="Save" class="btn btn-success">  
    </form>
  </div>
    <script>
    
    </script>
  <?php include('templates/footer.php'); ?>
</html>