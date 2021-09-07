//alert('hello');

							
						var res='location';
						
						
			            
						

						$("#frmunitoffer_add").validate({
			                rules: {
			                    /*
			                    offer_title: {
			                        required: true,
			                        minlength: 10,
			                        maxlength: 100
			                    },
			                    */

			                    /*
			                    nights: {
			                        //required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },

			                    
			                    days: {
			                        //required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },
			                    */

			                    
			                    master_offer_id: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    room_id: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    cost: {
			                        required: true,
			                        minlength: 4,
			                        maxlength: 6,
			                        numeric:true
			                    },

			                    /*
			                    valid_to:{
			                    	enddatechk: true
			                    },
			                    */


			                    image: {
			                         required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			                    offer_title: {
			                        required: "Specify offer title",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 100 characters allowed.")
			                    },

			                    cost: {
			                        required: "Specify offer cost",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 6 characters allowed.")
			                    },	

			                    

			                    

			                    image: {
			                     	 required: "Upload an image",
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			            $("#frmunitoffer_edit").validate({
			                rules: {
			                    /*offer_title: {
			                        required: true,
			                        minlength: 10,
			                        maxlength: 100
			                    },
			                    */

			                    /*
			                    nights: {
			                        //required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },

			                    
			                    days: {
			                        //required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },
			                    */

			                    
			                    master_offer_id: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    room_id: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    cost: {
			                        required: true,
			                        minlength: 4,
			                        maxlength: 6,
			                        numeric:true
			                    },

			                    /*
			                    valid_to:{
			                    	enddatechk: true
			                    },
			                    */


			                    image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			                    offer_title: {
			                        required: "Specify offer title",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 100 characters allowed.")
			                    },

			                    cost: {
			                        required: "Specify offer cost",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 6 characters allowed.")
			                    },	

			                    

			                    

			                    image: {
			                     	 //required: "Upload an image",
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			   $("#frmunitoffer_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmunitoffer_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-unit-offers',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Offer information added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										//$("#shwdatatable").load(base_url+'manage-locations/list');
										$('#frmunitoffer_add')[0].reset();
										$(window).off("beforeunload");
										$(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'success',
										        title: ' Offer information added.'
	      									})
	      								});
										var delay = 3000;
									    var url = base_url+'manage-unit-offers/list/'+unit_id;
										var timeoutID = setTimeout(function() {window.location.href = url;}, delay);	
										//window.location.replace(base_url+'manage-unit-room/list/'+unit_id);
										
									}else if(data=='Offer already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#offer_title").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Offer already present!'
	      									})
	      								});

									}
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));


			   $("#offer_title,#master_offer_id").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

          

            


            						$("#frmunitoffer_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmunitoffer_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-unit-offer',
									                data:new FormData(this),
									                beforeSend: function ( xhr ) {
									                    //Add your image loader here
									                     jQuery(".lds-facebook").show();
									                },
									                success:function(data){
									                //alert(data);
														    jQuery(".lds-facebook").hide();
									                    	//jQuery("#subjresponse").html(data);
						                                    //$("#subjresponse").fadeOut(12000);
						                                    $(window).off("beforeunload");
						                                    $(function() {	

													    	  var Toast = Swal.mixin({
														      toast: true,
														      position: 'top-end',
														      showConfirmButton: false,
														      timer: 7000
														    });

														    Toast.fire({
														        icon: 'success',
														        title: ' Offer information updated.'
					      									})
	      												});
						                                var delay = 3000;
									    				var url = base_url+'manage-unit-offers/list/'+unit_id;
														var timeoutID = setTimeout(function() {window.location.href = url;}, delay);    
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));


									    


                                    



                               $(document).on('click', '.delete', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var deleteid = splitid[1];
                                     
                                        var txt;
                    					var r = confirm("Are you sure of DELETING the record?");
                    					if (r == true) {
                      // AJAX Request
		                                       $.ajax({
		                                         
		                                         url: base_url+'api/units/unit/deleteroomimg',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });

                               		$(document).on('click', '.bnchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_hotel_offer_banner_images";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/admin/updatestatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, table:table },
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });