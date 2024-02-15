
<div id="headerbar" class="proview">
    <h1 class="headerbar-title"><?php _trans('products'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('products/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('products/index'), 'mdl_products'); ?>
    </div>

</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="family"><a class="box1">Family</a></div>
    <div class="check"><input type="checkbox" name="product_sku"><a class="box1">Product Sku</a></div>
    <div class="check"><input type="checkbox" name="product_name"><a class="box1">Product Name</a></div>
    <div class="check"><input type="checkbox" name="product_description"><a class="box1">Product Description</a></div>
    <div class="check"><input type="checkbox" name="amount"><a class="box1">Product Price</a></div>
    <div class="check"><input type="checkbox" name="product_unit"><a class="box1">Product Unit</a></div>
    <div class="check"><input type="checkbox" name="tax_rate"><a class="box1">Tax Rate</a></div>
    <div class="check"><input type="checkbox" name="product_tariff"><a class="box1">Product Tariff</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 

<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
            <tr>
                <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
                <th class="family"><?php _trans('family'); ?></th>
                <th class="product_sku"><?php _trans('product_sku'); ?></th>
                <th class="product_name"><?php _trans('product_name'); ?></th>
                <th class="product_description"><?php _trans('product_description'); ?></th>
                <th class="amount"><?php _trans('product_price'); ?></th>
                <th class="product_unit"><?php _trans('product_unit'); ?></th>
                <th class="tax_rate"><?php _trans('tax_rate'); ?></th>
                <?php if (get_setting('sumex')) : ?>
                    <th class="product_tariff"><?php _trans('product_tariff'); ?></th>
                <?php endif; ?>
                <th class="option"><?php _trans('options'); ?></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td></td>
                    <td class="family"><?php _htmlsc($product->family_name); ?></td>
                    <td class="product_sku"><?php _htmlsc($product->product_sku); ?></td>
                    <td class="product_name"><?php _htmlsc($product->product_name); ?></td>
                    <td class="product_description"><?php echo nl2br(htmlsc($product->product_description)); ?></td>
                    <td class="amount"><?php echo format_currency($product->product_price); ?></td>
                    <td class="product_unit"><?php _htmlsc($product->unit_name); ?></td>
                    <td class="tax_rate"><?php echo ($product->tax_rate_id) ? htmlsc($product->tax_rate_name) : trans('none'); ?></td>
                    <?php if (get_setting('sumex')) : ?>
                        <td class="product_tariff"><?php _htmlsc($product->product_tariff); ?></td>
                    <?php endif; ?>
                    <td class="option">
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle"
                               data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('products/form/' . $product->product_id); ?>">
                                        <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo site_url('products/delete/' . $product->product_id); ?>"
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
