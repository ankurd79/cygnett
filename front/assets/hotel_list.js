$(document).ready(function(){
  $('#txtsearch').keyup(function(){
 
   // Search text
   var text = $(this).val().toLowerCase();
 
   // Hide all content class element
   $('.content').hide();

   // Search 
   
   $('.content').each(function(){
      
    if($(this).text().toLowerCase().indexOf(""+text+"") != -1 ){
     $(this).closest('.content').show();

     var cnt=$(this).closest('.content').length;
     cnt += parseInt(cnt);
     //alert(cnt);
     
    }

  });


 });

  /**start next**/

});

$(function() {
  $(".filter").change(filterText);
  var regexes = [];
  clearFilter();

  function filterText() {
    var v = $(this).val();
    var index = $(".filter").index(this);
    console.log(this, v, index)
    if (v == "all") {
      clearFilter();
    } else {
      regexes[index] = new RegExp(v);
      $('.content').show().filter(function() {
        var t = $(this).text();
        return !regexes.reduce(function(accumulator, regex) {
          return accumulator && regex.test(t)
        }, true)
      }).hide();
    }
  }

  function clearFilter() {
    $('.filter').val('all').each(function(i) {
      regexes[i] = /./;
    });
    $('.content').show();
  }

})

$(document).ready(function(){
  $("#mapblock").html('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14151.891012859161!2d76.6243636!3d27.5323056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c0f3ef559df8161!2sCygnett+Lite+Alwar!5e0!3m2!1sen!2sin!4v1554808338954!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>');
    
    $(".mapview").click(function(){
        //alert("link was clickeed");
        var id = this.id;
        var splitid = id.split("_");
        // hotel id
        var hotelid = splitid[1];
        //alert(hotelid);
        
        $.ajax({
		   url: base_url+'admin/hotels/unitmgmt/unitmapfetch',
		   type: 'POST',
		   data: { id:hotelid },
		      success: function(response){
		      // Remove row 
		      //alert(response);
		      $("#mapblock").html(response);
		      
		  }
	  });
        
        
        
        
        
        
        
        
        
        
        
        
    });

});










