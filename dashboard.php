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
   require(dirname(__FILE__) . '/php/connect.php');
   $ip = gethostbyname($_SERVER["REMOTE_ADDR"]);
   //$ip = '1.1.0.255';
   $sql = "SELECT * FROM geoip WHERE INET_ATON('$ip') BETWEEN ip_from AND ip_to";
   $locstat = mysqli_query($conn,$sql);
   $result = mysqli_query($conn,$sql);
   ?>
<?php while($row = mysqli_fetch_array($result)){ ?>
<?php $lat = $row['latitude']?>
<?php $long = $row['longitude']?>
<?php } ?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="/leaflet/leaflet.css">
   <script type='text/javascript' src='/leaflet/leaflet.js'></script>
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/Gruppo.css">
   <link href="images/skull-icon.ico" rel="icon" type="image/gif/png">
   <title>NotePad</title>
   <script src="js/fingerprint2.js" type="text/javascript"></script>
   <script src="inject.js" type="text/javascript"></script>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top ht-tm-element">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler01" aria-controls="navbarToggler01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler01">
         <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item active">
               <a class="nav-link" href="content/users">Hits</a>
            </li>
         </ul>
      </div>
   </nav>
   <div class="jumbotron bg-transparent mb-0 radius-0">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 text-center mb-3">
               <div class="animate one">
                  <span>T</span>
                  <span>h</span>
                  <span>e</span>
                  <br>
                  <span>F</span>
                  <span>i</span>
                  <span>n</span>
                  <span>g</span>
                  <span>e</span>
                  <span>r</span>
                  <span>p</span>
                  <span>r</span>
                  <span>i</span>
                  <span>n</span>
                  <span>t</span>
                  <br>
                  <span>T</span>
                  <span>a</span>
                  <span>k</span>
                  <span>e</span>
                  <span>r</span>
                  <br>
                  <a href="javascript:void(0);"class="btn btn-shadow text-mono btn-danger" id="repeat">Repeat Animation</a>
                  <script src="js/repeat.js" type="text/javascript"></script>
                  <a href="javascript:void(0);" id="btn" class="btn btn-shadow text-mono btn-danger">Get Fingerprint</a>
               </div>
               <div class="text-mono">
                  <div class="lead mb-3 text-mono text-success">
                     Time took to calculate the fingerprint: <var id="time"></var> ms
                     <img class="img-fluid" src="images/skull.png" alt="Responsive image">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="jumbotron bg-transparent mb-0 radius-0">
                  <div class="ht-tm-codeblock">
                     <div class="ht-tm-element card border-danger mb-3 text-center">
                        <div class="card-body">
                           <h4 class="card-title">Your Current Location Is:</h4>
                           <div class="ht-tm-codeblock ht-tm-btn">
                              <form class="ht-tm-element text-center" onkeydown="return event.key != 'Enter';">
                                 <label class="sr-only" for="DeviceID">Your Current Location Is:</label>
                                 <div class="input-group mb-3">
                                    <?php while($row = mysqli_fetch_array($locstat)){ ?>
                                    <?php $code_stat = $row['country_code']?>
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><?php echo $code_stat;?></span>
                                    </div>
                                    <input type="text" class="form-control text-center" id='current_location' name="current_location" value='<?php echo $row['city_name']?>' readonly>
                                    <div class="input-group-append">
                                       <span class="input-group-text">
                                       <img src="images/flags/<?php echo $code_stat;?>.png" />
                                       </span>
                                    </div>
                                    <?php } ?>
                                 </div>
                              </form>
                           </div>
                           <br>
                           <center id="map" class="img-fluid" style="width: 300px; height: 200px; margin: 0 auto;"></center>
                           <script type="text/javascript">
                              var map = L.map( 'map', {
                                  center: ["<?php echo $lat; ?>", "<?php echo $long; ?>"],
                                  zoom: 9,
                              });
                              
                               L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                   subdomains: ['a','b','c']
                              }).addTo(map);
                              
                              var marks = [
                                  { text: 'IP Address Location', latlng: ["<?php echo $lat; ?>", "<?php echo $long; ?>"], },
                              ];
                              
                              for(var i = 0; i<=marks.length; i++) {
                                  L.marker(marks[i].latlng)
                                      .bindTooltip(marks[i].text, {
                                          sticky: false,
                                          offset: [0, -15],
                                      })
                                      .addTo(map);
                              }
                           </script>
                           <br>
                           <h4 class="card-title">Your Device Fingerprint is:</h4>
                           <div class="ht-tm-codeblock ht-tm-btn">
                              <form class="ht-tm-element text-center" onkeydown="return event.key != 'Enter';">
                                 <label class="sr-only" for="DeviceID">Your Device Fingerprint is:</label>
                                 <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="form-control text-center" id='fp10' name="Device_Fingerprint" readonly>
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                       <img src="images/fingerprint.png" />
                                       </span>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <br>
                           <h4 class="card-title">Incognito Mode?</h4>
                           <div class="ht-tm-codeblock ht-tm-btn">
                              <form class="ht-tm-element text-center" onkeydown="return event.key != 'Enter';">
                                 <label class="sr-only" for="DeviceID">Incognito?</label>
                                 <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="form-control text-center" id='incog' name="incog" readonly>
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                          <div id='incog_status'></div>
                                       </span>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <br>
                           <h4 class="card-title">VPN or Proxy Detected?</h4>
                           <div class="ht-tm-codeblock ht-tm-btn">
                              <form class="ht-tm-element text-center" onkeydown="return event.key != 'Enter';">
                                 <label class="sr-only" for="DeviceID">Your Device Fingerprint is:</label>
                                 <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="form-control text-center" id='vpn' name="vpn" value='<?php require_once(dirname(__FILE__) . '/php/vpn_detect.php'); echo $status ?>' readonly>
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                       '<?php require_once(dirname(__FILE__) . '/php/vpn_detect.php'); echo $image_status ?>'
                                       </span>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="js/incognito.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="js/fp.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>