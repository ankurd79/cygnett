<?php $this->view('mailer/mail-header.php'); 

?>
<style>
table, td, th {border: 1px solid #d0d0d0;}
table {border-collapse: collapse;}
</style>
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
	<p>Hi Central Reservations Team,</p>
	<?php if($alldata['type']==1) {?>
      <p><strong><?php echo ucfirst($alldata['fname']) ?> <?php echo ucfirst($alldata['lname']) ?></strong> has shown an interest to reserve a table at <i><strong><?php echo $alldata['rest_name'] ?></strong></i> , <i><strong><?php echo $alldata['htl_name'] ?></strong></i>. The details are as below:</p>
      <p>
   <?php }elseif($alldata['type']==2){?>
      <p><strong><?php echo ucfirst($alldata['fname']) ?> <?php echo ucfirst($alldata['lname']) ?></strong> has shown interest to book<i><strong><?php echo $alldata['rest_name'] ?></strong></i> , <i><strong><?php echo $alldata['htl_name'] ?></strong></i>. The details are as below:</p>
      <p>

   <?php } ?>
   <p>
      
     <table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">
    <tr>
    <td style="padding:8px; width:40%;"><strong>First Name</strong></td>
    <td style="padding:8px;"><?php echo ucfirst(html_entity_decode(($alldata["fname"])))?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Last name</strong></td>
    <td style="padding:8px;"><?php echo ucfirst(html_entity_decode(($alldata["lname"])))?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Email</strong></td>
    <td style="padding:8px;"><?php echo html_entity_decode($alldata["email"])?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Phone</strong></td>
    <td style="padding:8px;"><?php echo $alldata["mobile"]?></td>
    </tr>
    <tr>
    <td style="padding:8px; width:40%;"><strong>Total Guests</strong></td>
    <td style="padding:8px;"><?php echo $alldata["guests"]?></td>
    </tr>
     <tr>
    <td style="padding:8px; width:40%;"><strong>Preferred date of reservation</strong></td>
    <td style="padding:8px;"><?php echo formatDateTime($alldata["bookdate"],1)?></td>
    </tr>
    <?php if($alldata["msg"]) {?>
       <tr>
       <td style="padding:8px; width:40%;"><strong>Special Requests / Instructions</strong></td>
       <td style="padding:8px;"><?php echo strip_tags($alldata["msg"])?></td>
       </tr>
    <?php } ?>
    
  </table>


   </p>
  <p>&nbsp;</p>
 <p>Regards<br>Web Admin</p>

	</td>
  </tr>
<?php $this->view('mailer/mail-footer.php'); ?>