<?php
      require "phpmailer/PHPMailerAutoload.php";
       require "phpmailer/class.smtp.php";
   
if(isset($_POST['submit'])){
    
       $mail= new PHPMailer();       
       $mail->isSMTP();
    
        $mail->Host='smtp.gmail.com';
        $mail->Port='587';  
        $mail->SMTPSecure ='tls';
        $mail->SMTPAuth=true;
       
       $mail->Username='editor.actse@gmail.com';
       $mail->Password='actse2020';
       
       $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress($_POST['email']);
       
       $mail->IsHTML(true);
       $mail->Subject="Form Submission: " .$_POST['subject'];
       $mail->Body="<h2 algin=center>NAME:" .$_POST['name']. "<br> EMAIL: ".$_POST['email']."<br> MESSAGE:" .$_POST['subject']."</h2>";
        

       if($mail->send()){
             echo 'Message has been sent';
           }
       else{ 
          echo "Something went wrong. Please Try Again.{$mail->ErrorInfo}";
       }
   } 

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ACTSE 2020 | Amity University</title>
  <link rel = "icon"  href="img/company_logo3.jpg" type = "image/x-icon">    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="css/style.css" rel="stylesheet">  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    

    
</head>
<body>
<header id="header">
    <div class="containerh">
     <div class="logo">
         <img src="img/Amity_University_logo.png" height="80px" width="65px">
     </div>
     <div class="intro-info">
        <center>   
            <h2><b>International Conference on <br>Advanced Computational Techniques in Science and Engineering <br> <span>[18th & 19th March 2020]</span></b></h2></center>
         </div>    
     <div class="clogo">
         <img src="img/company_logo.jpg">
     </div>    
    </div>
</header> 
  
<!--========= NAV BAR======================-->
<div class="desktop-nav">    
<nav id="main-nav">
    <ul>
        <li>
            <a href="index.php#home">Home</a>
        </li>
        <li>
            <a href="index.php#about">About Us</a>
        </li>
        <li class="drop-down">
            <a href="#">Conference
                <i class="fas fa-caret-down"></i></a>
            <ul class="submenu">
                <li>
                   <a href="index.php#workshop">Workshop</a>
                </li>
                <li>
                   <a href="index.php#speakers">Speakers</a>
                </li>
                <li>
                   <a href="callforpaper.php">Call for Paper</a>
                </li>
                <li>
                   <a href="index.php#committee">Committee</a>
                </li>
                <li class="drop-down">
                   <a href="index.php#sponsor">Sponors</a>
                    
                </li>
            </ul>
        </li>
         <li class="drop-down">
            <a href="register.php">Registration</a>
        </li>
         <li class="drop-down">
            <a href="callforspecial.php">Special Session</a>
   <!--             <i class="fas fa-caret-down"></i></a>
            <ul class="submenu">
                <li>
                   <a href="callforspecial.php">Call for Sessions</a>
                </li>
                <li>
                   <a href="specialsession.php">Special Sessions</a>
                </li>
            </ul> -->
        </li>
       
        <li class="drop-down">
            <a href="#">Portfolio
                <i class="fas fa-caret-down"></i></a>
            <ul class="submenu">
                <li>
                   <a href="index.php#gallery">Gallery</a>
                </li>
                <li>
                   <a href="#">Proceedings</a>
                </li>
            </ul>
        </li>
        <li class="drop-down">
            <a href="submission.php">Submission</a>
            
        </li>
        <li>
            <a href="venue.php">Venue</a>
        </li>
        <li>
            <a href="index.php#contact">Contact Us</a>
        </li>
        
    </ul>
    </nav>
    </div>


  <div id="toggle-nav" onclick="topFunction()">
      <div class="tline"></div>
      <div class="tline"></div>
      <div class="tline"></div>
    
    </div>
  <!--==========================
    MOB NAV CONFIG
  ============================-->     

  <div class="mobile-nav">
    <ul>
      <li><a href="index.php#home">Home</a></li>
      <li><a href="index.php#about">About Us</a></li>    
      <li class="m-drop-down"><a href="index.php#">Conference <i class="fas fa-caret-down"></i></a>
        <ul>
          <li><a href="index.php#workshop">Workshop</a></li>
          <li><a href="index.php#speakers">Speakers</a></li>
          <li><a href="callforpaper.php">Call for Paper</a></li>
          <li><a href="index.php#committee">Committee</a></li>
            <li><a href="index.php#sponsor">Sponsors</a></li>
        </ul>
      </li>
      <li><a href="register.php">Registration</a>
      </li>
        <li class="m-drop-down"><a href="#">Special Session <i class="fas fa-caret-down"></i></a>
        <ul>
          <li><a href="callforspecial.php">Call for Special Session</a></li>
          <li><a href="specialsession.php">Special Sessions</a></li>
          
        </ul>
      </li>
         <li class="m-drop-down"><a href="#">Portfolio <i class="fas fa-caret-down"></i></a>
        <ul>
          <li><a href="index.php#gallery">Gallery</a></li>
          <li><a href="#">Proceedings</a></li>
          
        </ul>
      </li>
         <li><a href="index.php#">Submission</a>
        
      </li>
      <li><a href="venue.php">Venue</a></li>
         <li><a href="index.php#contact">Contact Us</a></li>
    </ul>
  </div>
    
    <!--==========================
    nAV BAR ENDS
  ============================-->   
  <!--==========================
    Intro Section (HOME)
  ============================-->  
<div id="home">
        
    <div class="w3-content" style="max-width:1200px">
        <img class="mySlides" src="img/amity1.jpg" style="width:100%">
        <img class="mySlides" src="img/amity2.jpg" style="width:100%">
      
    </div>
</div>
  <!--==========================
    About Section
  ============================--> 
   
<section id="about">
    <br><br><br><br><br><br><br>
    <div class="container w3-border">
        
        <header class="section-header">
          <h3>About Us</h3><hr>
        </header>      
            <div class="w3-row">
                <div class="w3-container w3-half">
                     <p><center><h5><b>Submission Deadline</b></h5><h4><b>31<sup>st</sup> Jan 2020</b></h4> <br>
                     <h5><b>Notification Deadline for Acceptance</b></h5><h4><b>25<sup>th</sup> Feb 2020</b></h4> <br>
                     <h5><b>Submission of Accepted Camera Ready Paper</b></h5> <h4><b>5<sup>th</sup> March 2020</b></h4> <br>
                     <h5><b>Author’s Registration Deadline</b></h5><h4><b>5<sup>th</sup> March 2020 </b></h4><br>
                     <h5><b>Conference Dates</b></h5><h4><b>18<sup>th</sup> -19<sup>th</sup> March 2020</b></h4> <br> </center></p>
                </div>				
                <div class="w3-container w3-half">
                    <p><br><br>International Conference on Advances in Computational Technologies in Science and
Engineering (ACTSE-2020) is being organized with an objective of bringing together
innovative scientists, professors, research scholars, students and industrial experts in the field of
Computing, Applied Science, Aero-space, Mechanical, Civil, Electrical, Electronics and
Communication Engineering to a common forum. The primary goal of the conference is to
promote the exchange of innovative scientific information between researchers, developers,
engineers, students, and practitioners. Another goal is to promote the transformation of
fundamental research into institutional and industrialized research and to convert applied
exploration into real time application. ACTSE-2020 aims to educate undergraduate students
about current and future trends in technology in diversified areas, the event will also provide
opportunity to post graduate students and research scholars to interact with experts from across
the world; in order to develop and enhance individual knowledge domain. Conference will
witness eminent speakers from across the globe. Research papers from each track after the
positive blind peer review by at-least two reviewers with good score will be selected for oral
presentation during the conference. Selected papers after the further revision will be submitted
                        for publication in SCOPUS Indexed journals. </p> 
                </div>
            </div>
         
        
    
    </div>
</section>
    
<section id="workshop">
    <br><br><br><br><br><br><br>
     <div class="container wow fadeInUp w3-border">
        
        <div class="row welcome">
          <div class="col-12">
              <h2 class="head-title text-center" style="color: #004289;font-size: 36px;"><strong>Workshop</strong></h2><hr>
          </div>
        </div> 
        <div class="w3-row">
                <div class="w3-container">
                    <p><center><h4><b>Pre-Conference complimentary workshop on <br><br><u style="color: #004289;">Next-Generation Communication and IoT Analytics with Deep Learning on MATLAB</u><br> (for registered users) by eminent experts from DesignTech Systems Ltd.</b></h4></center></p>
                    
                    <center><h5 style="color: #004289;"><b>Date of Workshop</b></h5><h4><b>17<sup>th</sup> March 2020</b></h4></center> <br>
                    <center><h5 style="color: #004289;"><b>Duration</b></h5><h4><b>2:00pm to 4:00 pm</b></h4></center> <br>
                    <center><h5 style="color: #004289;"><b>Venue</b></h5><h4><b>Lab no. 03, AB1 Building</b></h4></center> <br>
                     <center><h6><b>Note:- Participants need to give the consent of workshop while registrating for conference.</b></h6></center> <br>
                </div>
        </div>    
    </div>
</section>    
 
<section id="speakers">
    <br><br><br><br><br><br><br>
      <div class="container wow fadeInUp w3-border">
          <br>
          <div class="row welcome">
          <div class="col-12">
              <h2 class="head-title text-center" style="color: #004289;font-size: 36px;"><strong>Eminent Speakers</strong></h2><hr>
          </div>
        </div>

        <div class="jumbotron">
	        <div class="row" style="margin: 0 auto">
			<div class="card col-md-4" style="width:300px;">
			  <img class="card-img-top" src="img/Dr.%20Naushin%20Nower.png" alt="p">
			  <div class="card-body">
			    <h5 class="card-title">Dr. Naushin Nower</h5>
			    <p class="card-text">Associate Professor at IIT,Dhaka, Dhaka</p>
			  </div>
			</div>        	
			<div class="card col-md-4" style="width:300px">
			  <img class="card-img-top" src="img/Dr%20Lau%20Sian%20Lun%20(Sunway%20University%20Malaysia).jpg" alt="p">
			  <div class="card-body">
			    <h5 class="card-title">Dr. Lau Sian Lun</h5>
			    <p class="card-text">Dean & Associate Professor at Sunway University, Malaysia</p>
			  </div>
			</div>     
	<!--		<div class="card col-md-4" style="width:300px">
			  <img class="card-img-top" src="" alt="p">
			  <div class="card-body">
			    <h5 class="card-title">Dr. Le Hoang Son </h5>
			    <p class="card-text">Professor at Vietnam National University</p>
			  </div>
			</div>  -->
            <div class="card col-md-4" style="width:300px;">
			  <img class="card-img-top" src="img/HAA.png" alt="p">
			  <div class="card-body">
			    <h5 class="card-title">Dr. Hasan Haes Alhelou</h5>
			    <p class="card-text">Tisheen University, Lattakia, Syria</p>
			  </div>
			</div>
            <div class="card col-md-4" style="width:300px;">
			  <img class="card-img-top" src="img/bkhan.png" alt="p">
			  <div class="card-body">
			    <h5 class="card-title">Dr. Baseem Khan</h5>
			    <p class="card-text">Hawassa Institute of Technology, Hawassa University, Ethiopia</p>
			  </div>
			</div>    
			  <div class="card col-md-4" style="width:300px;">
			  <img class="card-img-top" src="img/gaurav.png" alt="p">
			  <div class="card-body">
			    <h5 class="card-title">Dr. Gaurav Bajpai</h5>
			    <p class="card-text"> International Advisory from University of Rawanda</p>
			  </div>
			</div>   
			 
    	</div>
    </div>
    </div>
    </section>  
    
    
 <section id="committee">
     <br><br><br><br><br><br><br>
      <div class="container  wow fadeInUp w3-border">
          <br>
        <div class="row welcome">
          <div class="col-12">
              <h2 class="head-title text-center" style="color: #004289;font-size: 36px;"><strong>Organising Committee</strong></h2><hr>
          </div>
        </div>
        
        <div class="jumbotron accordion small-text" id="commiteacc">
          <div class="card"><!--Start-->
            <div class="card-header" id="comOne">
              <h5 class="mb-0 text-center">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolOne" aria-expanded="true" aria-controls="comcolOne"><b style="font-size:20px">Patron</b></button>
              </h5>
            </div>
            <div id="comcolOne" class="collapse show text-center" aria-labelledby="comcolOne" data-parent="#comOne">
              <div class="card-body text-center">
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-info text-center">
                        <strong>Patron In Chief</strong><br>
                        <h1>Dr. Ashok K. Chauhan</h1>
                        <p class="text-center">Founder President, Ritnand Balved Education Foundation (RBEF). Chairman, A K C Group Of Companies</p>
                    </div>
                  </div>    
                  <div class="col-md-12">
                    <div class="alert alert-info text-center">
                        <strong>Patron</strong><br>
                        <h1>Dr. Aseem Chauhan</h1>
                        <p class="text-center">Chairman, Amity University Uttar Pradesh, Lucknow Campus, India. Additional President, Ritnand Balved Education Foundation (RBEF). CEO, Amity Capital Ventures</p>
                    </div>
                      <div class="alert alert-info text-center">
                        <strong>Patron</strong><br>
                        <h1>Prof. (Dr.) Balvinder Shukla</h1>
                        <p class="text-center">Vice Chancellor, Amity University Uttar Pradesh, Noida, India</p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="alert alert-info text-center">
                        <strong>Co Patron</strong><br>
                        <h1>Prof.(Dr.) Sunil Dhaneshwar</h1>
                        <p class="text-center">Pro Vice Chancellor, Amity University Uttar Pradesh, Lucknow Campus</p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="alert alert-info text-center">
                        <strong>General Chair</strong><br>
                        <h1>Wg. Cdr. (Dr.) Anil Kumar (Retd)</h1>
                        <p class="text-center">Assistant Pro Vice Chancellor & Director, ASET, Amity University Uttar Pradesh, Lucknow Campus</p>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div><!--end--> 
          
          <div class="card"><!--Start-->
            <div class="card-header" id="comTwo">
              <h5 class="mb-0 text-center">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolTwo" aria-expanded="true" aria-controls="comcolTwo"><b style="font-size:20px">Convenor</b></button>
              </h5>
            </div>
            <div id="comcolTwo" class="collapse show" aria-labelledby="comcolTwo" data-parent="#comTwo">
              <div class="card-body">
                <div class="row">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alert alert-warning text-center">
                        
                        <h4>Dr. Pawan Singh</h4>
                        <p class="text-center">Amity School Of Engineering & Technology,<br>Amity University Uttar Pradesh, Lucknow Campus,India</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alert alert-warning text-center">
                        
                        <h4>Dr. Kamlesh Kumar Singh</h4>
                        <p class="text-center">Amity School Of Engineering & Technology,<br>Amity University Uttar Pradesh, Lucknow Campus,India</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alert alert-warning text-center">
                        
                        <h4>Dr. Sachin Kumar</h4>
                        <p class="text-center">Amity School Of Engineering & Technology,<br>Amity University Uttar Pradesh, Lucknow Campus,India</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alert alert-warning text-center">
                        
                        <h4>Dr. Bramah Hazela</h4>
                       <p class="text-center">Amity School Of Engineering & Technology,<br>Amity University Uttar Pradesh, Lucknow Campus,India</p>
                    </div>
                  </div>
                  
                </div>  
              </div>
            </div>
          </div><!--end--> 

          <div class="card"><!--Start-->
            <div class="card-header" id="comThr">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolThr" aria-expanded="true" aria-controls="comcolThr"><b style="font-size:20px">Technical Program Chair</b></button>
              </h5>
            </div>
            <div id="comcolThr" class="collapse show" aria-labelledby="comcolThr" data-parent="#comThr">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Prof.(Dr.) O P Singh</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Prof.(Dr.) Deepak Arora</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Deependra Pandey</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. G R Misra</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Vivek Verma</h4>
	                    </div>
                  	</div>
                  	
                </div>  
              </div>
            </div>
          </div><!--end--> 
              
          <div class="card"><!--Start-->
            <div class="card-header" id="comFou">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolFou" aria-expanded="true" aria-controls="comcolFou"><b style="font-size:20px">Technical Program Co-Chair</b></button>
              </h5>
            </div>
            <div id="comcolFou" class="collapse show" aria-labelledby="comcolFou" data-parent="#comFou">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Ayushi Singh</h4>
	                    </div>
                  	</div>
                     <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Shreya Bharti</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Shruti Tripathi</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Shubhanshu Verma</h4>
	                    </div>
                  	</div>
                  	
                </div>  
              </div>
            </div>
          </div><!--end-->   
              
        <div class="card"><!--Start-->
            <div class="card-header" id="comFiv">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolFiv" aria-expanded="true" aria-controls="comcolFiv"><b style="font-size:20px">Publication Chair</b></button>
              </h5>
            </div>
            <div id="comcolFiv" class="collapse show" aria-labelledby="comcolFiv" data-parent="#comFiv">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Sumita Mishra</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Stuti Dutta Shukla</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Pallavi Asthana</h4>
	                    </div>
                  	</div>
                    
                  	
                </div>  
              </div>
            </div>
          </div><!--end-->  
              
        <div class="card"><!--Start-->
            <div class="card-header" id="comSiv">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolSiv" aria-expanded="true" aria-controls="comcolSiv"><b style="font-size:20px">Publication Co Chairs</b></button>
              </h5>
            </div>
            <div id="comcolSiv" class="collapse show" aria-labelledby="comcolSiv" data-parent="#comSiv">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Shubhangi Verma</h4>
	                    </div>
                  	</div>
                     <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Abhishek Vaibhav</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Srishti Saxena</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Saloni Agrawal</h4>
	                    </div>
                  	</div>
                  	
                </div>  
              </div>
            </div>
          </div><!--end-->        
              
            <div class="card"><!--Start-->
            <div class="card-header" id="comSev">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolSev" aria-expanded="true" aria-controls="comcolSev"><b style="font-size:20px">Sponsorship Chairs</b></button>
              </h5>
            </div>
            <div id="comcolSev" class="collapse show" aria-labelledby="comcolSev" data-parent="#comSev">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Shikha Singh</h4>
	                    </div>
                  	</div>
                     <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Anuradha Mishra</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Ashish Dixit</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Garima Srivastava</h4>
	                    </div>
                  	</div>
                  	
                </div>  
              </div>
            </div>
          </div><!--end-->          

         <div class="card"><!--Start-->
            <div class="card-header" id="comEig">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolEig" aria-expanded="true" aria-controls="comcolEig"><b style="font-size:20px">Sponsorship Co-Chairs</b></button>
              </h5>
            </div>
            <div id="comcolEig" class="collapse show" aria-labelledby="comcolEig" data-parent="#comEig">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Anant Jaiswal</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Vibhav Giri</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Anjali Verma</h4>
	                    </div>
                  	</div>
                    
                  	
                </div>  
              </div>
            </div>
          </div><!--end-->      
              
              <div class="card"><!--Start-->
            <div class="card-header" id="comNig">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolNig" aria-expanded="true" aria-controls="comcolNig"><b style="font-size:20px">Sponsorship Co-Chairs</b></button>
              </h5>
            </div>
            <div id="comcolNig" class="collapse show" aria-labelledby="comcolNig" data-parent="#comNig">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. S. W. A. Rizvi</h4>
	                    </div>
                  	</div>
                     <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Rajeev Pratap Singh</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Sheenu Rizvi</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Vineet Singh</h4>
	                    </div>
                  	</div>
                  	
                </div>  
              </div>
            </div>
          </div><!--end-->      
              
               <div class="card"><!--Start-->
            <div class="card-header" id="comTen">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolTen" aria-expanded="true" aria-controls="comcolTen"><b style="font-size:20px">Local Arrangement Co-Chairs</b></button>
              </h5>
            </div>
            <div id="comcolTen" class="collapse show" aria-labelledby="comcolTen" data-parent="#comTen">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Vishal Yadav</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Rishabh Shukla</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Shiddhant Agrawal</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Atithya</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Anushuman</h4>
	                    </div>
                  	</div>
                    
                  	
                </div>  
              </div>
            </div>
          </div><!--end-->      
              
         <div class="card"><!--Start-->
            <div class="card-header" id="comEen">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolEen" aria-expanded="true" aria-controls="comcolEen"><b style="font-size:20px">Publicity Chair</b></button>
              </h5>
            </div>
            <div id="comcolEen" class="collapse show" aria-labelledby="comcolEen" data-parent="#comEen">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Namrata Dhanda</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Deepsikha Agrawal</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Ajita Pathak</h4>
	                    </div>
                  	</div>
        
                </div>  
              </div>
            </div>
          </div><!--end-->     
            
         <div class="card"><!--Start-->
            <div class="card-header" id="comTwe">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolTwe" aria-expanded="true" aria-controls="comcolTwe"><b style="font-size:20px">Publicity Co-Chair</b></button>
              </h5>
            </div>
            <div id="comcolTwe" class="collapse show" aria-labelledby="comcolTwe" data-parent="#comTwe">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Sanatan Dixit</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Sanchit Yadav</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Akshat Pandey</h4>
	                    </div>
                  	</div>
        
                </div>  
              </div>
            </div>
          </div><!--end-->   
              
         <div class="card"><!--Start-->
            <div class="card-header" id="comThir">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolThir" aria-expanded="true" aria-controls="comcolThir"><b style="font-size:20px">Registration Chair</b></button>
              </h5>
            </div>
            <div id="comcolThir" class="collapse show" aria-labelledby="comcolThir" data-parent="#comThir">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Pooja Khanna</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Vandana Dubey</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Puneet Sharma</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Pallavi Rai</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Ashwani Sharma</h4>
	                    </div>
                  	</div>
        
                </div>  
              </div>
            </div>
          </div><!--end-->
              
         <div class="card"><!--Start-->
            <div class="card-header" id="comFten">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolFten" aria-expanded="true" aria-controls="comcolFten"><b style="font-size:20px">Registration Co-Chairs</b></button>
              </h5>
            </div>
            <div id="comcolFten" class="collapse show" aria-labelledby="comcolFten" data-parent="#comFten">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Seema</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Gulpreet Walia</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Umang Jain</h4>
	                    </div>
                  	</div>
                    <div class="col-md-3 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Shashank Singh</h4>
	                    </div>
                  	</div>
        
                </div>  
              </div>
            </div>
          </div><!--end-->      
              
              
          <div class="card"><!--Start-->
            <div class="card-header" id="comSten">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolSten" aria-expanded="true" aria-controls="comcolSten"><b style="font-size:20px">Finance Chair</b></button>
              </h5>
            </div>
            <div id="comcolSten" class="collapse show" aria-labelledby="comcolSten" data-parent="#comSten">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Prof. Satish Kumar</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Col Vivek Mathur</h4>
	                    </div>
                  	</div>
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Mr. Devesh Ojha</h4>
	                    </div>
                  	</div>
        
                </div>  
              </div>
            </div>
          </div><!--end--> 
              
              
         <div class="card"><!--Start-->
            <div class="card-header" id="comTww">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolTww" aria-expanded="true" aria-controls="comcolTww"><b style="font-size:20px">Media</b></button>
              </h5>
            </div>
            <div id="comcolTww" class="collapse show" aria-labelledby="comcolTww" data-parent="#comTww">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Dr. Maneesh Chandra Srivastava</h4>
	                    </div>
                  	</div>
                     <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Anupriya Yadav</h4>
	                    </div>
                  	</div>
                    
                </div>  
              </div>
            </div>
          </div><!--end--> 
              
              
          <div class="card"><!--Start-->
            <div class="card-header" id="comTee">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolTee" aria-expanded="true" aria-controls="comcolTee"><b style="font-size:20px">Web Administrator</b></button>
              </h5>
            </div>
            <div id="comcolTee" class="collapse show" aria-labelledby="comcolTee" data-parent="#comTee">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
	                    <div class="alert alert-warning">
	                        <h4>Ms. Shrishty Srivastava</h4>
	                    </div>
                  	</div>        
                </div>  
              </div>
            </div>
          </div><!--end-->       
              
          <div class="card"><!--Start-->
            <div class="card-header" id="comLas">
              <h5 class="mb-0 text-center">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comcolLas" aria-expanded="true" aria-controls="comcolLas"><b style="font-size:20px">Advisory</b></button>
              </h5>
            </div>
            <div id="comcolLas" class="collapse show" aria-labelledby="comcolLas" data-parent="#comLas">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <b>International Advisory Committee</b>
                        <p><br></p>
                    </div><br>
                  <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Prof. Ts. Dr.-Ing. Sian Lun Lau</b></h6>
                        <p>Associate Dean/ Head, Department of Computing and
                            Information Systems, Sunway University, Malaysia</p>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                      <h6><b>Dr. Le Hoang Son</b></h6>
                        <p>Professor, Vietnam National University,Vietnam.</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                      <h6><b>Dr. Naushin Nower</b></h6>
                        <p>Professor, IIT Dhaka, Bangladesh</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Hasan Haes Alhelou</b></h6>
                        <p>Tisheen University, Lattakia, Syria</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Baseem Khan</b></h6>
                        <p>Hawassa Institute of Technology, Hawassa University, Ethiopia</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Avimanyou Vatsa</b></h6>
                        <p>Fairleigh Dickinson University,  New Jersey, USA</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Rajeev Yadav</b></h6>
                        <p>Director Research and Engineering, ODS Medical Inc., QC, Canada.</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. K B Mishra</b></h6>
                        <p>CZECHGLOBE, Global Change Research Institute, CAS, Brno, Czech Republic</p>
                    </div>
                  </div> 
                    
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Mr. Rajeev Tomar</b></h6>
                        <p>Volkswagen AG, Cremlingen, Germany</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Kumar Pallav</b></h6>
                        <p>Cape Peninsula University of Technology, Cape Town, South Africa</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Saifur Rahaman</b></h6>
                        <p>Najran University, KSA, Saudi Arabia</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Mr. Prashast Srivasvata</b></h6>
                        <p>Project Manager IBM, Canada</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Mr. Sachin Singh</b></h6>
                        <p>Sr NPO RF Engineer, Nokia, Illinois, USA</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Mr. Ashok Kumar</b></h6>
                        <p>Hewlet Packard Inc. Huston, Texas, USA</p>
                    </div>
                  </div> 
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Raja Kumar Murugesan</b></h6>
                        <p>Head of Research, Faculty of Innovation and Technology TAYLOR’S UNIVERSITY lakeside Campus, Malaysia</p>
                    </div>
                  </div>
                    <div class="col-md-4 text-center">
                    <div class="alert alert-dark">
                        <h6><b>Dr. Rohit Bhatnagar</b></h6>
                        <p>Division of Information Technology and Operations Management, Anyang Technological University, Singapore</p>
                    </div>
                  </div> 
                    
                  <div class="col-md-12 text-center">
                        <b>National Advisory Committee</b>
                        <p><br></p>
                    </div>
                   
		 <div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Krishna Kant Agrawal</b></h6>
                      <p>Professor & Head (R&D), Department of Computer Science & Engineering, ABES Institute Technology, Ghaziabad</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. V K Singh</b></h6>
                      <p>VC, IIMT University, Meerut</p>
                    </div>
                  </div>
                    <div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Prof. K K Biswas</b></h6>
                      <p>IIT Delhi</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. santosh Kumar Vishvakarma</b></h6>
                      <p>IIT Indore</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Vinit Jakhetiya</b></h6>
                      <p>IIT Jammu</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Yamuna Prasad</b></h6>
                      <p>IIT Jammu</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Suresh Dara</b></h6>
                      <p>BVRIT, Telangana</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Prof. (Dr.) R. A. Khan</b></h6>
                      <p>Dean - School of Information Science And Technology,Babasaheb Bhimrao Ambedkar University, Lucknow</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Prof. Haider Banka</b></h6>
                      <p>IIT Dhanbad</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Prof (Dr.) Mihir Narayan Mohanty</b></h6>
                      <p>ITER, SOA, University, Bhubneswar,Orissa</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Mr. Vimal Berry</b></h6>
                      <p>Group Manager, Oracle India Pvt Ltd.</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Jai Gopal Pandey</b></h6>
                      <p>Principal Scientist, CSIR-CEERI, Pilani, Rajasthan</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Pawan Kumar Singh</b></h6>
                      <p>IIT Dhanbad</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Sudeep Tanwar</b></h6>
                      <p>Department of Computer Engineering, Institute of Technology, Nirma University,Ahmedabad</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Sudhanshu Tyagi</b></h6>
                      <p>Thapar Institute of Engineering &amp; Technology, Deemed to be University, Patiala, Punjab</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Prof. (Dr.) Praveen Malik</b></h6>
                      <p>Lovely Professional University, Phagwara, Punjab</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Sugriva Nath Tiwari</b></h6>
                      <p>Professor, DDU, Gorakhpur University, Gorakhpur</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Rajesh Kumar Singh</b></h6>
                      <p>Edu., DDU, Gorakhpur, University, Gorakhpur</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Shailendra Kumar</b></h6>
                      <p>Integral University, Lucknow</p>
                    </div>
                  </div><div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <h6><b>Dr. Imran Ullah Khan</b></h6>
                      <p>Senior Member IEEE, Integral University, Lucknow</p>
                    </div>
                  
                </div>  
              </div>
            </div>
          </div><!--end--> 
                

            </div>
        </div>
          </div></div>
         
    </section>    
    
 <section id="sponsor">
    <br><br><br><br><br><br>
      <div class="container wow fadeInUp w3-border">
          <br>
          <div class="row welcome">
          <div class="col-12">
              <h2 class="head-title text-center" style="color: #004289;font-size: 36px;"><strong>Sponsors</strong></h2><hr>
          </div>
        </div>

        <div class="jumbotron">
	        <div class="row" style="margin: 0 auto">
			<div class="card col-md-4" style="width:200px;">
			  <img class="card-img-top" src="img/ietnew.jpg" alt="p">
			  <div class="card-body">
			    <h4 class="card-title text-center" style="color: #004289;font-size: 25px;">The Institution of Engineering and Technology - UK</h4>
			   
			  </div>
			</div>        	
			<div class="card col-md-4" style="width:200px">
			  <img class="card-img-top" src="img/csi.jpg" alt="p">
                <div class="card-body">
			    <h4 class="card-title text-center" style="color: #004289;font-size: 25px;">Computer Society of India</h4>
			   
			  </div>
			  
			</div>     
			<div class="card col-md-4" style="width:200px">
			  <img class="card-img-top" src="img/iete.jpg" alt="p">
			  <div class="card-body">
			    <h4 class="card-title text-center" style="color: #004289;font-size: 25px;">Institution of Electronics and Telecommunication Engineers</h4>
			   
			  </div>
			</div>    
			    
			 
    	</div>
    </div>
    </div>
    </section>    
   
    
  
<section id="gallery"> 
    <br><br><br><br><br><br><br>
<div class="container w3-border">

  <div class="row welcome">
          <div class="col-12">
              <br>
              <h2 class="head-title text-center" style="color: #004289;font-size: 36px;"><strong>Gallery</strong></h2><hr>
          </div>
    </div>

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic1.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic2.jpg" alt="">
          </a>
    </div>
 <!--   <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic3.jpg" alt="">
          </a>
    </div>  -->
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic4.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic5.jpg" alt="">
          </a>
    </div>
<!--    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic6.jpg" alt="">
          </a>
    </div> -->
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic7.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic8.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic9.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic10.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic11.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/pic12.jpg" alt="">
          </a>
    </div>
  </div>

</div>   
</section>     
    
<section id="contact">
        <br><br><br><br><br><br><br>  
      <div class="container w3-border">
        <div style="text-align:center">
            <br>
            <h2 class="head-title text-center" style="color: #004289;font-size: 36px;"><strong>Contact Us</strong></h2><hr>
        </div>
          
  <div class="row">
    <div class="column">
      <div class="map mb-4 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14238.466908701994!2d81.0505531!3d26.8521402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x125a5ffab9061e23!2sAmity%20University%20Lucknow%20Campus!5e0!3m2!1sen!2sin!4v1567854124978!5m2!1sen!2sin" width="600" height="450" frameborder="0"  style="border:20px; width: 100%; height: 312px; border-color:blue;" allowfullscreen=""></iframe>
          
                <p class="text-center" style="color: #004289;font-family:Open Sans, sans-serif;font-weight:520;">Amity School of Engineering and Technology,<br>
                    Amity University Uttar Pradesh, Lucknow Campus,<br>
                    Malhaur (Near Railway Station),<br>
                    Post Office : Chinhut,<br>
                    Lucknow, Uttar Pradesh, India<br>
                    Pin: 226028</p>
                <h6 class="text-center">Phone No: 7054415204, 9411907335, 9451397255, 9839123463</h6>
                <h6 class="text-center">E-mail Id: editor.actse@gmail.com</h6>
          
                
                
            </div>
    </div>
    <div class="columnc">
      <form action="index.php" method="post">
        <label for="name" style="color: #004289;font-size: 18px; text-align:center;"> Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
          
        <label for="email" style="color: #004289;font-size: 18px; text-align:center;">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        
        <label for="subject" style="color: #004289;font-size: 18px; text-align:center;">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
          
        <input type="submit" value="submit" name="submit">
      </form>
    </div>
  </div>
</div>
   
            
            
</section>    
       
<?php 
    require 'footer.php';
    ?>
  <!--==========================
    Scripts
  ============================-->  
<script src="js/main.js"></script>       
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     
 
<script>
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}    
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>    
</body>    
</html>