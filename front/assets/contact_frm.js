$("#contactfrm").validate({

                                    rules: {    
                                        
                                        name: {
                                            required: true,
                                            minlength: 2,
                                            maxlength: 75,
                                            alpha:true
                                            
                                        },
                                        
                                        query: {
                                            required: true,
                                            minlength: 5,
                                            maxlength: 75,
                                            alpha:true
                                            
                                        },

                                        comments: {
                                            required: true,
                                            minlength: 10,
                                            maxlength: 300
                                            
                                            
                                        },
                                        
                                        
                                        
                                        city: {
                                            required: true,
                                            minlength: 3,
                                            maxlength: 75,
                                            alpha:true
                                            
                                        },
                                        
                                        
                                        
                                        contact: {
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
                                            
                                            contact: {
                                              required: "Please specify your mobile number."
                                            },
                                            
                                            pincode: {
                                              required: "Please specify your pincode."
                                            },

                                            query: {
                                              required: "Please specify your query."
                                            },

                                            comments: {
                                              required: "Please leave a comment.",
                                              minlength: jQuery.validator.format("At least {0} characters required!"),
                                              maxlength: jQuery.validator.format("A maximum of 300 characters allowed.")
                                            },
                                            
                                             name: {
            			                        required: "Please specify your name",
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



                            $("#name,#city,#email").change(function(){
                                $(window).bind('beforeunload',function() {
                                    return "'Are you sure you want to leave the page. All data will be lost!";
                                });
                            });


                            $("#contactfrm").on('submit',(function(e) {
                                e.preventDefault();
                                if($("#contactfrm").valid()){
                                    $.ajax({
                                        type:'POST',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        url:base_url+'send-contact-form-mail',
                                        data:new FormData(this),
                                        beforeSend: function ( xhr ) {
                                            //Add your image loader here
                                            jQuery(".lds-facebook").show();
                                            //jQuery("#msg").html('');
                                        },
                                        success:function(data){
                                        //alert(data);
                                            if(data=='1'){
                                        $('#contactfrm')[0].reset();
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



