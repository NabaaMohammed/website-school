<?php
//add book
/*
session_start();
if(!isset($_SESSION["librarian"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
*/
include('navbar.php');
include('connection-ashqbaghdad.php');
?>
                <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        
                    </div>

                   
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Ashq Baghdad</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
                                   <table class="table table-bordered">
  <tr><td><input type="text"  name="Admin_name" class="form-control" placeholder="Admin-Name" required=""/></td> </tr>
       
 <!-- <tr><td><input type="file"  name="fi" required=""  /></td> </tr>-->
<tr><td><p>please enter the image name</p></td></tr>
  <tr><td><input type="text"  name="src" class="form-control" value="image/" placeholder="image_name" required=""/></td> </tr>

  <tr> <td>Post :<textarea class="form-control" name="post"></textarea></td> </tr>

<td><input type="submit" name="submit1"class="btn btn-default submit" value="Share" style="background-color:blue; color:white;"/></td>
                                       
                                </table>
                                </form>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php

if(isset($_POST["submit1"])){
    /*
     $tm=md5(time());
    $fnm=$_FILES["fi"]["name"];
    $dst="./book_images/".$tm.$fnm;
    $dst1="book_images/".$tm.$fnm;
    move_uploaded_file($_FILES["fi"]["tmp_name"],$dst);
    
    */
    mysqli_query($link,"insert into Admin value ('',
    '$_POST[Admin_name]',
    '$_POST[src]',
    '$_POST[post]'
    
       )");
    ?>
<script type="text/javascript">
alert("successful");
</script>
<?php
    
}
?>

/*

    */
    
 
