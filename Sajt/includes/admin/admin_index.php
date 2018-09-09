<?php include "admin_header.php"  ?>

    <div id="wrapper">

        <!-- Navigation -->
     
       
     <?php include "admin_navigation.php" ?>  
       
       
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dobro dosli na admin stranicu
                            <small><?php 
    echo $_SESSION['username']; ?></small><!-- iskoriscavanje sesije da se upise korisnicko ime-->
                        </h1>
                        


 
               
   
   
   
 
                    </div>
                </div>
                <!-- /.row -->

           
           
           
           
           
           
           
                  
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
            
                    <!-- Da se prikaze na pozadinu koliko sastanaka ima u bazi
                    
                    to omogucava funkcija mysqli_num_rows();-->
                    <?php
                        
                    $query="SELECT * FROM data ";
                        
                        $result=mysqli_query($connection,$query);
                        
                        $number=mysqli_num_rows($result);
                    
                    echo    "<div class='huge'>{$number}</div>";
                        
                        
                ?>
                    
                        <div>Sastanci</div></div>
                    </div>
                </div>
            </div>
            <a href="meetings_table.php"><!-- ovdje se ukljucuje link s tabelom sastanaka-->
                <div class="panel-footer">
                    <span class="pull-left">Tabela sastanaka</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    <!-- ista situacija kao predhodno samo za tabelu admins koja se nalazi u bazi podataka-->
                    <?php
                        
                    $query="SELECT * FROM admins ";
                        
                        $result=mysqli_query($connection,$query);
                        
                        $users=mysqli_num_rows($result);
                    
                    echo    "<div class='huge'>{$users}</div>";
                        
                        
                ?>
                        <div> Korisnici aplikacije</div>
                    </div>
                </div>
            </div> 
            <a href="admin_table.php"><!--ukljucivanje admin tabele u navigaciji -->
                <div class="panel-footer">
                    <span class="pull-left">Tabela korisnika</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        
                    $query="SELECT * FROM posts ";
                        
                        $result=mysqli_query($connection,$query);
                        
                        $new=mysqli_num_rows($result);
                    
                    echo    "<div class='huge'>{$new}</div>"
                        
                        
                ?>
                        
                         <div>Dodavanje korisnika</div>
                    </div>
                </div>
            </div>
            <a href="add.php">
                <div class="panel-footer">
                    <span class="pull-left">Tabela novih korisnika</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
           
           
           
           
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->




    

<?php include "admin_footer.php"  ?>
