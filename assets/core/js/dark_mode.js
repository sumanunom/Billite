var modeTag = document.getElementById('modes');
var modeIconContainer = document.getElementById('modeIcon_container');
var modeIcon = document.querySelector('.dark-mode-button .fa-regular');

document.addEventListener("DOMContentLoaded", function(event) {
   if(modeTag.classList.contains('dark-mode')) {
      modeIcon.classList.remove('fa-sun');
      modeIcon.classList.add('fa-moon');
      modeIconContainer.style.background="#b5b9fa";   
      localStorage.setItem('darkshow', 'true');
   } else {
      modeIcon.classList.add('fa-sun');
      modeIconContainer.style.background="#534fc9";
      localStorage.setItem('darkshow', 'false');
   }
});

modeIconContainer.addEventListener('click', function(){
   if(modeTag.classList.contains('dark-mode')) {
      modeTag.classList.remove('dark-mode');
      modeIcon.classList.add('fa-sun');
      modeIcon.classList.remove('fa-moon');
      modeIconContainer.style.background="#534fc9";
      localStorage.setItem('darkshow', 'false');
   }else{
      modeTag.classList.add('dark-mode');
      modeIcon.classList.add('fa-moon');
      modeIcon.classList.remove('fa-sun');
      modeIconContainer.style.background="#b5b9fa";
      localStorage.setItem('darkshow', 'true');
   }
});

var mode = document.querySelector('#modes');
var togglemodevar = document.getElementById('modeIcon_container');
var show = localStorage.getItem('darkshow');

if(s_mode == "Yes"){
   var myDate = new Date();
   var hrs = myDate.getHours();
   
   if (hrs >= 6 && hrs <= 18) 
   {
      mode.classList.remove("dark-mode")
      localStorage.setItem('darkshow', 'false');
   }
   else if(hrs >=18 && hrs <= 24) 
   {
   mode.classList.toggle("dark-mode");
   localStorage.setItem('darkshow', 'true');
   }
}

else if(s_mode == "No" && show == null )
   {
      mode.classList.toggle("dark-mode");
   }

   else if(s_mode == "No" && show == 'true')
   {
      mode.classList.toggle("dark-mode");
   }

    else if(s_mode == "No" && show == 'false')
    {
        mode.classList.remove("dark-mode"); 
    }