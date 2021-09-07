<?php $this->view('mailer/mail-header.php'); 

?>

<body style="background-color:#e4e4e4; font-family:arial; color:#000;">
<table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color:#fff;" align="center">
 <tr>
    <td style="background-color: #d1ad00; height:8px;"></td>
  </tr>
 <tr>
    <td style="text-align: center; padding:10px 0px; border-bottom:1px solid #d0d0d0;"><img src="<?php echo base_url() ?>mailer/images/cygnett-logo.png" style="width:120px; height:95px;"></td>
  </tr>
  <tr>
    <td style="padding:5%;">
	<p>Dear Brand Team,</p>
	<p><strong><?php echo ucfirst($alldata['fname']) ?> <?php echo ucfirst($alldata['lname']) ?></strong> has put in a request for '<i>fact sheet</i>' for <i><strong><?php echo $alldata['brand'] ?></strong></i> brand. The details are as below:</p>
   <p>
      <?php
         if($alldata['user']==1){
            $usertype='Owner';
         }else if($alldata['user']==2){
            $usertype='Investor / Developer';
         }

         if($alldata['hotelname']){
            $hotelname=$alldata['hotelname'];
         }else{
            $hotelname='--';
         }
         
         if($alldata['locprojname']){
            $locprojname=$alldata['locprojname'];
         }else{
            $locprojname='--';
         }
        
        
        
      ?>
     <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">
    <tr>
    <td style="padding:8px; width:40%;"><strong>First Name</strong></td>
    <td style="padding:8px;"><?php echo ucfirst($alldata["fname"])?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Last name</strong></td>
    <td style="padding:8px;"><?php echo ucfirst($alldata["lname"])?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Email</strong></td>
    <td style="padding:8px;"><?php echo $alldata["email"]?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Phone</strong></td>
    <td style="padding:8px;"><?php echo $alldata["mobile"]?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Type Of User</strong></td>
    <td style="padding:8px;"><?php echo $usertype?></td>
    </tr>
    <?php if($alldata['user']==1) {?>
        <tr>
        <td style="padding:8px; width:40%;"><strong>Hotel Name</strong></td>
        <td style="padding:8px;"><?php echo $hotelname?></td>
        </tr>
    <?php } elseif($alldata['user']==2) { ?>
        <tr>
        <td style="padding:8px; width:40%;"><strong>Location & Project Name</strong></td>
        <td style="padding:8px;"><?php echo $locprojname?></td>
        </tr>
    <?php } ?>
    
  </table>
  
  <h4 style="color:#253a76; font-size:18px;">Project Details</h4>
  <p><?php echo strip_tags($alldata["details"]) ?></p>


   </p>
  <p>&nbsp;</p>
 <p>Regards<br>Web Admin</p>

	</td>
  </tr>
<?php $this->view('mailer/mail-footer.php'); ?>