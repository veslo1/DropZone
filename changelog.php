<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Changelog
                <small>The list of all the updades and changes.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Dropzone</li>
                <li>
                    <a class="link-effect" href="">Changelog</a>
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="col-sm-12 col-lg-6">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title">Changelog</h3>
            </div>
            <div class="block-content">
                <ul class="list list-timeline pull-t">
                    <li>
                        <div class="list-timeline-time">21/01/2016</div>
                        <i class="fa fa-cog list-timeline-icon bg-info"></i>
                        <div class="list-timeline-content">
                            <strong>Updates:</strong>
                            <ul>
                                <li>Added "Add character" page (still not connected to database).</li>
                                <li>Added random backgrounds to homepage.</li>
                            </ul>
                        </div>
                        <i class="fa fa-cog list-timeline-icon bg-info"></i>
                        <div class="list-timeline-content">
                            <strong>Bugfixes:</strong>
                            <ul>
                                <li>None.</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="list-timeline-time">20/01/2016</div>
                        <i class="fa fa-cog list-timeline-icon bg-info"></i>
                        <div class="list-timeline-content">
                            <strong>Updates:</strong>
                            <ul>
                                <li>Added DropZone description in the Overview page.</li>
                                <li>Created DropZone logo.</li>
                                <li>Customized standard template for DropZone.</li>
                            </ul>
                        </div>
                        <i class="fa fa-cog list-timeline-icon bg-info"></i>
                        <div class="list-timeline-content">
                            <strong>Bugfixes:</strong>
                            <ul>
                                <li>None.</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>