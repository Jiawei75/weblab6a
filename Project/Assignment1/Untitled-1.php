<?php
  session_start();
  ?>
  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Untitled-1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="icon" href="img/hawaiian-shirt.png" type="image/png" />
  <title>H.Spot | Profile</title>
</head>
<body>
<div class="main-box">
<div class="content">
<input type="checkbox" id="check">
  <label class="box" for="check">
  <div class="share">Click Me</div>
  <div class="cancel"><p onclick="alertLogout()">Logout ?</p></div>
  </label>
  <div class="image-box">
  <div class="wrapper">
    <div class="img-area">
      <div class="inner-area">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHr1KczMvPOJJOIGrf1q9F-hnLPFzeLJ2j7h6L8gx1yhCVGj3n_DkFPCctnvnUmu08eoA&usqp=CAU" alt="">
      </div>
    </div>
    <div class="icon arrow"><a href="index.html"><i class="fas fa-arrow-left"></i></a></div>
    <div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>
    <div class="name"><p style="text-align: center"> Welcome <br>
      <strong><i>
          <?php echo $_SESSION['username']; ?>
</i></strong>
  </p></div>
    <div class="social-icons">
      <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
      <a href="#" class="yt"><i class="fab fa-youtube"></i></a>
    </div>
  
    <div class="social-share">
      <div class="row">
        <i class="far fa-heart"></i>
        <i class="icon-2 fas fa-heart"></i>
        <span>999.9k</span>
      </div>
      <div class="row">
        <i class="far fa-comment"></i>
        <i class="icon-2 fas fa-comment"></i>
        <span>88.8k</span>
      </div>
      <div class="row">
        <i class="fas fa-share"></i>
        <span>122.8k</span>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script>
  function alertLogout() {
  alert("Logging out... Please Wait.");
  redirectToHomePage();
}

function redirectToHomePage(){
  window.location.href="../php/login.php";
}
</script>
</body>
</html>