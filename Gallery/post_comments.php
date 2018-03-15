<?php
$host = "localhost";
$username = "root";
$password = "1234";
$databasename = "kobi";

$connect = mysql_connect($host, $username, $password);
$db = mysql_select_db($databasename);

if (isset($_POST['user_comm']) && isset($_POST['user_name'])) {
    $comment = $_POST['user_comm'];
    $name = $_POST['user_name'];
    $insert = mysql_query("insert into comments (`name`,`comments`,`date`) values('$name','$comment',now())");


    $select = mysql_query("select name,comments,date from comments where name='$name' and comments='$comment'");

    if ($row = mysql_fetch_array($select)) {
        $name = $row['name'];
        $comment = $row['comments'];
        $time = $row['date'];
        ?>
        <div class="comments-area"> 
            <div class="wrapp-comment">

                <div class="comment-text"><?php echo date("d/m/y", strtotime($time)) ?><br><strong>פורסם ע"י:</strong><?php echo $name; ?><br><?php echo $comment; ?></div><hr />
            </div>

        </div>
        <?php
    }
    exit;
}
?>