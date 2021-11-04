<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/12d555b0db.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <?php
      $id = $_GET['id'];
      include('dbconnect.php');
      $query = "SELECT * FROM details WHERE player_id = '$id'";
      $result = mysqli_query($conn, $query);
      ?>
      <div class="container">
          <form action="editvalue.php" method="get">

           <?php
              while($row=mysqli_fetch_assoc($result))
              {
                  ?>
                  <div class="col-md-offset-4">
             <div class="col-md-6">
                  <input type="hidden" name="player_id" value="<?php echo $row['player_id'];?>">

                      <div class="form-group">
                          <label for="pname">Player Name</label>
                          <input type="text" name="p_name" class="form-control" value="<?php echo $row['player_name'];?>">
                      </div>
                      <div class="form-group">
                          <label for="pjersey">Player Jersey No</label>
                          <input type="text" name="p_jersey_no" class="form-control" value="<?php echo $row['player_jersey_no'];?>">
                      </div>
                      <div class="form-group">
                          <label for="prole">Player Role</label>
                          <input type="text" name="p_role" class="form-control" value="<?php echo $row['player_role'];?>">
                      </div>

                      <button type="submit" class="btn btn-success btn-block">Edit Player</button>

              </div>
              </div>
                      <?php
              }
                      mysqli_close($conn);
                      ?>
                      
          </form>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
