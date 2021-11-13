                  
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
      <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
      <script>
         $(document).ready(function() {
                     $('#table_id').DataTable({
         
                         dom: 'Bfrtip',
                         responsive: true,
                         pageLength: 25,
                         // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
         
                         buttons: [
                             'copy', 'csv', 'excel', 'pdf', 'print'
                         ]
         
                     });
                 });    
             
      </script>

      <script>
         window.console = window.console || function(t) {};
      </script>
      <script>
         if (document.location.search.match(/type=embed/gi)) {
           window.parent.postMessage("resize", "*");
         }
      </script>
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
                  <div class="table-responsive overflow-hidden" style="text-align: left;">
                     <table class="card-table table" id="table_id">
                        <thead class="thead-dark">
                           <tr>
                              <th>Device Fingerprint</th>
                              <th>IP Address</th>
                              <th>OS Detected</th>
                              <th>Browser</th>
                              <th>Location</th>
                              <th></th>
                              <th>Incognito</th>
                              <th>VPN Detection</th>
                              <th>Last Hit</th>
                              <th>Total Hits</th>
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
                           <?php } mysqli_close($conn); ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container" style="padding-top: 10px">
         <center><img class="img-fluid" src="../images/skull.png" alt="Responsive image"></center>
      </div>
      <script src='https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js'></script>
      <script id="rendered-js" >
         //$("td,th")
         $("td:first-child,td:nth-child(2),td:nth-child(3),td:nth-child(4),td:nth-child(5),td:nth-child(6),td:nth-child(7),td:nth-child(8),td:nth-child(9),td:nth-child(10),th:first-child,th:nth-child(2),th:nth-child(3),th:nth-child(4),th:nth-child(5),th:nth-child(6),th:nth-child(7),th:nth-child(8),th:nth-child(9),th:nth-child(10)").
         css({
           /* required to allow resizer embedding */
           position: "relative" })
         
         /* check .resizer CSS */.
         prepend("<div class='resizer'></div>").
         resizable({
           resizeHeight: false,
           // we use the column as handle and filter
           // by the contained .resizer element
           handleSelector: "",
           onDragStart: function (e, $el, opt) {
             // only drag resizer
             if (!$(e.target).hasClass("resizer"))
             return false;
             return true;
           } });
         //# sourceURL=pen.js
             
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   </body>
</html>  
                           
