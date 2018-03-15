
<!DOCTYPE html>
<html lang="he">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway">
        <link  href="../css/media-queries.css" rel="stylesheet">
        <link  href="../css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.min.js"></script>
        <script src="../js/functions.js"></script>

        <title>צור קשר</title>


    </head>
    <body>

      <?php include_once ("./navbar.php"); ?>
        <div class="container contact-us-content">
            <div class="col-md-4 col-xs-12">
                <div class="wrapp-contact-us">
                    <p class="repair-title">פרטי קישור</p>
                    <p>
                        מייל: kobi6255@gmail.com
                    </p>
                    <p>
                        טל: 052-5582571
                    </p>
                    <p>קובי דהן</p>
                    <a href="https://www.facebook.com/kobi.dahan.56" target="_blank"><img src="../images/facebook.ico" class="facebook" /></a>
                    <a href="https://www.linkedin.com/in/kobi-dahan-53b5bb136/" target="_blank"><img src="../images/linkedin.ico"  class="linkedin"/></a>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="wrapp-email-form">
                    <p class="repair-title">תשלחו לי מייל ואני אחזור אליכם בהקדם</p>
                    <form class="form formEmail" id="email-form">
                        <p class="inner-addon left-addon">
                            <input type="text" data-name="שם מלא" name="name" id="name" class="comment-input" placeholder="שם מלא *" />
                            <span></span><br />
                        </p>
                        <p class="inner-addon left-addon">
                            <input type="text" data-name="מייל" id="email" name="email" class="comment-input" placeholder="מייל *"  />
                            <span></span><br />
                        </p>
                        <p class="inner-addon left-addon">
                            <input type="text" data-name="כותרת מייל" id="subject"  name="subject" class="comment-input" placeholder="נושא*"  />
                            <span></span><br />
                        </p>
                        <p class="inner-addon left-addon">
                            <textarea type="text" data-name="תוכן של המייל" name="message" id="message" class="comment-input" placeholder="הכנס/י תוכן של המייל  * "></textarea>
                            <span></span><br />
                        </p>
                        <input value="שלח מייל" type="button" name="sendMail" id="emailButton" class="buttonForm" style="width: 115px !important;" />
                    </form>

                </div>
            </div>

        </div>



        <div class="footer">
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
                <div class="footer-decorative-line"></div>
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