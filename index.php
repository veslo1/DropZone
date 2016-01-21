<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>
<?php
// Random background generator for the header section
$bg = rand(1,3);
?>

<!-- Headbar Content -->
<div class="bg-image homepage-back bg-<?php echo $bg; ?>">
    <div class="bg-primary-dark-op">
        <section class="content content-full content-boxed overflow-hidden">
            <div class="push-50-t push-50 text-center">
                <h2 class="h2 text-white margin-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Welcome to</h2>
                <img class="animated fadeIn" src="assets/img/logo-big.png" alt="Logo" />
                <h2 class="h2 text-white margin-10 animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">Character Repository, Database and Blog for XCOM2</h2>
            </div>
        </section>
    </div>
</div>

<!-- Page Content -->
<div class="content">
    <div class="col-sm-12">
        <div class="block block-bordered">
            <div class="block-content bg-danger">
                <p class="text-center text-white">
                    <i class="fa fa-2x fa-exclamation-triangle fa-v-center"></i>
                    <strong class="dropzone-text">
                        DROP
                        <span>ZONE</span>
                    </strong>
                    is still under contruction! Do you think you can help? Are you a front-end developer? Do you like to write articles?
                    <a href="mailto: stefano.olgiati91@gmail.com" class="text-white text-underline">Write me</a>
                    and start a collaboration!
                </p>
            </div>
        </div>
        <div class="block block-bordered">
            <div class="block-content bg-warning">
                <p class="text-center text-white">
                    <i class="fa fa-2x fa-exclamation-triangle fa-v-center"></i>
                    Check out the
                    <a class="text-white text-underline" href="add_character.php">"Add Character"</a> test page and tell me on r/XCOM what you think about it!
                </p>
            </div>
        </div>
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title">
                    Introduction
                </h3>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <p class="lead">
                            What is
                            <strong class="dropzone-text">
                                DROP
                                <span>ZONE</span>
                            </strong>
                            ?
                        </p>
                        <p class="text-justify">
                            <strong class="dropzone-text">
                                DROP
                                <span>ZONE</span>
                            </strong>
                            is an online application which aims to aid Commanders in their
                            <a href="https://xcom.com/">XCOM2</a>
                            experience by giving complete information about soldiers, equipment, technology, aliens, buildings and envoironment structured in spreadsheets, data files and articles.
                        </p>
                        <p class="text-justify">
                            It may look like a wikia, but the contents are presented in a way better visualization and the information you need is exactly where you expect it to be, and you
                            may also access to intercative features like comparisons between different weapons, aliens, and more.
                        </p>
                        <p class="text-justify">
                            <strong>Articles</strong>
                            are instead written by other players and focus mainly on particular enemies, soldier classes, situations or tactics. Since the content may be very different
                            from an article to another, each one is labelled by one or more tags, so you can easily find the most interesting read you are looking for.
                        </p>
                        <p class="text-justify">
                            A big part of the application is also dedicated to XCOM
                            <strong>operatives</strong>
                            : any user may download for free our soldiers saved in the databases, and any registered user can
                            upload their own. Each operative has its own personal detail page and it is linked to his/her file to import into XCOM2. You can search our database for specific
                            characteristics such as names, callsigns, classes and aesthetic appearance.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <img class="fit-image hard-border" src="assets/img/screenshots/img-intro2.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-bordered text-center">
            <div class="block-content">
                <p class="lead">
                    <strong class="dropzone-text">
                        DROP
                        <span>ZONE</span>
                    </strong>
                    is fully responsive and perfectly works on desktops, tablets and smartphones. Feel free to access it anytime, anywhere!
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>
