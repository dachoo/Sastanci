<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   
   
   <style>
       
      body
      {
      
        margin: 0;
        padding: 0;
        color: gold;
        font-size: 15px;
     }
       
       header
       { /*stilizovanje hedera visina,sirina,pozicija,pozadina*/
           height:100px;
           position: fixed;
           background: yellow;
           width: 100%; 
           border-bottom: 1px solid white;
           
           
           
       }
       .logo{
          
           
           
           float: left;
           font-size:15px;
         background-color: yellow;
       }
       
       #nav{
           /*stilizovanje navigacije*/
           font-size: 20px;
           width: 100%;
           height: 40px;
           list-style-type: none;
           text-align:auto;
           background color: yellow;
           
           
       }
       #nav li {
           /* sredjivanje navigacije da bude horizontalna */
           
           
           display: inline-block;
           padding-left: 5px;
           padding-right: 5px;
           background-color: aqua;
       }
       #nav li:hover {
           
           background-color: red;
           
       }
       #nav li a
       
       {
           
           color: white;
           text-decoration: none;
           
           
           
       }
       
       
   </style>
   
   
   
   
   
   
   
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
    <header>
        
      
            
         <h6 id="logo">LOGO HERE</h6>
    
       
            
       <ul id="nav">     
    
    <li><a href="index.php" >Naslovna strana</a></li> 
    <li><a href="menagment.php" >Event Menagment</a></li> 
    <li><a href="clients.php" >Clients</a></li> 
    <li><a href="about.php" >About us</a></li> 
    <li><a href="office.php" >Offices</a></li> 
    <li><a href="conctat.php" >Contacts us</a></li> 
    <li><a href="loginform.php" >Login</a></li> 
     
    
</ul>
            
            
       
        
      
        
    </header>
</body>
</html>