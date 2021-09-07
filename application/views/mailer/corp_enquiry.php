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

</style>

</head>
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
   <p>Dear Central Reservation Team,</p>
   <p>The following corporate enquiry was generated from our website on <?php date('d/m/Y') ?></p>

<table width="100%" border="1" bordercolor="#d0d0d0" cellspacing="0" cellpadding="0" style="font-size:14px;">
    <tr>
    <td style="padding:8px; width:30%;"><strong>Name</strong></td>
    <td style="padding:8px;"><?php echo  ucfirst($alldata['first_name'])?> <?php echo ucfirst($alldata['last_name'])?></td>
       </tr> 
    <tr>    
    <td style="padding:8px; width:30%;"><strong>Email</strong></td>
    <td style="padding:8px;"><?php echo $alldata['email']?></td>
    </tr>

    <tr>    
    <td style="padding:8px; width:30%;"><strong>Mobile</strong></td>
    <td style="padding:8px;"><?php echo $alldata['mobile']?></td>
    </tr>

    <tr>    
    <td style="padding:8px; width:30%;"><strong>Company</strong></td>
    <td style="padding:8px;"><?php echo ucfirst($alldata['company'])?></td>
    </tr>

    <tr>    
    <td style="padding:8px; width:30%;"><strong>Address</strong></td>
    <td style="padding:8px;"><?php echo $alldata['street_address']?></td>
    </tr>

    <tr>    
    <td style="padding:8px; width:30%;"><strong>Pincode</strong></td>
    <td style="padding:8px;"><?php echo $alldata['pincode']?></td>
    </tr>


    <tr>    
    <td style="padding:8px; width:30%;"><strong>City</strong></td>
    <td style="padding:8px;"><?php echo ucfirst($alldata['city'])?></td>
    </tr>

    <tr>    
    <td style="padding:8px; width:30%;"><strong>Country</strong></td>
    <td style="padding:8px;"><?php echo $alldata['txtCountry']?></td>
    </tr>

    <tr>    
    <td style="padding:8px; width:30%;"><strong>Room Nights Per Year</strong></td>
    <td style="padding:8px;"><?php echo $alldata['room_night']?></td>
    </tr>
    
  </table>
 

   </td>
  </tr>
<?php $this->view('mailer/mail-footer.php'); ?>