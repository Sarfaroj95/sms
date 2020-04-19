
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
	    	margin-left: 380px;
	    }

	    .form
	    {
	    	margin-left: 250px;
        width: 500px;
        height: 300px;
        /*border: 2px solid black;*/
        background-color: #ffffb7;

	    }
      .not
      {
        margin-left: 250px;
        width: 500px;
        height: 30px; 
        background-color: #8000ff;
        color: #ffff80;
        font-size: 28;
        text-align: center;
        font-weight: bold;
        padding-top: 10px;
      }
      .title
      {
        font-size: 16px;
        font-weight: bold;
        color: #000040;
      }
      

	    input[type=text]
	    {
	    	height: 30px;
	    	width: 300px;
	        color: green;
	        font-weight: bold;
	        margin-left:30px;
	    }

	     input[type=password]
	    {
	    	height: 30px;
	    	width: 300px;
	        color: green;
	        font-weight: bold;
	        margin-left:30px;
	    }


	    input[type=radio]
	    {
	    	height: 20px;
	    	width: 20px;
	    	color: green;
	    }

	   /* input[type=date]
	    {
	    	height: 30px;
	    	width: 300px;
	    	color: green;
	    	font-weight: bold;
	    }*/

	    textarea
	    {
	    	width: 300px;
	    	color: green;
	    	font-weight: bold;
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
       	 margin-left:200px;
       	
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
       .marquee
       {
        cursor: pointer;
        height: 260px;
       }
       #contain
       {
        font-size: 19px;
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

 
    		      <b class="header_text">  ***** Notice Board *****</b>
    	  
    		
    	</div>  <br><br>


      <?php 
            include "connection.php";
            $qer=mysqli_query($conn,"select * from notice where id='2'");

           $res=mysqli_fetch_assoc($qer);
            

      ?>

    	                                    <!-- Body work -->
            
            <div class="not">Notice</div>
            <div class="form">

             
               <br><br>

               
                <marquee direction="up" class="marquee" onmouseover="stop()" onmouseout="start()">

                 <h3 style="text-align: center;">  <?php echo $res['title']; ?>" </h3>
      
                <h4 > <?php echo $res['dat']; ?></t></h4>
                
                <p id="contain"> <?php echo $res['contain']; ?> </p>
                 <br>
             

              <?php
                  $qer=mysqli_query($conn,"select * from notice where id='3'");

                  $res=mysqli_fetch_assoc($qer);
              ?>

                <h3 style="text-align: center;"> <?php echo $res['title']; ?></h3>
                
                <h4> <?php echo $res['dat']; ?></h4>
                
                 <p id="contain"> <?php echo $res['contain']; ?></p>
                 <br>
                
               

                <?php
                  $qer=mysqli_query($conn,"select * from notice where id='4'");

                  $res=mysqli_fetch_assoc($qer);
              ?>




                <h3 style="text-align: center;">  <?php echo $res['title']; ?></h3>
                  
                <h4> <?php echo $res['dat']; ?> </h4>
                  
                <p id="contain"> <?php echo $res['contain']; ?> </p>
               </marquee>
               <hr><hr>
               


              

  </div>
</div>



             





           
         </div>
 				        

    </div>


    


</body>
</html>


