//alert('hello');

							

						$("#frmbrandcat_add").validate({
			                rules: {
			                    
			                	category: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 75
			                        //alpha:true
			                    },


			                    

			                    text: {
			                        required: true,
			                        minlength: 50,
			                        maxlength: 1200
			                        //alpha:true
			                    },
			                    
			                    
			                    
			                },
			            
			                messages: {
			                    category: {
			                        required: "Specify brand category",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
			                    },

			                    text: {
			                        required: "Specify short intro",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 1200 characters allowed.")
			                    },
			                    
			                    
			            
			                    
			                },
			            
			            });	

			            $("#frmbrandcat_edit").validate({
			                rules: {
			                    
			                	category: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 75
			                        //alpha:true
			                    },


			                    

			                    text: {
			                        required: true,
			                        minlength: 50,
			                        maxlength: 1200
			                        //alpha:true
			                    },
			                    
			                    
			                    
			                },
			            
			                messages: {
			                    category: {
			                        required: "Specify brand category",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
			                    },

			                    text: {
			                        required: "Specify short intro",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 1200 characters allowed.")
			                    },
			                    
			                    
			            
			                    
			                },
			            
			            });	





				$("#shwdatatable").load(base_url+'manage-brand-category/list');	


								$(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "brand_category";
                                      
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
		                                         
		                                         url: base_url+'api/brands/brandcategory/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-brand-category/list');	
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });







					








			$("#frmbrandcat_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmbrandcat_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-brand-category',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Category information added.'){
										//jQuery("#subjresponse").html(data);
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'manage-brand-category/list');
										$(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'success',
										        title: ' Category information added.'
	      									})
	      								});

										$('#frmbrandcat_add')[0].reset();
										$(window).off("beforeunload");
										
									}else if(data=='Category already present!'){
									    //jQuery("#subjresponse").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#category").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Category already present!'
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

			$("#frmbrandcat_edit").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmbrandcat_edit").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'update-brand-category',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
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
										        title: ' Brand Category information updated.'
	      									})
	      								});
								    
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));

			

			$("#brand_name,#brand_tagline").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });