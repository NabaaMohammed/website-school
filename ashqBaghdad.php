<?php
include('navbar.php');
include('connection-ashqbaghdad.php');
include('slide.php');

$find_counter = mysqli_query($link,"SELECT * FROM counter");
while($row = mysqli_fetch_assoc($find_counter))
{
    $current_counter = $row['visiter_counter'];
    $new_counter = $current_counter+1;
    //mysqli_query($link,"UPDATE add_book SET available_qty = available_qty-1 WHERE books_name ='$_POST[book_name]'")or die("Query failed: " . mysqli_error());

    $update_counter = mysqli_query($link,"UPDATE counter  SET visiter_counter = $new_counter")or die("Query failed: "  );

}

?>


    
    <!--start section news-->
<!-- Start Section post -->
		  <section class="post">
		  <div   class="share_person">
		  <img class="img-circle" src="image/2.jpg" height="100px" width="100px"> <b>school </b>
            
              
		 <?php 
              $timezone = date_default_timezone_get();
              date_default_timezone_set('Asia/Baghdad');
$date = date('m/d/Y h:i:s a', time());
              echo "<div>"; echo $date; echo "</div>";  
              $res=mysqli_query($link,"select *from  Admin");     
              while($row=mysqli_fetch_assoc($res))
              {
                                        
              echo "<p>"; echo $row["post"];  echo "</p>"; 
              }
              ?>
		  <div  id="date" class="share_person"></div>
		  
        <?php 
             $res=mysqli_query($link,"select *from  Admin");     
              while($row=mysqli_fetch_array($res))
              {
                  ?>
              <img class="img-responsive center-block wow bounceIn"  src="
              <?php
                  echo $row['image_share'];
               ?>
   " width="1000px" height="1000" alt="Pic 1">
		  </div>
              <?php  } ?>
		  </section>
		<!-- End section post -->
    <!--end section news-->


        <!--start slide-->
<!--
<section class="grid ">
<div class="container">
<div class="row wow bounceIn">
    <h3 class="wow bounceIn">announcement</h3>
    <div class="col-lg-4 slide wow bounceIn">
    <img src="image/1slide.jpg"  class="img-responsive">
    </div>
    
    <div class="col-lg-4 slide wow bounceIn">
    <img src="image/2slide.jpg" class="img-responsive">
    </div>
    
        
    <div class="col-lg-4 slide wow bounceIn">
    <img src="image/7slide.jpg" class="img-responsive">
    </div>
    
    
    
    </div>    
</div>
       
</section>
        <!--end slide-->

        
        
        
        <!-- Start Section Stats -->
        
      <!--  <section class="statistics text-center wow rotateInUpRight">
            <div class="data">
                <div class="container">
                    <h2 class="h1">The First Scientific edifice in Iraq that contain </h2>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="image/labrotary.png" width="50px" height="50px">
                                <p>3</p>
                                <span>laboratories</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                 <img src="image/stage.png" width="50px" height="50px">
                                <p>1</p>  
                                <span>Stage</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                 <img src="image/cinema.jpg" width="50px" height="50px">
                                <p>3</p> 
                                <span>Cinema</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="image/class.png" width="50px" height="50px">
                                <p>76 </p>
                                
                                <span>Class</span>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
        </section>-->
        
        <!-- End Section Stats -->
    
        


<script type="text/javascript">
    $(function() {
        $(document).on("keypress", "div[data-defaultButton]", function(e) {
            if (e.keyCode == '13') {
                $(this).find('#' + $(this).attr('data-defaultButton')).click();
                return false;
            }
        });
    });
</script>

		    
		</form>
		<!--start counter section-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  number of visitor
</button>


        <!-- Start Testimonials Section -->
        
        <section class="testimonials text-center wow flipInY" data-wow-duration="1s" data-wow-offset="200">
            
           
            
        </section>
        
        <!-- End Testimonials Section -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
          <div class="row">
              <div class="col-lg-3">
              <img src="image/wel.jpg" width="177px" height="175px" class="img-circle img responsive">
              </div>
         <div class="col-lg-3">  <?php echo"<h3> <br>"; echo "the number of visitor: ". $new_counter; echo "</h3>";?></div>     
         </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--start overloading-->
<div  class="loading-overlay">
    
  
    <img src="image/overload.jpg" style="vertical-align: middle; position: absolute; top: 183px; left: 470px;">

</div>
<!--end overloading-->
<button class="remove1" style="position: absolute; left: 1163px; top: 101px; background: black; color: white;  border-radius: 50%;  font-size: 62px; width: 85px; z-index: 999999;" >X</button>

		<!--start counter section-->
    </body>
    <script src="js/ashqbaghdad.js"></script>
<script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
</html>
