
<?php
include_once ('../../db/connect_db.php');
$db = new connect_db();
session_start();
if (!isset($_SESSION['id'])) {
    $db->redirect('../../index.php');
}
$result = $db->GetAllPosts();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="he"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>צפייה בפוסטים</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/scss/style.css">
        <link rel="stylesheet" href="../../css/lightbox.css">
        <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>


        <?php include_once ("../NotAdmin/sidebar.php"); ?>

        <!-- Left Panel -->
        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

           <?php include_once ("./navbar.php"); ?>

            <div class="breadcrumbs">
                <div class="col-sm-12">
                    <div class="page-header text-center">
                        <div class="page-title">
                            <h1>לוח אדמין</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content mt-3">




                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">טבלת מיילים</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>

                                    <tr>
                                        <th>פוסט</th>
                                        <th>תאריך פרסום</th>
                                        <th>שם מלא</th>
                                    </tr>
                                </thead>
                                <?php while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tbody>
                                    <td><?php echo $row['comments']; ?></td>
                                    <td><?php
                                        $date = date_create($row['date']);
                                        echo date_format($date, "d-m-Y")
                                        ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->


        <!-- Right Panel -->

        <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        <script src="../assets/js/widgets.js"></script>
        <script src="../../js/lightbox.min.js"></script>

        <script src="../assets/js/lib/data-table/datatables.min.js"></script>
        <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="../assets/js/lib/data-table/jszip.min.js"></script>
        <script src="../assets/js/lib/data-table/pdfmake.min.js"></script>
        <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="../assets/js/lib/data-table/datatables-init.js"></script>
        <script src="../../js/functions.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>
        <script type="text/javascript" charset="utf-8" src="../../js/nagishli.js" defer></script>
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


