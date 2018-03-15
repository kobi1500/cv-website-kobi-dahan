<?php

class connect_db {

    private $con;

    function __construct() {
        $this->con = mysqli_connect("localhost", "root", "1234", "kobi");
        mysqli_set_charset($this->con, "utf8");


        if (!$this->con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function AddComment($name, $comment) {
        $result = $this->con->query("INSERT INTO comments (`name`,`comments`,`date`) VALUES ('$name','$comment',now())");
        return $result;
    }

    public function GetDataLimit() {
        $result = $this->con->query("select * from comments limit 5");
        return $result;
    }

    public function GetAllPosts() {
        $result = $this->con->query("select * from comments");
        return $result;
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM admin WHERE password='$password' AND user_name='$username'";
        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function GetUserInfo($username, $password) {
        $sql = "SELECT * FROM admin WHERE password='$password' AND user_name='$username'";
        $result = $this->con->query($sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    public function redirect($page) {
        header("Location:" . $page);
    }

    public function GetNumberPostsUnRead() {
        $result = $this->con->query("select count(*) as count from comments,active where comments.idread= active.id and idread=2");
        $row = mysqli_fetch_array($result);
        return $row['count'];
    }

    public function GetNumberPosts() {
        $result = $this->con->query("select count(*) as count from comments");
        $row = mysqli_fetch_array($result);
        return $row['count'];
    }

    public function GetNumberMails() {
        $result = $this->con->query("select count(*) as count from mail");
        $row = mysqli_fetch_array($result);
        return $row['count'];
    }

    public function GetNumberMailsUnRead() {
        $result = $this->con->query("select count(*) as count from mail,active where mail.idread=active.id and idread=2");
        $row = mysqli_fetch_array($result);
        return $row['count'];
    }

    public function GetName() {
        $result = $this->con->query("select name from comments where idread=2");
        return $result;
    }

    public function GetNameMail() {
        $result = $this->con->query("select name from mail where idread=2");
        return $result;
    }

    public function GetRows() {
        $result = $this->con->query("select name from comments where idread=2");
        if ($result->num_rows == 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function GetRowsMail() {
        $result = $this->con->query("select name from mail where idread=2");
        if ($result->num_rows == 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function GetLimitMails() {
        $result = $this->con->query("select * from mail limit 5");
        return $result;
    }

    public function AddMail($name, $email, $subject, $message) {
        $result = $this->con->query("INSERT INTO `mail` (`name`, `email`, `subject`, `message`) VALUES ( '$name', '$email', '$subject', '$message');");
    }

    public function GetMail() {
        $result = $this->con->query("select * from mail;");
        return $result;
    }

    public function UpdateAllPost() {
        $result = $this->con->query("UPDATE `comments` SET `idread`='1';");
    }

    public function UpdateAllEmails() {
        $result = $this->con->query("UPDATE `mail` SET `idread`='1';");
    }

    public function RemovePosts($id) {
        $result = $this->con->query("delete from comments where id='$id'");
    }

    public function RemoveMails($id) {
        $result = $this->con->query("delete from mail where id='$id'");
    }

}
