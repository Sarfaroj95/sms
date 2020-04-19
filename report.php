<?php


include "connection.php";

 if(isset($_REQUEST['submit'])) 
 {
  $nm=$_REQUEST['snam'];
  $cls=$_REQUEST['cnam'];
  $roll=$_REQUEST['rnam'];
  $book=$_REQUEST['bknam'];
  $sub=$_REQUEST['sbnam'];
  
  
  $insert=mysqli_query($conn,"insert into report()values('','$nm','$cls','$roll','$book','$sub')");
  
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
        font-size: 23px;
        margin-left: 370px;
      }

      .form
      {
        margin-left: 300px;
      }

      input[type=text]
      {
        height: 30px;
        width: 300px;
          font-size: 14px;
          color: #8000ff;
          
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
         color:#00009;
       }
         

  </style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

  <div class="header_left">

    <a href="index.php"><img src="headeta.png" class="header_img"></a> 

          
  </div>

                                            <!-- Menu and Body Section -->


    <div class="body">
      <div class="menu">

 
              <b class="header_text">  *****Report Section*****</b>
        
        
      </div>  <br><br>

                                          <!-- Body work -->
            <div class="form">
              <form name="frm" action="" method="post">

            <table border="2">
              <tr>
                  <td colspan="2" style="background: #ff8040;height: 30px; font-size: 22px; font-weight: bold; text-align: center; color: #000080; ">
                  Write Report</td>
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
            <td ><b>Report:</b> </td>
            <td><textarea style="font-size: 16px;" name="bknam" placeholder="Enter Candidates Address" rows="6" cols="30" required="require"></textarea></td>
          </tr>
            
            <td><b>Issue Date:</b> </td>
            <td><input type="date" name="sbnam" value="" required="require" style="width: 300px;height: 30px;font-size: 14px;
          color: #004080;"></td>
            </tr>
            <tr>
              <td></td>

              <td><input type="submit" name="submit" value="Report"> <input type="reset" name="reset" value="Reset"></td>
            </tr>
            
          </form>
         </div>
    

    </div>


    


</body>
</html>

