<div class="content">
    <!-- Your Block -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Tạo đề kiểm tra</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
                        <div class="mb-4">
                            <label class="form-label" for="one-ecom-product-id">TÊN ĐỀ KIỂM TRA</label>
                            <input type="text" class="form-control" id="one-ecom-product-id" name="one-ecom-product-id"
                                value="Đề kiểm tra giữa kì lần 1">
                        </div>
                        <div class="row mb-4">
                            <label class="form-label" for="example-flatpickr-datetime-24">Thời gian bắt
                                đầu</label>
                            <div class="col-xl-6">
                                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-datetime-24"
                                    name="example-flatpickr-datetime-24" data-enable-time="true" data-time_24hr="true"
                                    placeholder="Từ">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-datetime-24"
                                    name="example-flatpickr-datetime-24" data-enable-time="true" data-time_24hr="true"
                                    placeholder="Đến">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text">Thời gian làm bài</span>
                                <input type="text" class="form-control text-center" id="example-group1-input3"
                                    name="example-group1-input3" placeholder="00">
                                <span class="input-group-text">phút</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Số câu cơ bản</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Số câu trung bình</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Số câu nâng cao</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Số câu khó</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="block block-rounded border">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Giao cho</h3>
                                    <div class="block-options">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="example-radios-inline1"
                                                name="example-radios-inline" value="option1" checked="">
                                            <label class="form-check-label" for="example-radios-inline1">Nhóm</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="example-radios-inline2"
                                                name="example-radios-inline" value="option2">
                                            <label class="form-check-label" for="example-radios-inline2">Lớp</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content pb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="example-checkbox-default1" name="example-checkbox-default1"
                                                    checked="">
                                                <label class="form-check-label" for="example-checkbox-default1">Option
                                                    1</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="example-checkbox-default1" name="example-checkbox-default1">
                                                <label class="form-check-label" for="example-checkbox-default1">Option
                                                    1</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="example-checkbox-default1" name="example-checkbox-default1">
                                                <label class="form-check-label" for="example-checkbox-default1">Option
                                                    1</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="example-checkbox-default1" name="example-checkbox-default1">
                                                <label class="form-check-label" for="example-checkbox-default1">Option
                                                    1</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="example-checkbox-default1" name="example-checkbox-default1">
                                                <label class="form-check-label" for="example-checkbox-default1">Option
                                                    1</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="example-checkbox-default1" name="example-checkbox-default1">
                                                <label class="form-check-label" for="example-checkbox-default1">Option
                                                    1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Cho xem kết quả</label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="one-ecom-product-condition-new"
                                        name="one-ecom-product-condition" value="new" checked>
                                    <label class="form-check-label" for="one-ecom-product-condition-new">Có</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="one-ecom-product-condition-old"
                                        name="one-ecom-product-condition" value="old">
                                    <label class="form-check-label" for="one-ecom-product-condition-old">Không</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Published?</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" id="one-ecom-product-published"
                                    name="one-ecom-product-published" checked>
                                <label class="form-check-label" for="one-ecom-product-published"></label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary"><i class="fa fa-fw fa-plus me-1"></i> Tạo đề</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Your Block -->
</div>