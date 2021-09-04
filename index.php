<?php

//Including the connection file which creates connection with Database as our connection object is $conn
include "connection.php";

        //getting the last registrationNumber from DB
        $sql="Select id from Registrations ORDER BY id DESC LIMIT 1;";
        $result1=mysqli_query($conn,$sql);
        $r1=mysqli_fetch_row($result1);
        $lstid=$r1[0];
        $lstid+=1;

       //if the registerbtn is pressed following record is inserted in Registration table.
        if (isset($_POST['reg_btn'])){
            $naam=$_POST['naam'];
            $em=$_POST['em'];
            $iama=$_POST['iama'];
            $sql="INSERT INTO Registrations (id,name,email,iama) values($lstid,'$naam','$em','$iama')";
            if (mysqli_query($conn, $sql)) {
              echo "<script>alert('Registration Successfull')</script>";
            } else {
              echo "<script>alert('Registration Failed')</script>";
            }
        }
?>
<html lang="en">
<head>
    <title>SAENITK Event | Wix Clone</title>
    
    <!--Including Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!--Including JS Scroll animations CSS and JS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Including font-awesome for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body{
            margin:0;
            padding:0;
            font-family:sans-serif;
        }
        
        /* CSS for register, submit and read more button */
        .join-btn{
            width:150px;
            height:35px;
            border:none;
            border-radius:20px;
            font-size:22px;
            font-weight:400;
        }
    
        /* CSS for sponsor wave section */
        .sponsor{
            width:100%;
            height:300px;
            background-color: azure;
        }
        
        /* CSS for Contact us form section*/
        .contact_us_form{
            height:430px;
            width:90%;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            padding-top:20px;
            font-size:22px;
        }
        
        /* CSS for Contact us form elements */
        .contact_us_form form input{
            width:300px;
            border:none;
            border-bottom: 1px solid black;
        }
        
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          padding: 14px 20px;
          background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
          float: left;
          width: 50%;
        }


        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: #FB9170;
          padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%; /* Could be more or less, depending on screen size */
          font-size:20px;    
        }

        /* Style the horizontal ruler */
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 35px;
          top: 15px;
          font-size: 40px;
          font-weight: bold;
          color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
          color: #f44336;
          cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
          .cancelbtn, .signupbtn {
             width: 100%;
          }
        }
        
        /* Registration form inputs width CSS */
        .modal-content input{
            width:100%;
        }
        
        
    </style>
</head>
<body>
 
 <!-- SAE LOGO redirects to SAENITK Website-->
 <nav class="navbar navbar-default fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://saenitk.wordpress.com/">
        <img alt="logo" src="images/SAE_International_Logo_R_2015_med.png" width="15%">
      </a>
    </div>
  </div>
</nav>
 
 <!-- Cover Image of event banner -->
  <img src="images/BANNER.001.png" style="width:100%;top:0;">
 <center><button data-aos="zoom-up" class="btn-warning join-btn" style="height:45px;width:175px;background-color: #FB9170;margin-top:-22%;" onclick="document.getElementById('id01').style.display='block'"> <i class="fa fa-location-arrow"></i> &nbsp; Register</button></center><br><br>

  <!-- About Event in-short -->  
  <center><h1 style="margin-left:50px;margin-right:50px" data-aos="flip-up">The only true wisdom is in knowing you know nothing !!</h1><br><br>
  
  <h3 style="margin-left:50px;margin-right:50px" data-aos="zoom-in">Bored of just pondering upon college re-opening?</h3><br><p style="margin-left:50px;margin-right:50px" data-aos="zoom-in">Want to learn something thrilling?<br>SAE-NITK in assocaition with <a>exergic.in</a> is coming with something that will blow your minds.</p><br>
  <h4 data-aos="flip-left">Go mark your calendar !!</h4><img data-aos="flip-right" src="images/480px-Calendar_(macOS).png" width="100px;"><br><br> 
  <button data-aos="zoom-up" class="btn-success join-btn" style="height:45px;width:175px;background-color: #FB9170;" onclick="document.getElementById('id01').style.display='block'"> <i class="fa fa-location-arrow"></i> &nbsp; Register</button><br><br>
  </center>
  <br>

  <!-- About our Club-->  
   <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="zoom-in">
            <img src="images/join%20us1.png" width=100%>
        </div>
        <div class="col-md-5 text-center" data-aos="zoom-in-up">
            <h1 style="margin-top:50px;">Witness<br> Innovation<br> with us</h1><br>
            <p>With 3 club divisions catering to Electrical Vehicles and Autonomous Systems, SAE-NITK has been involved in all areas regarding Automobiles and Aerospace.</p><br>
            <a href="https://saenitk.wordpress.com/"><button class="btn-primary join-btn"> <i class="fa fa-location-arrow"></i> &nbsp;Read More</button></a>
        </div>
      </div>
   </div>
    
<!-- Sponsor Section -->       
   <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="azure" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
   <div class="sponsor">
        <center><h1 data-aos="fade-up">Our Sponsors</h1>
        <img src="images/sponsors.png" data-aos="fade-up" style="width:60%;height:300px">
        </center>
   </div> 
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="azure" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,122.7C672,117,768,171,864,208C960,245,1056,267,1152,277.3C1248,288,1344,288,1392,288L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      
  <br><br>
  
 <!-- Contact us Section -->  
   <center>
   <div class="contact_us">
       
       <div class="container">
          <div class="row">
                <div class="col-md-5 text-center" data-aos="zoom-in-up">
                   <h1 style="margin-top:50px;">Have some questions?<br></h1><br>
                   <h1>Just Ask,<br> Get Answers.<br></h1><br>
                   <p>saeindia@nitk.edu.in<br>+91 9573226722<br> K Eshwar Sai Srinivas,<br> Media Coordinator, SAE NITK</p>
                   <br> 
                </div>
               <div class="col-md-7" data-aos="zoom-in">
                <div class="contact_us_form">
                   
                   <form style="text-align: left;padding-left:40px;" method="post">
                      
                      <p>Name : &nbsp;<input type="text"></p>
                      <p>Email&nbsp; : &nbsp;<input type="text"></p>
                      <p>I am a&nbsp; : &nbsp;
                         <select style="border:none;border-bottom:1px solid black;width:290px;">
                             <option>Select</option>
                             <option>Industry Professional</option>
                             <option>Student</option>
                             <option>Other</option>
                         </select>
                      </p>
                      <p>My Question&nbsp; :<br><textarea rows="4" cols="33"></textarea></p>
                      <button class="btn-primary join-btn">Submit</button>
                    </form>
                    
                </div>
            </div>
            
          </div>
       </div>
       
       
   </div>
   </center>
   <br><br>
   
     
    
       
<!-- Event Registration Form gets displayed on Register button click-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" name="form1" method="post">
    <div class="container">
      <center><h1>Registration Form</h1></center>
      <hr>
      <label for="naam"><b>Registration Number</b></label><br>
      <input  id="naam" type="text" disabled placeholder="<?php echo 'SAE-NITK-'.$lstid; ?>" name="naam">
      <br><hr>
      <label for="fullname"><b>Name</b></label><br>
      <input id="fullname" type="text" placeholder="Firstname &nbsp;&nbsp;Middlename &nbsp;&nbsp;Lastname" name="naam" required>
      <br><hr>
      <label for="em"><b>Email</b></label><br>
      <input id="em" type="email" placeholder="samyakjain@nitk.com" name="em" required>
      <br><hr>
      
      <label for="psw"><b>I am a -</b></label>
      <select id="ima" name="iama" style="width:100%">
      <option value="Industry professional">Industry professional</option>
      <option value="NITK Student">NITK Student</option>
      <option value="Other college Student">Other college Student</option>
      <option value="Other">Other</option>
    </select>
    <br><hr>
      <div class="clearfix">
        <center><button class="btn-primary" style="border:none;border-radius:20px;padding-left:10px;padding-right: 10px;" name="reg_btn"> <i class="fa fa-location-arrow"></i> &nbsp;Submit</button></center>
        <br>
      </div>
    </div>
  </form>
</div>


<!-- JS for Registration page Display and Switching it off -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>   
         
           
               
<!-- JS for Page scroll animation -->   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script>
      AOS.init(
      {
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 1200, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

}
      );
    </script>
</body>
</html>