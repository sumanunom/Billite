
<div id="delete-invoice" class="modal modal-lg" role="dialog" aria-labelledby="delete-invoice" aria-hidden="true">

<div class="modal-content">
    <div class="modal-header">
    <h4 class="panel-title"><?php _trans('delete_invoice'); ?></h4>
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
        
    </div>
    <div class="modal-body">

        <div class="alert alert-danger"><?php _trans('delete_invoice_warning'); ?></div>

    </div>
    <div class="modal-footer">

        <form action="<?php echo site_url('invoices/delete/' . $invoice->invoice_id); ?>"
              method="POST">
            <?php _csrf_field(); ?>

            <div class="btn-group">
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash-o fa-margin"></i> <?php echo trans('confirm_deletion') ?>
                </button>
                <a href="#" class="btn btn-default" data-dismiss="modal">
                    <i class="fa fa-times"></i> <?php _trans('cancel'); ?>
                </a>
            </div>
        </form>

    </div>
</div>

</div>
