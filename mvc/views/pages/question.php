<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Question</h3>
            <div class="block-options">
                <a name="" id="" class="btn btn-primary ms-3" href="./question/add" role="button">Add new</a>
            </div>
        </div>
        <div class="block-content">
            <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                <div class="row mb-4 align-items-center">
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search"
                                name="one-ecom-orders-search" placeholder="Search all questions..">
                            <span class="input-group-text bg-body border-0">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="dropdown d-flex justify-content-end">
                            <button type="button" class="btn btn-alt-primary" id="dropdown-ecom-filters"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filters <i class="fa fa-angle-down ms-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters"
                                style="">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    Pending..
                                    <span class="badge bg-black-50 rounded-pill">35</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    Processing
                                    <span class="badge bg-warning rounded-pill">15</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    For Delivery
                                    <span class="badge bg-info rounded-pill">20</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    Canceled
                                    <span class="badge bg-danger rounded-pill">72</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    Delivered
                                    <span class="badge bg-success rounded-pill">890</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    All
                                    <span class="badge bg-primary rounded-pill">997</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>N???i dung c??u h???i</th>
                            <th class="d-none d-sm-table-cell">M??n h???c</th>
                            <th class="d-none d-xl-table-cell">????? kh??</th>
                            <th class="d-none d-xl-table-cell text-center">????p ??n</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center fs-sm">
                                <a class="fw-semibold" href="#">
                                    <strong>0001</strong>
                                </a>
                            </td>
                            <td>L???p tr??nh h?????ng ?????i t?????ng l?? g?? ?</td>
                            <td class="d-none d-xl-table-cell fs-sm">
                                <a class="fw-semibold" href="be_pages_ecom_customer.html">L???p tr??nh h?????ng ?????i t?????ng</a>
                            </td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                <strong>C?? b???n</strong>
                            </td>
                            <td class="d-none d-xl-table-cell text-center fs-sm">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">Show all <i
                                        class="fa fa-angle-down ms-1"></i></button>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" href="#"
                                    data-bs-toggle="tooltip" aria-label="View" data-bs-original-title="View">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" href="javascript:void(0)"
                                    data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="tbl-collapse">
                            <td colspan="6">
                                <div class="collapse" id="collapseExample">
                                    <div class="p-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="rounded p-2">L???p
                                                    tr??nh h?????ng ?????i t?????ng l?? ph????ng ph??p ?????t tr???ng t??m v??o c??c ?????i
                                                    t?????ng, n?? kh??ng cho ph??p d??? li???u chuy???n ?????ng m???t c??ch t??? do trong
                                                    h???
                                                    th???ng</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="rounded p-2">L???p
                                                    tr??nh h?????ng ?????i t?????ng l??
                                                    ph????ng ph??p l???p tr??nh c?? b???n g???n v???i m?? m??y</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="rounded p-2">L???p tr??nh h?????ng ?????i t?????ng l??
                                                    ph????ng ph??p m???i c???a l???p tr??nh m??y t??nh, chia ch????ng tr??nh th??nh c??c
                                                    h??m;
                                                    quan t??m ?????n ch???c n??ng c???a h??? th???ng.</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="rounded p-2">
                                                    L???p tr??nh h?????ng ?????i t?????ng l??
                                                    ph????ng ph??p ?????t tr???ng t??m v??o c??c ch???c n??ng, c???u tr??c ch????ng tr??nh
                                                    ???????c
                                                    x??y d???ng theo c??ch ti???p c???n h?????ng ch???c n??ng.
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fs-sm">
                                <a class="fw-semibold" href="#">
                                    <strong>0001</strong>
                                </a>
                            </td>
                            <td>OOP l?? vi???t t???t c???a:</td>
                            <td class="d-none d-xl-table-cell fs-sm">
                                <a class="fw-semibold" href="be_pages_ecom_customer.html">L???p tr??nh java</a>
                            </td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                <strong>C?? b???n</strong>
                            </td>
                            <td class="d-none d-xl-table-cell text-center fs-sm">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample1" aria-expanded="false"
                                    aria-controls="collapseExample1">Show all <i
                                        class="fa fa-angle-down ms-1"></i></button>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" href="#"
                                    data-bs-toggle="tooltip" aria-label="View" data-bs-original-title="View">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" href="javascript:void(0)"
                                    data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="tbl-collapse">
                            <td colspan="6">
                                <div class="collapse" id="collapseExample1">
                                    <div class="p-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="rounded p-1 m-0">A. Object Open Programming</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="rounded p-1 m-0">B. Open Object Programming</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="rounded p-1 m-0">C. Object Oriented Programming.</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="rounded p-1 m-0">
                                                D. Object Oriented Proccessing.
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <nav aria-label="Photos Search Navigation">
                <ul class="pagination pagination-sm justify-content-end mt-2">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                            Prev
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            Next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>