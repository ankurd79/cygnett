<?php $this->view('mailer/mail-header.php'); 

?>
<style>
body{margin:0px; padding:0px;}
p{font-size:16px; line-height:150%;}
table, td, th {border: 1px solid #d0d0d0;}
table {border-collapse: collapse;}

@media only screen and (max-width: 479px) {
/* mobile-specific CSS styles go here */
table {width: 100% !important;}
img.img-logo{width:100%!important; height:auto!important;}
img.img-separator{width:100%!important; height:auto!important;}
img.top-arrow-img{width:100%!important; height:auto!important;}
}

<?php
      //print_r($alldata);

      //exit;

      if($alldata['room_no']==''){
           $roomno='--';
      }else{
          $roomno=$alldata['room_no'];
      }
      
      if($alldata['checkin-date']==''){
           $checkindate='--';
      }else{
          $checkindate=$alldata['checkin-date'];
      }
      
      if($alldata['checkout-date']==''){
           $checkoutdate='--';
      }else{
          $checkoutdate=$alldata['checkout-date'];
      }
      
      if($alldata['txtReservation']=='Select mode of reservation'){
           $txtReservation='--';
      }else{
          $txtReservation=$alldata['txtReservation'];
      }
      
      if($alldata['txtStayPurpose']=='Select purpose of your stay'){
           $txtStayPurpose='--';
      }else{
          $txtStayPurpose=$alldata['txtStayPurpose'];
      }
      
      if($alldata['txtFutureStay']=='Please choose'){
           $txtFutureStay='--';
      }else{
          $txtFutureStay=$alldata['txtFutureStay'];
      }
      
      if($alldata['greetgrp']==''){
           $greetgrp='--';
      }else{
          $greetgrp=$alldata['greetgrp'];
      }
      
      if($alldata['appegrp']==''){
           $appegrp='--';
      }else{
          $appegrp=$alldata['appegrp'];
      }
      
      if($alldata['Checkgrp']==''){
           $Checkgrp='--';
      }else{
          $Checkgrp=$alldata['Checkgrp'];
      }
      
      if($alldata['Bell']==''){
           $bell='--';
      }else{
          $bell=$alldata['Bell'];
      }
      
      if($alldata['Imprgrp']==''){
           $firstimpression='--';
      }else{
          $firstimpression=$alldata['Imprgrp'];
      }
      
      if($alldata['Cleangrp']==''){
           $cleanlinessarrvll='--';
      }else{
          $cleanlinessarrvll=$alldata['Cleangrp'];
      }
      
      if($alldata['Housegrp']==''){
           $housekeeping='--';
      }else{
          $housekeeping=$alldata['Housegrp'];
      }
      
      if($alldata['Maintengrp']==''){
           $maintenance='--';
      }else{
          $maintenance=$alldata['Maintengrp'];
      }
      
      if($alldata['Moneygrp']==''){
           $valformoney='--';
      }else{
          $valformoney=$alldata['Moneygrp'];
      }
      
      if($alldata['Valgrp']==''){
           $valet='--';
      }else{
          $valet=$alldata['Valgrp'];
      }
      
      if($alldata['Parkgrp']==''){
           $parking='--';
      }else{
          $parking=$alldata['Parkgrp'];
      }
      
      if($alldata['Fitngrp']==''){
           $fitnessc='--';
      }else{
          $fitnessc=$alldata['Fitngrp'];
      }
      
      if($alldata['Busingrp']==''){
           $businessservices='--';
      }else{
          $businessservices=$alldata['Busingrp'];
      }
      
      if($alldata['Outgrp']==''){
           $chkoutservice='--';
      }else{
          $chkoutservice=$alldata['Outgrp'];
      }
      
      if($alldata['Bell2grp']==''){
           $bellservice='--';
      }else{
          $bellservice=$alldata['Bell2grp'];
      }
      
      if($alldata['Friengrp']==''){
           $friendly='--';
      }else{
          $friendly=$alldata['Friengrp'];
      }
      
      if($alldata['Knowgrp']==''){
           $knowledge='--';
      }else{
          $knowledge=$alldata['Knowgrp'];
      }
      
      if($alldata['Helpgrp']==''){
           $helpgful='--';
      }else{
          $helpgful=$alldata['Helpgrp'];
      }
      
      if($alldata['Foodgrp']==''){
           $foodqlty='--';
      }else{
          $foodqlty=$alldata['Foodgrp'];
      }
      
      if($alldata['Clean2grp']==''){
           $cleangrpp='--';
      }else{
          $cleangrpp=$alldata['Clean2grp'];
      }
      
      if($alldata['QSergrp']==''){
           $qos='--';
      }else{
          $qos=$alldata['QSergrp'];
      }
      
      if($alldata['Mealgrp']==''){
           $mealval='--';
      }else{
          $mealval=$alldata['Mealgrp'];
      }
      
      if($alldata['Decorgrp']==''){
           $decorapeal='--';
      }else{
          $decorapeal=$alldata['Decorgrp'];
      }
      
      if($alldata['Metgrp']==''){
           $staffmet='--';
      }else{
          $staffmet=$alldata['Metgrp'];
      }
      
      if($alldata['QualityFoodgrp']==''){
           $foodquality='--';
      }else{
          $foodquality=$alldata['QualityFoodgrp'];
      }
      
      if($alldata['DCleangrp']==''){
           $foodclean='--';
      }else{
          $foodclean=$alldata['DCleangrp'];
      }
      
      if($alldata['DQSergrp']==''){
           $foodqly='--';
      }else{
          $foodqly=$alldata['DQSergrp'];
      }
      
      if($alldata['LDMealgrp']==''){
           $valofmeal='--';
      }else{
          $valofmeal=$alldata['LDMealgrp'];
      }
      
      if($alldata['LDecorgrp']==''){
           $decorappealfood='--';
      }else{
          $decorappealfood=$alldata['LDecorgrp'];
      }
      
      if($alldata['LMetgrp']==''){
           $staffmetservicefood='--';
      }else{
          $staffmetservicefood=$alldata['LMetgrp'];
      }
      
      if($alldata['comments']==''){
           $guestcomments='--';
      }else{
          $guestcomments=$alldata['comments'];
      }

?>

</style>
       <html>
       <body style="background-color:#e4e4e4; font-family:arial; color:#000;">

<table width="700" border="0" cellspacing="0" cellpadding="0" style="background-color:#fff;" align="center">
 <tr>
    <td style="background-color: #d1ad00; height:8px;"></td>
  </tr>
 <tr>
    <td style="text-align: center; padding:10px 0px; border-bottom:1px solid #d0d0d0;"><img src="<?php echo base_url() ?>mailer/images/cygnett-logo.png" style="width:120px; height:95px;"></td>
  </tr>
  <tr>
    <td style="padding:5%;">
   <p>Dear Team,</p>
   <p>One of our esteemed guests , <span style="text-transform:uppercase; font-weight:600;"><?php echo ucfirst($alldata['name'])?></span> ,  left a review on the site just now. Please find the details as mentioned below:</p>

  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">
    <tr>
    <td style="padding:8px; width:20%;"><strong>Name</strong></td>
    <td style="padding:8px;"><?php echo ucfirst($alldata['name'])?></td>
    <td style="padding:8px; width:20%;"><strong>City</strong></td>
    <td style="padding:8px;"><?php echo ucfirst($alldata['city'])?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:20%;"><strong>Country</strong></td>
    <td style="padding:8px;"><?php echo $alldata['txtCountry']?></td>
    <td style="padding:8px; width:20%;"><strong>Phone</strong></td>
    <td style="padding:8px;"><?php echo $alldata['contact']?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:20%;"><strong>Email</strong></td>
    <td style="padding:8px;"><?php echo $alldata['email']?></td>
    <td style="padding:8px; width:20%;"><strong>Hotel Name</strong></td>
    <td style="padding:8px;"><?php echo $alldata['hotel_name']?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:20%;"><strong>Room #</strong></td>
    <td style="padding:8px;"><?php echo $roomno ?></td>
    <td style="padding:8px; width:20%;"><strong>Check-In Date</strong></td>
    <td style="padding:8px;"><?php echo $checkindate ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:20%;"><strong>Check-Out Date</strong></td>
    <td style="padding:8px;"><?php echo $checkoutdate ?></td>
    <td style="padding:8px; width:20%;"><strong>Mode Of Reservation</strong></td>
    <td style="padding:8px;"><?php echo $txtReservation ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:20%;"><strong>Purpose of Stay</strong></td>
    <td style="padding:8px;"><?php echo $txtStayPurpose ?></td>
    <td style="padding:8px; width:20%;"><strong>Will you be staying at Cygnett Hotels in future?</strong></td>
    <td style="padding:8px;"><?php echo $txtFutureStay ?></td>
    </tr>
    
  </table>
  <h4 style="color:#253a76; font-size:18px;">Reception</h4>

  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">
    
    <tr>
    <td style="padding:8px; width:30%;"><strong>Greeting</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $greetgrp ?></td>
    <td style="padding:8px; width:30%;"><strong>Appearance of Entrance</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $appegrp ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:30%;"><strong>Check-in Service</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $Checkgrp ?></td>
    <td style="padding:8px; width:30%;"><strong>Bell Service</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $bell ?></td>
    </tr>
        
  </table>

  <h4 style="color:#253a76; font-size:18px;">Guest Room</h4>
  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">    
    <tr>
    <td style="padding:8px; width:30%;"><strong>First Impression</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $firstimpression ?></td>
    <td style="padding:8px; width:30%;"><strong>Cleanliness Upon Arrival</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $cleanlinessarrvll ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:30%;"><strong>Housekeeping</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $housekeeping ?></td>
    <td style="padding:8px; width:30%;"><strong>Maintenance</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $maintenance ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:30%;"><strong>Value for Money</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $valformoney ?></td>
    <td style="padding:8px; width:30%;"><strong>&nbsp;</strong></td>
    <td style="padding:8px; width:20%;">&nbsp;</td>
    </tr>        
  </table>

  <h4 style="color:#253a76; font-size:18px;">Hotel Facilities</h4>
  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">    
    <tr>
    <td style="padding:8px; width:30%;"><strong>Valet/Laundry</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $valet ?></td>
    <td style="padding:8px; width:30%;"><strong>Parking</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $parking ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:30%;"><strong>Fitness Centre</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $fitnessc ?></td>
    <td style="padding:8px; width:30%;"><strong>Business Services</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $businessservices ?></td>
    </tr>          
  </table>

  <h4 style="color:#253a76; font-size:18px;">Departure</h4>
  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">    
    <tr>
    <td style="padding:8px; width:30%;"><strong>Check Out Service</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $chkoutservice ?></td>
    <td style="padding:8px; width:30%;"><strong>Bell Service</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $bellservice ?></td>
    </tr>           
  </table>
  <h4 style="color:#253a76; font-size:18px;">Employees</h4>
  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">    
    <tr>
    <td style="padding:8px; width:30%;"><strong>Friendly</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $friendly ?></td>
    <td style="padding:8px; width:30%;"><strong>Knowledgeable</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $knowledge ?></td>
    </tr>
     <tr>
    <td style="padding:8px; width:30%;"><strong>Helpful</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $helpgful ?></td>
    <td style="padding:8px; width:30%;"><strong>&nbsp;</strong></td>
    <td style="padding:8px; width:20%;">&nbsp;</td>
    </tr>           
  </table>
  <h4 style="color:#253a76; font-size:18px;">Restaurant (Breakfast)</h4>
  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">      
    <tr>
    <td style="padding:8px; width:30%;"><strong>Quality of Food</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $foodqlty ?></td>
    <td style="padding:8px; width:30%;"><strong>Cleanliness</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $cleangrpp ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:30%;"><strong>Quality of Service</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $qos ?></td>
    <td style="padding:8px; width:30%;"><strong>Value of Meal</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $mealval ?></td>
    </tr> 
    <tr>
    <td style="padding:8px; width:30%;"><strong>Appeal of Decor</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $decorapeal ?></td>
    <td style="padding:8px; width:30%;"><strong>Staff Met your Needs?</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $staffmet ?></td>
    </tr>           
  </table>
  <h4 style="color:#253a76; font-size:18px;">Lunch/Dinner</h4>
  <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">    
    <tr>
    <td style="padding:8px; width:30%;"><strong>Quality of Food</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $foodquality ?></td>
    <td style="padding:8px; width:30%;"><strong>Cleanliness</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $foodclean ?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:30%;"><strong>Quality of Service</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $foodqly ?></td>
    <td style="padding:8px; width:30%;"><strong>Value of Meal</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $valofmeal ?></td>
    </tr> 
    <tr>
    <td style="padding:8px; width:30%;"><strong>Appeal of Decor</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $decorappealfood ?></td>
    <td style="padding:8px; width:30%;"><strong>Staff Met your Needs?</strong></td>
    <td style="padding:8px; width:20%;"><?php echo $staffmetservicefood ?></td>
    </tr>           
  </table>

  <h4 style="color:#253a76; font-size:18px;">Additional Comments</h4>
  <p><?php echo strip_tags($guestcomments) ?></p>

   </td>
  </tr>
  
<?php $this->view('mailer/mail-footer.php'); ?>