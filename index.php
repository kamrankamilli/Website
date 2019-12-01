<!DOCTYPE html>
<html lang="en">
<head>
  <title>Real Madrid FC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
        table tr td:last-child a{
            margin-right: 15px;
            overflow: hidden;
              
        }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="jumbotron jumbotron-fluid" style="height: 200px;">
    <div class="container-fluid">
      <a href="index.php" style="color: black; text-decoration: none;">
        <div class="header">
        <h1 class="display-5">Real Madrid FC</h1>
    </div>
      <img src="Images/realmadridlogo.jpg" class="rounded-circle" alt="Real Madrid Logo" width="240" height="200" style="position: absolute; top: 0px;"></a>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: goldenrod;">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="squad.php">Squad <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="gallery.php">Gallery <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="history.php">History <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="Admin.php" style="color:white">Admin<span class="sr-only">(current)</span></a>
        </form>
    </div>
</nav>

<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Latest News</h1>
        
      <?php

      require_once "dbconnect.php";

      $sql = "SELECT * FROM info_news";
       if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='box table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>News Title</th>";
                                        echo "<th>Short Description</th>";
                                        echo "<th>Full Content</th>";
                                        echo "<th>Author</th>";
                                        echo "<th>Published On</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['news_title'] . "</td>";
                                        echo "<td>" . $row['news_short_description'] . "</td>";
                                        echo "<td>" . $row['news_full_content'] . "</td>";
                                        echo '<td>' . '<a href="https://' . $row['news_author'] . '">' . $row['news_author'] . '</a>' . '</td>';
                                        echo "<td>" . $row['news_published_on'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
       $mysqli->close();
       ?>
       </div>
    </div>
  </div>
</div>




<footer class="footer" style="text-align: center; clear: both;">
  <address>
    <p>
      Copyright © 2019<a class="mail" href="mailto:kamilli818@gmail.com" style="color: black; text-decoration: none;"> Kamran Kamilli</a>
    </p>
  </address>
</footer>

</body>
</html>