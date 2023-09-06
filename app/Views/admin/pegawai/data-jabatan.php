<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/sidebar-admin'); ?>
<?= session()->getFlashdata('pesan'); ?>
<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header starts -->
    <div class="page-header">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                <!-- Search container start -->
                <div class="search-container">

                    <!-- Toggle sidebar start -->
                    <div class="toggle-sidebar" id="toggle-sidebar">
                        <i class="icon-menu"></i>
                    </div>
                    <!-- Toggle sidebar end -->

                    <!-- Mega Menu Start -->
                    <div class="cd-dropdown-wrapper" style="opacity: 0;">
                    </div>
                    <!-- Mega Menu End -->

                    <!-- Search input group start -->
                    <div class="ui fluid category search" style="opacity: 0;">
                    </div>
                    <!-- Search input group end -->

                </div>
                <!-- Search container end -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

                <!-- Header actions start -->
                <ul class="header-actions">
                    <li class="dropdown">
                    </li>
                    <li class="dropdown">
                    </li>
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="avatar">
                                <img src="<?= base_url(); ?>/assets/img/pegawai/<?= $admin->gambar; ?>" alt="User Avatar">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <a href="<?= base_url('admin/profile'); ?>"><i class="icon-user1"></i>Profile</a>
                                <a href="<?= base_url('auth/logout'); ?>"><i class="icon-log-out1"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Header actions end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Page header ends -->

    <!-- Content wrapper scroll start -->
    <div class="content-wrapper-scroll">
        <!-- Content wrapper start -->
        <div class="content-wrapper">
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <a href="<?= base_url('admin/tambah_jabatan'); ?>" class="btn btn-primary">Tambah Jabatan</a>
                            </div>
                            <div class="table-responsive mt-3">
                                <table id="datatable" class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Jabatan</th>
                                            <th>ID Jabatan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($jabatan != null) : ?>
                                            <?php
                                            $no = 1;
                                            foreach ($jabatan as $j) : ?>
                                                <tr>
                                                    <td><?= $j->nama_jabatan; ?></td>
                                                    <td><?= $j->id_jabatan; ?></td>
                                                    <td>
                                                        <div class="actions">
                                                            <a href="javascript:void(0);" class="btn-edit" data-bs-toggle="modal" data-bs-target="#editModal" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" data-id_jabatan="<?= $j->id_jabatan; ?>" data-nama_jabatan="<?= $j->nama_jabatan; ?>">
                                                                <i class="icon-edit1 text-info"></i>
                                                            </a>

                                                            <a href="<?= base_url('admin/hapus_jabatan'); ?>/<?= $j->id_jabatan; ?>" class="btn-hapus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                                <i class="icon-x-circle text-danger"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

        <!-- App Footer start -->
        <div class="app-footer">© Presensi Pegawai By Keyrie Eleison</div>
        <!-- App footer end -->

    </div>
    <!-- Content wrapper scroll end -->

</div>
<!-- *************
				************ Main container end *************
			************* -->

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/edit_jabatan'); ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 95%;">
                    <div class="modal-body" style="overflow: hidden; width: auto; height: 95%;">
                        <!-- Field wrapper start -->
                        <div class="field-wrapper">
                            <input class="form-control" type="hidden" name="id_jabatan" required>
                            <input class="form-control" type="text" name="nama_jabatan" required>
                            <div class="field-placeholder">Name Jabatan <span class="text-danger">*</span></div>
                        </div>
                        <!-- Field wrapper end -->
                    </div>
                    <div class="slimScrollBar" style="background: rgb(214, 219, 230); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 0px; z-index: 99; right: 1px; height: 55.798px;"></div>
                    <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(214, 219, 230); opacity: 0.2; z-index: 90; right: 1px;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(".btn-edit").click(function() {
        $("input[name=id_jabatan]").val($(this).data("id_jabatan")), $("input[name=nama_jabatan]").val($(this).data("nama_jabatan"))
    });
    var table = $("#datatable").DataTable({
            ordering: !0,
            lengthMenu: [
                [-1, 5, 10, 25, 50],
                ["All", 5, 10, 25, 50]
            ]
        }),
        ordering = table.order();
</script>
<?= $this->endSection(); ?>