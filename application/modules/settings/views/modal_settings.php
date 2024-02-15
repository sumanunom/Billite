
<script>
    $(function () {
        <?php $this->layout->load_view('clients/script_select2_client_id.js'); ?>
    });
</script>
<script>
    $(function () {
        // Display the create quote modal
        $('#view-settings').modal('show');
        $('.simple-select').select2();
    });
</script>

<div id="view-settings" class="modal modal-lg" role="dialog" aria-labelledby="modal_settings" aria-hidden="true">
    <form class="modal-content" id="hi">
        <div class="modal-header">
          <h5 class="modal-title"><?php _trans('create_quote'); ?></h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            
        </div>

        <div class="modal-footer">
            <div class="btn-group">
                <button class="btn btn-success ajax-loader" id="save_settings" type="button">
                    <i class="fa fa-check"></i> <?php _trans('submit'); ?>
                </button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i> <?php _trans('cancel'); ?>
                </button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript">

    $('#save_settings').click(function () {
            
            // Posts the data to validate and create the quote;
            // will create the new client if necessary
            alert('clicked');
        });
</script>