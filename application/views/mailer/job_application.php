<?php $this->view('mailer/mail-header.php'); 

//print_r($add);
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
	<p>Dear HR Team,</p>
	<p><strong><?php echo $alldata['fname'] ?></strong> has applied for the job posting <strong><?php echo ucfirst($add['extrainfo']) ?></strong> on <?php echo date('d/m/Y H:i:s') ?>.</p>
   <h4 style="font-weight:400; font-size:20px; border-bottom:1px solid #cccccc; margin-bottom:20px; padding-bottom:10px;">Profile of the candidate</h4>
   
   <?php if($alldata['coverletter']) {?>
      <p><strong>The cover letter :</strong> <br><?php echo $alldata['coverletter'] ?></p>
   <?php } ?>
  <p><strong>Mobile :</strong> <?php echo $alldata['mobile'] ?> <br> <strong>Email :</strong> <?php echo $alldata['email'] ?></p>
  <p><a href='<?php echo base_url() ?>jobs/resumes/<?php echo $attchment ?>' rel='nofollow'>Click here to download the resume</a></p>
  <p>&nbsp;</p>
 <p>Regards<br>Web Admin</p>

	</td>
  </tr>
<?php $this->view('mailer/mail-footer.php'); ?>