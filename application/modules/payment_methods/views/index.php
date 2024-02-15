
<div id="headerbar" class="paymethods">
    <h1 class="headerbar-title"><?php _trans('payment_methods'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('payment_methods/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('payment_methods/index'), 'mdl_payment_methods'); ?>
    </div>

</div>


<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="payment_method"><a class="box1">Payment Method</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 


<div>

    <?php $this->layout->load_view('layout/alerts'); ?>

    <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
            <tr>
                <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
                <th class="payment_method"><?php _trans('payment_method'); ?></th>
                <th class="option"><?php _trans('options'); ?></th>
            </tr>
            </thead>

            <tbody>
            <?php
                foreach ($payment_methods as $payment_method) { 
            ?>
                <tr>
                    <td></td>
                    <td class="payment_method"><?php _htmlsc($payment_method->payment_method_name); ?></td>
                    <td class="option">
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle"
                               data-toggle="dropdown" href="#">
                               <i class="fa fa-cog"></i>  <?php _trans('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('payment_methods/form/' . $payment_method->payment_method_id); ?>">
                                        <i class="fa fa-edit fa-margin"></i>
                                        <i class="fas fa-edit"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo site_url('payment_methods/delete/' . $payment_method->payment_method_id); ?>"
                                          method="POST">
                                        <?php _csrf_field(); ?>
                                        <button type="submit" class="dropdown-button"
                                                onclick="return confirm('<?php _trans('delete_record_warning'); ?>');">
                                            <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

        </table>
    </div>
 