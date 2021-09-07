//alert('hello');
						$(document).ready(function(jQuery){
							$('#booktableModal').on('show.bs.modal', function (e) {
	            				var rowid = $(e.relatedTarget).data('id');
	            				var splitid = rowid.split("~");
                                $("#resid").val(splitid[0]);
	            				$("#hunit").html(splitid[2]);
	            				$("#restaurant").html(splitid[1]);
	            				$("#htl_name").val(splitid[2]);
	            				$("#rest_name").val(splitid[1]);
	            				$("#type").val(splitid[3]);
	            				$("#htlid").val(splitid[4]);
         					});
						});
						
						$(function(){
				            var dtToday = new Date();
				            
				            var month = dtToday.getMonth() + 1;
				            var day = dtToday.getDate();
				            var year = dtToday.getFullYear();
				            if(month < 10)
				                month = '0' + month.toString();
				            if(day < 10)
				                day = '0' + day.toString();
				            
				            var maxDate = year + '-' + month + '-' + day;
				            //alert(maxDate);
				            $('#bookdate').attr('min', maxDate);
				            $('#eventdate').attr('min', maxDate);
				            
				            
        				});	
						var res='designation';
						$("#diningquery").validate({
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

			                    bookdate: {
			                        required: true
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

			                    guests: {
			                        required: true,
			                        minlength: 1,
			                        maxlength: 3,
			                        numeric:true
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

			                    guests: {
			                        required: "Specify number of guests",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 3 characters allowed.")
			                    },

			                    bookdate: {
			                        required: "Specify a day of booking"
			                    },

			                    
			                    
	   
			                },
			            
			            });	

			            

			            

			            

			            

         $(document).ready(function(jQuery){
			$("#diningquery").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#diningquery").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'send-dining-query',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    
								    if(data=='1'){
										$('#diningquery')[0].reset();
										$('#msgdiv').show();
										$(window).off("beforeunload");
											
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

            

            