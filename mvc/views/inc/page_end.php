</main>
<!-- END Main Container -->
<!-- Footer -->
<footer id="page-footer" class="bg-body-light">
    <div class="content py-3">
        <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                    href="./" target="_blank">SGU</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">OnTestVN</a> &copy;
                <span data-toggle="year-copy"></span>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->
</div>
<!-- END Page Container -->
<script src="./public/js/oneui.app.min.js"></script>

<!-- jQuery (required for BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
<?php
if(isset($data["Plugin"]["datepicker"]) && $data["Plugin"]["datepicker"] == 1) {
    echo '<script src="./public/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>';
}
if(isset($data["Plugin"]["flatpickr"]) && $data["Plugin"]["flatpickr"] == 1) {
    echo '<script src="./public/js/plugins/flatpickr/flatpickr.min.js"></script>';
}
if(isset($data["Plugin"]["select"]) && $data["Plugin"]["select"] == 1) {
    echo '<script src="./public/js/plugins/select2/js/select2.full.min.js"></script>';
}
if(isset($data["Plugin"]["ckeditor"]) && $data["Plugin"]["ckeditor"] == 1) {
    echo '<script src="./public/js/plugins/ckeditor/ckeditor.js"></script>';
}
if(isset($data["Plugin"]["notify"]) && $data["Plugin"]["notify"] == 1) {
    echo '<script src="./public/js/plugins/bootstrap-notify/bootstrap-notify.js"></script>';
}
if(isset($data["Plugin"]["chart"]) && $data["Plugin"]["chart"] == 1) {
    echo '<script src="./public/js/plugins/chart.js/chart.min.js"></script>';
}
if(isset($data["Script"])) {
    echo '<script src="./public/js/pages/'.$data["Script"].'.js"></script>';
}
?>
</body>
</html>