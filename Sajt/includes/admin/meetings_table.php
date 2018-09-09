
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Objasnio sam korak po korak u admin_table.php vezano za stil tabele-->
   <style>
    
    
        body{
            
            font-family: fantasy;
            font-size: 11pt;
            background-image:url(old-trafford-manchester-united-sir-alex-ferguson-stand-1407677328.jpg);
            background-size: cover;
            background-attachment: fixed;
            
        }
        table {
            
            
            width: 80%;
        }
        
        table,th,td
        
        
        {
            
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        
        th,td
        {
            padding: 10px;
            text-align: center;
            
        }
        th
        {
            background-color: aqua;
            color: white;
            
        }
        
        tr
        {
            background-color: gray;
            
            color: black;
            
        }
    
    
    </style>
</head>


<body>

     
<table width="600" border="1" cellspacing="1" >
    
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>COMPANY</th>
        <th>E-MAIL</th>
        <th>NUMBER</th>
        <th>DATE</th>
        <th>TIME</th>
        <th>APPROVAL</th>
        <th>APROVE</th>
        <th>UNAPROVE</th>
        <th>DELETE</th>
        
      
            
    </tr>
    
    <?php 
    
    
    
 
     
     $connect=mysqli_connect('localhost','root','','meetings');
     $querry="SELECT * FROM data";
     $result=mysqli_query($connect,$querry);
     
       
     
    
    while($row=mysqli_fetch_assoc($result)){
        //petlja prolazi kroz svaki element u nizu
        $id=$row['id'];
        $name=$row['name'];
        $company=$row['company'];
        $mail=$row['email'];
        $number=$row['number'];
        $date=$row['date'];
        $time=$row['time'];
        $approval=$row['approval'];
        
        //stampanje kolone i redova u tabeli
        echo "<tr>";
        
        
         echo "<td>".$id."</td>";
         echo "<td>".$name."</td>";
         echo "<td>".$company."</td>";
         echo "<td>".$mail."</td>";
         echo "<td>".$number."</td>";
         echo "<td>".$date."</td>";
         echo "<td>".$time."</td>";
         echo "<td>".$approval."</td>";
        //kreiranje linkova za pihvati/odbij/i obrisi
         echo  "<td><a href='meetings_table.php?approve=$id'><button>Approve</button></a></td>";
         echo  "<td><a href='meetings_table.php?unapprove=$id'><button>Unapprove</button></a></td>";
        echo  "<td><a href='meetings_table.php?delete=$id'><button>Delete</button></a></td>";
        
        
    
    
   

        
        echo "</tr>";
        
        
    }
     
   

    

        
        
        
    
?>

   
   <!--preko globalne varijabile GET omogucava se rad gore navedenih linkova-->
   <?php
    
    
        
    if(isset($_GET['approve'])){
        
        $admin_id=$_GET['approve'];
        $approve_query="UPDATE data SET  approval ='approve' WHERE id=  $admin_id";/*mysql komadna koja momogucava da se dozvoli sastanak preko id sastanka koji je u tabeli*/
        $the_approve_query=mysqli_query($connect,$approve_query);
        
        header("Location: meetings_table.php");
      
        
        
    }
    //isto kao i za approve samo funkcija unapprove
        
    if(isset($_GET['unapprove'])){
        
        $admin_id=$_GET['unapprove'];
        $unapprove_query="UPDATE data SET  approval ='unapprove' WHERE id=  $admin_id";
        $the_unapprove_query=mysqli_query($connect,$unapprove_query);
        
        
        header("Location: meetings_table.php");
    }

//omogucavanje delete funkcije

if(isset($_GET['delete'])){
        
        $delete_id=$_GET['delete'];
        $delete_query="DELETE FROM data WHERE id=$delete_id";
        $the_delete_query=mysqli_query($connect,$delete_query);
    header("Location: meetings_table.php");
    
    }

    ?>
    

<h3><center><a href="admin_index.php"><button>Nazad na admin stranu</button></a></center></h3>
    
   
   