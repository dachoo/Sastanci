
           

             
              <html>
              <style>
                  
                  
                  body {      
            height:100px;
           position: fixed;
           background: gray;
           width: 100%; 
           border-bottom: 1px solid white;
                }  
            </style>
              <body>
                  <!-- ukljcivanje Boostrapa da bi foma ljepse izgledala-->
    
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
               
            
                

                <!-- Login for administrator (forma) -->
              
                   <h4>Registracija za administratore</h4>
                   <br>
                
                   <form action="login.php" method="post">
                    
                        <label>Korisnicko ime:</label>
                        <br>
                        <input type="username" name="username"  placeholder="Unesite korisnicko ime">
                       <br>
                       <br>
                    
                        <label >Lozinka:</label>
                        <br>
                        <input type="password" name="password" placeholder="Unesite lozinku">
                            <input  class="btn btn-primary" name="submit" type="submit" value="Uloguj se">
                            
                        
                    
                       
                    </form>
                </div>

           </div>
           </body>
</html>