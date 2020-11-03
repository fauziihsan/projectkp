<!-- <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form id="RegisterValidation" action="" method="post">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">mail_outline</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Tambah Surat Masuk</h4>

                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Nama Surat
                                    <small>*</small>
                                </label>
                                <input class="form-control" id='nama_surat_masuk' name="nama_surat_masuk" type="text" required="true" />
                            </div>


                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Keterangan
                                    <small>*</small>
                                </label>
                                <input class="form-control" id='keterangan_surat_masuk' name="keterangan_surat_masuk" type="text" required="true" />
                            </div>



                            <div class="category form-category">
                                <small>*</small> Required fields</div>
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-rose btn-fill">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> -->



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">mail_outline</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Surat Masuk</h4>

                        <div class="form-group">
                            <label class="label-control">Nama Surat</label>
                            <input class="form-control" name="nama_surat" id="nama_surat" type="text" required="true" />
                        </div>

                        <div class="form-group">
                            <label class="label-control">Tanggal Surat</label>
                            <input type="text" class="form-control datepicker" name="tanggal_surat" id="tanggal_surat" value="10/10/2016" />
                        </div>

                        <div class="form-group">
                            <label class="label-control">Keterangan Surat</label>
                            <input class="form-control" name="keterangan_surat" id="keterangan_surat" type="text" required="true" />
                        </div>

                        <div class="form-group">
                            <label class="label-control">File Surat</label>



                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <!-- <img src="<?= base_url() ?>assets/save.png" alt="..."> -->
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="file_surat" id="file_surat" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>

                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>