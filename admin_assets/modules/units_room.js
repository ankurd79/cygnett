//alert('hello');

							
						var res='location';
						
						
			            
						

						$("#frmunitroom_add").validate({
			                rules: {
			                    room_name: {
			                        //required: true,
			                        //minlength: 3,
			                        //maxlength: 40
			                        selectcheck: true
			                    },

			                    room_price: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 4
			                    },

			                    min_occupancy: {
			                        required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },

			                    max_occupancy: {
			                        required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },

			                    area: {
			                        required: true,
			                        minlength: 2,
			                        maxlength: 4,
			                        numeric:true
			                    },

			                    area_unit: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    bed_type: {
			                        required: true,
			                        selectcheck: true
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
			                    
			                    room_name: {
			                        required: "Specify room name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },	

			                    room_price: {
			                        required: "Specify room rate",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 4 characters allowed.")
			                    },

			                    min_occupancy: {
			                        required: "Specify minimum occupancy value",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 2 characters allowed.")
			                    },

			                    max_occupancy: {
			                        required: "Specify minimum occupancy value",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 2 characters allowed.")
			                    },

			                    area: {
			                        required: "Specify size of the room",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 4 characters allowed.")
			                    },

			                    image: {
			                     //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			            $("#frmunitroom_edit").validate({
			                rules: {
			                    room_name: {
			                        //required: true,
			                        //minlength: 3,
			                        //maxlength: 40
			                        selectcheck: true
			                    },

			                    room_price: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 4
			                    },

			                    min_occupancy: {
			                        required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },

			                    max_occupancy: {
			                        required: true,
			                        minlength: 1,
			                        maxlength: 2,
			                        numeric:true
			                    },

			                    area: {
			                        required: true,
			                        minlength: 2,
			                        maxlength: 4,
			                        numeric:true
			                    },

			                    area_unit: {
			                        required: true,
			                        selectcheck: true
			                    },

			                    bed_type: {
			                        required: true,
			                        selectcheck: true
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
			                    
			                    room_name: {
			                        required: "Specify room name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 35 characters allowed.")
			                    },	

			                    room_price: {
			                        required: "Specify room rate",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 4 characters allowed.")
			                    },

			                    min_occupancy: {
			                        required: "Specify minimum occupancy value",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 2 characters allowed.")
			                    },

			                    max_occupancy: {
			                        required: "Specify minimum occupancy value",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 2 characters allowed.")
			                    },

			                    area: {
			                        required: "Specify size of the room",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 4 characters allowed.")
			                    },

			                    image: {
			                     //required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	


			   $("#frmunitroom_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmunitroom_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-rooms',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Room information added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										//$("#shwdatatable").load(base_url+'manage-locations/list');
										$('#frmunitroom_add')[0].reset();
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
										var delay = 3000;
									    var url = base_url+'manage-unit-room/list/'+unit_id;
										var timeoutID = setTimeout(function() {window.location.href = url;}, delay);	
										//window.location.replace(base_url+'manage-unit-room/list/'+unit_id);
										
									}else if(data=='Room already present!'){
									    
									    //jQuery("#redalert").show();
									    //jQuery("#redalert").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#room_name").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Room already present!'
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


			   $("#room_name,#room_price,#min_occupancy,#max_occupancy,#area").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

          

            


            						$("#frmunitroom_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmunitroom_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-room',
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
														        title: ' Room information updated.'
					      									})
	      												});
						                                var delay = 3000;
									    				var url = base_url+'manage-unit-room/list/'+unit_id;
														var timeoutID = setTimeout(function() {window.location.href = url;}, delay);    
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));


									    


                                var max_fields_nb= 20; //maximum input boxes allowed
                        			var wrapper_nb = $("#container"); //Fields wrapper
                        			var add_button_nb = $(".addnb"); //Add button ID
		                            var z = 1; //initlal text box count
                        			$(add_button_nb).click(function(e){ //on add input button click
                        				e.preventDefault();
                        				if(z < max_fields_nb){ //max input box allowed
                        					z++; //text box increment
                        					     $(wrapper_nb).append('<div class="form-row"><div class="form-group col-md-10"><input type="file" class="form-control" name="image[]" id="image" ></div><div class="form-group col-md-2" id="nearbyremove"><i class="far fa-trash-alt"></i></div></div>'); //add input box
                        				}
                        			});
                                    
                                    $(wrapper_nb).on("click","#nearbyremove", function(e){ //user click on remove text
                        				e.preventDefault(); $(this).parent('div').remove(); x--;
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
		                                         
		                                         url: base_url+'api/units/unit/deleteroomimg',
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