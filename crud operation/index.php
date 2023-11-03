<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP & MYSQL APPLICATION</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

  </head>
  <body>
      <?php
      include('dbconnect.php');
      $query = "SELECT *FROM player";
      $result = mysqli_query($conn,$query);
      ?>
    <div class="container">
        <h2 class="text-center">Players Details</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Insert Player Details</h3>
                <form role="form" action="insert.php" method="post">
                
                <div class="form-group">
                        <label for="pid">Player Id</label>
                        <input type="text" name="pid" class="form-control">
                    </div>
                
                <div class="form-group">
                        <label for="pname">Player Name</label>
                        <input type="text" name="pname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="pjersey">Player Jersey No</label>
                        <input type="text" name="p_jersey_no" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="prole">Player Role</label>
                        <input type="text" name="p_role" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Add Player</button>
                </form>
            </div>
            <div class="col-md-8">
                <h3>Display All Players Details</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Player Id</th>
                            <th>Player Name</th>
                            <th>Player Jersey No</th>
                            <th>Player Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                            ?>
                        <tr>
                            <td><?php echo $row['player_id']; ?></td>
                            <td><?php echo $row['player_name']; ?></td>
                            <td><?php echo $row['player_jersey_No']; ?></td>
                            <td><?php echo $row['player_role']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['player_id']; ?>" class="btn btn-info">Edit Player</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $row['player_id']; ?>" class="btn btn-danger">Delete Player</a>
                            </td>
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

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>