

<!DOCTYPE html>
<html lang="en">
<head>
   
   
   <script>
    
     function praznopolje(){
         if(document.getElementById('fusername').value=="")
            {
            
            alert('Morate unijeti sve podatke');
            return false;
            }
          if(document.getElementById('fpassword').value=="")
            {
            
            alert('Morate unijeti sve podatke');
            return false;
            }
         
          
       
     }
    
    
    </script>
   
   <style>
    
    
        body{
            
            font-family: fantasy;
            font-size: 11pt;
            background-image:url(old-trafford-manchester-united-sir-alex-ferguson-stand-1407677328.jpg);
            background-size: cover;
            background-attachment: fixed;
            
        }
        table {
        /* da tabela zauzme 80 % stranice*/  
            
            width: 80%;
        }
        
        table,th,td
        
        
        {/*kreiranje oblika tabele*/
            
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        
        th,td
        { /*velicina kolona i redova takodje da se tekst u koloni i redu budu na centru*/
            padding: 10px;
            text-align: center;
            
        }
        th
        {
            background-color: aqua;/*pozadina*/
            color: white;/* boja slova*/
            
        }
        
        tr
        {
            background-color: gray;
            
            color: black;
            
        }
    
    
    </style>
   
   
   <!-- Ukljucivanje BOOSTRAP-a radi stilizovanja forme-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    
<!-- Kreiranje forme za dodavanje korisnika-->
   
   <div class="container">
       
       <div class="col-sm-6" >
           
           <form action="add.php" method="post" enctype="multipart/form-data" onsubmit="return praznopolje() ">
               <div class="form-group">
                   
                   <input id="fusername" type="username" name="username" placeholder="Unesi korisnicko ime" class="form-control">
                   
                   
                   
               </div>
               
               
               
                 <div class="form-group">
                   
                   <input id="fpassword" type="password" name="password" placeholder="Unesi lozinku" class="form-control">
                   
                   
                   
               </div>
                 <div class="form-group">
                   
          <select name="role">
              
            <option value="admin">admin</option>
            <option value="suscriber">suscriber</option>
            
             
              
              
              
              
              
              
          </select>
                   
                   
                   
               </div>
               
               <input class="btn btn-primary" type="submit" name="submit" value="Unesi novog korisnika">
           
           </form>   
           
           
       </div>
       
       
   </div>
    
<?php
//realizacija dugmeta Unesi novog korisnika preko globalne varijabile                     

if(isset($_POST['submit'])){
    
    
    
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
    
    
    $connection=mysqli_connect('localhost','root','','meetings');
    
    $query="INSERT INTO admins(username,password,role) VALUES ('$username','$password','$role')";
    
    $result=mysqli_query($connection,$query);
    
    //ukljucivanje linka nakon sto se unese korisnik u tabelu
    
   echo "<h3>Korisnik je kreiran:</h3> " . " " . "<a href='admin_table.php'><h3>Pogledati tabelu</h3></a> "; 
    
    
}
       
       
    
?>
    
    
</body>
</html>




            
           
            
            

       
       
       
    
             
      
     