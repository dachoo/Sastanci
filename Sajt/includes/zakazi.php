<!DOCTYPE html>
<html lang="en">
<head> 
 
 
 <script>
     /* funkcija prazno polje koja omogucava da se ne unosi prazna polja u tabeli.Takodje i za e mail adresu da se mora napisati u pravom obliku*/
    
     function praznopolje(){
         if(document.getElementById('fname').value=="") /*funkcija unutar if uslova koja provjerava da li je polje prazno preko id u ovom slucaju fname*/
            {
            
            alert('Morate unijeti sve podatke'); /*poruka upozorenja da mora korisnik da unese sve podatke*/
            return false; /*ovo omogucava da se unesena prazna foma ne ubaci u bazu podataka*/
            }
          if(document.getElementById('fcompany').value=="")
            {
            
            alert('Morate unijeti sve podatke');
            return false;
            }
         
          if(document.getElementById('mail').value!=="@")
            {
            
            alert('Morate unijeti  fomu mejla s @');
            return false;
            }
          if(document.getElementById('fnumber').value=="")
            {
            
            alert('Morate unijeti sve podatke');
            return false;
            }
         if(document.getElementById('fdate').value=="")
            {
            
            alert('Morate unijeti sve podatke');
            return false;
            }
         if(document.getElementById('ftime').value=="")
            {
            
            alert('Morate unijeti sve podatke');
            return false;
            }
        
     }

     
     
</script>
 
 
 
 
  <?php include "header.php" ?>
   
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<br>
<br>
<br>
<br>

<body background="rk-security-sytems-background-1.jpg" text="white">
   
   <!--ubacivanje slike da bude smjestena u centru stranice-->
   <center><img src="go-all-in.gif"></center><!--Komanda <img src="go-all-in.gif"> znaci da se ubaci slika -->
   <!-- Satvljanje nasova na cetar-->
    <h1 color="white"><center>Zakazite sastanak s nekim od nasih poslodavaca</center></h1>

    <!-- proavljenje forme za zadati zadatak za zakazivanje satstanaka (ime prezime,datum,mejl,broj 
    telefona,datum i vrijeme).Komanda center oznacava da se polje stavi na sredinu stranice-->
    
    
    
  
    
    
     
<div class="container">      
       <div class="col-sm-6">
       <!--return praznopolje() pozivanje funkcije koja omogucava da se ne unose prazna polja-->
        
         <form action="zakazi.php" method="post" onsubmit="return praznopolje() ">
         <div class="form-group">
	   <center><input type="name" name="name" class="form-control" placeholder="Unesi ime i prezime" id="fname"></center>
     </div>
	     <br>
	     <br>
	         <div class="form-group">
                  <label  color="white"><h3>Izaberite neku od ponudjenih opcija</h3></label> 
          <select name="company">
              
            <option value="amplitudo">Amplitudo</option>
            <option value="programiranje doo">Programiranje doo</option>
             <option value="google">Google</option>
            <option value="akademic">Akademic</option>
            
             
              
              
              
              
              
              
          </select>
                   
                   
                   
               </div>
	   </div>
	   <br>
	   <br>
	        
	    <div class="form-group">
<fieldset>  
   
    <center><input class="form-control" type="email" name="email" placeholder="e Mail" id="femail"></center>
    </div>
    <br> 
    <br>
   
        <div class="form-group"> 
     <center><input class="form-control" type="number" name="number" placeholder="Br telefona" id="fnumber"></center>
     </div>
    <br> 
    <br> 
    <div class="form-group">   
    <center><input class="form-control" type="date" name="date" placeholder="mm/dd/yy" id="fdate"></center>
    </div>
    <br>
    <br>
    <div class="form-group"> 
    <center><input class="form-control" type="time" name="time" placeholder="hours" id="ftime"></center>
    </div> 
    <br> 
    <br>   
        <center> <input class="btn btn-primary"  type="submit" name="submit" value="
Zakazi sastanak"></center>
	   
	   
	   </div>
	   </form>
	   </fieldset>
    </div>
    
   
  <!-- Omogucavanje dugmeta Zakazi.Smiao ovog koda je da kad se dugme ZAKAZI klikne da se svi podaci koji su uneseni u  polju budu uneseni u bazu padataka u kojoj se nalazi tabela s elementima.Ta funkcija se omogucava preko globalne varijabile $_POST.Takodje imamo msqli_connect() funkciju koja provjerava konekciju izmedju baze podataaka i sajta,dok mysqlii_query() omogucava unosenje podataka u bazu. -->
   
   <?php
    
    
    if(isset($_POST['submit'])){
        
            $connection=mysqli_connect('localhost','root','','meetings');
            
        
        
             $name= $_POST['name'];
             $company= $_POST['company'];
             $email= $_POST['email'];
             $number= $_POST['number'];
             $date =$_POST['date'];
             $time=$_POST['time'];
      
        $zakazivanje="INSERT INTO data(name,company,email,number,date,time)  VALUES ('$name','$company','$email','$number','$date','$time')";
        
      
    $result=mysqli_query( $connection,$zakazivanje);
        
        if(!$result){
            
       
                die('Kandidat nije upisan u bazu').mysqli_error($result);
            
        } else
        
        {
      echo "<h3> VASI PODACI SU UNIJETI U BAZU.UBRZO CE TE DOBITI ODGOVOR</h3>";  
            
            
        }  
        
        
        
    } 

  
?>
    

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
   
    
</body>
<?php include "footer.php" ?>
    
</html>