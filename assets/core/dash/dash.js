
 /* ------- Enter Key to save ------- */

 $(function () {
        $('[id*=txtName]').keypress(function (e) {
            if (e.keyCode == 13) {
                $('[id*=btnSave]').trigger('click');
                return false;
            }
        });
    });

  /* ------- Enter Key to save End------- */

   /* ------- Todo Hide And Show ------- */


  $(function () {
        $("#add").click(function () {
           
                $("#dvPassport").show(); 
        });
    });

   $(function () {
        $("#close1").click(function () {
           
               $("#dvPassport").hide();
        });
    });

    /* ------- Todo Hide And Show End ------- */


    /* ----------------- Checkbox Save------------------ */

            $(document).ready(function() {
            $("#checkgo").submit(function (event){
            event.preventDefault()
            var wegeb = document.getElementById("wegeb").value
            var info = {wegeb: wegeb};
            $.ajax({
                        type : "POST",
                        url : "<?php echo site_url('Dashboard/status'); ?>",
                        data : info,
                    });
                    return false;
                });
            });    


    // $(document).ready(function() {
    //     $('.cat_delete').click(function() {
    //         var id = $(this).attr("id");
    //         if (confirm("Are you sure you want to delete this Member?")) {
    //             $.ajax({
    //                 type: "POST",
    //                 url: "<?php echo site_url('settings/del'); ?>",
    //                 data: ({
    //                     id: id
    //                 }),
    //                 cache: false,
    //                 success: function(html) {
    //                     $(".delete_mem" + id).fadeOut('slow');
    //                 }
    //             });
    //         } else {
    //             return false;
    //         }
    //     });
    // });  

