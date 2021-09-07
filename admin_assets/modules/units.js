//alert('hello');

							
						var res='location';
						
						
			            $('#country').on('change', function() {
			            	var country_id = $(this).val();
  							//alert( this.value );

  							if(country_id>0){
                                          $.ajax({
    						                url: base_url+'admin/admin/calllocationofcountry',
                    						type: 'POST',
                    						data: {country_id:country_id},
                    						beforeSend: function ( xhr ) {
                                                //Add your image loader here
                                                //jQuery("#loaderimg").html('<img src="<?php echo base_url() ?>images/ajax-loader.gif">');
                                            },
                    						
                    						success:function(data){
                    						    $("#loaderimg").hide();
                    							 var resp = $.trim(data);
                    							    $("#location").html('<option value="0">--Select--</option>');
                    							    $("#location").append(resp);
                                            }
                    				    });
                                     }else{
                                         $("#location").html('<option value="0">--Select--</option>');
                                     }

						});
						

						$("#frmunit_add").validate({
			                rules: {
			                    country: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    location: {
			                        required: true,
			                        selectcheck: true
			                    },
			                    
			                    state: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    brand: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    chkin_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    chkout_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },
			                    
			                    hotel_name: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 400,
									 //alpha: true
			                    },

			                    tag_line: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 100,
									 //alpha: true
			                    },
			                    
			                    pincode: {
			                         required: true,
			                         minlength: 5,
			                         maxlength: 6,
									 numeric: true
			                    },

			                    address_line_1: {
			                         required: true,
			                         minlength: 20,
			                         maxlength: 100
									 //numeric: true
			                    },

			                    'email[]': {
			                         cemail:true
			                    },

			                    'mobile[]': {
			                         numeric:true,
			                         minlength: 10,
			                         maxlength: 10
			                    },

			                    'hotel_type[]': {
					                required: true,
					                maxlength: 6
            					},

			                    image: {
			                         required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			                    hotel_name: {
			                        required: "Specify unit name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },	

			                    tag_line: {
			                        required: "Specify a tag line",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },

			                    pincode: {
			                        required: "Specify pincode",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },

			                    address_line_1: {
			                        required: "Specify address line 1",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },

			                    image: {
			                     //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    'hotel_type[]': {
					                required: "Please choose a relevant unit type",
					                maxlength: "Check no more than {0} boxes"
            					},
			                     
			            
			                    
			                },
			            
			            });	


			            $("#frmunit_edit").validate({
			                rules: {
			                    country: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    location: {
			                        required: true,
			                        selectcheck: true
			                    },
			                    
			                    state: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    brand: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    chkin_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    chkout_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },
			                    
			                    hotel_name: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 400,
									 //alpha: true
			                    },

			                    tag_line: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 100,
									 //alpha: true
			                    },
			                    
			                    pincode: {
			                         required: true,
			                         minlength: 5,
			                         maxlength: 6,
									 numeric: true
			                    },

			                    address_line_1: {
			                         required: true,
			                         minlength: 20,
			                         maxlength: 100
									 //numeric: true
			                    },

			                    'email[]': {
			                         cemail:true
			                    },

			                    'mobile[]': {
			                         numeric:true,
			                         minlength: 10,
			                         maxlength: 10
			                    },

			                    'hotel_type[]': {
					                required: true,
					                maxlength: 6
            					},

			                    image: {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			                    hotel_name: {
			                        required: "Specify unit name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },	

			                    tag_line: {
			                        required: "Specify a tag line",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },

			                    pincode: {
			                        required: "Specify pincode",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },

			                    address_line_1: {
			                        required: "Specify address line 1",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },

			                    image: {
			                     //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    'hotel_type[]': {
					                required: "Please choose a relevant unit type",
					                maxlength: "Check no more than {0} boxes"
            					},
			                     
			            
			                    
			                },
			            
			            });	


			   $("#frmunit_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmunit_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-units',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Unit information added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										//$("#shwdatatable").load(base_url+'manage-locations/list');
										$('#frmunit_add')[0].reset();
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
										        title: ' Unit information added.'
	      									})
	      								});
	      								var delay = 2500;
									    var url = base_url+'manage-unit/list/';
										var timeoutID = setTimeout(function() {window.location.href = url;}, delay);

										
									}else if(data=='Unit already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#city").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Unit already present!'
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


			   $("#state,#city,#hotel_name,#tag_line,#brand").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            $("#shwdatatable").load(base_url+'manage-locations/list');

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
		                                         
		                                         url: base_url+'api/locations/location/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'manage-locations/list');
		                                       //location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });	

            						$(document).on('click', '.bnchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_location_images";
                                      
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

            						$(document).on('click', '.mchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_places_to_visit";
                                      
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

            						$(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_location";
                                      
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


            						$("#frmunit_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmunit_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-units',
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
														        title: ' Unit information updated.'
					      									})
	      												});
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));


									var max_fields= 20; //maximum input boxes allowed
                        			var wrapper = $("#containercat"); //Fields wrapper
                        			var add_button = $(".m2"); //Add button ID
		                            var x = 1; //initlal text box count
                        			$(add_button).click(function(e){ //on add input button click
                        				e.preventDefault();
                        				if(x < max_fields){ //max input box allowed
                        					x++; //text box increment
                        					     $(wrapper).append('<div class="row"><div class="col-md-10 mt-2"><input type="text" class="form-control" name="email[]" id="email" placeholder="Email"></div><div class="col-md-2 mt-2" id="remove1"><i class="far fa-trash-alt"></i></div></div>'); //add input box
                        				}
                        			});
                                    
                                    $(wrapper).on("click","#remove1", function(e){ //user click on remove text
                        				e.preventDefault(); $(this).parent('div').remove(); x--;
                        		});

                                var max_fields1= 20; //maximum input boxes allowed
                        			var wrapper1 = $("#containermob"); //Fields wrapper
                        			var add_button1 = $(".m1"); //Add button ID
		                            var y = 1; //initlal text box count
                        			$(add_button1).click(function(e){ //on add input button click
                        				e.preventDefault();
                        				if(y < max_fields1){ //max input box allowed
                        					y++; //text box increment
                        					     $(wrapper1).append('<div class="row"><div class="col-md-10 mt-2"><input type="text" class="form-control" name="mobile[]" id="mobile" placeholder="Mobile"></div><div class="col-md-2 mt-2" id="remove"><i class="far fa-trash-alt"></i></div></div>'); //add input box
                        				}
                        			});
                                    
                                    $(wrapper1).on("click","#remove", function(e){ //user click on remove text
                        				e.preventDefault(); $(this).parent('div').remove(); x--;
                        		});    


                                var max_fields_sc= 20; //maximum input boxes allowed
                        			var wrapper_sc = $("#socialcontainer"); //Fields wrapper
                        			var add_button_sc = $(".sadd"); //Add button ID
		                            var z = 1; //initlal text box count
                        			$(add_button_sc).click(function(e){ //on add input button click
                        				e.preventDefault();
                        				if(z < max_fields_sc){ //max input box allowed
                        					z++; //text box increment
                        					     $(wrapper_sc).append('<div class="form-row"><div class="form-group col-md-4"><select class="form-control" id="soc_channel" name="soc_channel[]"><option value="0">Select</option><option value="1">Facebook</option><option value="2">Twitter</option><option value="3">Instagram</option><option value="4">LinkedIn</option><option value="5">YouTube</option></select></div><div class="form-group col-md-4"><input type="text" class="form-control" name="social_url[]" id="social_url" placeholder="Social URL"></div><div class="form-group col-md-4" id="socialremove"><i class="far fa-trash-alt"></i></div></div>'); //add input box
                        				}
                        			});
                                    
                                    $(wrapper_sc).on("click","#socialremove", function(e){ //user click on remove text
                        				e.preventDefault(); $(this).parent('div').remove(); x--;
                        		});     


                                var max_fields_nb= 20; //maximum input boxes allowed
                        			var wrapper_nb = $("#nearbycontainer"); //Fields wrapper
                        			var add_button_nb = $(".addnb"); //Add button ID
		                            var z = 1; //initlal text box count
                        			$(add_button_nb).click(function(e){ //on add input button click
                        				e.preventDefault();
                        				if(z < max_fields_nb){ //max input box allowed
                        					z++; //text box increment
                        					     $(wrapper_nb).append('<div class="form-row"><div class="form-group col-md-4"><input type="text" class="form-control" name="nearby_area[]" id="nearby_area" placeholder="Near by place"></div><div class="form-group col-md-4"><input type="text" class="form-control" name="nearby_detail[]" id="nearby_detail" placeholder="Near by information"></div><div class="form-group col-md-2"><input type="text" class="form-control" name="image_icon[]" id="image_icon" placeholder="Icon Image"></div><div class="form-group col-md-2" id="nearbyremove"><i class="far fa-trash-alt"></i></div></div>'); //add input box
                        				}
                        			});
                                    
                                    $(wrapper_nb).on("click","#nearbyremove", function(e){ //user click on remove text
                        				e.preventDefault(); $(this).parent('div').remove(); x--;
                        		});     



                               //varipus deletes
                               
                               $(document).on('click', '.rmvemail', function(){
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
		                                         
		                                         url: base_url+'api/units/unit/removeemail',
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


                                   $(document).on('click', '.removephone', function(){
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
		                                         
		                                         url: base_url+'api/units/unit/removemobile',
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

                                   $(document).on('click', '.remsocial', function(){
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
		                                         
		                                         url: base_url+'api/units/unit/removesocial',
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


                                   $(document).on('click', '.remnearby', function(){
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
		                                         
		                                         url: base_url+'api/units/unit/removenearby',
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