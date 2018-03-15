   <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">


                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>

                                    <span class="count bg-danger">

                                        <?php
                                        $read = $db->GetNumberPostsUnRead();
                                        echo $read;
                                        ?>

                                    </span>

                                </button>

                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">  יש לך<?php echo " " ?><?php echo $read; ?> הודעות חדשות</p>

                                    <a class="dropdown-item media">

                                        <p class="text-center lead" style="margin-left: 5px;">

                                            <?php
                                            $check = $db->GetRows();
                                            if ($check) {
                                                echo "אין הודעות חדשות";
                                            }
                                            ?>
                                     
                                     
                                            <?php
                                            $name = $db->GetName();
                                            while ($row = mysqli_fetch_array($name)) {
                                                echo "<p class=text-center>";
                                                ?>

                                                <?php
                                                echo $row['name'];
                                                echo "<audio src=../audio/whatsapp_whistle.mp3 autoplay></audio>";
                                                ?>
                                                פרסם פוסט באתר 


                                            </p>




                                        </a>

                                    <?php }
                                    ?>

                                    <?php
                                    $checkPost = $db->GetRows();
                                    if ($checkPost) {
                                        ?>
                                        <a  class="blue-bg"  role="button" disabled="disabled">הפוך לנקרא</a>

                                        <?php
                                    } else {
                                        ?>
                                        <a href="UpdateStatus.php?func=updateallpost" class="blue-bg" style="margin-left:50px;" role="button">הפוך לנקרא</a>

                                    <?php } ?>
                                </div>

                            </div>

                            <div class = "dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type = "button" id = "message"  data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                                    <i class="ti-email"></i>
                                    <span class="count bg-primary">
                                        <?php
                                        $ReadMail = $db->GetNumberMailsUnRead();
                                        echo $ReadMail;
                                        ?>
                                    </span>
                                </button>
                                <div class = "dropdown-menu" aria-labelledby = "message">
                                    <p class = "red">יש לך<?php echo " " ?><?php echo $ReadMail; ?> מיילים חדשים</p>
                                    <a class = "dropdown-item media">
                                        <p class="text-center lead" style="padding:0px;">

                                            <?php
                                            $checkMail = $db->GetRowsMail();
                                            if ($checkMail) {
                                                echo "אין מיילים חדשים";
                                            }
                                            ?>
                                     
                                     
                                            <?php
                                            $nameMail = $db->GetNameMail();
                                            while ($row = mysqli_fetch_array($nameMail)) {
                                                 echo "<p class=text-center>";
                                                ?>

                                                <?php
                                                echo $row['name'];
                                                echo "<audio src=../audio/whatsapp_whistle.mp3 autoplay></audio>";
                                                ?>
                                                שלח לך מייל


                                            </p>
                                       
                                    </a>
                                            <?php }?>
                                    <?php
                                    $checkMail = $db->GetRowsMail();
                                    if ($checkMail) {
                                        ?>
                                        <a  class="blue-bg" style="" role="button" disabled="disabled">הפוך לנקרא</a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="UpdateStatus.php?func=updateallemails" class="blue-bg" style="margin-left:50px;" role="button">הפוך לנקרא</a>

                                    <?php } ?>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class = "col-sm-5">
                        <div class = "user-area dropdown float-right">
                            <a class = "example-image-link" href = "../images/kobi.jpg" data-lightbox = "example-1">
                                <img class = "user-avatar rounded-circle" src = "../images/kobi.jpg">
                            </a>

                        </div>

                        <div class = "language-select dropdown" id = "language-select">
                            <a class = "dropdown-toggle" href = "Admin.php">
                                <?php echo $_SESSION['fullname'];
                                ?>
                            </a>

                        </div>

                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->