<?php include("../functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Informe de comentarios de una publicación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <style>
        body{
            background: #22c1c3; 
            background: -webkit-linear-gradient(to right, #fdbb2d, #22c1c3);
            background: linear-gradient(to right, #fdbb2d, #22c1c3);
        }
        .container{
            padding: 20px 0px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <h2><a href="./"><i class="fas fa-home"></i></a> Informe de comentarios de una publicación</h2>
            </div>
        </nav>
    </header>
    <div class="container">
        <table border="1" cellpadding="10" style="background:#ffffff;" >
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Comentario</th>
            </tr>

        
<?php
    // $post_id = "post_245bdb3aa9aed151541094057";
        mysqli_query ($linkli,"SET NAMES 'utf8'") or die;
        $i= 0;
        $q_comments = "SELECT * FROM posts_comments WHERE post_id = 'post_245bdb3aa9aed151541094057'  
            GROUP BY user_id  
            ORDER BY comment_date ASC";
        $r_comments = mysqli_query($linkli,$q_comments) or die(mysqli_error());
        while ($i_comments = mysqli_fetch_array($r_comments)){
            $comment_date = $i_comments['comment_date'];
            $comment_content = $i_comments['comment_content'];
            $user_id = $i_comments['user_id'];
            $q_user = "SELECT * FROM users WHERE user_id = '".$user_id."';";
            $r_user = mysqli_query($linkli,$q_user) or die(mysqli_error());
            while ($i_user = mysqli_fetch_array($r_user)){
                $user_id = $i_user['user_id'];
                $user_first_name = $i_user['user_first_name'];
                $user_last_name = $i_user['user_last_name'];
                $user_user_name = $i_user['user_user_name'];
            }
            echo "<tr>";
                echo "<td>";
                echo $user_first_name . " ". $user_last_name;
                echo "</td>";
                echo "<td>";
                echo date('Y-m-d', $comment_date );
                echo "</td>";
                echo "<td>";
                echo $comment_content;
                echo "</td>";
            echo "</tr>";
            $i = $i + 1;
            
        };
?>
        </table>
    </div>
</body>
</html>