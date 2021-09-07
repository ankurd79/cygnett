//alert('hello');

							
						var res='restaurant';
						$("#frmrestaurant_add").validate({
			                rules: {
			                    name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 75
			                        //alpha:true
			                    },
			                    
			                    tag_line: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 40,
			                         //alpha:true
			                         //cemail:true
			                    },
			                    
			                    styling: {
			                         required: true,
			                         //cemail:true
			                    },

			                    image: {
			                         required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    image2: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },


			                    
			                    
			                },
			            
			                messages: {
			                    name: {
			                        required: "Specify " + res + " name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
			                    },
			                    
			                    tag_line: {
			                        required: "Specify " + res + " tagline",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 40 characters allowed.")
			                    },
			            
			                    styling: {
			                        required: "Specify " + res + " styling",
			                    },

			                    image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    image2: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },



			                     
			            
			                    
			                },
			            
			            });	

			            $("#frmrestaurant_edit").validate({
			                rules: {
			                    name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 75
			                        //alpha:true
			                    },
			                    
			                    tag_line: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 40,
			                         //alpha:true
			                         //cemail:true
			                    },
			                    
			                    styling: {
			                         required: true,
			                         //cemail:true
			                    },

			                    image: {
			                         //required: true,
						             extension: "jpg,jpeg,png",
			                    },

			                    image2: {
			                         //required: true,
						             extension: "jpg,jpeg,png",
			                    },

			                    
			                    
			                    
			                },
			            
			                messages: {
			                    name: {
			                        required: "Specify " + res + " name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
			                    },
			                    
			                    tag_line: {
			                        required: "Specify " + res + " tagline",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 40 characters allowed.")
			                    },
			            
			                    styling: {
			                        required: "Specify " + res + " styling",
			                    },

			                     
			            
			                    
			                },
			            
			            });	

			            


			$("#frmrestaurant_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmrestaurant_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-restaurants',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data==res+' information added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'manage-restaurants/list');
										$('#frmrestaurant_add')[0].reset();
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
										        title: ' Restaurant information added.'
	      									})
	      								});
										
									}else if(data=='Restaurant already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#name").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Restaurant already present!'
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

			$("#frmrestaurant_edit").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmrestaurant_edit").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'update-restaurants',
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
										        title: ' Restaurant information added.'
	      									})
	      								});
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));

			
			

			$(document).on('click', '.bnchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_restaurants_images";
                                      
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




			$("#name,#tag_line").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            $("#shwdatatable").load(base_url+'manage-restaurants/list');

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
		                                         
		                                         url: base_url+'api/restaurants/restaurant/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-restaurants/list');
		                                       //location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });	
                                   
                                   
                                   
                                   //remove banner
                                   $(document).on('click', '.bannerremv', function(){
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
		                                         
		                                         url: base_url+'api/restaurants/restaurant/removebanner',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-restaurants/list');
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
                                       
                                       var table = "cyg_restaurants";
                                      
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