$("#reviewfrm").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 75,
                        alpha:true
                    },
                    
                    city: {
                         required: true,
                         minlength: 4,
                         maxlength: 40,
                         alpha:true
                         //cemail:true
                    },
                    
                    email: {
                         required: true,
                         cemail:true
                    },
                    
                    contact: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        numeric:true
                    },
                    
                    hotel_name: {
                        required: true,
                        selectcheck: true
                    },
                    comments: {
                        required: true,
                        minlength: 10
                        //maxlength: 300
                    },
                },
            
                messages: {
                    name: {
                        required: "Specify your name",
                        minlength: jQuery.validator.format("At least {0} characters required!"),
                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
                    },
                    
                    city: {
                        required: "Specify your city",
                        minlength: jQuery.validator.format("At least {0} characters required!"),
                        maxlength: jQuery.validator.format("A maximum of 40 characters allowed.")
                    },
            
                    email: {
                        required: "Specify your email",
                    },
            
                    contact: {
                        required: "Specify your contact number",
                        minlength: jQuery.validator.format("At least {0} characters required!"),
                        maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
                    },
            
                    hotel_name: {
                        required: "Please choose a hotel."
                    },
            
                    comments: {
                        required: "Leave a message for us!",
                        minlength: jQuery.validator.format("At least {0} characters required!")
                        //maxlength: jQuery.validator.format("A maximum of 300 characters allowed.")
                    },
                },
            
            });




             $("#reviewfrm").on('submit',(function(e) {
                                e.preventDefault();
                                if($("#reviewfrm").valid()){
                                    $.ajax({
                                        type:'POST',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        url:base_url+'send-guest-review',
                                        data:new FormData(this),
                                        beforeSend: function ( xhr ) {
                                            //Add your image loader here
                                            jQuery(".lds-facebook").show();
                                            //jQuery("#msg").html('');
                                        },
                                        success:function(data){
                                        //alert(data);
                                            if(data=='1'){
                                        $('#reviewfrm')[0].reset();
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








                $("#name,#city,#txtCountry,#contact,#email,#hotel_name,#comments").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });