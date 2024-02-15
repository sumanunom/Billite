<?php
$cv = $this->controller->view_data["custom_values"];
?>
<script>

    $(function () {
        $('.btn_add_product').click(function () {
            $('#modal-placeholder').load(
                "<?php echo site_url('products/ajax/modal_product_lookups'); ?>/" +
                    Math.floor(Math.random() * 1000)
            );
        });

        $('.btn_add_row').click(function () {
            $('#new_row').clone().appendTo('#item_table').removeAttr('id').addClass('item').show();
        });

        <?php if (!$items) { ?>
        $('#new_row').clone().appendTo('#item_table').removeAttr('id').addClass('item').show();
        <?php } ?>

        $('#btn_save_quote').click(function () {
            var items = [];
            var item_order = 1;
            $('table tbody.item').each(function () {
                var row = {};
                $(this).find('input,select,textarea').each(function () {
                    if ($(this).is(':checkbox')) {
                        row[$(this).attr('name')] = $(this).is(':checked');
                    } else {
                        row[$(this).attr('name')] = $(this).val();
                    }
                });
                row['item_order'] = item_order;
                item_order++;
                items.push(row);
            });
            $.post("<?php echo site_url('guest/quotes/save'); ?>", {
                    quote_id: <?php echo $quote_id; ?>,
                    quote_number: $('#quote_number').val(),
                    quote_date_created: $('#quote_date_created').val(),
                    quote_date_expires: $('#quote_date_expires').val(),
                    quote_status_id: $('#quote_status_id').val(),
                    quote_password: $('#quote_password').val(),
                    items: JSON.stringify(items),
                    quote_discount_amount: $('#quote_discount_amount').val(),
                    quote_discount_percent: $('#quote_discount_percent').val(),
                    notes: $('#notes').val(),
                    custom: $('input[name^=custom],select[name^=custom]').serializeArray(),
                },
                function (data) {
                    <?php echo(IP_DEBUG ? 'console.log(data);' : ''); ?>
                    var response = JSON.parse(data);
                    if (response.success === 1) {
                        window.location = "<?php echo site_url('guest/quotes/quote_view'); ?>/" + <?php echo $quote_id; ?>;
                    } else {
                        $('#fullpage-loader').hide();
                        $('.control-group').removeClass('has-error');
                        $('div.alert[class*="alert-"]').remove();
                        var resp_errors = response.validation_errors,
                            all_resp_errors = '';

                        if (typeof(resp_errors) == 'string') {
                            all_resp_errors = resp_errors;
                        } else {
                            for (var key in resp_errors) {
                                $('#' + key).parent().addClass('has-error');
                                all_resp_errors += resp_errors[key];
                            }
                        }

                        $('#quote_form').prepend('<div class="alert alert-danger">' + all_resp_errors + '</div>');
                    }
                });
        });

        $(document).on('click', '.btn_delete_item', function () {
            var btn = $(this);
            var item_id = btn.data('item-id');

            // Just remove the row if no item ID is set (new row)
            if (typeof item_id === 'undefined') {
                $(this).parents('.item').remove();
            }

            $.post("<?php echo site_url('guest/quotes/quote_delete_item/' . $quote->quote_id); ?>", {
                    'item_id': item_id,
                },
                function (data) {
                    <?php echo(IP_DEBUG ? 'console.log(data);' : ''); ?>
                    var response = JSON.parse(data);

                    if (response.success === 1) {
                        btn.parents('.item').remove();
                    } else {
                        btn.removeClass('btn-link').addClass('btn-danger').prop('disabled', true);
                    }
                });
        });

        $('#btn_generate_pdf').click(function () {
            window.open('<?php echo site_url('quotes/generate_pdf/' . $quote_id); ?>', '_blank');
        });

        $(document).ready(function () {
            if ($('#quote_discount_percent').val().length > 0) {
                $('#quote_discount_amount').prop('disabled', true);
            }
            if ($('#quote_discount_amount').val().length > 0) {
                $('#quote_discount_percent').prop('disabled', true);
            }
        });
        $('#quote_discount_amount').keyup(function () {
            if (this.value.length > 0) {
                $('#quote_discount_percent').prop('disabled', true);
            } else {
                $('#quote_discount_percent').prop('disabled', false);
            }
        });
        $('#quote_discount_percent').keyup(function () {
            if (this.value.length > 0) {
                $('#quote_discount_amount').prop('disabled', true);
            } else {
                $('#quote_discount_amount').prop('disabled', false);
            }
        });

        var fixHelper = function (e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
            $helper.children().each(function (index) {
                $(this).width($originals.eq(index).width());
            });
            return $helper;
        };

        $('#item_table').sortable({
            helper: fixHelper,
            items: 'tbody',
        });
    });
</script>

<?php 
echo $modal_delete_quote;
echo $modal_add_quote_tax;
echo $modal_quote_to_invoice;
echo $modal_copy_quote; 
echo $modal_change_client; 
?>

<div id="headerbar">
    <h1 class="headerbar-title">
        <?php
        echo trans('quote') . ' ';
        echo($quote->quote_number ? '#' . $quote->quote_number : $quote->quote_id);
        ?>
    </h1>

    <div class="headerbar-item pull-right">
        <div class="btn-group btn-group-sm">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-cog"></i>
                <?php _trans('options'); ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="#add-quote-tax" data-toggle="modal">
                        <i class="fa fa-plus fa-margin"></i>
                        <?php _trans('add_quote_tax'); ?>
                    </a>
                </li>
                <li>
                    <a href="#" id="btn_generate_pdf"
                       data-quote-id="<?php echo $quote_id; ?>">
                        <i class="fa fa-print fa-margin"></i>
                        <?php _trans('download_pdf'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('mailer/quote/' . $quote->quote_id); ?>">
                        <i class="fa fa-send fa-margin"></i>
                        <?php _trans('send_email'); ?>
                    </a>
                </li>
                <li>
                    <a href="#modal_quote_to_invoice" data-toggle="modal"
                       data-quote-id="<?php echo $quote_id; ?>">
                        <i class="fa fa-refresh fa-margin"></i>
                        <?php _trans('quote_to_invoice'); ?>
                    </a>
                </li>
                <li>
                    <a href="#modal_copy_quote" data-toggle="modal"
                       data-quote-id="<?php echo $quote_id; ?>"
                       data-client-id="<?php echo $quote->client_id; ?>">
                        <i class="fa fa-copy fa-margin"></i>
                        <?php _trans('copy_quote'); ?>
                    </a>
                </li>
                <li>
                    <a href="#delete-quote" data-toggle="modal">
                        <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                    </a>
                </li>
            </ul>
        </div>

        <a href="#" class="btn btn-success btn-sm ajax-loader" id="btn_save_quote">
        <i class="fa fa-check"></i>
            <?php _trans('save'); ?>
        </a>
    </div>

</div>

<div id="quo">
    <?php echo $this->layout->load_view('layout/alerts'); ?>
    <div id="quote_form">
        <div class="quote quote-view-style">

        <?php $this->layout->load_view('guest/quotes_item_table'); ?>

        <div class="row">
            <div class="col-lg-9 col-xs-12 col-md-8 quote_custom">

                <?php //$this->layout->load_view('upload/dropzone-quote-html'); ?>

                <?php if ($custom_fields): ?>
                    <?php $cv = $this->controller->view_data["custom_values"]; ?>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 quote_custom_field">

                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?php _trans('custom_fields'); ?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <?php $i = 0; ?>
                                            <?php foreach ($custom_fields as $custom_field): ?>
                                                <?php if ($custom_field->custom_field_location != 0) {
                                                    continue;
                                                } ?>
                                                <?php $i++; ?>
                                                <?php if ($i % 2 != 0): ?>
                                                    <?php print_field($this->mdl_quotes, $custom_field, $cv); ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="col-xs-6">
                                            <?php $i = 0; ?>
                                            <?php foreach ($custom_fields as $custom_field): ?>
                                                <?php if ($custom_field->custom_field_location != 0) {
                                                    continue;
                                                } ?>
                                                <?php $i++; ?>
                                                <?php if ($i % 2 == 0): ?>
                                                    <?php print_field($this->mdl_quotes, $custom_field, $cv); ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
    </div>
</div>

<?php $this->layout->load_view('upload/dropzone-quote-scripts'); ?>
