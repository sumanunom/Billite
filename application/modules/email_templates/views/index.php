
<div id="headerbar" class="emailtemp">
    <h1 class="headerbar-title"><?php _trans('email_templates'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('email_templates/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('email_templates/index'), 'mdl_email_templates'); ?>
    </div>
</div>


<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="title'"><a class="box1">Title</a></div>
    <div class="check"><input type="checkbox" name="type"><a class="box1">Type</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 

    <div>
    <?php echo $this->layout->load_view('layout/alerts'); ?>

    <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
        <tr>
            <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
            <th class="title"><?php _trans('title'); ?></th>
            <th class="type"><?php _trans('type'); ?></th>
            <th class="option"><?php _trans('options'); ?></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($email_templates as $email_template) { ?>
            <tr>
                <td></td>
                <td class="title"><?php _htmlsc($email_template->email_template_title); ?></td>
                <td class="type"><?php echo lang($email_template->email_template_type); ?></td>
                <td class="option">
                    <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#"><i
                                    class="fa fa-cog"></i> <?php _trans('options'); ?></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('email_templates/form/' . $email_template->email_template_id); ?>">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('email_templates/delete/' . $email_template->email_template_id); ?>"
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
