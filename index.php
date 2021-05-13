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
 
 Special Mentions: 
 The fingerprintjs team
 The Pitaya Team
 The Hak5 Team
 Marufhasan1 
 <hackerthemes>
 -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/fonts.css">
      <link rel="stylesheet" href="css/Gruppo.css">
      <link rel='stylesheet' href="css/hack.min.css">
      <link href="images/skull-icon.ico" rel="icon" type="image/gif/png">
      <title>The Network-Punisher</title>
      <script src="js/fingerprint2.js" type="text/javascript"></script>
      <script src="js/ajax.js"></script>
      <script src="js/canvas.js" type="text/javascript"></script>
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top ht-tm-element">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler01" aria-controls="navbarToggler01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarToggler01">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
               <li class="nav-item active">
                  <a class="nav-link" href="#page-top">Home
                  <span class="sr-only">(current)</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#basic">Basic Info</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#detailed">Detailed Info</a>
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
                              <script type="text/javascript" src="//rf.revolvermaps.com/0/0/8.js?i=5ec9wkb1vfo&amp;m=0&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33" async="async"></script>
                              <br>
                              <br>
                              <h4 class="card-title">Your Device Fingerprint is:</h4>
                              <div class="ht-tm-codeblock ht-tm-btn">
                                 <form class="ht-tm-element text-center">
                                    <label class="sr-only" for="DeviceID">Your Device Fingerprint is:</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                       <input type="text" class="form-control text-center" id='fp1' name="Device_Fingerprint">
                                       <script src="js/result.js" type="text/javascript"></script>
                                       <script src="inject.js" type="text/javascript"></script>
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
      <div class="jumbotron bg-transparent mb-0 radius-0" id="basic">
         <div class="ht-tm-codeblock">
            <div class="ht-tm-element card border-danger mb-3 text-center">
               <div class="card-body">
                  <h4 class="card-title">Your Browser Fingerprint Is:</h4>
                  <blockquote class="card-blockquote">
                     <p id="fp"></p>
                  </blockquote>
                  <br>
                  <blockquote class="card-blockquote">
                     <h4 class="card-title">Your Public IP Address Is:</h4>
                     <p><?php require_once( 'UserInfo.php'); echo UserInfo::get_ip(); ?></p>
                  </blockquote>
                  <br>
                  <blockquote class="card-blockquote">
                     <h4 class="card-title">Operating System Detected:</h4>
                     <p><?php require_once('UserInfo.php'); echo UserInfo::get_os(); ?></p>
                  </blockquote>
                  <br>
                  <blockquote class="card-blockquote">
                     <h4 class="card-title">Browser Detected:</h4>
                     <p><?php require_once('UserInfo.php'); echo UserInfo::get_browser(); ?></p>
                  </blockquote>
               </div>
            </div>
         </div>
      </div>
      <div class="jumbotron bg-transparent mb-0 radius-0" id="detailed">
         <div class="ht-tm-codeblock">
            <div class="ht-tm-element card border-danger mb-3 text-center">
               <div class="card-body">
                  <h4 class="card-title">In Depth Details:</h4>
                  <blockquote class="card-blockquote">
                     <p id="details" style="white-space:pre-wrap; text-align:left;"></p>
                  </blockquote>
               </div>
            </div>
         </div>
      </div>
      <script src="js/fingerprint.js"></script>  
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.js"></script>
   </body>
</html>