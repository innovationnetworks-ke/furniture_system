 <?php
include "connection.php";
if(!isset($_SESSION['acct_id'])){
echo '<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#"> <center><strong>Dashboard</strong></center></a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol> 


          <div id="team-section">
  <div class="container"> 
    <div class="section-title">
    <h4 style="text-center">WELCOME TO NAIROBI FURNITURES</h4>
    <hr>
   
    </div>
    <div class="row">
         
 <div class="col-lg-12">
         <div class="row">
            <div class="col-md-4 col-sm-6">    
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/cabinet.jpg" alt="..." style="width:100%"> 
                        </span>
                    </div>
                 
                    <div class="panel-body">
                        <h4>Cabinet</h4>
                        <p>price:Ksh 13,000</p>
                        <button class="btn btn-primary"> <a href="pos.php" style="text-decoration:none; color:white !important;"> SHOP NOW</a></button>
                   
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            
                         <img src="theme/carousel/wooden chair.jpg" alt="..." style="width:100%">
                        </span>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Wooden Chair</h4>
                        <p>price:Ksh 1000</p>
                        <button class="btn btn-primary"> <a href="pos.php" style="text-decoration:none; color:white !important;"> SHOP NOW</a></button>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                             <img src="theme/carousel/stol.jp g" alt="..." style="width:100%">
                                  </span>
                                    </div>
                    <div class="panel-body">
                        <h4>Stool</h4>
                        <p>price:Ksh 850</p>
                        <button class="btn btn-primary"> <a href="pos.php" style="text-decoration:none; color:white !important;"> SHOP NOW</a></button>

                         </div>
                    </div>
                    </div>

                           <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/sofa.jpg" alt="..." style="width:100%">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Sofa</h4>
                        <p>price:Ksh 15,000</p>
                        <button class="btn btn-primary"> <a href="pos.php" style="text-decoration:none; color:white !important;"> SHOP NOW</a></button>
                        
                    </div>

                </div>
                </div>
                <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/wooden table.jpg" alt="..." style="width:100%">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Wooden Table</h4>
                        <p>price:Ksh 4,000</p>
                        <button class="btn btn-primary"> <a href="pos.php" style="text-decoration:none; color:white !important;"> SHOP NOW</a></button>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/bed.jpg" alt="..." style="width:100%">
                        </span>

                    </div>
                    <div class="panel-body">
                        <h4>Bed</h4>
                        <p>price:Ksh 10,000</p>
                        <button class="btn btn-primary"> <a href="pos.php" style="text-decoration:none; color:white !important;"> SHOP NOW</a></button>
                       

          </div>
      </div>
    </div>
</div>
</div>
</div>';
}else{
   
echo'
 <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#"> <center><strong>Dashboard</strong></center></a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol> 


          <div id="team-section">
  <div class="container"> 
    <div class="section-title">
       <marquee behavior="alternate"><h3>ADD TO CART</h3></marquee>
      <hr>
   
    </div>
    <div class="row">
         
 <div class="col-lg-12">
         <div class="row">
            <div class="col-md-4 col-sm-6">    
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/cabinet.jpg" alt="..." style="width:100%"> 
                        </span>
                    </div>
                 
                    <div class="panel-body">
                        <h4>Cabinet</h4>
                        <p>price:Ksh 13,000</p>
                        <p>max member:1</p>
                        <a href="pos.php" class="btn btn-primary">ADD TO CART!</a>
                   
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            
                         <img src="theme/carousel/wooden chair.jpg" alt="..." style="width:100%">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Wooden Chair</h4>
                        <p>price:Ksh 1000</p>
                        <p>max member:2</p>
                        <a href="newres.php" class="btn btn-primary">ADD TO CART!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                             <img src="theme/carousel/stol.jpg" alt="..." style="width:100%">
                                  </span>
                                    </div>
                    <div class="panel-body">
                        <h4>Stool</h4>
                        <p>price:Ksh 850</p>
                        <p>max member:4</p>
                        <a href="newres.php" class="btn btn-primary">ADD TO CART!</a>
                         </div>
                    </div>
                    </div>

                           <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/sofa.jpg" alt="..." style="width:100%">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Sofa</h4>
                        <p>price:15,000</p>
                        <p>max member:5</p>
                        <a href="newres.php" class="btn btn-primary">ADD TO CART!</a>
                    </div>

                </div>
                </div>
                <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/wooden table.jpg" alt="..." style="width:100%">
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Wooden Table</h4>
                        <p>price:Ksh 3,000</p>
                        <p>max member:3</p>
                        <a href="newres.php" class="btn btn-primary">ADD TO CART!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            <img src="theme/carousel/bed.jpg" alt="..." style="width:100%">
                        </span>

                    </div>
                    <div class="panel-body">
                        <h4>Bed</h4>
                        <p>price: Ksh 10,000</p>
                        <p>max member:6</p>
                        <a href="newres.php" class="btn btn-primary">ADD TO CART!</a>

          </div>
      </div>
    </div>
</div>
</div>
</div>';
}
?>

  
  <!-- carousel image slider -->

<!--  <div class="container--head">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->
    
    <!-- Indicators -->
<!--     <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol> -->

    <!-- Wrapper for slides -->
<!-- <br>
    <img src="/fixnmix/images/bg2.jpg" height="150px" style="-webkit-border-radius:5px; -moz-border-radius:5px;" alt="Image">
   <div class="carousel-inner">
      <div class="item active">
        <br/>
        <img src="theme/carousel/ab.jpg" alt="..." style="width:100%">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="theme/carousel/client.jpg" alt="..." style="width:100%">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="theme/carousel/front2.jpg" alt="..." style="width:100%">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="theme/carousel/oders.jpg" alt="..." style="width:100%">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="theme/carousel/odetails.jpg" alt="..." style="width:100%" >
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="theme/carousel/ship1.jpg" alt="..." style="width:100%">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="theme/carousel/suply.jpg" alt="..." style="width:100%">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
 -->
    <!-- Controls -->
   <!--  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="fas fa-fw fa-chevron-left" style="padding: 250px 10px 10px 10px"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="fas fa-fw fa-chevron-right" style="padding: 260px 10px 10px 10px"></span>
    </a>
  </div>
</div> -->

<!-- Fontawesome -->
<!-- <link href=css/font-awesome.min.css" rel="stylesheet"> -->

<!-- Bootstrap -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/indexes.js"></script> -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="js/1jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="js/bootstrap.min.js"></script>
<br>
<br> -->





