<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
</head>
  <body>
      <?php
      $id = $_GET['id'];

      include('dbconnect.php');
      $query = "SELECT *FROM player WHERE player_id='$id'";
      $result = mysqli_query($conn, $query);
      ?>
    <div class="container">
        <form action="editvalue.php" method="get">
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
            <input type="hidden" name="playerid" value="<?php echo $row['player_id']; ?>">
            
            <div class="form-group">
                <label>Player Name</label>
                <input type="text" name="pname" class="form-control" value="<?php echo $row['player_name']; ?>">
            </div>

            <div class="form-group">
                <label>Player Jersey No</label>
                <input type="text" name="p_jersey_no" class="form-control" value="<?php echo $row['player_jersey_No']; ?>">
            </div>

            <div class="form-group">
                <label>Player Role</label>
                <input type="text" name="p_role" class="form-control" value="<?php echo $row['player_role']; ?>">
            </div>

            <button type="submit" class="btn btn-success btn-block">Edit Player</button>
                <?php
            }
            mysqli_close($conn);
            ?>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>