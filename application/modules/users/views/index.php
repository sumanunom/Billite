
<div id="headerbar" class="users">
    <h1 class="headerbar-title"><?php _trans('users'); ?></h1>

    <div class="headerbar-item pull-right button3">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('users/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button2">
        <?php echo pager(site_url('users/index'), 'mdl_users'); ?>
    </div>

</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="name"><a class="box1">Name</a></div>
    <div class="check"><input type="checkbox" name="user_type"><a class="box1">User Type</a></div>
    <div class="check"><input type="checkbox" name="email_address"><a class="box1">Email</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button>
</div> 


<div>

    <?php echo $this->layout->load_view('layout/alerts'); ?>

    <table class="billite-table hover stripe row-border" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
        <thead>
            <tr>
                <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
                <th class="name"><?php _trans('name'); ?></th>
                <th class="user_type"><?php _trans('user_type'); ?></th>
                <th class="email_address"><?php _trans('email_address'); ?></th>
                <th class="option"><?php _trans('options'); ?></th>
            </tr>
        </thead>

            <tbody>
            <?php
            
            foreach ($users as $user) {                 
                
                ?>
                <tr>
                    <td></td>
                    <td class="name"><?php _htmlsc($user->user_name); ?></td>
                    <td class="user_type"><?php echo $user_types[$user->user_type]; ?></td>
                    <td class="email_address"><?php echo $user->user_email; ?></td>
                    <td class="option">
                        <div class="options btn-group btn-group-sm">
                            <a class="btn btn-default dropdown-toggle"
                               data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php _trans('options'); ?>   
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('users/form/' . $user->user_id); ?>">
                                        <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <?php if ($user->user_type == 2) : ?>
                                <li>
                                    <a href="<?php echo site_url('user_clients/user/' . $user->user_id); ?>">
                                        <i class="fa fa-list fa-margin"></i> <?php _trans('assigned_clients'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                                <?php if ($user->user_id !== 1) { ?>
                                    <li>
                                        <form action="<?php echo site_url('users/delete/' . $user->user_id); ?>"
                                              method="POST">
                                            <?php _csrf_field(); ?>
                                            <button type="submit" class="dropdown-button"
                                                    onclick="return confirm('<?php _trans('delete_record_warning'); ?>');">
                                                <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                            </button>
                                        </form>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

        </table>
    </div>

   