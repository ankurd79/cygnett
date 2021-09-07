//alert('hello');

							

						$("#frmbrand_add").validate({
			                rules: {
			                    
			                	brand_category: {
			                        required: true,
			                        selectcheck: true
			                    },


			                    brand_name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 75,
			                        alpha:true
			                    },

			                    short_intro: {
			                        required: true,
			                        minlength: 50,
			                        maxlength: 1200
			                        //alpha:true
			                    },
			                    
			                    brand_tagline: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 60,
			                         //alpha:true
			                         //cemail:true
			                    },
			                    
			                    brand_styling: {
			                         required: true,
			                         //cemail:true
			                    },

			                    image: {
			                         required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },

			                    listimg: {
			                         required: true,
						             //accept:"image/jpeg,image/jpg,image/png",
						             extension: "jpg,jpeg,png",
                    				 //filesize: 200000   //max size 200 kb
			                         //cemail:true
			                    },
			                    
			                    
			                },
			            
			                messages: {
			                    brand_name: {
			                        required: "Specify brand name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
			                    },

			                    short_intro: {
			                        required: "Specify short intro",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 1200 characters allowed.")
			                    },
			                    
			                    brand_tagline: {
			                        required: "Specify brand tagline",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 60 characters allowed.")
			                    },
			            
			                    brand_styling: {
			                        required: "Specify a styling",
			                    },

			                     image: {
			                        required: "File format not supported",
			                    },
			                    
			                    listimg: {
			                        required: "File format not supported",
			                    },
			            
			                    
			                },
			            
			            });	

			            $("#frmbrand_edit").validate({
			                rules: {
			                    brand_name: {
			                        required: true,
			                        minlength: 3,
			                        maxlength: 75,
			                        alpha:true
			                    },

			                    /*
			                    brand_category: {
			                        required: true,
			                        selectcheck: true
			                    },
			                    */
			                    
			                    brand_tagline: {
			                         required: true,
			                         minlength: 10,
			                         maxlength: 60,
			                         //alpha:true
			                         //cemail:true
			                    },

			                    short_intro: {
			                        required: true,
			                        minlength: 50,
			                        maxlength: 1200
			                        //alpha:true
			                    },
			                    
			                    brand_styling: {
			                         required: true,
			                         //cemail:true
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
			                    brand_name: {
			                        required: "Specify brand name",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 75 characters allowed.")
			                    },
			                    
			                    brand_tagline: {
			                        required: "Specify brand tagline",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 60 characters allowed.")
			                    },

			            		short_intro: {
			                        required: "Specify short intro",
			                        minlength: jQuery.validator.format("At least {0} characters required!"),
			                        maxlength: jQuery.validator.format("A maximum of 1200 characters allowed.")
			                    },
			                    
			                    brand_styling: {
			                        required: "Specify a styling",
			                    },

			                     image: {
			                        required: "File format not supported",
			                    },
			            
			                    
			                },
			            
			            });	





				$("#shwdatatable").load(base_url+'api/brands/brand/brandAllAdmin/id/MA==');	


								$(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_brands";
                                      
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



									$(document).on('click', '.bnchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_brand_banners";
                                      
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

									$(document).on('click', '.carochk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "brand_carousel_imaages";
                                      
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


									$(document).on('click', '.pchk', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_brand_key_pointers";
                                      
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
		                                         
		                                         url: base_url+'api/brands/brand/brandremove',
		                                         type: 'POST',
		                                         data: { id:deleteid },
		                                         success: function(response){
		                                            // Remove row 
		                                       alert('Record deleted');
		                                       //$("#genrelist").load("http://moumitavaats.com/index.php/Admin/getgenreList/");
		                                       //location.reload();
		                                        }
		                                       });  

					                    } else {
					                      alert("You've chosen NOT to delete the record!")
					                    }
  

                                   });


                                   //remove banners
                                   $(document).on('click', '.bannerremv', function(){
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
		                                         
		                                         url: base_url+'api/brands/brand/brandbannerremove',
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
                                    
                                    //remove carousel images
                                    $(document).on('click', '.carouselremv', function(){
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
		                                         
		                                         url: base_url+'api/brands/brand/carouselremove',
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






					/*
					$.ajax({
			            url: base_url+'api/brands/brand/brandAll/id/MA==',
			            cache: false,
			            dataType: "json",
			            success:function(data){
			            	$.each(data,function(){
        						//console.log(data[0].brand_name);
        						var i=0;
        						i = i + 1;
        						var brandid=btoa(data[0].id);
        						$strtable="<tr><td>"+i+"</td><td>" + data[0].brand_name + "</td><td>" + data[0].brand_name + "</td><td>" + data[0].brand_name + "</td><td>"+brandid+"|D</td></tr>";
        						$('#shwdatatable').append($strtable);
    						});
			            	
			            },

        			});	
					*/









			$("#frmbrand_add").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmbrand_add").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'add-brands',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
			                    //Add your image loader here
			                     jQuery(".lds-facebook").show();
			                },
			                success:function(data){
			                //alert(data);
			                    	jQuery(".lds-facebook").hide();
								    //$("#shwdatatable").load(base_url+'fetch-brands');
								    if(data=='Brand information added.'){
										//jQuery("#subjresponse").html(data);
										//$("#subjresponse").fadeOut(5000);
										$("#shwdatatable").load(base_url+'api/brands/brand/brandAllAdmin/id/MA==');
										$(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'success',
										        title: ' Brand information added.'
	      									})
	      								});

										$('#frmbrand_add')[0].reset();
										$(window).off("beforeunload");
										
									}else if(data=='Brand already present!'){
									    //jQuery("#subjresponse").html(data);
									    $('html, body').animate({scrollTop: '0px'}, 300);
									    $("#brand_name").css("background-color", "#FA8072");
									    $(function() {	

									    	  var Toast = Swal.mixin({
										      toast: true,
										      position: 'top-end',
										      showConfirmButton: false,
										      timer: 7000
										    });

										    Toast.fire({
										        icon: 'error',
										        title: ' Brand already present!'
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

			$("#frmbrand_edit").on('submit',(function(e) {
				//alert('hello');
			        e.preventDefault();
			        if($("#frmbrand_edit").valid()){
			            $.ajax({
			                type:'POST',
			                cache: false,
			                contentType: false,
			                processData: false,
			                url:base_url+'update-brands',
			                data:new FormData(this),
			                beforeSend: function ( xhr ) {
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
										        title: ' Brand information updated.'
	      									})
	      								});
								    
			                    
			                },
			            error : function(XMLHttpRequest, textStatus, errorThrown) {
			                alert(textStatus);
			            }
			        });
			    }
			}));

			

			$("#brand_name,#brand_tagline").change(function(){
                $(window).bind('beforeunload',function() {
                    return "'Are you sure you want to leave the page. All data will be lost!";
                });
            });