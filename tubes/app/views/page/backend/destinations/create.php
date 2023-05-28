<div class="content-wrapper">
    <section class="content-header bg-white p-2 mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <span class="h4">Destinasi</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>/destination">Daftar</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row d-flext justify-content-center">
                <div class="col-11">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Destinasi</h3>
                        </div>
                        <form action="<?= BASE_URL ?>/destination/store" method="post" class="form-horizontal" data-form="validate" enctype="multipart/form-data">
                            <input type="hidden" name="submit">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="iName" class="col-form-label col-sm-3 text-lg-right text-left">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="iName" placeholder="Nama" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iCategory" class="col-form-label col-sm-3 text-lg-right text-left">Kategori</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="iCategory" placeholder="Nama" name="category_id" required>
                                            <option value="">Pilih kategori</option>
                                            <?php foreach($data['categories'] as $category): ?>
                                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iImage" class="col-form-label col-sm-3 text-lg-right text-left">Gambar</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" id="iImage" placeholder="Gambar" name="image" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iDescription" class="col-form-label col-sm-3 text-lg-right text-left">Deskripsi</label>
                                    <input id="iDescription" name="description" style="opacity: 0; width: 0; float: left;">
                                    <div class="col-sm-6">
                                        <trix-editor input="iDescription" placeholder="Masukkan deskripsi"></trix-editor>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="iImage" class="col-form-label col-sm-3 text-lg-right text-left">Lokasi</label>
                                    <div class="col-sm-6">
                                    <div class="form-control" id="mapid"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-lg-right text-left"></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="latitude" placeholder="Latitude" name="latitude" readonly value="-2.4833826">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="longitude" placeholder="Longitude" name="longitude" readonly value="117.8902853">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary mr-2"><i class="fa fa-save mr-1"></i> Simpan</button>
                                    <a href="<?= BASE_URL ?>/destination" class="btn btn-default">Batal</a>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>