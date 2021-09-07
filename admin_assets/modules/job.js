//alert('hello');
						$("#shwdatatable").load(base_url+'manage-job-posts/list');
							
						var res='designation';
						$("#frm_add").validate({
			                rules: {
			                    job_title: {
			                        required: true,
			                        minlength: 10
			                        //alpha:true
			                    },

			                    job_location: {
			                        required: true,
			                        minlength: 4,
			                        alpha:true
			                    },
			                    
			                    to_mail: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 30,
			                        cemail:true
			                    },

			                    job_qualification: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    document: {
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "doc,docx,pdf",
                    				 //filesize: 300000   //max size 200 kb
			                         //cemail:true
			                    },
			                    
			                
			                },
			            
			                messages: {
			                    job_title: {
			                        required: "Specify job title",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        //maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    

			                    job_location: {
			                        required: "Specify a location",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        //maxlength: jQuery.validator.format("A maximum of 300 characters allowed.")
			                    },

			                    to_mail: {
			                        required: "Specify a recipient",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    document: {
			                     	 
						             extension: "Acceptable document format : doc|docx|pdf",
                    				 //filesize: "Doc size should be of 300 kb or less!"
			                         //cemail:true
			                    },
			                    
	   
			                },
			            
			            });	

			            $("#frm_edit").validate({
			                rules: {
			                    job_title: {
			                        required: true,
			                        minlength: 10
			                        //alpha:true
			                    },

			                    job_location: {
			                        required: true,
			                        minlength: 4,
			                        alpha:true
			                    },
			                    
			                    to_mail: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 30,
			                        cemail:true
			                    },

			                    job_qualification: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    document: {
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "doc,docx,pdf",
                    				 //filesize: 300000   //max size 200 kb
			                         //cemail:true
			                    },
			                    
			                
			                },
			            
			                messages: {
			                    job_title: {
			                        required: "Specify job title",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        //maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },

			                    

			                    job_location: {
			                        required: "Specify a location",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        //maxlength: jQuery.validator.format("A maximum of 300 characters allowed.")
			                    },

			                    to_mail: {
			                        required: "Specify a recipient",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 300 characters allowed.")
			                    },

			                    document: {
			                     	 
						             extension: "Acceptable document format : doc|docx|pdf",
                    				 //filesize: "Doc size should be of 300 kb or less!"
			                         //cemail:true
			                    },
			                    
	   
			                },
			            
			            });

			            

			            

			            


			$("#frm_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frm_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-job',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Job added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'manage-job-posts/list');
										$('#frm_add')[0].reset();
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
										        title: ' Job Added.'
	      									})
	      								});
										
									}else if(data=='Job already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#job_title").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Job already present!'
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

			$("#frm_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frm_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-job',
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
														        title: 'Job updated.'
					      									})
	      											});
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));
			

			
			

			




			$("#job_title,#job_location").change(function(){
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
		                                         
		                                         url: base_url+'api/jobs/job/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-job-posts/list');
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
                                       
                                       var table = "cyg_job_posts";
                                      
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
                                     
                                     
                                     
                                     $(document).on('click', '.cn', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var level = "1";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/jobposts/jobpost/candidatehiringupdateStatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, level:level},
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       location.reload();
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });
                                     
                                     
                                     
                                     $(document).on('click', '.iv', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var level = "2";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/jobposts/jobpost/candidatehiringupdateStatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, level:level},
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                      location.reload();
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });
                                     
                                     
                                     $(document).on('click', '.h', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var level = "3";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/jobposts/jobpost/candidatehiringupdateStatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, level:level},
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       location.reload();
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });
                                     
                                     
                                     
                                     $(document).on('click', '.deleteapp', function(){
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
		                                         
		                                         url: base_url+'admin/jobposts/jobpost/applicationremove',
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
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     