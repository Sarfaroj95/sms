
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
        margin-left: 350px;
      }

      .form
      {
        margin-left: 300px;
      }
.admin
    {
      height: 30px;
      width: 980px;
        margin-left: 10px;
      background: black;
     
      

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

 
              <b class="header_text">  *****Library Details*****</b>
        
        
      </div>  <br><br>

                                          <!-- Body work -->
            
              <form name="frm" action="" method="post">

               <table border="2" style="text-align: center; margin-left: 80px;">
 <tr> <th colspan="10" style="background: #b5667a;height: 50px; font-size: 26px;">Student Library Details</th></tr>
 <tr>
 <th style="background: #4affa5;width: 70px;">Id</th>
 <th style="background: #4affa5;width: 70px;">Name</th>
 <th style="background: #4affa5;width: 70px;">Class</th>
 <th style="background: #4affa5;width: 70px;">Roll</th>
 <th style="background: #4affa5;width: 70px;">Book</th>
 <th style="background: #4affa5;width: 70px;">Author</th>
 <th style="background: #4affa5;width: 70px;">Book Issue</th>
 <th style="background: #4affa5;width: 70px;">Book Sub</th>
 
 <th style="background: #4affa5;width: 70px;">Update</th>
 <th style="background: #4affa5;width: 70px;">Delete</th>
 </tr>
<?php
include "connection.php";
$qer=mysqli_query($conn,"select * from library_details ");


$c='1';
while($res=mysqli_fetch_assoc($qer))
{
?>
<tr>
  <td><?php echo $c++;  ?></td>
  <td><?php echo $res['sname'];  ?></td>
  <td><?php echo $res['class'];  ?></td>
  <td><?php echo $res['roll'];  ?></td>
  <td><?php echo $res['bookname'];  ?></td>
  <td><?php echo $res['authorname'];  ?></td>
  <td><?php echo $res['withdroldate'];  ?></td>
  <td><?php echo $res['submisiondate'];  ?></td>
  
  <td><a href="up.php?id=<?php echo $res['id']; ?>"><input type="button" name="" value="Update" / style="height: 35px;
         width: 80px;
         font-size: 15px;
         cursor: pointer;
         background-color: green;
         color: white;
         font-weight: bold;" ></a>
      </td>
      <td><input type="button" onclick="deleteme(<?php echo $res['id']; ?>)" name="delete" value="Delete" style="height: 35px;
         width: 80px;
         font-size: 15px;
         cursor: pointer;
         background-color: red;
         color: white;
         font-weight: bold;
         "></a></td>

         </tr>
         <script type="text/javascript">
           
            function deleteme(id)
            {
              if(confirm("Do you want delete "))
              {
                window.location.href='delt.php?id=' +id+"";
                return true;
              }

            }

         </script>


</tr>

<?php } ?>

</table>
                   
            
          </form>
           <div class="admin"></div>
         </div>
  
</body>
</html>

