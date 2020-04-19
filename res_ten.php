<?php
include "connection.php";

if(isset($_POST['sub']))
{
  $roll=$_POST['roll'];
  $nam=$_POST['nam'];
  $dob=$_POST['dob'];
  $fnam=$_POST['fnam'];
  $ben=$_POST['ben'];
  $eng=$_POST['eng'];
  $math=$_POST['math'];
  $phy=$_POST['phy'];
  $geo=$_POST['geo'];
  $his=$_POST['his'];
  $tot=$_POST['tot'];

  $qer=mysqli_query($conn,"insert into result_ten values('$roll','$nam','$dob','$fnam','$ben','$eng','$math','$phy','$geo','$his','$tot')");

  if($qer)
  {
     echo "<script> alert('Successfull Marks..'); window.location.href='result_class_ten.php';</script>";
                }
                else
                {
                   echo "<script> alert('Unsuccessfull Marks..'); window.location.href='res_ten.php';</script>";
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
        height: 530px;
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
	    	font-size: 22px;
	    	margin-left: 370px;
	    }
      .frm_heading
      {
        margin-left: 300px;
        height: 40px;
        padding-top: 10px;
        width: 454px;
        background: #d50000;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-top-right-radius: 6px;
        border-top-left-radius: 6px;
        margin-top: -15px;
      }
      .head
      {
        margin-top: -440px;
        margin-left: 50px;
        color: #e9e9e9;
        font-size: 17px;
      }

	    .form
	    {
	    	margin-left: 300px;
        
         background: #ff8080;
         width: 454px;
         padding-top: 10px;
         height: 400px;

	    }

	    input[type=text]
	    {
	    	height: 20px;
	    	width: 200px;
	        color: #000080;
	        font-weight: bold;
	        margin-left:30px;
	    }
      .lbl
      {
         font-size: 20px;
         font-weight: bold;
         color: #400040;
         margin-left:30px;
         margin-left: 100px;

      }

	     
       
       input[type=submit]
       {
       	 height: 30px;
       	 width: 80px;
       	 font-size: 12px;
       	 cursor: pointer;
       	 background-color: green;
       	 color: white;
       	 font-weight: bold;
       	 margin-left:210px;

       }

        .up
       {
         height: 30px;
         width: 80px;
         font-size: 12px;
         cursor: pointer;
         background-color: green;
         color: white;
         font-weight: bold;
         margin-left:400px;

       }

       b
       {
       	 font-size: 20px;
       	 font-weight: bold;
       	 color: blue;
       	 margin-left:30px;
         text-decoration: none;

       }

      /* .form
       {
       	 border : 2px solid black;

       	 height: 300px;


       	 width:300px;
       	 background-color: yellow;
       	 margin-right: 50px;
       	 margin-right: 200px;

       }
	    					
*/

     
    

	</style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

	<div class="header_left">

		<a href="result_class_ten.php"><img src="headeta.png" class="header_img"></a> 

		      <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

		<a href="logout.php"><img src="logout.png"></a>
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

 
    		      <b class="header_text">  *****Marks Class - X*****</b>

           
    	  
    		
    	</div>  <br><br>
      <div class="frm_heading"> Class-X</div>
       <?php
                $id=$_GET['id'];
               include "connection.php";
                $qer=mysqli_query($conn,"select * from class_ten where id='$id'");
                $res=mysqli_fetch_assoc($qer);

                ?>

            <div class="form">

             <form method="post">
               <table>
                <td><b>Roll:</b></td><td><input type="text" name="roll" value="<?php echo $res['id'] ?>"></td>
                <tr>

                 <td><b>Student's Name:</b></td><td><input type="text" name="nam" value="<?php echo $res['sname']; ?>"></td>
               </tr>
                <tr>

                 <td><b>Birthday:</b></td><td><input type="text" name="dob" value="<?php echo $res['dob']; ?>"></td>
               </tr>
               <tr>
                 <td><b>Father's Name:</b></td><td><input type="text" name="fnam" value="<?php echo $res['fname']; ?>"></td>
               </tr>

               <tr><td><label class="lbl">Subject</label></td><td><label class="lbl">Marks</label></td></tr>
               <tr>
                 <td><b>Bengali:</b></td><td><input type="text" name="ben" value=""></td>
               </tr>
               <tr>
                 <td><b>English:</b></td><td><input type="text" name="eng" value=""></td>
               </tr>
               <tr>
                 <td><b>Mathametics:</b></td><td><input type="text" name="math" value=""></td>
               </tr>
                 <tr>
                 <td><b>Physics:</b></td><td><input type="text" name="phy" value=""></td>
                 </tr>
                 <tr>
                 <td><b>Geography:</b></td><td><input type="text" name="geo" value=""></td>
                 </tr>
                 <tr>
                 <td><b>History:</b></td><td><input type="text" name="his" value=""></td>
                 </tr>
                 <tr>
                 <td><b>Total Marks:</b></td><td><input type="text" name="tot"></td>
               </tr>

               
               </table>
                <input type="submit" name="sub" value="Add Marks">
              

             </form>
            



             
               

  </div>
</div>  
</div>
 </div>
</body>
</html>