"use strict";

const dropname = document.querySelectorAll(".sidenav__dropdown");
const dropicon = document.querySelectorAll(".sidenav__dropdown-icon");


dropname.forEach(function (collapsible) {
	collapsible.addEventListener("click", function () {
		collapsible.classList.toggle("dropmenu");

		// Close Other Collapsible
		dropname.forEach(function (otherCollapsible) {
			if (otherCollapsible !== collapsible) {
				otherCollapsible.classList.remove("dropmenu");
			}
		});
	});
});


dropicon.forEach(function (collapsible) {
	collapsible.addEventListener("click", function () {
		collapsible.classList.toggle("dropmenu");

		// Close Other Collapsible
		dropicon.forEach(function (otherCollapsible) {
			if (otherCollapsible !== collapsible) {
				otherCollapsible.classList.remove("dropmenu");
			}
		});
	});
});


$(document).ready(function() {
  "use strict";

  $('.sidenav-item').click(function(e) {
    e.preventDefault();
    $('.sidenav-item').removeClass('active');
    $(this).addClass('active');
  });
});

$(document).ready(function() {
  "use strict";

  $('.user_link').click(function(e) {
    e.preventDefault();
    $('.user_link').removeClass('active');
    $(this).addClass('active');
  });
});



$(document).ready(function() {
  "use strict";

  $('.sidenav__icon').click(function(e) {
    e.preventDefault();
    $('.sidenav__icon').removeClass('active');
    $(this).addClass('active');
  });
});

$(function(){
    var current = location.pathname;
    $('.sidenav__dropdown-collapse .sidenav__dropdown-content a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    })
})

  document.getElementById("myInput").addEventListener("keyup", function() {
  var x = document.getElementById("myInput"); 
  var myDiv = document.getElementById("showing");
  if( x.value.length < 3)
  {
      myDiv.style.display = "none";
  } 
  else if( x.value.length >'2'){
      // return false;
      myDiv.style.display = "block";
  }    
  });

  $(document).ready(function(){
    // select notFound row
    var notFound = $("#notFound")
    // make it hidden by default
    notFound.hide()
    
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase()
      
      // select all items
      var allItems = $("#myUL li")
      // allItems.indexOf('.');
      // allItems.includes('/\./g') ? "true" : "false";
      
      // get list of matched items, (do not toggle them)
      var matchedItems = $("#myUL li").filter(function() {
        return $(this).text().toLowerCase().indexOf(value) > -1
      });
      
      // hide all items first
      allItems.toggle(false)
      
      // then show matched items
      matchedItems.toggle(true)
      
      // if no item matched then show notFound row, otherwise hide it
      if (matchedItems.length == 0) notFound.show()
      else notFound.hide()

    });
  });
   
// }

