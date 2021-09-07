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

  
  $('#exampleFormControlSelect1').change(function(){
 
   // Search text
   //alert($(this).val());
   var text = $(this).val().toLowerCase();
   //alert(text);

   var brandtext=$('#brands').val();

   //alert(brandtext);
 
   
   //$('div[id^=pop_]').filter('div[data-country=India]').hide();
   //$('div[id^=pop_]').filter('div[data-country='+text+']').css('color','red');

   

   $('.content').each(function(){
    if(text==='all'){
      $(this).closest('.content').show();
    }else{
        if(($(this).text().toLowerCase().indexOf(""+text+"") != -1 )||+($(this).text().toLowerCase().indexOf(""+brandtext+"") != -1 )){
          $(this).closest('.content').show();
        }else{
          $(this).closest('.content').hide();
        }
    }



    

  });


   


 });


$('#brands').change(function(){
 
   // Search text
   //alert($(this).val());
   var text = $(this).val().toLowerCase();
   //alert(text);

   var ctext=$('#exampleFormControlSelect1').val();

   //alert(ctext);
 
   
   //$('div[id^=pop_]').filter('div[data-country=India]').hide();
   //$('div[id^=pop_]').filter('div[data-country='+text+']').css('color','red');

   

   $('.content').each(function(){
      
    
    if(text==='all'){
      $(this).closest('.content').show();
    }else{
      if(($(this).text().toLowerCase().indexOf(""+text+"") != -1 )||+($(this).text().toLowerCase().indexOf(""+ctext+"") != -1 )){
       $(this).closest('.content').show();    
      }else{
        $(this).closest('.content').hide();
      }
    }
    
    
    
    

  });


   


 });






















});
