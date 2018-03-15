$(document).ready(function () {


    function checkForm() {
        $('.form p input,.form p textarea').each(function () {
            $empty = $(this).val();
            if (!$empty) {
                $(this).css({
                    boxShadow: "0px 0px 10px 0px #CC5353",
                }).attr("placeholder", "נא להכניס " + $(this).data("name")).addClass("placeholder-error-color");
                $(this).next().addClass("glyphicon glyphicon-remove");
            }
        });
    }

    $('.form p ').children("input , textarea").blur(function () {
        $this = $(this);
        var inputVal = $this.val();

        if (!inputVal) {
            $this.css({
                boxShadow: "0px 0px 10px 0px #CC5353",
            }).attr("placeholder", "נא להכניס " + $this.data("name")).addClass("placeholder-error-color").next().addClass("glyphicon glyphicon-remove");
        } else {
            $this.css({
                'boxShadow': '0px 0px 3px #595959'
            }
            );
            if ($this.next().hasClass("glyphicon-remove") && inputVal) {
                $this.next().removeClass("glyphicon-remove").addClass("glyphicon-ok");
            } else if ($this.next().hasClass("glyphicon-ok") && !inputVal) {
                $this.next().removeClass("glyphicon-ok").addClass("glyphicon-remove");
            } else {
                $this.next().addClass("glyphicon glyphicon-ok");
            }
        }

    });
 
    $('#add-comment').click(function () {
        $('#comment1').slideToggle();
        $('#add-comment span').toggleClass('glyphicon-minus');
    });

    $('#view-comment').click(function () {
        $comments = $('.comments-area');
        if ($comments.is(':hidden')) {
            $comments.slideToggle('slow');
            $('#view-comment').html('סגור חוות דעת<span class="glyphicon-minus marginR"></span>');
        } else {
            $comments.slideToggle('fast');
            $('#view-comment').html('הצג חוות דעת<span class="glyphicon-plus marginR"></span>');

        }
    });


    $('#emailButton').click(function () {

        var name = $('#name').val();
        var mail = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        if (!name || !mail || !subject || !message) {
            checkForm();
        } else {
            $.ajax({
                type: "POST",
                data: {name: name, email: mail, subject: subject, message: message},
                url: "../ContactUs/SendEmail.php",
                success: function (data) {
                    if (data === "ok") {
                        var dialog = new BootstrapDialog({
                            message: function (dialogRef) {
                                var $message = $('<div>המייל נשלח בהצלחה! </div>');
                                var $button = $('<button class="btn btn-success  btn-block">סגור</button>');
                                $button.on('click', {dialogRef: dialogRef}, function (event) {
                                    event.data.dialogRef.close();
                                });
                                $message.append($button);
                                return $message;
                            },
                            closable: false
                        });
                        dialog.realize();
                        dialog.getModalHeader().hide();
                        dialog.getModalFooter().hide();
                        dialog.getModalBody().css('background-color', '#99FF33');
                        dialog.getModalBody().css('color', '#fff');
                        dialog.open();
                        $('.formEmail').closest('form').find("input[type=text],textarea").val("").next().removeClass('glyphicon glyphicon-ok');

                    } else {
                        var dialog = new BootstrapDialog({
                            message: function (dialogRef) {
                                var $message = $('<div>קרתה שגיאה אנא נסה מאוחר יותר! </div>');
                                var $button = $('<button class="btn btn-danger  btn-block">סגור</button>');
                                $button.on('click', {dialogRef: dialogRef}, function (event) {
                                    event.data.dialogRef.close();
                                });
                                $message.append($button);
                                return $message;
                            },
                            closable: false
                        });
                        dialog.realize();
                        dialog.getModalHeader().hide();
                        dialog.getModalFooter().hide();
                        dialog.getModalBody().css('background-color', '#D90000');
                        dialog.getModalBody().css('color', '#fff');
                        dialog.open();
                        $('.formEmail').closest('form').find("input[type=text],textarea").val("").next().removeClass('glyphicon glyphicon-ok');

                    }
                },
                error: function () {
                    var dialog = new BootstrapDialog({
                        message: function (dialogRef) {
                            var $message = $('<div>המייל לא נשלח! </div>');
                            var $button = $('<button class="btn btn-danger  btn-block">סגור</button>');
                            $button.on('click', {dialogRef: dialogRef}, function (event) {
                                event.data.dialogRef.close();
                            });
                            $message.append($button);
                            return $message;
                        },
                        closable: false
                    });
                    dialog.realize();
                    dialog.getModalHeader().hide();
                    dialog.getModalFooter().hide();
                    dialog.getModalBody().css('background-color', '#D90000');
                    dialog.getModalBody().css('color', '#fff');
                    dialog.open();
                    $('.formEmail').closest('form').find("input[type=text],textarea").val("").next().removeClass('glyphicon glyphicon-ok');

                }
            });
        }
    });




    $('#buttonPress').click(function () {


        var com = {
            Customer_name: document.getElementById('name').value,
            Text: document.getElementById('comment').value
        };

        if (!com.Customer_name || !com.Text) {
            checkForm();
        } else {
            var dialog = new BootstrapDialog({
                message: function (dialogRef) {
                    var $message = $('<div>הפוסט פורסם בהצלחה! </div>');
                    var $button = $('<button class="btn btn-primary  btn-block">סגור</button>');
                    $button.on('click', {dialogRef: dialogRef}, function (event) {
                        event.data.dialogRef.close();
                    });
                    $message.append($button);

                    return $message;
                },
                closable: false
            });
            dialog.realize();
            dialog.getModalHeader().hide();
            dialog.getModalFooter().hide();
            dialog.getModalBody().css('background-color', '#99FF33');
            dialog.getModalBody().css('color', '#fff');
            dialog.open();
        }
    });



    $('.carousel').carousel({
        interval: 3000
    });


    $('#buttonLogIn').click(function () {

        var username = $('#username').val();
        var password = $('#password').val();

        if (!username || !password) {
            checkForm();
        } else {
            $.ajax({
                type: "POST",
                url: "../Admin/CheckAdmin.php",
                data: {user: username, password: password},
                success: function (data) {
                    if (data === "Admin") {

                        window.location.replace("../Admin/Admin.php");
                    } else if (data === "visitor") {
                        window.location.replace("../Admin/NotAdmin/notAdmin.php");
                    } else {
                        var dialog = new BootstrapDialog({
                            message: function (dialogRef) {
                                var $message = $('<div>שם משתמש ו/או סיסמה לא נכונים! </div>');
                                var $button = $('<button class="btn btn-danger  btn-block">סגור</button>');
                                $button.on('click', {dialogRef: dialogRef}, function (event) {
                                    event.data.dialogRef.close();
                                });
                                $message.append($button);

                                return $message;
                            },
                            closable: false
                        });
                        dialog.realize();
                        dialog.getModalHeader().hide();
                        dialog.getModalFooter().hide();
                        dialog.getModalBody().css('background-color', '#D90000');
                        dialog.getModalBody().css('color', '#fff');
                        dialog.open();
                    }
                }


            });
        }
    });



    $(document).on('change', '#file', function () {
        var form_data = new FormData();

        form_data.append("file", document.getElementById('file').files[0]);
        $.ajax({
            url: "../Admin/Upload.php",
            method: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,

            success: function (data)
            {
                if (data === "קובץ לא תקין") {
                    alert(data);
                    $('#file').val("");


                } else if (data === "הקובץ כבר קיים")
                {
                    alert(data);
                    $('#file').val("");

                } else {
                    alert(data);
                    $('#file').val("");
                }
            }
        });
    });


    $(".notadmin").click(function () {
        alert("התצוגה היא לצפייה בלבד!");
    });


});
















function download() {
    $('a').click(function (e) {
        e.preventDefault();  //stop the browser from following
        window.location.href = '../files/קורות_חיים-קובי דהן.doc';
    });
}
function DeletePost()
{
    if (!confirm('האם אתה בטוח שברצונך למחוק את הפוסט?')) {
        alert("הפוסט לא נמחק!");
        return false;


    } else {
        alert("הפוסט נמחק בהצלחה");


    }


}

function DeleteMail()
{
    if (!confirm('האם אתה בטוח שברצונך למחוק את המייל?')) {
        alert("המייל לא נמחק!");
        return false;


    } else {
        alert("המייל נמחק בהצלחה");


    }


}

function notAdmin()
{
    alert("התצוגה היא לצפייה בלבד!");
}



