<?php

if($_FILES["file"]["name"] != ''){
     
    $allowedExts = array("doc", "pdf");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/msword") && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts))) {
        if ($_FILES["file"]["error"] > 0) {
            
        } else {
            if (file_exists("../files/" . $_FILES["file"]["name"])) {
                echo  "הקובץ כבר קיים";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "../files/" . $_FILES["file"]["name"]);
                echo "הקובץ עלה בהצלחה";
            }
        }
    } else {
        echo "קובץ לא תקין";
    }
}