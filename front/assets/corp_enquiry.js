$("#frmcorp").validate({

                                    rules: {    
                                        
                                        first_name: {
                                            required: true,
                                            minlength: 2,
                                            maxlength: 75,
                                            alpha:true
                                            
                                        },
                                        
                                        last_name: {
                                            required: true,
                                            minlength: 2,
                                            maxlength: 75,
                                            alpha:true
                                            
                                        },
                                        
                                        company: {
                                            required: true,
                                            minlength: 4,
                                            maxlength: 75
                                            
                                        },
                                        
                                        street_address: {
                                            required: true,
                                            minlength: 10,
                                            maxlength: 75
                                            
                                        },
                                        
                                        city: {
                                            required: true,
                                            minlength: 5,
                                            maxlength: 75,
                                            alpha:true
                                            
                                        },
                                        
                                        pincode: {
                                            required: true,
                                            minlength: 6,
                                            maxlength: 6,
                                            numeric:true
                                            
                                        },
                                        
                                        mobile: {
                                            required: true,
                                            minlength: 10,
                                            maxlength: 10,
                                            numeric:true
                                            
                                        },
                                        
                                        email: {
                                            required: true,
                                            cemail:true
                                            
                                        },
                                        
                                        
                                        
                                    },
                                    
                                    messages: {
                                        
                                            email: {
                                              required: "Please specify your email address."
                                            },
                                            
                                            mobile: {
                                              required: "Please specify your mobile number."
                                            },
                                            
                                            pincode: {
                                              required: "Please specify your pincode."
                                            },
                                            
                                             first_name: {
            			                        required: "Please specify first name",
            			                        minlength: jQuery.validator.format("At least {0} characters required!"),
            			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
            			                    },
            			                    
            			                    last_name: {
            			                        required: "Please specify last name",
            			                        minlength: jQuery.validator.format("At least {0} characters required!"),
            			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
            			                    },
            			                    
            			                    company: {
            			                        required: "Please specify company information",
            			                        minlength: jQuery.validator.format("At least {0} characters required!"),
            			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
            			                    },
            			                    
            			                    street_address: {
            			                        required: "Please specify your address",
            			                        minlength: jQuery.validator.format("At least {0} characters required!"),
            			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
            			                    },
            			                    
            			                    city: {
            			                        required: "Please specify your city",
            			                        minlength: jQuery.validator.format("At least {0} characters required!"),
            			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
            			                    },
            			                    
            			                    
                                    },
                                    
});	



                            $("#first_name,#last_name,#company,#city,#email").change(function(){
                                $(window).bind('beforeunload',function() {
                                    return "'Are you sure you want to leave the page. All data will be lost!";
                                });
                            });


                            $("#frmcorp").on('submit',(function(e) {
                                e.preventDefault();
                                if($("#frmcorp").valid()){
                                    $.ajax({
                                        type:'POST',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        url:base_url+'send-corporate-enquiry',
                                        data:new FormData(this),
                                        beforeSend: function ( xhr ) {
                                            //Add your image loader here
                                            jQuery(".lds-facebook").show();
                                            //jQuery("#msg").html('');
                                        },
                                        success:function(data){
                                        //alert(data);
                                            if(data=='1'){
                                        $('#frmcorp')[0].reset();
                                        $('#msgdiv').show();
                                        $("#errordiv1").hide();
                                        jQuery(".lds-facebook").hide();
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



