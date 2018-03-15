<?php

include_once ("../db/connect_db.php");
$db=new connect_db();

$result=$db->GetRows();
if($result)
{
    echo "true";
    return TRUE;
}
echo "false";
return FALSE;
