<!DOCTYPE html>
<html lang="en">
<head>
  <title>तूर्यनाद | संस्थापक मंडल एवं पूर्व सदस्य</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.jpg" type="image/jpg" size="16x16";>
  <!-- icon library -->
<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel='stylesheet' href='css/footer.css'>
   <link rel='stylesheet' href='css/bootstrap.css'>
   <link rel='stylesheet' href='css/css1.css'>
  <link rel='stylesheet' href='css/header.css'>
 <link rel='stylesheet' href='css/team.css'>  
  <style>
.header {
    position: fixed;
    background: rgb(89, 91, 93);
}
</style>
</head>
<body>
<?php

include 'header.php';

?>
<div class="container team text-center">
	<div class="row">
<?php

$number=9;
$x=0;
$y=0;
$z=0;
$a=0;
if($number==1)
{
	$x=$number+7;
// 	$y=$number+2;
// 	$z=$number+3;
// 	$a=$number+4;
}else if($number==9)
{
	$x=$number+1;
// 	$y=$number+2;
}
else if($number==20)
{
	
}

include 'connection.php';
$qry="SELECT * FROM `team` WHERE member_type >='$number' AND member_type <='$x' ORDER BY `team`.`member_type` ASC ,`team`.`order` ASC,`team`.`id` ASC;";
$team=mysqli_query($conn,$qry);
   if (mysqli_num_rows($team) > 0)
    while($row = mysqli_fetch_assoc($team)) 
      {
		
         if($number==$row['member_type'])
         {
            $number=$number+1;
            if($row['member_type']==1){ $y=4; ?>
               <div class="col-xs-12"><h1>संस्थापक मण्डल</h1></div>
               <?php 
            } 
            else if($row['member_type']<9){ $y=3;
               ?>
               <div class="col-xs-12"><h1>पूर्व छात्र सदस्य</h1></div>
               <?php
            }
            else if($row['member_type']>=9){ $y=2;
               if($row['member_type']==9){ //2023 & 2024
               ?>
                  <div class="col-xs-12"><h1>तूर्यनाद आयोजन समिति </h1></div>
               <?php
            }
            else if($row['member_type']==10){ //2025
               ?>
               <div class="col-xs-12"><h1>तूर्यनाद सदस्य </h1></div>
               <?php 
            }	
         }
		}
?>
                <div class="col-sm-<?php echo $y; ?>">
                        <div class="card">
                        <img src="images/team/<?php echo $row['member_type']; ?>/<?php echo $row['alias']; ?>.jpg" alt="" style="width:100%">
                        <div class="containerCard">
                          <h4><b><?php echo $row['name']; ?></b></h4> 
                          <?php if($row['member_type']>8 && $row['member_type']<11) // displaying post till 2024 batch 
						  { 
                     ?>
                          <p><?php  echo $row['post']; ?></p> 
						  <?php } ?>
						  <?php if($row['fb_']!=null && $row['member_type']<11){?>  
            <a href="https://www.facebook.com/<?php echo $row['fb_']; ?>" target="_blank">
                                <i class="fa fa-facebook-square" style="font-size:15px;padding:0 10px;"></i>
                             </a> 
	<?php } ?>
	
	<?php if($row['google_']!=null && $row['member_type']<11){?>
            <a href="https://plus.google.com/<?php echo $row['google_']; ?>" target="_blank">
                                <i class="fa fa-google-plus" style="font-size:15px;padding:0 10px;"></i>
                             </a> 
	<?php } ?>
	
	<?php if($row['twitter_']!=null && $row['member_type']<11){?>
            <a href="https://www.twitter.com/<?php echo $row['twitter_']; ?>" target="_blank">
                                <i class="fa fa-twitter" style="font-size:15px;padding:0 10px;"></i>
                             </a> 
	<?php } ?>

   <?php if($row['instagram']!=null && $row['member_type']<11){?>
            <a href="https://www.instagram.com/<?php echo $row['instagram']; ?>" target="_blank">
                                <i class="fa fa-instagram" style="font-size:15px;padding:0 10px;"></i>
                             </a> 
	<?php } ?>

                          
                        </div>
                      </div>
                </div>
                

            <?php
	} 
?>    

            </div>

        </div>
		<?php

include 'footer.php';

?>
        </body>
        </html>

        <!--< -->