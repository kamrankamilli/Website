<?php

require_once "dbconnect.php";

$title = $shortdesc = $fulldesc = $author = $date = "";
$title_err = $shortdesc_err = $fulldesc_err = $author_err = $date_err = "";


if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    $id = $_POST["id"];
    
    
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    } 
    else{
        $title = $input_title;
    }
    
    
    $input_shortdesc = trim($_POST["shortdesc"]);
    if(empty($input_shortdesc)){
        $shortdesc_err = "Please enter a short description.";     
    } else{
        $shortdesc = $input_shortdesc;
    }
    
    
    $input_fulldesc = trim($_POST["fulldesc"]);
    if(empty($input_fulldesc)){
        $fulldesc_err = "Please enter a full content.";     
    }
    else{
        $fulldesc = $input_fulldesc;
    }

    $input_author = trim($_POST["author"]);
    if(empty($input_author)){
        $author_err = "Please enter an anthor.";     
    }
    else{
        $author = $input_author;
    }

    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter a date.";     
    }
    else{
        $date = $input_date;
    }
    
    
    if(empty($title_err) && empty($shortdesc_err) && empty($fulldesc_err) && empty($author_err) && empty($date_err)){
        
        $sql = "UPDATE info_news SET news_title=?, news_short_description=?, news_full_content=?, news_author=?, news_published_on=? WHERE news_id=?";
 
        if($stmt = $mysqli->prepare($sql)){
            
            $stmt->bind_param("sssssi",$param_title, $param_shortdesc, $param_fulldesc, $param_author,$param_date,$param_id);
        

            $param_title = $title;
            $param_shortdesc = $shortdesc;
            $param_fulldesc = $fulldesc;
            $param_author = $author;
            $param_date  = $date;
            $param_id = $id;
            
            
            if($stmt->execute()){
                
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        
        $stmt->close();
    }
    
    
    $mysqli->close();
} else{
    
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        
        $id = trim($_GET["id"]);

        
        $sql = "SELECT * FROM info_news WHERE news_id = ?";
        if($stmt = $mysqli->prepare($sql)){
            
            $stmt->bind_param("i", $param_id);
           
            $param_id = $id;

            
            if($stmt->execute()){
                $result = $stmt->get_result();

                if($result->num_rows ==1){
                    
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    
                    $title = $row["news_title"];
                    $shortdesc = $row["news_short_description"];
                    $fulldesc = $row["news_full_content"];
                    $author = $row["news_author"];
                    $date = $row["news_published_on"];
                } else{
                    
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
       
        $stmt->close();
       
        $mysqli->close();
    }  else{
        
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update News</h2>
                    </div>
                    <p>Please fill all empty spaces</p>
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($shortdesc_err)) ? 'has-error' : ''; ?>">
                            <label>Short Description</label>
                            <input type="text" name="shortdesc" class="form-control" value="<?php echo $shortdesc; ?>">
                            <span class="help-block"><?php echo $shortdesc_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($fulldesc_err)) ? 'has-error' : ''; ?>">
                            <label>Full Content</label>
                            <textarea name="fulldesc" class="form-control"><?php echo $fulldesc; ?></textarea>
                            <span class="help-block"><?php echo $fulldesc_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($author_err)) ? 'has-error' : ''; ?>">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" value="<?php echo $author; ?>">
                            <span class="help-block"><?php echo $author_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit" style="background-color:goldenrod">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>