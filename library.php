<?php
session_start();

if (isset($_SESSION['sid'])) {

  $sid=$_SESSION['sid'];

include "connection.php";

 if(isset($_REQUEST['submit'])) 
 {
  $nm=$_REQUEST['snam'];
  $cls=$_REQUEST['cnam'];
  $roll=$_REQUEST['rnam'];
  $book=$_REQUEST['bknam'];
  $author=$_REQUEST['atnam'];
  $Withdrol=$_REQUEST['wtnam'];
  $sub=$_REQUEST['sbnam'];
  
  
  $insert=mysqli_query($conn,"insert into library_details()values('','$nm','$cls','$roll','$book','$author','$Withdrol','$sub')");
  
  if($insert)
  {
    echo "<script> alert(' Register Successfully..');</script>";
  }
  else
  {
    echo "<script> alert(' Register Failed..');</script>";
  }
 }

?>




<!DOCTYPE html>
<html>
<head>
  <title>Home-SMS</title>


  <style type="text/css">

                   /*Header section*/

    .header_left
    {
      height: 80px;
        width: 1004px;
        background-color: skyblue;
    
      margin-left: 170px;
    
      }

                       /*Header Logo Section*/

      .header_img
      {
        margin-left: 50px;
      }

                          /*Right Section Logo*/

      .header_right
      {
          margin-left: 400px;
      }
                       
                       /*Body Section*/

      .body
      {
        width: 1000px;
        height: 500px;
        margin-left: 170px;
        border: 2px solid black;
        background-color: white;

        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
      }
      

                       /*Marquee Section*/

      .menu
      {
        background-color: black;
        height: 40px;
        width: 980px;
        margin-left: 10px;
      }

      .header_text
      {
        color: white;
        font-size: 25px;
        margin-left: 320px;
      }

      .form
      {
        margin-left: 300px;
      }

      input[type=text]
      {
        height: 30px;
        width: 300px;
          font-size: 18px;
          color: #004080;
          
      }

       input[type=password]
      {
        height: 30px;
        width: 300px;
          color: green;
          font-weight: bold;
      }


      input[type=radio]
      {
        height: 20px;
        width: 20px;
        color: green;
      }

     /*input[type=date]
      {
        height: 30px;
        width: 300px;
         width: 300px;
          color: green;
      }*/

      /*textarea
      {
        width: 300px;
        color: green;
        font-weight: bold;
      }*/
       
       input[type=submit]
       {
         height: 35px;
         width: 120px;
         font-size: 15px;
         cursor: pointer;
         background-color: green;
         color: white;
         font-weight: bold;
       }

        input[type=reset]
       {
         height: 35px;
         width: 120px;
         font-size: 15px;
         cursor: pointer;
         background-color: #ff1c1c;
         color: white;
         font-weight: bold;
       }

       b
       {
         font-size: 18px;
         font-weight: bold;
         color:blue;
       }
                

  </style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

  <div class="header_left">

    <a href="library_profile.php"><img src="headeta.png" class="header_img"></a> 

          <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

    <a href="logouts.php"><img src="logout.png"></a>
  </div>

                                            <!-- Menu and Body Section -->


    <div class="body">
      <div class="menu">

 
              <b class="header_text">  *****Library Section*****</b>
        
        
      </div>  <br><br>

                                          <!-- Body work -->
            <div class="form">
              <form name="frm" action="" method="post">

            <table border="2">
              <tr>
                  <td colspan="2" style="background: #b5667a;height: 30px; font-size: 25px; font-weight: bold; text-align: center; color: #80ff00; ">
                  Register Must</td>
              </tr>
            <tr>
            <td><b>Student Name :</b> </td>
            <td><input type="text" name="snam" value="" placeholder=" Enter Student Name" required="require"></td>
            </tr>
            <tr>
            <td><b>Class :</b> </td>
            <td><input type="text" name="cnam" value="" placeholder="Enter Student Class" required="require"></td>
            </tr>
            <tr>
            <td><b>Roll No :</b> </td>
            <td><input type="text" name="rnam" value="" placeholder="Enter Student Roll No." required="require"></td>
            </tr>
            <tr>
            <td><b>Book Name :</b> </td>
            <td><input type="text" name="bknam" value="" placeholder="Enter Book Name" required="require"></td>
            </tr>
            <tr>
            <td><b>Author Name :</b> </td>
            <td><input type="text" name="atnam" value="" placeholder="Enter Authoer Name"required="require"></td>
            </tr>
            <tr>
            <td><b>Book Issue :</b> </td>
            <td><input type="date" name="wtnam" value="" required="require" style="width: 300px;height: 30px;font-size: 18px;
          color: #004080;" ></td>
            </tr>
            <td><b>Book Submit :</b> </td>
            <td><input type="date" name="sbnam" value="" required="require" style="width: 300px;height: 30px;font-size: 18px;
          color: #004080;"></td>
            </tr>
            <tr>
              <td><a href="student_show.php" style="color: #000040; font-weight: bold; text-decoration: ; margin-left:20px;">Show Student</a> </td>

              <td><input type="submit" name="submit" value="Register"> <input type="reset" name="reset" value="Reset"></td>
            </tr>
            
          </form>
         </div>
    

    </div>


    


</body>
</html>

<?php
 }
 else
 {
  header("location:library_login.php?msg=you must login to enter");
 }
?>