
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

	    .form
	    {
	    	margin-left: 350px;
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

     
     /* Dropdown Button */
.dropbtn {
    background-color: #ff3eff;
    color: white;
    padding: 16px;
    font-size: 20px;
    width: 300px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ff93ff;
    min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;

}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;

}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #ae00ae;
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

 
    		      <b class="header_text">  *****Add Marks Class Wise*****</b>
    	  
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->
            <div class="form">

             
               <br><br><br>


              <div class="dropdown">
 			  <button class="dropbtn"> Select Class</button>
  			  <div class="dropdown-content">
    				
    				<a href="result_show_five.php">Class-V</a>
    				<a href="result_show_six.php">Class-VI</a>
    				<a href="result_show_seven.php">Class-VII</a>
    				<a href="result_show_eight.php">Class-VIII</a>
    				<a href="result_show_nine.php">Class-IX</a>
    				<a href="result_show_ten.php">Class-X</a>

  </div>
</div>



             





           
         </div>
 				        

    </div>


    


</body>
</html>


