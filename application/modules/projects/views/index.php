
<div id="headerbar" class="proview">
    <h1 class="headerbar-title"><?php _trans('projects'); ?></h1>

    <div class="headerbar-item pull-right">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('projects/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right">
        <?php echo pager(site_url('projects/index'), 'mdl_projects'); ?>
    </div>

</div>
<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="project_name"><a class="box1">Project Name</a></div>
    <div class="check"><input type="checkbox" name="client_name"><a class="box1">Client Name</a></div>

    <!-- <div class="check"><input type="checkbox" name="task_finish_date"><a class="box1">Task Finish Date</a></div>
    <div class="check"><input type="checkbox" name="project"><a class="box1">Project</a></div>
    <div class="check"><input type="checkbox" name="task_price"><a class="box1">Task Price</a></div>

    <div class="check"><input type="checkbox" name="phone"><a class="box1">Phone</a></div>
    <div class="check"><input type="checkbox" name="status"><a class="box1">Status</a></div>
    <div class="check"><input type="checkbox" name="birth" id="mychck" onclick="myFunctions()" ><a class="box1">Bday</a></div>
    <div class="check"><input type="checkbox" name="surname" id="mycheck1" ><a class="box1">C_Surname</a></div>
    <div class="check"><input type="checkbox" name="gender" id="mycheck2" ><a class="box1">Gender</a></div>
    <div class="check"><input type="checkbox" name="language" id="mycheck3" ><a class="box1">Language</a></div>
    <div class="check"><input type="checkbox" name="website" id="mycheck4" ><a class="box1">Website</a></div>
    <div class="check"><input type="checkbox" name="country" id="mycheck5" ><a class="box1">Country</a></div> -->

    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button>
</div> 

<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
            <tr>
                <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
                <th class="project_name"><?php _trans('project Name'); ?></th>
                <th class="client_name"><?php _trans('client Name'); ?></th>
                <th class="option"><?php _trans('options'); ?></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($projects as $project) { ?>
                <tr>
                    <td></td>
                    <td class="project_name"><?php echo anchor('projects/view/' . $project->project_id, htmlsc($project->project_name)); ?></td>
                    <td class="client_name"><?php echo ($project->client_id) ? htmlsc($project->client_name) : trans('none'); ?></td>
                    <td class="option">
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle"
                               data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('projects/form/' . $project->project_id); ?>">
                                        <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo site_url('projects/delete/' . $project->project_id); ?>"
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
