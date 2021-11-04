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
    <style>
        h3{
            color:#441e59;
            text-align:center;
            margin-bottom: 20px;
        }
    </style>
  </head>
  <body>
  <?php
      include('dbconnect.php');
      $query = "SELECT *FROM details";
      $result = mysqli_query($conn,$query);
      ?>
      <div class="container">
          <h2 class="text-center">PLAYERS DETAILS</h2>
          <div class="row">
              <div class="col-md-4">
                  <h3>Insert Player Details</h3>
                  <form role="form" action="insert.php" method="post">
                  <div class="form-group">
                          <label for="pid">Player ID</label>
                          <input type="text" name="p_id" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="pname">Player Name</label>
                          <input type="text" name="p_name" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="pjersey">Player Jersey No</label>
                          <input type="text" name="p_jersey_no" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="prole">Player Role</label>
                          <input type="text" name="p_role" class="form-control">
                      </div>

                      <button  class="btn btn-success btn-block" type="submit">Add Player</button>
                  </form>
              </div>
              <div class="col-md-8">
                  <h3>Display Player Details</h3>
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Player ID</th>
                              <th>Player Name</th>
                              <th>Plyer Jersey No</th>
                              <th>Plyer Role</th>
                              <th colspan="2">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                             while($row = mysqli_fetch_assoc($result))
                                {
                              ?>
                          <tr>
                              <td><?php echo $row['player_id']; ?></td>
                              <td><?php echo $row['player_name']; ?></td>
                              <td><?php echo $row['player_jersey_no']; ?></td>
                              <td><?php echo $row['player_role']; ?></td>
                              <td><a href="edit.php?id=<?php echo $row['player_id']; ?>"><i class="fas fa-pen"></i></a></td>
                              <td><a href="delete.php?id=<?php echo $row['player_id']; ?>"><i class="fas fa-trash"></i></a></td>
                          </tr>
                          <?php
                                }
                                mysqli_close($conn);
                                ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

<?php
                          