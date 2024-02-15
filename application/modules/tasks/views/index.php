

<div id="headerbar" class="proview">
    <h1 class="headerbar-title"><?php _trans('tasks'); ?></h1>

    <div class="headerbar-item pull-right button2">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('tasks/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

    <div class="headerbar-item pull-right button1">
        <?php echo pager(site_url('tasks/index'), 'mdl_tasks'); ?>
    </div>

</div>

<div class="check1" id="myForm">
    <div class="check"><input type="checkbox" name="status"><a class="box1">Status</a></div>
    <div class="check"><input type="checkbox" name="task_name"><a class="box1">Task Name</a></div>
    <div class="check"><input type="checkbox" name="task_finish_date"><a class="box1">Task Finish Date</a></div>
    <div class="check"><input type="checkbox" name="project"><a class="box1">Project</a></div>
    <div class="check"><input type="checkbox" name="task_price"><a class="box1">Task Price</a></div>
    <div class="check"><input type="checkbox" name="option"><a class="box1">Option</a></div>
    <!-- <button type="button" class="close-list" onclick="closeForm()" id="close-popup">Close</button> -->
</div> 

<div>
<?php $this->layout->load_view('layout/alerts'); ?>
  <table class="billite-table" style="overflow-x:auto; display:block; width:100% !important;" id="datatable2">
  <thead>
            <tr>
                <th><i class="fa-solid fa-table-columns fa-lg customicon open-button" id="popup-trigger"></i></th>
                <th class="status"><?php _trans('status'); ?></th>
                <th class="task_name"><?php _trans('task Name'); ?></th>
                <th class="task_finish_date"><?php _trans('task Finish Date'); ?></th>
                <th class="project"><?php _trans('project'); ?></th>
                <th class="task_price"><?php _trans('task Price'); ?></th>
                <th class="option"><?php _trans('options'); ?></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($tasks as $task) { ?>
                <tr>
                    <td></td>
                    <td class="status">
                        <span class="label <?php echo $task_statuses["$task->task_status"]['class']; ?>">
                            <?php echo $task_statuses["$task->task_status"]['label']; ?>
                        </span>
                    </td>
                    <td class="task_name">
                        <?php echo htmlspecialchars($task->task_name); ?>
                    </td>
                    <td class="task_finish_date">
                        <div class="<?php if ($task->is_overdue) { ?>text-danger<?php } ?>">
                            <?php echo date_from_mysql($task->task_finish_date); ?>
                        </div>
                    </td>
                    <td class="project">
                        <?php echo !empty($task->project_id) ? anchor('projects/view/' . $task->project_id, htmlsc($task->project_name)) : ''; ?>
                    </td>
                    <td class="task_price">
                        <?php echo format_currency($task->task_price); ?>
                    </td>
                    <td class="option">
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle"
                               data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('tasks/form/' . $task->task_id); ?>"
                                       title="<?php _trans('edit'); ?>">
                                        <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <?php if (!($task->task_status == 4 && $this->config->item('enable_invoice_deletion') !== true)) : ?>
                                    <li>
                                        <form action="<?php echo site_url('tasks/delete/' . $task->task_id); ?>"
                                              method="POST">
                                            <?php _csrf_field(); ?>
                                            <button type="submit" class="dropdown-button"
                                                    onclick="return confirm('<?php echo $task->task_status == 4 ? trans('alert_task_delete') : trans('delete_record_warning') ?>');">
                                                <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                            </button>
                                        </form>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
