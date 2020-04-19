
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
        
        margin-left: 170px;
        border: 2px solid black;
        border-left: 2px solid black;
        border-right: 2px solid black;
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
	    	margin-left: 50px;
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

     
    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 8px;
    padding-bottom: 8px;
    text-align: center;
    background-color: #0f166f;
    color: white;
   

}
.fm
{
  width: 900px;
  margin-left: 0px;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.tdh
{
  text-align: center;
}
.tdb
{
   text-align: center;
   height: 30px;
         width: 70px;
         font-size: 12px;
         cursor: pointer;
         background-color: green;
         color: white;
       }
         .admin
    {
      height: 30px;
      width: 900px;
      background: black;
      margin-left: 0px;
      color: white;
      font-size: 20px;
      text-align: center;

    }
        


}


	</style>


</head>

<body bgcolor="lightyellow">

                                           <!-- Header Section -->

	<div class="header_left">

		<a href="result_select.php"><img src="headeta.png" class="header_img"></a> 

		      <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

		<a href="logout.php"><img src="logout.png"></a>
	</div>

                                            <!-- Menu and Body Section -->


    <div class="body">
    	<div class="menu">

 
    		      <b class="header_text">  *****Class Ten Student list*****</b>
    	  
    		
    	</div>  <br><br>

    	                                    <!-- Body work -->
            <div class="form">

                                <!-- Form Section -->
<div class="fm">
<table id="customers">
  <tr>
    <th style="width: 50px;">New_Roll</th>
    <th style="width: 50px;">Pre_Roll</th>
    <th style="width: 120px;">Student Name</th>
    <th style="width: 120px;">Father Name</th>
    
    <th style="width: 50px;">Ben</th>
    <th style="width: 50px;">Eng</th>
    <th style="width: 50px;">Math</th>
    <th style="width: 50px;">Phy</th>
    <th style="width: 50px;">Geo</th>
    <th style="width: 50px;">His</th>
    <th style="width: 50px;">Total</th>
     
  </tr>
  
  <?php
include "connection.php";
$qer=mysqli_query($conn,"select * from result_ten ");
$c='1';
while($res=mysqli_fetch_assoc($qer))
{
?>


  <tr>
    <td class="tdh"><?php echo $c++; ?></td>
    <td class="tdh"><?php echo $res['id'];  ?></td>
    <td class="tdh"><?php echo $res['sname'];  ?></td>
    <td class="tdh"><?php echo $res['fname'];  ?></td>

      <td class="tdh"><?php echo $res['bengali'];  ?></td>

        <td class="tdh"><?php echo $res['english'];  ?></td>

          <td class="tdh"><?php echo $res['math'];  ?></td>

            <td class="tdh"><?php echo $res['phy'];  ?></td>

              <td class="tdh"><?php echo $res['geo'];  ?></td>

                <td class="tdh"><?php echo $res['his'];  ?></td>

                  <td class="tdh"><?php echo $res['total'];  ?></td>
  
  

 
       
  
  </tr>
   <?php } ?>
</table>

             
              

  </div>
   <div class="admin"></div>
</div>



             





           
         </div>
 				        

    </div>


    


</body>
</html>


