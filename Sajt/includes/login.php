<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   
  <!-- Kreiranje login funkcije  -->
   
<?php
if(isset($_POST['submit'])){
    
    
  $connection=mysqli_connect('localhost','root','','meetings');
    
   
    
    
     $username= $_POST['username'] ;
     $password= $_POST['password'] ;
     $username=mysqli_real_escape_string($connection,$username);//zastita aplikacije
     $password=mysqli_real_escape_string($connection,$password);//takodje zastita
    
    $query="SELECT * FROM admins WHERE  username ='{$username}' ";
    $result=mysqli_query($connection,$query);
    
    if(!$result){
        
        die("Neuspjesno".mysqli_error($connection));
        
        
    }
    
    while($row=mysqli_fetch_assoc($result)){
        
        $data_id =$row['id'];
        $data_username =$row['username'];
        $data_password =$row['password'];
        $data_role =$row['role'];
                

    }
    //pocetak sesije
    session_start();
        $_SESSION['username']=$data_username;
        $_SESSION['password']=$data_password;
        $_SESSION['role']=$data_role;
        $_SESSION['id']=$data_id;
    
    //uslovi za ulogovanje korisnika
    if($username!== $data_username && $password !== $data_password ){
        
      header("Location: ../includes/index.php ");  
      
        
        
    } else if ($username == $data_username && $password == $data_password){
        
    
        
        header("Location: ../includes/admin/admin_index.php ");  
        
    } else {
    
       header("Location: ../includes/index.php ");    
    }

}
    
?>
    
</body>
</html>