<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wastage</title>
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
            <div class="row">
                <h3>Wastage update</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>partValue</th>
                          <th>Package</th>
                          <th>type</th>
                          <th>qty</th>
                          <th>qty per board</th>
                          <th>comments</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'config.php';
                       $tablename=$_GET['product']."table";
                       $sql = "SELECT * FROM $tablename ORDER BY TYPE";
                       foreach ($pdo->query($sql) as $row) {
                         echo "<tr>";
                             echo "<td>" . $row['partValue'] . "</td>";
                             echo "<td>" . $row['Package'] . "</td>";
                             echo "<td>" . $row['type'] . "</td>";
                             echo "<td>" . $row['qty'] . "</td>";
                             echo "<td>" . $row['qtypb'] . "</td>";
                             echo "<td>" . $row['comments'] . "</td>";
                             $pv=$row['partValue'];
                             $pc=$row['Package'];
                                echo '<td width=25>'; ?>
                        <a class="btn btn-success" href="update_pull.php?pv=<?php echo $pv ?>&pc=<?php echo $pc ?>&pro=<?php echo $tablename ?>">wasted this</a>
                          <?php      echo '</td>';
                                echo '</tr>';
                       }
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
