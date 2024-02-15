
<div id="headerbar" class="archive">

    <h1 class="title"><?php _trans('invoice_archive'); ?></h1>

    <div class="headerbar-item pull-right archivebutton">
        <form action="<?php echo site_url('invoices/archive/'); ?>" method="post">
            <div class="input-group" id="input">
                <input name="invoice_number" id="invoice_number" type="text" class="form-control input-sm">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-sm"
                            type="submit"><?php _trans('filter_invoices'); ?></button>
                </span>
            </div>
        </form>
    </div>

</div>
<div>

    <div id="filter_results">
        <?php $this->layout->load_view('invoices/partial_invoice_archive', array('invoices_archive' => $invoices_archive)); ?>
    </div>

</div>
