<!DOCTYPE html>
<html lang="he">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="קובי דהן אתר תדמית. אתר זה בא להראות את היכולות שלי, הידע שלי,המיומנויות שלי והעבודות שלי." />
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Economica' rel='stylesheet'>
        <link rel="stylesheet" href="css/media-queries.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/functions.js"></script>




        <title>קובי דהן</title>


        <script type="text/javascript">
            $(document).ready(function () {

                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.scrollup').click(function () {
                    $("html, body").animate({scrollTop: 0}, 600);
                    return false;
                });

            });
            
$(window).load(function () { // makes sure the whole site is loaded
    $('#status').fadeOut(100000); // will first fade out the loading animation
    $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(1000).css({'overflow': 'visible'});
});

        </script>


    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>


        <?php include_once ("./navbar.php"); ?>



        <header id="home">




            <div class="row banner">
                <div class="banner-text">
                    <h1 class="responsive-headline">קובי דהן</h1>
                    <h3>
                        <p class="lead">
                            בוגר תואר ראשון במערכות מידע.<br>
                            fullstack web developer.
                        </p>

                    </h3>




                    <hr />
                    <ul class="social">
                        <li><a href="https://www.facebook.com/kobi.dahan.56" target="_blank"><i class="fa fa-facebook"></i></a></li> 
                        <li><a href="https://www.linkedin.com/in/kobi-dahan-53b5bb136/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/kobi1500/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://github.com/kobi1500" target="_blank"><i class="fa fa-github"></i></a></li>

                    </ul>
                </div>
            </div>



        </header> <!-- Header End -->


        <!-- About Section
        ================================================== -->
        <section id="about">

            <div class="row">



                <div class="eleven columns main-col text-center">

                    <h2 class="me">עליי</h2>

                    <p class="lead">
                        בוגר תואר ראשון במערכות מידע , ממכללת עמק יזרעאל, אוהב לעבוד בweb.<br>
                        מחפש את האתגר הראשון בתחום, אוהב את עולם האינטרנט.<br>
                        לומד מהר,יסודי,רציני,אחראי ובעל ראש פתוח.
                    </p>

                    <div class="row">

                        <div class="columns contact-details">

                            <h2>פרטים אישיים</h2>
                            <p>
                                <span>קובי דהן</span><br>
                                <span>עפולה
                                </span><br>
                                <span>052-5582571</span><br>
                                <span>kobi6255@gmail.com</span>
                            </p>

                        </div>


                        <div class="columns download">
                            <p>
                                <a href="files/קורות חיים-קובי דהן.doc" class="button" onclick="download();"><i class="fa fa-download"></i>קורות חיים</a>
                            </p>
                        </div>

                    </div> <!-- end row -->

                </div> <!-- end .main-col -->

            </div>

        </section> <!-- About Section End-->


        <!-- Resume Section
        ================================================== -->
        <section id="resume">

            <!-- Education
            ----------------------------------------------- -->
            <div class="row education" data-scrollreveal="enter right and move 100px, wait 0.6s">

                <div class="ten columns header-col">
                    <h1><span>חינוך</span></h1>

                </div>

                <div class="nine columns main-col">

                    <div class="row item">

                        <div class="twelve columns">

                            <h3 class="emekyzreel">מכללת עמק יזרעאל</h3>


                            <p class="info">מערכות מידע<span>&bull;</span> <em class="date">2014-2017</em></p>


                            <p class="lead text-center">
                                במהלך התואר למדתי שפות תכנות כגון html,css,javascript,jquery,php.<br>
                                בנוסף למדתי גם שפת sql בסביבת mysql.
                            </p>
                        </div>


                    </div> <!-- item end -->



                </div> <!-- main-col end -->

            </div> <!-- End Education -->


            <!-- Work
            ----------------------------------------------- -->
            <div class="row work" id="experience" data-scrollreveal="enter left and move 100px, wait 0.6s">

                <div class="ten columns header-col">
                    <h1><span>ניסיון קודם</span></h1>
                </div>

                <div class="nine columns main-col">

                    <div class="row item">

                        <div class="twelve columns">

                            <h3 class="metailim">עמותת מטיילים בישראל</h3>

                            <p class="info">fullstack web developer <span>&bull;</span> <em class="date">אוקטובר 2016-מאי 2017</em></p>

                            <p class="lead">
                                במהלך הלימודים עשיתי תוכנית התמחות בעמותת מטיילים בישראל,<br> שם בניתי אפליקציה וגם אתר שמטרתן הייתה למשוך תיירים מחו"ל להגיע לארץ, וכן לעזור לבעלי העסקים בארץ למשוך אותם אליהם.<br>
                                את האתר בנינו בטכנולוגיות web כגון: 
                            <ul>
                                <li>html5</li>
                                <li>css3</li>
                                <li>javascript</li>
                                <li>jquery</li>
                                <li>php</li>
                                <br>
                                את האפליקציה בנינו בסביבת אנדרואיד סטודיו.

                            </ul>
                            </p>

                        </div>

                    </div> <!-- item end -->



                </div> <!-- main-col end -->

            </div> <!-- End Work -->


        </section>

        <!-- Resume Section
 ================================================== -->
        <section id="resume">

            <!-- Education
            ----------------------------------------------- -->
            <div class="row education site" id="site"  data-scrollreveal="enter top and move 100px, wait 0.6s">

                <div class="ten columns header-col">
                    <h1><span>על האתר</span></h1>

                </div>

                <div class="nine columns main-col">

                    <div class="row item">

                        <div class="twelve columns">




                            <p class="lead text-center">
                                אתר זה נבנה בעזרת הטכנולוגיות הבאות: html5,css,js,jquery,ajax,php,bootstrap,mysql.
                                אתר זה נבנה בצורה עצמאית על ידי וכן בשילוב של תבניות שהתאימו לצרכים של האתר.
                            </p>
                        </div>


                    </div> <!-- item end -->



                </div> <!-- main-col end -->

            </div> <!-- End Education -->


            <!-- Work
            ----------------------------------------------- -->
            <div class="row work" id="admin" data-scrollreveal="ease-out bottom and move 100px, wait 0.6s">

                <div class="ten columns header-col">
                    <h1><span>צד ניהולי</span></h1>
                </div>

                <div class="nine columns main-col">

                    <div class="row item">

                        <div class="twelve columns">



                            <p class="lead">
                                באתר זה יש צד ניהולי פתוח חלקי עבור הגולשים.
                                שם משתמש:&nbsp;&nbsp;<strong>visit</strong> סיסמא:&nbsp;&nbsp;<strong>visitor.</strong>
                                <br>
                                כדי להיכנס לחץ
                                <a href="Admin/Login.php"> כאן
                                </a>

                            </p>

                        </div>

                    </div> <!-- item end -->



                </div> <!-- main-col end -->

            </div> <!-- End Work -->


        </section>

        <a href="#home" class="scrollup"></a>




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

                <div class="made-by"> Design and Developed by kobi dahan &copy;</div>
            </div>
        </div>

        <script src="js/waypoints.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/magnific-popup.js"></script>
        <script src="js/init.js"></script>

        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Custom JavaScript for this theme -->
        <script src="js/scrolling-nav.js"></script>
        <script src="js/scrollReveal.js"></script>
        <script src="js/custom.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/nagishli.js" defer></script>
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
