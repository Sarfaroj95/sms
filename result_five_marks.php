
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
	    	margin-left: 340px;
	    }
      .frm_heading
      {
        margin-left: 300px;
        height: 30px;
        padding-top: 10px;
        width: 454px;
        background: #d50000;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-top-right-radius: 6px;
        border-top-left-radius: 6px;
      }

	    .form
	    {
	    	margin-left: 300px;
         border: 2px solid black;
         background: #ff8080;
         width: 450px;
         padding-top: 10px;
         height: 320px;

	    }

	    input[type=text]
	    {
	    	height: 20px;
	    	width: 200px;
	        color: green;
	        font-weight: bold;
	        margin-left:30px;
	    }

	     
       
       input[type=submit]
       {
       	 height: 35px;
       	 width: 120px;
       	 font-size: 15px;
       	 cursor: pointer;
       	 background-color: green;
       	 color: white;
       	 font-weight: bold;
       	 margin-left:210px;

       }

       /* input[type=reset]
       {
       	 height: 35px;
       	 width: 120px;
       	 font-size: 15px;
       	 cursor: pointer;
       	 background-color: green;
       	 color: white;
       	 font-weight: bold;
       }*/

       b
       {
       	 font-size: 20px;
       	 font-weight: bold;
       	 color: blue;
       	 margin-left:30px;
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

		<a href="index.php"><img src="headeta.png" class="header_img"></a> 

		      <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

		<a href="logout.php"><img src="logout.png"></a>
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

 
    		      <b class="header_text">  *****Add Marks Class Wise*****</b>
    	  
    		
    	</div>  <br><br>

    	         

        
                                          <!-- Body work -->

                <?php
                include "connection.php";
                $qer=mysqli_query($conn,"select * from class_five");
                $res=mysqli_fetch_assoc($qer);

                ?>


                <div class="frm_heading"> Class-V</div>

            <div class="form">

             <form method="post">
               <table>
                <tr>
                 <td><b>Student's Name:</b></td><td><input type="text" name="nam" value=""></td>
               </tr>
               <tr>
                 <td><b>Father's Name:</b></td><td><input type="text" name="fnam" value=""></td>
               </tr>
               <tr>
                 <td><b>Bengali:</b></td><td><input type="text" name=""></td>
               </tr>
               <tr>
                 <td><b>English:</b></td><td><input type="text" name=""></td>
               </tr>
               <tr>
                 <td><b>Mathametics:</b></td><td><input type="text" name=""></td>
               </tr>
                 <tr>
                 <td><b>Physics:</b></td><td><input type="text" name=""></td>
                 </tr>
                 <tr>
                 <td><b>Geography:</b></td><td><input type="text" name=""></td>
                 </tr>
                 <tr>
                 <td><b>Total Marks:</b></td><td><input type="text" name=""></td>
               </tr>

               
               </table>
                <input type="submit" name="sub" value="Add Marks"><br>
                 

             </form>


             
               

  </div>
</div>  
</div>
 </div>
</body>
</html>

             <?php

              include "connection.php";
              if(isset($_POST['sub']))
              {
                $nam=$_POST['nam'];
                $fnam=$_POST['fnam'];

                $qer=mysqli_query($conn,"insert into result_five values('$nam',$fnam)");

                if($qer)
                {
                  echo "<script> alert('Marks Added')</script>";
                }
                else
                {
                   echo "<script> alert('Marks Add  Failed')</script>";
                }
              }
              ?>


