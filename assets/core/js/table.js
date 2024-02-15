  
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

// ----------Check Box---------------

$("input:checkbox").attr("checked",true).click(function()
{
  var column="."+$ (this).attr("name");
  $(column).toggle();
});

var x = document.querySelectorAll("#mychcek");
for (var i = 0; i < x.length; i++) {
x[i].checked = false;
}

var table = document.querySelectorAll("#mychcek");
for (var i = 0; i < x.length; i++) {
table[i].display = "none";
}


// -------- Dashboard checkbox -----------

var x = document.querySelectorAll("#recent-check");
for (var i = 0; i < x.length; i++) {
x[i].checked = false;
}

// --------------Table lists popup----------------


const popupQuerySelector = "#myForm";
const popupEl = document.querySelector(popupQuerySelector);
const popupBttn = document.querySelector("#popup-trigger");

popupBttn.addEventListener("click", () => {
setTimeout(() => {
if (!popupEl.classList.contains("show")) {
  popupEl.classList.add("show");
}
}, 0);
});

document.addEventListener("click", (e) => {
const isClosest = e.target.closest(popupQuerySelector);
if (!isClosest && popupEl.classList.contains("show")) {
popupEl.classList.remove("show");
}
});

// --------------- Data Tables Pagination--------------------

$(document).ready(function () {
$('#datatable2').DataTable({
  "bPaginate": false,
  "searching":false
});
});

$(document).ready(function () {
  $('#datatable3').DataTable({
    "bPaginate": false,
    "searching":false
  });
  });

  $(document).ready(function () {
    $('#datatable4').DataTable({
      "bPaginate": false,
      "searching":false
    });
    });


// ---------------------------- Table first column with change -----------------------------

var arr = document.querySelectorAll('table tr td:first-child');
var array = document.querySelector('table thead tr th:first-child');
$(document).ready(function() { 
  array.style.width = "0%"; 
  array.setAttribute ('style', 'padding:  0px 20px !important;');
});

for(let i=0; i<arr.length; i++ ) {
  arr[i].setAttribute ('style', 'width: 0% !important;');
}


