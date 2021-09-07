//alert('hello');
						$("#shwdatatable").load(base_url+'manage-hotel-navigations/list');
							
						var res='navigation category';
						$("#frmnav_add,#frmnav_edit").validate({
			                rules: {
			                    page_category: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 30,
			                        alpha:true
			                    },
			                    
			                
			                },
			            
			                messages: {
			                    page_category: {
			                        required: "Specify " + res + "",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 30 characters allowed.")
			                    },
			                    
	   
			                },
			            
			            });	

			            

			            

			            


			$("#frmnav_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmnav_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-hotel-navigation',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Hotel navigation added.'){
										jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'manage-hotel-navigations/list');
										$('#frmnav_add')[0].reset();
										$("#page_category").css("background-color", "#FFFFFF");
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
										        title: ' Navigation information added.'
	      									})
	      								});
										
									}else if(data=='Hotel navigation already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#page_category").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Navigation already present!'
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

			$("#frmnav_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmnav_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-hotel-navigation',
									                data:new FormData(this),
									                beforeSend: function ( xhr ) {
									                    //Add your image loader here
									                     jQuery(".lds-facebook").show();
									                },
									                success:function(data){
									                //alert(data);
														    jQuery(".lds-facebook").hide();
									                    	jQuery("#subjresponse").html(data);
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
														        title: ' Navigation information updated.'
					      									})
					      								});
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));
			

			
			

			




			$("#page_category").change(function(){
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
		                                         
		                                         url: base_url+'api/navigations/hotelnav/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-hotel-navigations/list');
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
                                       
                                       var table = "cyg_page_category";
                                      
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