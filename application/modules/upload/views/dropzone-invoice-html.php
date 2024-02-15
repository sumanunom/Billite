
<div class="panel panel-default no-margin attach-edit-view">

    <div class="panel-body clearfix">
        <!-- The fileinput-button span is used to style the file input field as button -->
            <?php _trans('Attach File(s) to this Invoice'); ?>
        <button type="button" class="btn btn-default fileinput-button">
            <i class="fa fa-plus"></i> <?php _trans('add_files'); ?>
        </button>

        <!-- dropzone -->
        <div class="row">
            <div id="actions" class="col-xs-12 view_attach">
                             <!-- <div class="progress progress-striped active" role="progressbar"
                                 aria-valuemin="0"
                                 aria-valuemax="100" aria-valuenow="0">
                                <div class="progress-bar progress-bar-success" style=""
                                     data-dz-uploadprogress></div>
                            </div>   -->

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- The global file processing state -->
                    <div class="fileupload-process">
                        <div id="total-progress" class="progress progress-striped active"
                             role="progressbar"
                             aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar progress-bar-success" style="width:0%;"
                                 data-dz-uploadprogress></div>
                        </div>
                    </div>
                    <div id="previews" class="table table-condensed files no-margin">
                    <div id="template" class="file-row">
                        <!-- This is used as the file preview template -->
                        <div class="col-lg-8 col-md-8 col-sm-8 view-attach-box">
                            <div>
                            <span class="preview"><img data-dz-thumbnail/></span>
                        </div>
                        <div>
                            <p class="name" data-dz-name></p>
                            <strong class="error text-danger" data-dz-errormessage></strong>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 view-attach-box view-attach-box2">
                            <div>
                            <p class="size" data-dz-size></p>                            
                        </div>
                        <div class="pull-left btn-group">
                            <!-- <button data-dz-download class="btn btn-sm btn-primary view-down">
                                <i class="fa fa-download"></i>
                                <span><?php _trans('download'); ?></span>
                            </button> -->
                            <?php if ($invoice->is_read_only != 1) { ?>
                                <button data-dz-remove class="btn btn-danger btn-sm delete view-del">
                                    <i class="fa fa-trash-o"></i>
                                    <span><?php _trans('delete'); ?></span>
                                </button>
                            <?php } ?>
                        </div>
                        </div>
                        
                    </div>
                </div>
                </div>

                
            </div>
        </div>
        <!-- stop dropzone -->
    </div>

</div>
