<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/summernote/summernote.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/summernote/summernote-bs3.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/cropper/cropper.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                <i class="si si-user-follow margin-5-r"></i>Add character
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Dropzone</li>
                <li>
                    <a class="link-effect" href="">Add character</a>
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->
<!-- Page Content -->
<div class="content">
    <div class="col-sm-12 col-lg-12">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title"><i class="fa fa-exclamation-triangle text-danger margin-5-r"></i>Before you start</h3>
            </div>
            <div class="block-content">
                <p>Let's write down some content here, do we? Guidelines, a small introduction to the tool, etc.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title"><i class="fa fa-info margin-5-r"></i>General Information</h3>
            </div>
            <div class="block-content">
                <form class="form-horizontal push-5-t" action="base_forms_premade.php" method="post" onsubmit="return false;">
                    <div class="form-group">
                        <div class="col-xs-12 col-md-6">
                            <label for="contact1-firstname">Firstname</label>
                            <input class="form-control" type="text" id="txtFirstname" name="txtFirstname" placeholder="Enter character firstname..">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="contact1-lastname">Lastname</label>
                            <input class="form-control" type="text" id="txtLastname" name="txtLastname" placeholder="Enter character lastname..">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-md-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="contact1-email">Nickname</label>
                                    <input class="form-control" type="email" id="txtNickname" name="txtNickname" placeholder="Enter character nickname..">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="row">
                                <label class="col-xs-12">Gender</label>
                                <div class="col-xs-12">
                                    <label class="css-input css-radio css-radio-danger push-10-r">
                                        <input type="radio" name="radioGender"><span></span> Female
                                    </label>
                                    <label class="css-input css-radio css-radio-info">
                                        <input type="radio" name="radioGender"><span></span> Male
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12" for="contact1-subject">Nationality</label>
                        <div class="col-xs-12">
                            <select class="form-control" id="selNationality" name="selNationality" size="1">
                                <option value="none">Select one...</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Australia">Australia</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Egypt">Egypt</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="Greece">Greece</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Norway">Norway</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Russia">Russia</option>
                                <option value="Scotland">Scotland</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="Spain">Spain</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Venezuela">Venezuela</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12">Character Class</label>
                        <div class="col-xs-12">
                            <select class="form-control" id="selClass" name="selClass" size="1">
                                <option value="None">Select one...</option>
                                <option value="Rookie">Rookie</option>
                                <option value="Grenadier">Grenadier</option>
                                <option value="Ranger">Ranger</option>
                                <option value="Sharpshooter">Sharpshooter</option>
                                <option value="Specialist">Specialist</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-md-4">
                            <label class="css-input switch switch-sm switch-primary">
                                <input type="checkbox" id="chkSoldier" name="chkSoldier"><span></span> Possible Soldier
                            </label>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label class="css-input switch switch-sm switch-success">
                                <input type="checkbox" id="chkVIP" name="chkVIP"><span></span> Possible VIP
                            </label>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <label class="css-input switch switch-sm switch-danger">
                                <input type="checkbox" id="chkDarkVIP" name="chkDarkVIP"><span></span> Possible Dark VIP
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12">Required DLCs</label>
                        <div class="col-xs-12 col-md-6">
                            <label class="css-input switch switch-sm switch-info">
                                <input type="checkbox" id="chkDLC1" name="chkDLC1"><span></span> Resistance Warriors Pack
                            </label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label class="css-input switch switch-sm switch-info">
                                <input type="checkbox" id="chkDLC2" name="chkDLC2"><span></span> Shen's Last Gift
                            </label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label class="css-input switch switch-sm switch-info">
                                <input type="checkbox" id="chkDLC3" name="chkDLC3"><span></span> Anarchy's Children
                            </label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label class="css-input switch switch-sm switch-info">
                                <input type="checkbox" id="chkDLC4" name="chkDLC4"><span></span> Alien Hunters
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title"><i class="fa fa-exclamation margin-5-r"></i>Props and other details</h3>
            </div>
            <div class="block-content">
                <p class="fullHeightForm2">To be filled with everything...</p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="col-sm-12 col-lg-6">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <div class="block-options-simple docs-buttons">
                    <input type="file" class="sr-only" id="inputHeadImage" name="file" accept="image/*">
                    <button id="uploadHead" class="btn btn-xs btn-primary push-5-r" type="button"><i class="fa fa-upload"></i> Upload Screenshot</button>
                    <button id="resetHead" class="btn btn-xs btn-danger push-5-r" type="button" data-method="reset"><i class="fa fa-times"></i> Reset Grid</button>
                </div>
                <h3 class="block-title hidden-xs"><i class="fa fa-picture-o margin-5-r"></i>Character Head Screenshot</h3>
            </div>
            <div class="block-content">
                <div class="img-container margin-15">
                    <img id="imageHead" height="351" src="assets/img/tests/test2.jpg" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <div class="block-options-simple docs-buttons">
                    <input type="file" class="sr-only" id="inputBodyImage" name="file" accept="image/*">
                    <button id="uploadBody" class="btn btn-xs btn-primary push-5-r" type="button"><i class="fa fa-upload"></i> Upload Screenshot</button>
                    <button id="resetBody" class="btn btn-xs btn-danger push-5-r" type="button"><i class="fa fa-times"></i> Reset Grid</button>
                </div>
                <h3 class="block-title hidden-xs"><i class="fa fa-picture-o margin-5-r"></i>Character Body Screenshot</h3>
            </div>
            <div class="block-content">
                <div class="img-container margin-15">
                    <img id="imageBody" height="351" src="assets/img/tests/test1.jpg" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-12">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title"><i class="fa fa-book margin-5-r"></i>Character Biography</h3>
            </div>
            <div class="block-content">
                <div class="js-summernote">Character Biography...</div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-12">
        <div class="block block-bordered">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title"><i class="fa fa-file margin-5-r"></i>Character Export/Import File</h3>
            </div>
            <div class="block-content">
                <form class="dropzone margin-15" name="dropzoneCharacterFile" action="#"></form>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-12 margin-20">
        <button class="btn btn-sm btn-success" type="button"><i class="fa fa-save margin-5-r"></i>Upload Character</button>
        <button class="btn btn-sm btn-danger" type="button"><i class="fa fa-times margin-5-r"></i>Clear Form</button>
    </div>
</div>
<!-- END Page Content -->
<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/summernote/summernote.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/cropper/cropper.min.js"></script>

<!-- Page JS Code -->
<script>
            jQuery(function () {
                $('.js-summernote').summernote({
                    height: 240,
                    lang: 'en-EN',
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                    ]
                });

                var console = window.console || { log: function () { } };
                var $dataX = $('#dataX');
                var $dataY = $('#dataY');
                var $dataHeight = $('#dataHeight');
                var $dataWidth = $('#dataWidth');
                var $dataRotate = $('#dataRotate');
                var $dataScaleX = $('#dataScaleX');
                var $dataScaleY = $('#dataScaleY');

                // Head Cropper
                var optionsHead = {
                    aspectRatio: 4 / 3,
                    crop: function (e) {
                        $dataX.val(Math.round(e.x));
                        $dataY.val(Math.round(e.y));
                        $dataHeight.val(Math.round(e.height));
                        $dataWidth.val(Math.round(e.width));
                        $dataRotate.val(e.rotate);
                        $dataScaleX.val(e.scaleX);
                        $dataScaleY.val(e.scaleY);
                    }
                };

                $('#imageHead').cropper(optionsHead);

                // Body Cropper
                var optionsBody = {
                    aspectRatio: 4 / 5,
                    crop: function (e) {
                        $dataX.val(Math.round(e.x));
                        $dataY.val(Math.round(e.y));
                        $dataHeight.val(Math.round(e.height));
                        $dataWidth.val(Math.round(e.width));
                        $dataRotate.val(e.rotate);
                        $dataScaleX.val(e.scaleX);
                        $dataScaleY.val(e.scaleY);
                    }
                };

                $('#imageBody').cropper(optionsBody);
            });

            $("#uploadHead").click(function () {
                // Import image
                var $inputImage = $('#inputHeadImage');
                var URL = window.URL || window.webkitURL;
                var blobURL;
                console.log("Click.")
                if (URL) {
                    $inputImage.trigger("click");
                    $inputImage.change(function () {
                        var files = this.files;
                        var file;

                        if (!$('#imageHead').data('cropper')) {
                            console.log("Returns.")
                            return;
                        }

                        if (files && files.length) {
                            file = files[0];

                            if (/^image\/\w+$/.test(file.type)) {
                                blobURL = URL.createObjectURL(file);
                                $('#imageHead').one('built.cropper', function () {

                                    // Revoke when load complete
                                    URL.revokeObjectURL(blobURL);
                                }).cropper('reset').cropper('replace', blobURL);
                                $inputImage.val('');
                            } else {
                                window.alert('Please choose an image file.');
                            }
                        }
                    });
                } else {
                    $inputImage.prop('disabled', true).parent().addClass('disabled');
                }
            });

            $("#uploadBody").click(function () {
                // Import image
                var $inputImage = $('#inputBodyImage');
                var URL = window.URL || window.webkitURL;
                var blobURL;
                console.log("Click.")
                if (URL) {
                    $inputImage.trigger("click");
                    $inputImage.change(function () {
                        var files = this.files;
                        var file;

                        if (!$('#imageBody').data('cropper')) {
                            console.log("Returns.")
                            return;
                        }

                        if (files && files.length) {
                            file = files[0];

                            if (/^image\/\w+$/.test(file.type)) {
                                blobURL = URL.createObjectURL(file);
                                $('#imageBody').one('built.cropper', function () {

                                    // Revoke when load complete
                                    URL.revokeObjectURL(blobURL);
                                }).cropper('reset').cropper('replace', blobURL);
                                $inputImage.val('');
                            } else {
                                window.alert('Please choose an image file.');
                            }
                        }
                    });
                } else {
                    $inputImage.prop('disabled', true).parent().addClass('disabled');
                }
            });

            $("#resetHead").click(function () {
                $('#imageHead').cropper("reset");
            });

            $("#resetBody").click(function () {
                $('#imageBody').cropper("reset");
            });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>