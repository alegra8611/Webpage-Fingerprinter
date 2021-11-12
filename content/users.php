<!--                                                                  
              DMMMMMMD                 
           MMMMMMMMMMMMMMMM             
         MMMMMMMMMMMMMMMMMMMM           
        MMMMMMMMMMMMMMMMMMMMMM.         
      MMMMMMMMMMMMMMMMMMMMMMMMMM        
     MMMMMMMMMMMMMMMMMMMMMMMMMMMM       
    .MMMMMMMMMMMMMMMMMMMMMMMMMMMM       
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMM      
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMM      
    MM+  MMMMMMMMMMMMMMMMMMMM$  MM      
    +M.    ZMMMMMMMMMMMMMMO     M       
     MM       MMMMMMMMMM       MM       
     MMD         MMMM.        .MM       
      MMMMMM    MMM=MMI   DMMMMM        
       MMMMMMMMMMM  +MMMMMMMMMMM        
      MMMMMMMMMMM 8M MMMMMMMMMMMD       
      MMMMM   MMM.MM MMMM    MMM        
       MMM7   MMMMMMMMMMM    M8         
              MM MM M MMM               
              MM MM,M MM                
              MM.MM=M MM                
              MM~MM+M MM                
              8M~MM+M MM                
              ,M~MMIM MM                
               M:MMZM MM                
               M.MMIM MM 

 Author: Alegra
 -->
      
<?php
   require(dirname(__FILE__) . '/../php/connect.php'); 
   $sql = "SELECT * FROM recon ORDER BY time_created";
   $result = mysqli_query($conn,$sql);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="../css/styles.css">
      <link rel="stylesheet" href="../css/Gruppo.css">
      <link href="../images/skull-icon.ico" rel="icon" type="image/gif/png">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <title>User Logins</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top ht-tm-element">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler01" aria-controls="navbarToggler01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarToggler01">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
               <li class="nav-item active">
       <a class="nav-link" href="../dashboard">Home</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="jumbotron bg-transparent mb-0 radius-0" id="basic">
         <div class="ht-tm-codeblock">
            <div class="ht-tm-element card border-danger mb-3 text-center">
               <h1 class="card-title text-center">Page Hits</h1>
               <div class="card-body">
                <div class="table-responsive" style="text-align: left;">
                  <table class="card-table table" >
                     <thead class="thead-dark">
                        <tr>
                           <th scope="col">Device Fingerprint</th>
                           <th scope="col">IP Address</th>
                           <th scope="col">Operating System</th>
                           <th scope="col">Browser</th>
                           <th scope="col">Location</th>
                           <th scope="col"></th>
                           <th scope="col">Incognito</th>
                           <th scope="col">VPN Detection</th>
                           <th scope="col">Last Hit</th>
                           <th scope="col">Total Hits</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php while($row = mysqli_fetch_array($result)){ ?>

                        <tr>
                           <td><?php echo $row['Device_Fingerprint']; ?></td>
                           <td><?php echo $row['ipAddress']; ?></td>
                           <td><?php echo $row['Operating_System']; ?></td>
                           <td><?php echo $row['Browser']; ?></td>
                           <td><?php echo $row['location']; ?></td>
                           <td> <?php echo '<img src="data:image/png;base64,'.base64_encode($row['country_flag']).'"/>' ?> </td>
                           <td><?php echo $row['incognitos']; ?></td>
                           <td><?php echo $row['vpn_detect']; ?></td>
                           <td><?php echo $row['time_created']; ?></td>
                           <td><?php echo $row['hits_total']; ?></td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                </div>
                    <button onclick="tableToCSV()" class="btn btn-shadow text-mono btn-danger">Download CSV File</button>
                    <script src="../js/csv.js"></script>
               </div>
            </div>
         </div>
      </div> 

                            
      <div class="container" style="padding-top: 10px">
         <center><img class="img-fluid" src="../images/skull.png" alt="Responsive image"></center>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   </body>
</html>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
