//alert('hello');
						
							
						$(document).ready(function(jQuery){
							$("#htlnameblk").hide();
							$("#investorblk").hide();
						});

						$("#user").change(function(){
                			var userid=$('#user').val();
                			//alert(userid);
                			if(userid=='1'){
                				$("#htlnameblk").show();
                				$("#investorblk").hide();
                			}else if(userid=='2'){
                			    $("#htlnameblk").hide();
                				$("#investorblk").show();	
                			}else{
                			    $("#htlnameblk").hide();
								$("#investorblk").hide();
                			}

                			
                
             			});
            
						var res='designation';
						$("#pillar_request").validate({
			                rules: {
			                    fname: {
			                        required: true,
			                        minlength: 2,
			                        maxlength: 70,
			                        alpha:true
			                    },

			                    lname: {
			                        required: true,
			                        minlength: 2,
			                        maxlength: 70,
			                        alpha:true
			                    },

			                    mobile: {
			                        required: true,
			                        minlength: 10,
			                        maxlength: 10,
			                        numeric:true
			                    },
			                    
			                    email: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 70,
			                        cemail:true
			                    },

			                    user: {
			                        required: true,
			                        selectcheck: true
			                    },
                                
                                details: {
			                        required: true,
			                        minlength: 10,
			                        maxlength: 500
			                        
			                    },
			                    
			                    
			                
			                },
			            
			                messages: {
			                    fname: {
			                        required: "Specify your first name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 70 characters allowed.")
			                    },

								lname: {
			                        required: "Specify your last name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 70 characters allowed.")
			                    },
			                    

			                    mobile: {
			                        required: "Specify your contact information",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
			                    },

			                    email: {
			                        required: "Specify your email address",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 70 characters allowed.")
			                    },
			                    
			                    details: {
			                        required: "Specify project details",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 500 characters allowed.")
			                    },


			                    
			                    
	   
			                },
			            
			            });	

			            

			            

			            

			            

         $(document).ready(function(jQuery){
			$("#pillar_request").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#pillar_request").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'send-pillar-request',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    
								    if(data=='1'){
										$('#pillar_request')[0].reset();
										$('#msgdiv').show();
										$("#errordiv1").hide();
										$(window).off("beforeunload");
									}
									if(data=='0'){
										$('#msgdiv').hide();
										$("#errordiv1").show();
									}
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));
		 });	

			
			$("#fname,#lname,#mobile,#email").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            

            