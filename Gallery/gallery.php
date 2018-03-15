
<!DOCTYPE html>
<html lang="he">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway">
        <link  href="../css/media-queries.css" rel="stylesheet">
        <link  href="../css/style.css" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.min.js"></script>

        <script src="../js/functions.js"></script>

        <title>גלרייה</title>

        <script>
            function post()
            {
                var comment = document.getElementById("comment").value;
                var name = document.getElementById("name").value;
                if (comment && name)
                {
                    $.ajax({
                        type: 'post',
                        url: 'post_comments.php',
                        data:
                                {
                                    user_comm: comment,
                                    user_name: name
                                },
                        success: function (response)
                        {
                            document.getElementById("all_comments").innerHTML = response + document.getElementById("all_comments").innerHTML;
                            document.getElementById("comment").value = "";
                            document.getElementById("name").value = "";

                        }
                    });
                }

                return false;
            }

        </script>
    </head>
    <body>

        <?php include_once ("./navbar.php"); ?>



        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../images/kobi1.jpg">
                </div>

                <div class="item">
                    <img src="../images/kobi2.jpg">
                </div>

                <div class="item">
                    <img src="../images/kobi3.jpg">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container">
            <div class="addReviewButton">
                <button id="add-comment" class="view-button">להוסיף חוות דעת<span class="glyphicon-plus marginR"></span></button>
            </div>




            <div class="PostComment col-md-8">
                <div  id="comment1" class="form">
                    <form action="" method="post" id="comment-form" class="form" onsubmit="return post();">
                        <p class="inner-addon left-addon">
                            <input type="text" data-name="שם מלא" id="name" class="comment-input" placeholder="שם מלא *" />
                            <span></span><br />
                        </p>
                        <p class="inner-addon left-addon">
                            <textarea type="text" data-name="חוות דעתך" id="comment" class="comment-input" placeholder="פרט את חוות דעתך * "></textarea>
                            <span></span><br />
                        </p>
                        <input value="הוסף חוות דעת" type="submit" id="buttonPress" class="buttonForm" />
                    </form>


                </div>
            </div>



            <div class="addReviewButton">
                <button id="view-comment" class="view-button hidden-lg hidden-md">הצג חוות דעת<span class="glyphicon-plus marginR"></span></button>
            </div>

            <div class="comments-area" id="all_comments"> 
                <?php
        include_once("../db/connect_db.php");
              $db=new connect_db();
              


                $result=$db->GetAllPosts();
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
                    $comment = $row['comments'];
                    $time = $row['date'];
                    ?>
                    <div class="wrapp-comment">

                        <div class="comment-text"><?php echo date("d/m/y", strtotime($time)) ?><br><strong>פורסם ע"י:</strong><?php echo $name; ?><br><?php echo $comment; ?></div><hr />
                    </div>

                </div>

                <?php
            }
            ?>

        </div>

        <div class="footer" style="margin-top:400px;">
            <div class="container">
                <div class="footer-data">
                    <p>
                        email: kobi6255@gmail.com
                    </p>
                    <p>
                        tel: 052-5582571
                    </p>
                    <p>קובי דהן</p> 

                </div>

                <div class="made-by"> Design and Developed by kobi dahan &copy;</div>
            </div>
        </div>



 <script type="text/javascript" charset="utf-8" src="../js/nagishli.js" defer></script>
        <script>
                                    nl_lang = "he";
                                    nl_pos = "bl";
                                    nl_link = "0";
                                    nl_color = "blue";
                                    nl_compact = "2";
                                    nl_accordion = "0";
        </script>


    </body>

</html>
