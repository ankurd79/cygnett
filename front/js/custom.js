$(".our-presence p a").click(function(){
  $(".panel-body").toggle();
});


// Script for the roll over in mega menu

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


// Script for Accordian 

$(document).ready(function(){
  //toggle the component with class accordion_body
  $(".plusminus").text('+');
  $(".accordion_head").click(function(){
    //alert("test");
    if ($('.accordion_body').is(':visible')) {
      $(".accordion_body").slideUp(300);
      //$(".plusminus").text('+');
    }
        if( $(this).next(".accordion_body").is(':visible')){
            $(this).next(".accordion_body").slideUp(300);
            //alert('location');
            $(this).children(".plusminus").text('+');
        }else {
            $(this).next(".accordion_body").slideDown(300); 
            //$(".plusminus").text('-');
            $(this).children(".plusminus").text('-');
        }
  });
});



// Script for Mobile booking

$(document).ready(function(){
  $(".mob-book-now a").click(function(){
  $(".be-container").show();
  });

  $(".be-container p > span a").click(function(){
  $(".be-container").hide();
  });

  });

  // Script for Room Amenities
    $( document ).ready(function() {
      $(".view-room-amenities").click(function(){
      //alert("The paragraph was clicked."); 
      
      var el = this;
      var id = this.id;
      var splitid = id.split("_");
      var elementid = splitid[1];
      //alert(elementid);
      
      
      //$(".room-details-container").toggle();
      //$(this).closest(".room-details-container").show();
      $(".containershw_"+ elementid +"").toggle();
      
    });
   });
    

  // Script for Mobile Nav More Links

  $( document ).ready(function() {
    $(".more-container-mobile span").click(function(){      
      $(".mobile-nav-morelinks").show();
   }); 
    $(".mobile-nav-morelinks .close a").click(function(){      
      $(".mobile-nav-morelinks").hide();
   }); 
   });
   
   
   // Script for Mobile Search Form
   $( document ).ready(function() {
      $(".search-heading-mob a").click(function(){
      //alert("The paragraph was clicked.");
      $(".hotel-search-mob").show();
      });
      
      $(".mob-search-close").click(function(){
      //alert("The paragraph was clicked.");
      $(".hotel-search-mob").hide();
      });
    });
   
  