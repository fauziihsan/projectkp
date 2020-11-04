<div class="content">
    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">&#xE894;</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Global Sales by Top Locations</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/US.png">
                                                    </div>
                                                </td>
                                                <td>USA</td>
                                                <td class="text-right">
                                                    2.920
                                                </td>
                                                <td class="text-right">
                                                    53.23%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/DE.png">
                                                    </div>
                                                </td>
                                                <td>Germany</td>
                                                <td class="text-right">
                                                    1.300
                                                </td>
                                                <td class="text-right">
                                                    20.43%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/AU.png">
                                                    </div>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right">
                                                    760
                                                </td>
                                                <td class="text-right">
                                                    10.35%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/GB.png">
                                                    </div>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right">
                                                    690
                                                </td>
                                                <td class="text-right">
                                                    7.87%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/RO.png">
                                                    </div>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right">
                                                    600
                                                </td>
                                                <td class="text-right">
                                                    5.94%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/BR.png">
                                                    </div>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right">
                                                    550
                                                </td>
                                                <td class="text-right">
                                                    4.34%
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <div id="worldMap" class="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="green" data-header-animation="true">
                        <div class="ct-chart" id="websiteViewsChart"></div>
                        <!-- <canvas id="myChart" width="400" height="300"></canvas> -->
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Surat Masuk</h4>
                        <div class="card-actions">
                            <!-- <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button> -->
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <!-- <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button> -->
                        </div>
                        <!-- <h4 class="card-title">Website Views</h4> -->
                        <p class="category">Surat Masuk Setahun Terakhir</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terakhir tanggal 04/11/2020
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="green" data-header-animation="true">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <!-- <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button> -->
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <!-- <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button> -->
                        </div>
                        <h4 class="card-title">Surat Keluar</h4>
                        <p class="category">
                            <span class="text-success"></span> Surat Keluar Setahun Terakhir</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terakhir tanggal 04/11/2020
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="blue" data-header-animation="true">
                        <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <!-- <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button> -->
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <!-- <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button> -->
                        </div>
                        <h4 class="card-title">Surat Keluar</h4>
                        <p class="category">Surat Keterangan Setahun Terakhir</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terakhir tanggal 04/11/2020
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">mark_email_read</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Surat Masuk</p>
                        <h3 class="card-title"><?= $this->db->get('surat_masuk')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-primary">info</i>
                            <a href="#">Jumlah Surat Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="material-icons">mark_email_unread</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Surat Keluar</p>
                        <h3 class="card-title"><?= $this->db->get('surat_keluar')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah Surat Keluar
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">mail</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Surat Keterangan</p>
                        <h3 class="card-title"><?= $this->db->get('surat_keterangan')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah Surat Keterangan
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">User</p>
                        <h3 class="card-title"><?= $this->db->get('user')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah User
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>