//alert('hello');

							
						var res='location';
						
						
			            
						

						$("#frmunitrestaurant_add").validate({
			                rules: {
			                    restaurant_id: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    close_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    open_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    open_time: {
			                        required: true,
			                        minlength: 5,
			                        maxlength: 5
			                    },

			                    close_time: {
			                        required: true,
			                        minlength: 5,
			                        maxlength: 5
			                    },

			                    'mobile[]': {
			                         required: true,
			                          minlength: 10,
			                          maxlength: 10,
			                          numeric:true
						             
			                    },	

			                    'image[]': {
			                         required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png,gif",
                    				 //filesize: 500000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			       
			                    open_time: {
			                        required: "Specify opening time",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 5 characters allowed.")
			                    },

			                    close_am_pm: {
			                        required: "Specify closing time",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 4 characters allowed.")
			                    },

			                    

			                    'image[]': {
			                     		required: "upload an image",
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "file type supported: jpg/jpeg/png/gif"
                    				 //filesize: 'file size should be of 500 kb or less'
			                         //cemail:true
			                    },

			                    'mobile[]': {
			                     		required: "specify a mobile number",
			                     		minlength: jQuery.validator.format("At least {0} characters required!"),
			                     		maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
						             
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			            $("#frmunitrestaurant_edit").validate({
			                rules: {
			                    restaurant_id: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    close_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    open_am_pm: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    open_time: {
			                        required: true,
			                        minlength: 5,
			                        maxlength: 5
			                    },

			                    close_time: {
			                        required: true,
			                        minlength: 5,
			                        maxlength: 5
			                    },

			                    'mobile[]': {
			                         required: true,
			                          minlength: 10,
			                          maxlength: 10,
			                          numeric:true
						             
			                    },	

			                    'image[]': {
			                         //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png,gif",
                    				 //filesize: 500000   //max size 200 kb
			                         //cemail:true
			                    },

			                    


			                    
			                    
			                },
			            
			                messages: {
			                    
			       
			                    open_time: {
			                        required: "Specify opening time",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 5 characters allowed.")
			                    },

			                    close_am_pm: {
			                        required: "Specify closing time",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 4 characters allowed.")
			                    },

			                    

			                    'image[]': {
			                     		//required: "upload an image",
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "file type supported: jpg/jpeg/png/gif",
                    				 //filesize: 'file size should be of 500 kb or less'
			                         //cemail:true
			                    },

			                    'mobile[]': {
			                     		required: "specify a mobile number",
			                     		minlength: jQuery.validator.format("At least {0} characters required!"),
			                     		maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
						             
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			   $("#frmunitrestaurant_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmunitrestaurant_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-unit-restaurants',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Restaurant information added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										//$("#shwdatatable").load(base_url+'manage-locations/list');
										$('#frmunitrestaurant_add')[0].reset();
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
										var delay = 3000;
									    var url = base_url+'manage-unit-restaurant/list/'+unit_id;
										var timeoutID = setTimeout(function() {window.location.href = url;}, delay);	
										//window.location.replace(base_url+'manage-unit-room/list/'+unit_id);
										
									}
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));


			   $("#restaurant_id,#open_time,#open_am_pm,#close_time,#close_am_pm").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

          

            


            						$("#frmunitrestaurant_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmunitrestaurant_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-unit-restaurants',
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
														        title: ' Restaurant information updated.'
					      									})
	      												});
						                                var delay = 3000;
									    				var url = base_url+'manage-unit-restaurant/list/'+unit_id;
														var timeoutID = setTimeout(function() {window.location.href = url;}, delay);    
									                    
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
                        					     $(wrapper).append('<div class="row"><div class="col-md-10 mt-2"><input type="file" class="form-control" name="image[]" ></div><div class="col-md-2 mt-2" id="remove1"><i class="far fa-trash-alt"></i></div></div>'); //add input box
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



                               $(document).on('click', '.delimg', function(){
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
		                                         
		                                         url: base_url+'api/units/unit/removerestaurantimage',
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


                               		$(document).on('click', '.delmobile', function(){
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
		                                         
		                                         url: base_url+'api/units/unit/removerestaurantmobile',
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