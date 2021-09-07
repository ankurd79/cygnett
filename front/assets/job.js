//alert('hello');
						$(document).ready(function(jQuery){
							$('#applyjobModal').on('show.bs.modal', function (e) {
	            				var rowid = $(e.relatedTarget).data('id');
	            				var splitid = rowid.split("~");
                                $("#jname").html(splitid[0]);
	            				$("#jobid").val(splitid[1]);
         					});
						});
							
						var res='designation';
						$("#frm-apply").validate({
			                rules: {
			                    fname: {
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

			                    

			                    uploaded_file: {
						             //accept:"image/jpeg,image/jpg,image/png",
						             required:true,
						             extension: "doc,docx,pdf",
                    				 //filesize: 300000   //max size 200 kb
			                         //cemail:true
			                    },
			                    
			                
			                },
			            
			                messages: {
			                    fname: {
			                        required: "Specify your name",
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

			                    uploaded_file: {
			                     	 
						             required: "Upload your resume!",
						             extension: "Acceptable document format : doc|docx|pdf",
                    				 //filesize: "Doc size should be of 300 kb or less!"
			                         //cemail:true
			                    },
			                    
	   
			                },
			            
			            });	

			            

			            

			            

			            

         $(document).ready(function(jQuery){
			$("#frm-apply").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frm-apply").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'send-job-application',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    
								    if(data=='3'){
										
										$('#frm-apply')[0].reset();
										$('#msgdiv').show();
										$('#errordiv1').hide();
										$('#errordiv2').hide();
										$(window).off("beforeunload");
										
										
									}else if(data=='1'){
									    
									    $('#msgdiv').hide();
										$('#errordiv1').show();
										$('#errordiv2').hide();
									}else if(data=='2'){
									    
									    $('#msgdiv').hide();
										$('#errordiv1').hide();
										$('#errordiv2').show();
									}
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));
		 });	

			
			$("#fname,#mobile,#email").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            

            