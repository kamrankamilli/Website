<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="jumbotron">
    <div class="container">
      <h3>News</h3>
      </p>
    </div>
  </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">News Details</h2>
                        <a href="createnews.php" class="btn btn-success pull-right" style="background:goldenrod">Add News</a>
                        <a href="index.php" class="btn btn-success pull-right" style="background:goldenrod">Home Page</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "dbconnect.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM info_news";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>News Title</th>";
                                        echo "<th>Short Description</th>";
                                        echo "<th>Full Content</th>";
                                        echo "<th>Author</th>";
                                        echo "<th>Date</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['news_id'] . "</td>";
                                        echo "<td>" . $row['news_title'] . "</td>";
                                        echo "<td>" . $row['news_short_description'] . "</td>";
                                        echo "<td>" . $row['news_full_content'] . "</td>";
                                        echo '<td>' . '<a href="https://' . $row['news_author'] . '">' . $row['news_author'] . '</a>' . '</td>';
                                        echo "<td>" . $row['news_published_on'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='updatenews.php?id=". $row['news_id'] ."' title='Update News' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletenews.php?id=". $row['news_id'] ."' title='Delete News' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    $mysqli->close();
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>