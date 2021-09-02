
<?php
      session_start();
      $_POST['email'] = $_SESSION['email'];
      $_POST['password'] = $_SESSION['password'];
     include('connection.php');
     $sqladmin = mysqli_query($conn,"SELECT email,password FROM admin_emailpass WHERE email = '".$_POST['email']."' AND password = '".($_POST['password'])."'");


      if( mysqli_num_rows($sqladmin) > 0){
          $_SESSION['email'] = $_POST['email'];

      }
      else {
        die ("<br>"."<h3 style='text-align: center;color: #2D25A0;'>"."password or user name not matched<br>try again<br><br><a href='dashboard.php' style='background-color: #E02C6D;
      color:white;
      padding: 14px 20px;
      margin: 15px 0;
      border: none;
      cursor: pointer;
      width: 30%;
      border-radius: 5%;
      text-decoration: none;'>login</a>"."</h3>");

      }

       include('header.php');

        ?>
<body style="color: white;">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"style="color: white;">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"style="color: white;">Admin panel</a>
            </div>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="navbar-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                      <a class="navbar-brand" href='dashboard.php' name='dashboard'style="color: white;">main website</a>
                        <a class="navbar-brand" href='logout.php' name='logout'style="color: white;">log out</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="background: #2D25A0;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Player information control panel !!
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                        <h2>List of players</h2> <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Las Name</th>
                                        <th>Middle Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Comment</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                $query = 'SELECT * FROM people';
                    $result = mysqli_query($conn, $query) or die (mysqli_error($conn));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>'. $row['first_name'].'</td>';
                            echo '<td>'. $row['last_name'].'</td>';
                            echo '<td>'. $row['mid_name'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['comment'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['people_id'] . '" > About </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['people_id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['people_id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
