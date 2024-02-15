
<div id="headerbar" class="payment-button">
    <h1 class="headerbar-title"><?php _trans('payments'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('payments/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

     <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('payments/index'), 'mdl_payments'); ?>
    </div>

</div>

<div>

    <?php //$this->layout->load_view('layout/alerts'); ?>

    <div id="filter_results">
        <?php $this->layout->load_view('payments/partial_payment_table'); ?>
            <div class="headerbar-item pull-right view-pagination">
        <?php echo pager(site_url('payments/index'), 'mdl_payments'); ?>
    </div>
    </div>

</div>
