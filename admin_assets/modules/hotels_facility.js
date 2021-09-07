//alert('hello');
					   //$("#shwdatatable").load(base_url+'manage-hotel-categories/list');
							
						var res='hotel facility';
						$("#frmfaci_add,#frmfaci_edit").validate({
			                rules: {
			                    'facility[]': {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 50
			                        //alpha:true
			                    },
			                    parent_id: {
			                        required: true,
			                        selectcheck:true
			                    },

			                  
			                
			                },
			            
			                messages: {
			                    'facility[]': {
			                        required: "Specify " + res + "",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 50 characters allowed.")
			                    },
			                    
	   
			                },
			            
			            });	

			            

			            

			            


			$("#frmfaci_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmfaci_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-hotel-facility',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    $('#frmfaci_add')[0].reset();
								    $('.subj').remove();
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
										        title: ' Facilities added.'
	      									})
	      								});
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));

			$("#frmfaci_edit").on('submit',(function(e) {
										//alert('hello');
									        e.preventDefault();
									        if($("#frmfaci_edit").valid()){
									            $.ajax({
									                type:'POST',
									                cache: false,
									                contentType: false,
									                processData: false,
									                url:base_url+'update-hotel-facility',
									                data:new FormData(this),
									                beforeSend: function ( xhr ) {
									                    //Add your image loader here
									                     jQuery(".lds-facebookk").show();
									                },
									                success:function(data){
									                //alert(data);
														    jQuery(".lds-facebookk").hide();
									                    	//jQuery("#subjresponse").html(data);
						                                    //jQuery("#subjresponse").fadeOut(12000);
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
														        title: ' Facilities updated.'
					      									})
					      								});
									                    
									                },
									            error : function(XMLHttpRequest, textStatus, errorThrown) {
									                alert(textStatus);
									            }
									        });
									    }
									}));
			

			
			

			




			$("#category").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });

            $("#parent_id").change(function(){
                //alert($('#parent_id').val());
                //jQuery(".lds-facebook").show();
                var parent_id=$('#parent_id').val();
                if(parent_id>0){
                	$("#sbmtblock").show();
                }else{
                	$("#sbmtblock").hide();
                }
                $.ajax({
		            url: base_url+'admin/hotels/hotelfacimgmt/list',
		            type: 'POST',
		            data: { parent_id:parent_id },
		               beforeSend: function ( xhr ) {
						  //Add your image loader here
						  jQuery(".lds-facebook").show();
					    },
		               success: function(html){
		               	   jQuery(".lds-facebook").hide();
		                   $("#shwdatatable").html(html);

		                }
		         });
            });

            

            $(document).on('click', '.delete', function(){
            						   var p=$('#parent_id').val();
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
		                                         
		                                         url: base_url+'api/hotels/hotelfaci/remove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       $("#shwdatatable").load(base_url+'admin/hotels/hotelfacimgmt/list/'+p);
		                                       //location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });	

            						$(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_facilities";
                                      
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

            						//adding elements

            						var max_fields= 20; //maximum input boxes allowed
                        			var wrapper = $("#containercat"); //Fields wrapper
                        			var add_button = $(".add"); //Add button ID
		                            var x = 1; //initlal text box count
                        			$(add_button).click(function(e){ //on add input button click
                        				e.preventDefault();
                        				if(x < max_fields){ //max input box allowed
                        					x++; //text box increment
                        					     $(wrapper).append('<div id="shwboxes" class="subj"><div class="form-row"><div class="form-group col-md-5"><input type="text" class="form-control" name="facility[]" id="facility"placeholder="Hotel facility"></div><div class="form-group col-md-1"> <label class="switch"><input type="checkbox" class="ank" name="is_active[]" id="" checked><span class="slider round"></span></label></div><a href="#" class="remove_field"><i class="far fa-trash-alt delete"></i></a></div></div>'); //add input box
                        				}
                        			});
                                    
                                    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                        				e.preventDefault(); $(this).parent('div').remove(); x--;
                        		});










