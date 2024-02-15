
<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="invoice"><a class="box1">Invoice</a></div>
    <div class="check"><input type="checkbox" name="created"><a class="box1">Created</a></div>
    <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button>
</div> 


<table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
        <tr>
            <th class="invoice"><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger" onclick="openForm()"></i><?php _trans('invoice'); ?></th>
            <th class="created"><?php _trans('created'); ?></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($invoices_archive as $invoice) {
            ?>
            <tr>
                <td class="invoice">
                    <a href="<?php echo site_url('invoices/download/' . basename($invoice)); ?>"
                       title="<?php _trans('invoice'); ?>">
                        <?php echo basename($invoice); ?>
                    </a>
                </td>

                <td class="created">>
                    <?php echo date("F d Y H:i:s.", filemtime($invoice)); ?>
                </td>

            </tr>
        <?php } ?>
        </tbody>

    </table>
</div>
