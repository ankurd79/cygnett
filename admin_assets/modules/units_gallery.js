//alert('hello');

							
						var res='location';
						
						
			            
						

						$("#frmgallery").validate({
			                rules: {
			                    'text[]': {
			                        required: true
			                        
			                    },

								'sequence[]': {
			                        required: true,
			                        minlength: 1,
			                        maxlength: 2,
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
			                    

			                    'image[]': {
			                     		required: "upload an image",
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "file type supported: jpg/jpeg/png/gif"
                    				 //filesize: 'file size should be of 500 kb or less'
			                         //cemail:true
			                    },

			                    'text[]': {
			                     		required: "specify a supporting text for the image"
			                     		//minlength: jQuery.validator.format("At least {0} characters required!"),
			                     		//maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
						             
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });	

			            $("#frmgalleryedit").validate({
			                rules: {
			                    'text[]': {
			                        required: true
			                        
			                    },

			                    'sequence[]': {
			                        required: true,
			                        minlength: 1,
			                        maxlength: 2,
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
			                    

			                    'image[]': {
			                     		//required: "upload an image",
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "file type supported: jpg/jpeg/png/gif"
                    				 //filesize: 'file size should be of 500 kb or less'
			                         //cemail:true
			                    },

			                    'text[]': {
			                     		required: "specify a supporting text for the image"
			                     		//minlength: jQuery.validator.format("At least {0} characters required!"),
			                     		//maxlength: jQuery.validator.format("A maximum of 10 characters allowed.")
						             
			                    },

			                    
			                     
			            
			                    
			                },
			            
			            });


			            

			   $("#frmgallery").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmgallery").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-photos',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Gallery photo information added.'){
										//jQuery("#redalert").hide();
										//$("#subjresponse").fadeOut(5000);
										//$("#shwdatatable").load(base_url+'manage-locations/list');
										$('#frmgallery')[0].reset();
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
										        title: ' Gallery photo information added.'
	      									})
	      								});
										var delay = 3000;
									    var url = base_url+'manage-unit-gallery/list/'+unit_id;
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


			   $("#image,#text").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

          

            


            						$("#frmgalleryedit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmgalleryedit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-photos',
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
														        title: ' Gallery information updated.'
					      									})
	      												});
						                                var delay = 3000;
									    				//var url = base_url+'manage-unit-gallery/list/'+unit_id;
														//var timeoutID = setTimeout(function() {window.location.href = url;}, delay);    
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));


									    


                                var max_fields= 20; //maximum input boxes allowed
                        			var wrapper = $("#containercat"); //Fields wrapper
                        			var add_button = $(".m1"); //Add button ID
		                            var x = 1; //initlal text box count
                        			$(add_button).click(function(e){ //on add input button click
                        				e.preventDefault();
                        				if(x < max_fields){ //max input box allowed
                        					x++; //text box increment
                        					     $(wrapper).append('<div id="shwboxes" class="subj"><div class="form-row"><div class="form-group col-md-4"><input type="file" class="form-control" name="image[]"></div><div class="form-group col-md-4"> <input type="text" class="form-control" name="text[]" id="text" placeholder="Text"></div><div class="form-group col-md-2"> <input type="text" class="form-control" name="sequence[]" id="sequence" placeholder="Sequence"></div><i class="far fa-trash-alt remove1"></i></div></div>'); //add input box
                        				}
                        			});

                                    $(wrapper).on("click",".remove1", function(e){ //user click on remove text
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


                               		