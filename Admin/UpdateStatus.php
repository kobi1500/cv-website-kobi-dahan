<?php

  include_once ("../db/connect_db.php");
  $db=new connect_db();
  
switch ($_GET['func'])
{
case "updateallpost":
    $db->UpdateAllPost();
    $db->Redirect("Admin.php");
    break;
case "updateallemails":
    $db->UpdateAllEmails();
    $db->Redirect("Admin.php");
    break;
case "DeletePosts":
    $db->RemovePosts($_GET['id']);
    $db->redirect("DeletePosts.php");
    break;
case "DeleteMails":
    $db->RemoveMails($_GET['id']);
    $db->redirect("DeleteMails.php");
    break;
}
