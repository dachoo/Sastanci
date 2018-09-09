<html lang="en">


<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!--v stil tabele-->
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
    
    
</head>




<body>

    <!--kreiranje i pozivanje tabele iz baze podataka--> 
<table width="600" border="1" cellspacing="1" >
    
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>ROLE</th>
        <th>ADD</th>
        <th>CHANGE ROLE </th>
        <th>CHANGE ROLE 2</th>
        <th>Delete</th>
        
    </tr>
    
    <?php 
    
    
    
       

     
     $connect=mysqli_connect('localhost','root','','meetings');
     $querry="SELECT * FROM admins";
     $result=mysqli_query($connect,$querry);
     
       
     
    
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $userame=$row['username'];
        $password=$row['password'];
        $role=$row['role'];
        
        
        
        echo "<tr>";
        
        //kreiranje redova u tabeli i stampanje iz baze podataka
         echo "<td>".$id."</td>";
         echo "<td>".$userame."</td>";
         echo "<td>".$password."</td>";
         echo "<td>".$role."</td>";
        //kreiranje linkova Admin ,Suscriber, i delete
         echo "<td><a href='add.php?'><button>ADD</button></a></td>";
         echo "<td><a href='admin_table.php?change_to_admin={$id}'><button>Admin</button></a></td>";
         echo "<td><a href='admin_table.php?change_to_sub={$id}'><button>Subscriber</button></a></td>";
         echo  "<td><a href='admin_table.php?delete=$id'><button>Delete</button></a></td>";
        
         
        
    
    
   

        
        echo "</tr>";
        
        
    }
     
   
     
   
?>
 
  
 <!--omogucavanje administratoru da korisniku promijeni da li je admin ili preplatnik 
             
             preko globalne varijabile $_GET[]
             --> 
              
<?php

if(isset($_GET['change_to_admin'])) {
    $connect=mysqli_connect('localhost','root','','meetings');
    
    $the_admin_id = $_GET['change_to_admin'];
    
    $query = "UPDATE admins SET role = 'admin' WHERE id = $the_admin_id   ";
    $change_to_admin_query = mysqli_query($connect, $query);
    
   
    
    
    
}





if(isset($_GET['change_to_sub'])){
    
    $the_admin_id =$_GET['change_to_sub'];
    

    $query = "UPDATE admins SET role = 'subscriber' WHERE id = $the_admin_id   ";
    $change_to_sub_query = mysqli_query($connect, $query);
 
    
    
    
    
}
    //brisanje podataka iz tabele
    
    
if(isset($_GET['delete'])){
        
        $delete_id=$_GET['delete'];
        $delete_query="DELETE FROM admins WHERE id=$delete_id";
        $the_delete_query=mysqli_query($connect,$delete_query);
        
    
    }

?>
 <h3><center><a href="admin_index.php"><button>Nazad na admin stranu</button></a></center></h3>
  
  
   