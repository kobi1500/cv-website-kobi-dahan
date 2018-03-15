<!DOCTYPE html>
<html lang="he">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="../css/responsiveslides.css">
         <link rel="stylesheet" href="../css/media-queries.css">
        <link rel="stylesheet" href="../css/style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/responsiveslides.min.js"></script>
        <script src="../js/skill.bars.jquery.js"></script>
        <script src="../js/functions.js"></script>

        <title>יכולות</title>


        <script>
            $(function () {
                // Slideshow 4
                $("#slider").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: false,
                    speed: 500                
                    
                });

            });
            
            $(document).ready(function () {

    $('.skillbar').skillBars({
        from: 0,
        speed: 4000,
        interval: 100,
        decimals: 0
    });

});

        </script>
    </head>
    <body>
        <?php include_once ("./navbar.php"); ?>
        <div class="skills_1">
            <div class="container">
                <h3 class="title">היכולות שלי</h3>
            </div>
        </div>
        <div class="col-md-12 slider">
            <ul class="rslides" id="slider">
                <li>
                    <div class="img_slide">
                        <img src="../images/html.png" class="img-responsive" alt="html">
                    </div>
                </li>
                <li>
                    <div class="img_slide">
                        <img src="../images/css3.png" class="img-responsive" alt="css3">
                    </div>
                </li>
                <li>
                    <div class="img_slide">
                        <img src="../images/js.png" class="img-responsive" alt="javascript">
                    </div>
                </li>
                <li>
                <div class="img_slide">
                    <img src="../images/jquery.png" class="img-responsive" alt="jquery">
                </div>
                </li>
                <li>
                    <div class="img_slide">
                        <img src="../images/php.png" class="img-responsive" alt="php">
                    </div>
                </li>
                <li>
                    <div class="img_slide">
                        <img src="../images/mysql.png" class="img-responsive" alt="mysql">
                    </div>
                </li>
                <li>
                    <div class="img_slide">
                        <img src="../images/ajax.png" class="img-responsive" alt="ajax">
                    </div>
                </li>  
            </ul>

        </div>
        
        <div class="stats wthree-sub" id="skills">
	<div class="container"> 
		<h3 class="title">My Skills</h3>
		<div class="col-sm-6 stats_grid_right">
			<div class="skillbar" data-percent="85">
			  <span class="skillbar-title" style="background: #f1703a;">html</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="90">
			  <span class="skillbar-title" style="background: #2980b9;">css3</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="75">
			  <span class="skillbar-title" style="background: #a0d034;">javascript</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
		</div>
		<div class="col-sm-6 stats_grid_right"> 
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #f1703a;">jquery</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="85">
			  <span class="skillbar-title" style="background: #2980b9;">PHP</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="80">
			  <span class="skillbar-title" style="background: #a0d034;">MySql</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
                        
                        <div class="skillbar" data-percent="75">
			  <span class="skillbar-title" style="background: #a0d034;">Ajax</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
		</div>
		<div class="clearfix"> </div>
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