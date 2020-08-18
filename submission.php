<?php 
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155099622-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155099622-1');
</script>

<head>    
<style>
    .button {

  border: none;
  color: white;
  padding: 2px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}



.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
    </style>
</head>
<body>
   <section id="submission" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Submission</h3><hr>
            <p>Prospective authors are invited to contribute  Full length original and unpublished papers, based on theoretical and experimental contributions, related, but not limited to, conference tracks, for presentation and publication in the conference:- </p>
            <p><b>1) Papers should not contain plagiarized material and should not be submitted to any other conference and journal at the same time (double submission).<br>2) All submissions should be written in English with a maximum page length of SIX (6) printed pages.<br>3) Soft copy of the original full paper must be in IEEE format (.doc or .docx).<br>4) Papers should be in Word format, two columns,(10-point font)  and compliant with other IEEE manuscript guidelines.<br> 5) Papers will be double blind reviewed by a team of experienced reviewers.<br> 6)  Review criteria will be based on originality, quality of work, technical ingenuity, results and application prospects.  </b></p>
            <h4><b>Submit paper here: </b></h4>
           <button class="button button2"><a href="https://easychair.org/my/conference?conf=actse2020" target="_blank">Submit Paper</a></button>
          </header>
       </div>
    </section>   
    <?php 
    require 'footer.php';
    ?>
</body>
</html>    