<div class="content">
    <div class="row">
        <div class="col-6 flex-grow-1">
            <div class="input-group">
                <span class="input-group-text bg-white"><i class="si si-magnifier"></i></span>
                <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1" placeholder="Lọc theo tên học sinh">
            </div>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-file me-1"></i>Xuất danh sách HS</button>
            <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-file me-1"></i>Xuất bảng điểm</button>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-block-vcenter"><i class="fa fa-fw fa-plus me-1"></i>Thêm học sinh</button>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">LỚP 1 (2023-2024)</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <code>(Sĩ số 2)</code>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-bordered table-vcenter">
                        <thead>

                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center" style="width: 100px;">
                                    <i class="far fa-user"></i>
                                </th>
                                <th>Họ tên</th>
                                <th style="width: 30%;">Email</th>
                                <th style="width: 15%;">Trạng thái</th>
                                <th class="text-center" style="width: 150px;">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">
                                    <img class="img-avatar img-avatar48" src="./public/media/avatars/avatar0.jpg" alt="">
                                </td>
                                <td class="fw-semibold fs-sm">
                                    <a href="be_pages_generic_profile.html">Susan Day</a>
                                </td>
                                <td class="fs-sm">client1<em class="text-muted">@example.com</em></td>
                                <td>
                                    <div class="form-check form-switch d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">
                                    <img class="img-avatar img-avatar48" src="./public/media/avatars/avatar0.jpg" alt="">
                                </td>
                                <td class="fw-semibold fs-sm">
                                    <a href="be_pages_generic_profile.html">Megan Fuller</a>
                                </td>
                                <td class="fs-sm">client2<em class="text-muted">@example.com</em></td>
                                <td>
                                    <div class="form-check form-switch d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="modal-block-vcenter" tabindex="-1" role="dialog" aria-labelledby="modal-block-vcenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-content">
                    <section id="tabs" class="project-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Thêm học sinh</button>
                                <button class="nav-link " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Thêm nhanh bằng file excel</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Thêm học sinh</div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Thêm học sinh bằng excel</div>
                        </div>
                    </section>
                    <!-- Tabs content -->
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-sm btn-primary" id="add_class">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</div>