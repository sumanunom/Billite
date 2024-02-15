
<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="product_sku"><a class="box1">Product Sku</a></div>
    <div class="check"><input type="checkbox" name="family_name"><a class="box1">Family Name</a></div>
    <div class="check"><input type="checkbox" name="product_name"><a class="box1">Product Name</a></div>
    <div class="check"><input type="checkbox" name="product_description"><a class="box1">Product Description</a></div>
    <div class="check"><input type="checkbox" name="product_price"><a class="box1">Product Price</a></div>
    <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button>
</div> 

<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table  hover stripe row-border" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>

        <tr>
            <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger" onclick="openForm()"></i>&nbsp;</th>
            <th class="product_sku"><?php _trans('product Sku'); ?></th>
            <th class="family_name"><?php _trans('family Name'); ?></th>
            <th class="product_name"><?php _trans('product Name'); ?></th>
            <th class="product_description"><?php _trans('product Description'); ?></th>
            <th class="text-right product_price"><?php _trans('product Price'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product) { ?>
            <tr class="product">
                <td class="text-left">
                    <input type="checkbox" name="product_ids[]"
                           value="<?php echo $product->product_id; ?>">
                </td>
                <td nowrap class="text-left product_sku">
                    <b><?php _htmlsc($product->product_sku); ?></b>
                </td>
                <td class="family_name">
                    <b><?php _htmlsc($product->family_name); ?></b>
                </td>
                <td class="product_name">
                    <b><?php _htmlsc($product->product_name); ?></b>
                </td>
                <td class="product_description">
                    <?php echo nl2br(htmlsc($product->product_description)); ?>
                </td>
                <td class="text-right product_price">
                    <?php echo format_currency($product->product_price); ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>
</div>
