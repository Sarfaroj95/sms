<?php
include "connection.php";

 $a=$_GET['id'];

if(isset($_POST['sub']))
{
  $b=$_POST['ben'];
  $eng=$_POST['eng'];
  $math=$_POST['math'];
  $phy=$_POST['phy'];
  $geo=$_POST['geo'];
  $his=$_POST['his'];
  $total=$_POST['total'];



  $update=mysqli_query($conn,"UPDATE `result_six` SET bengali='$b', english='$eng', math='$math', phy='$phy', geo='$geo', his='$his', total='$total'  where id='$a'");

  if($update)
  {
    echo "<script> alert('Successfull Update')</script>";
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
        margin-left: 350px;
      }
      .frm_heading
      {
        margin-left: 300px;
        height: 30px;
        padding-top: 10px;
        width: 454px;
        background: #0000a0;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-top-right-radius: 6px;
        border-top-left-radius: 6px;
        margin-top: -15px;
        color: #e2e2e2;
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
         
         background: #7dffbe;
         width: 454px;
         padding-top: 10px;
         height: 400px;

      }

      input[type=text]
      {
        height: 20px;
        width: 200px;
         
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

    <a href="result_class_six.php"><img src="headeta.png" class="header_img"></a> 

          <a href="change_pass.php" class="header_right"><img src="sett.png" ></a>

    <a href="logout.php"><img src="logout.png"></a>
  </div>

                                            <!-- Menu and Body Section -->


    <div class="body">
      <div class="menu">

 
              <b class="header_text">  *****Update Marks Class - VI*****</b>

           
        
        
      </div>  <br><br>
      <div class="frm_heading"> Class-VI</div>
       <?php
                $a=$_GET['id'];
                $con=mysqli_connect("localhost","root","","student");
                $qer=mysqli_query($con,"select * from result_six where id='$a'");
                $res=mysqli_fetch_assoc($qer);

                ?>

             <div class="form">
              <script type="text/javascript">

function calculate(){
var result = document.getElementById('result');
var el, i = 0, total = 0; 
while(el = document.getElementById('v'+(i++)) ) {
el.value = el.value.replace(/\\D/,"");
total = total + Number(el.value);
}
result.value = total;
if(document.getElementById('v0').value =="" && document.getElementById('v1').value =="" && document.getElementById('v2').value =="" && document.getElementById('v3').value =="" && document.getElementById('v4').value =="" && document.getElementById('v5').value ==""){
 result.value ="";
}
}
</script>

             <form method="post">
               <table>
                <tr>

                 <td><b>Roll_No:</b></td><td><input type="text" name="nam" value="<?php echo $res['id'] ?>"></td>
               </tr>
                <tr>

                 <td><b>Student's Name:</b></td><td><input type="text" name="nam" value="<?php echo $res['sname'] ?>"></td>
               </tr>
                <tr>

                 <td><b>Birthday:</b></td><td><input type="text" name="dob" value="<?php echo $res['dob']; ?>"></td>
               </tr>
               <tr>
                 <td><b>Father's Name:</b></td><td><input type="text" name="fnam" value="<?php echo $res['fname']; ?>"></td>
               </tr>

               <tr><td><label class="lbl">Subject</label></td><td><label class="lbl">Marks</label></td></tr>
               <tr>
                 <td><b>Bengali:</b></td><td><input id ="v0" onkeyup="calculate()" type="text" name="ben" value="<?php echo $res['bengali'] ?>"></td>
               </tr>
               <tr>
                 <td><b>English:</b></td><td><input id ="v1" onkeyup="calculate()" type="text" name="eng" value="<?php echo $res['english'] ?>"></td>
               </tr>
               <tr>
                 <td><b>Mathametics:</b></td><td><input id ="v2" onkeyup="calculate()" type="text" name="math" value="<?php echo $res['math'] ?>"></td>
               </tr>
                 <tr>
                 <td><b>Physics:</b></td><td><input  id ="v3" onkeyup="calculate()" type="text" name="phy" value="<?php echo $res['phy'] ?>"></td>
                 </tr>
                 <tr>
                 <td><b>Geography:</b></td><td><input  id ="v4" onkeyup="calculate()" type="text" name="geo" value="<?php echo $res['geo'] ?>"></td>
                 </tr>
                 <tr>
                 <td><b>History:</b></td><td><input  id ="v5" onkeyup="calculate()" type="text" name="his" value="<?php echo $res['his'] ?>"></td>
                 </tr>
                 <tr>
                 <td><b>Total Marks:</b></td><td><input id="result" onkeyup="calculate()" type="text" name="total" value="<?php echo $res['total'] ?>"> </td>
               </tr>

               
               </table>
                <input type="submit" name="sub" value="update">
              

             </form>


             



             
       
  </div>
</div>  
</div>
 </div>
</body>
</html>
