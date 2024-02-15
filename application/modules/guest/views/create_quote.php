<script>

    $("document").ready(function()
    {
        $( "#target" ).trigger( "click" );
    });

</script>

<button id="target" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quotemodel" style="display:none;"></button>

<div class="modal" id="quotemodel">
  <div class="modal-dialog">
    <form class="modal-content" id="hi">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title"><?php _trans('create_quote'); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <input class="hidden" id="input_permissive_search_clients" value="<?php echo get_setting('enable_permissive_search_clients'); ?>">

<div class="form-group has-feedback">
    <label for="create_quote_client_id"><?php _trans('client'); ?></label>
    <div class="input-group">

        <select name="client_id" id="create_quote_client_id" class="client-id-select form-control" autofocus="autofocus">
            <option>select client</option>
                <?php foreach ($clients as $client) { ?>
                    <option value="<?php echo $client->client_id; ?>">
                        <?php
                             _htmlsc(format_client($client));
                        ?>
                    </option>
                <?php } ?>
        </select>

        <!-- <span id="toggle_permissive_search_clients" class="input-group-addon" title="<?php //_trans('enable_permissive_search_clients'); 
                                                                                            ?>" style="cursor:pointer;">
            <i class="fa fa-toggle-<?php //echo get_setting('enable_permissive_search_clients') ? 'on' : 'off' 
                                    ?> fa-fw" ></i>
        </span> -->
    </div>
</div>

<div class="form-group has-feedback">
    <label for="quote_date_created">
        <?php _trans('quote_date'); ?>
    </label>

    <div class="input-group">
        <input name="quote_date_created" id="quote_date_created" class="form-control datepicker" value="<?php echo date(date_format_setting()); ?>">
        <span class="input-group-addon">
            <i class="fa fa-calendar fa-fw"></i>
        </span>
    </div>
</div>

<div class="form-group" style="display: none;">
    <label for="invoice_group_id"><?php _trans('quotes_group'); ?>: </label>
    <select name="invoice_group_id" id="invoice_group_id"
        class="form-control simple-select" data-minimum-results-for-search="Infinity">
        <?php foreach ($invoice_groups as $invoice_group) { 
        ?>
            <option value="<?php echo $invoice_group->invoice_group_id; 
                            ?>"
                <?php check_select(get_setting('default_quote_group'), $invoice_group->invoice_group_id); 
                ?>>
                <?php _htmlsc($invoice_group->invoice_group_name); 
                ?>
            </option>
        <?php } 
        ?>
    </select>
</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <div class="btn-group">
                <button class="btn btn-success ajax-loader" id="quote_create_confirm" type="button">
                    <i class="fa fa-check"></i> <?php _trans('submit'); ?>
                </button>
            </div>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times"></i> <?php _trans('cancel'); ?></button>
      </div>

    </form>
  </div>
</div>

<!-- ----------------------------------------------------------------------------------- -->

<script type="text/javascript">

    // Creates the quote
    $('#quote_create_confirm').click(function() {
        console.log('clicked');
        // Posts the data to validate and create the quote;
        // will create the new client if necessary
        $.post("<?php echo site_url('guest/quotes/create'); ?>", {
                client_id: $('#create_quote_client_id').val(),
                quote_date_created: $('#quote_date_created').val(),
                quote_password: $('#quote_password').val(),
                user_id: '<?php echo $this->session->userdata('user_id'); ?>',
                invoice_group_id: $('#invoice_group_id').val()
            },
            function(data) {
                <?php echo (IP_DEBUG ? 'console.log(data);' : ''); ?>
                var response = JSON.parse(data);
                if (response.success === 1) {
                    // The validation was successful and quote was created
                    window.location = "<?php echo site_url('guest/quotes/quote_view'); ?>/" + response.quote_id;

                } else {
                    // The validation was not successful
                    $('.control-group').removeClass('has-error');
                    for (var key in response.validation_errors) {
                        $('#' + key).parent().parent().addClass('has-error');
                    }
                }
            });
    });
</script>