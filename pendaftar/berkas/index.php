<?php
include('../../layouts/header.php');
?>
 <div class="id">
<?php
include('../layouts/menu.php');
?>
 <div id="main">
<?php
include('../layouts/nav.php');
?>
<section id="input-file-browser">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">File Input</h4>
                    </div>
                    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p>Default</p>
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="customFile">
                                        <label class="form-file-label" for="customFile">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p>With Icon And Button Color</p>
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="customFile">
                                        <label class="form-file-label" for="customFile">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button btn-primary "><i data-feather="upload"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
<?php
include('../../layouts/footer.php');
?>