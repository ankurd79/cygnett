//alert('hello');
						$("#shwdatatable").load(base_url+'manage-team-members/list');
							
						var res='designation';
						$("#frmteam_add").validate({
			                rules: {
			                    salutation: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    country_id: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    first_name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 30
			                        //alpha:true
			                    },
			                    url: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 90
			                        //alpha:true
			                    },
			                    middle_name: {
			                        //required: true,
			                        minlength: 3,
			                        maxlength: 30
			                        //alpha:true
			                    },
			                    last_name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 30
			                        //alpha:true
			                    },
			                    department_id: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    
			                    designation_id: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    
			                    job_title: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 70
			                        //alpha:true
			                    },
                                /*
			                    email: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 80,
			                        cemail:true
			                    },
			                    	
			                    mobile: {
			                        required: true,
			                        minlength: 10,
			                        maxlength: 10,
			                        numeric:true
			                    },

			                    	
			                    position: {
			                        //required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },
			                    */

			                    image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    mobile_image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    bd_image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },
			                    
			                
			                },
			            
			                messages: {
			                    first_name: {
			                        required: "Specify first name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    last_name: {
			                        required: "Specify last name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    job_title: {
			                        required: "Specify job title",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 70 characters allowed.")
			                    },

			                    url: {
			                        required: "Specify url identifier",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 90 characters allowed.")
			                    },
                                /*
			                    email: {
			                        required: "Specify email",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 80 characters allowed.")
			                    },
			                    	
			                    mobile: {
			                        required: "Specify mobile",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
			                    },
			                    	
			                    position: {
			                        //required: "Specify order of appearance",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 2 characters allowed.")
			                    },
			                    */
			                    
	   
			                },
			            
			            });	

						$("#frmteam_edit").validate({
			                rules: {
			                    salutation: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    country_id: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    first_name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 30
			                        //alpha:true
			                    },
			                    middle_name: {
			                        //required: true,
			                        minlength: 3,
			                        maxlength: 30
			                        //alpha:true
			                    },
			                    last_name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 30
			                        //alpha:true
			                    },
			                    url: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 90
			                        //alpha:true
			                    },
			                    department_id: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    
			                    designation_id: {
			                        required: true,
			                        selectcheck: true
			                        
			                    },
			                    
			                    job_title: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 70
			                        //alpha:true
			                    },
                                /*
			                    email: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 80,
			                        cemail:true
			                    },
			                    	
			                    mobile: {
			                        required: true,
			                        minlength: 10,
			                        maxlength: 10,
			                        numeric:true
			                    },

			                    
			                    position: {
			                        //required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },
			                    */

			                    image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    mobile_image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    bd_image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },
			                    
			                
			                },
			            
			                messages: {
			                    first_name: {
			                        required: "Specify first name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    last_name: {
			                        required: "Specify last name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    job_title: {
			                        required: "Specify job title",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 70 characters allowed.")
			                    },

			                    url: {
			                        required: "Specify url identifier",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 90 characters allowed.")
			                    },

			                    /*
			                    email: {
			                        required: "Specify email",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 80 characters allowed.")
			                    },
			                    	
			                    mobile: {
			                        required: "Specify mobile",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
			                    },
			                    	
			                    position: {
			                        //required: "Specify order of appearance",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 2 characters allowed.")
			                    },
			                    */
			                    
	   
			                },
			            
			            });

			            

			            

			            


			$("#frmteam_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmteam_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-team-members',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Team member added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'manage-team-members/list');
										$('#frmteam_add')[0].reset();
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
										        title: ' Team member added.'
	      									})
	      								});
										
									}else if(data=='Team member already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#email").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Team member already present!'
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

			$("#frmteam_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmteam_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-team-members',
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
														        title: ' Team member updated.'
					      									})
					      								});
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));
			

			
			

			




			$("#first_name,#middle_name,#last_name,#department_id,#designation_id,#job_title,#email,#mobile").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            

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
		                                         
		                                         url: base_url+'api/teams/team/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-team-members/list');
		                                       //location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });	

            						$(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_team";
                                      
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

            						$(document).on('click', '.pchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_team_member_highlights";
                                      
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