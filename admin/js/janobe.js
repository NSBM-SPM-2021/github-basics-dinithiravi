$(document).on("click", ".orders", function () {
   var ordernum = $(this).data('id');
   // alert(ordernum);
    // $(".modal-body #tabledata").val( p_id );

  
      $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "orderedproduct.php",             
        dataType: "text",   //expect html to be returned  
        data:{ordernumber:ordernum},               
        success: function(data){                    
            $("#myModal").html(data); 
            // alert(data);

        }

    });
 
   
});


$(document).on("click", "#btnclose" , function () {
 
  
      $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "orderedproduct.php",             
        dataType: "text",   //expect html to be returned  
        data:{close:"close"},               
        success: function(data){                    
            
            // alert("closing");
            
              
        }

    });
 
   
});


// $(document).on("click", ".setBanner" , function () {
   
 
//       var chkelement=document.getElementsByName(selector);

//          alert(chkelement);

//       for(var i=0;i<chkelement.length;i++)
//       {
//         if (chkelement.item(i).checked==true){
//             alert('asas');

//         }
//       }
    
 
      // $.ajax({    //create an ajax request to load_page.php
      //   type:"POST",
      //   url: "orderedproduct.php",             
      //   dataType: "text",   //expect html to be returned  
      //   data:{close:"close"},               
      //   success: function(data){                    
            
      //       // alert("closing");
            
              
      //   }

    // });
 
   
// });

 function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }




$(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                },
    onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
    }
            });
        });

        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });
        $('#open-youtube').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });

// navigateTo
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();

            var lb;
            return $(this).ekkoLightbox({
                onShown: function() {

                    lb = this;

      $(lb.modal_content).on('click', '.modal-footer a', function(e) {

        e.preventDefault();
        lb.navigateTo(2);

      });

                }
            });
        });


    });