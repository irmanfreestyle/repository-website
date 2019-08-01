<div class="container pt-5" style="min-height: 550px">    
    <div class="row">
        <div class="col sm-12 col-md-7" style="padding-bottom:20px">
            <div class="font-weight-bold text-success py-2">
                <?=$file->judul?>
            </div>
            <div class="d-flex">                
                <?php if(strlen($file->gambar_file)): ?>
                    <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" class="rounded float-left" width="150px" height="200px">
                <?php else: ?>
                    <img src="<?=base_url()?>assets/images/default/book.png" class="rounded float-left" width="150px" height="200px">
                <?php endif; ?>
                <div class="row px-2">
                    <div class="col-sm-12">
                        <button type="button" disabled class="btn btn-sm btn-outline-success font-weight-bold">
                            <i class="fas fa-map-pin"></i>
                            <?=$file->kategori?>
                        </button>
                    </div>                  

                    <div class="col-sm-5">
                        <span class="text-success font-weight-bold">PENGARANG :</span>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <?=$file->pengarang?>
                    </div>

                    <div class="col-sm-5">
                        <span class="text-success font-weight-bold">DOSEN PEMBIMBING :</span>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <?=$file->dosen_pembimbing?>
                    </div>

                    <div class="col-sm-5">
                        <span class="text-success font-weight-bold">KATA KUNCI :</span>
                    </div>
                    
                    <div class="col-sm-7 text-secondary">
                        <?=$file->kata_kunci?>
                    </div>
                    <div class="col-sm-5">
                        <span class="text-success font-weight-bold">TAHUN TERBIT :</span>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <?=$file->tahun_upload?>
                    </div>                    
                </div>
            </div>

            <div>
                <br><br>            
                <span class="font-weight-bold text-success">
                    Abstrak
                </span>
                <p class="text-secondary">
                    <?php echo strlen($file->abstrak)? $file->abstrak : '-'?>
                </p>
                <span class="font-weight-bold text-success">
                    Lampiran Berkas
                </span>
                <!-- <iframe src="<?=base_url()?>assets/files/<?=$file->nama_file?>" frameborder="0" height="600px" width="100%"></iframe> -->
                <?php foreach($data_files as $data_file) : ?>
                    <div style="border: 1px solid #ddd; padding: 10px;display:flex;justify-content:space-between;">                 
                        <a href="<?=base_url()?>assets/files/<?=$data_file->path?>" download >
                            <?=$data_file->nama_file?>
                        </a>
                        <div>
                            <i class="fa fa-file-pdf text-success large" style="font-size:20px;"></i>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            
        </div>
        <div class="col sm-12 col-md-5">
            <form  action="<?=base_url()?>home/search/" method="get">
                <div class="input-group mb-3">                
                    <input type="text" class="form-control" placeholder="Cari" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                            <i class="fas fa-search text-success"></i>
                        </button>
                    </div>
                </div>
            </form>
            
            <br>
            <span class="font-weight-bold text-success">
                <?php if($file->kategori != 'ebook'): ?>
                    Daftar Penelitian Terbaru
                <?php else: ?>
                    Daftar E-Book Terbaru
                <?php endif; ?>                
            </span>
            <?php if($file->kategori == 'ebook'): ?>
                <?php foreach($files as $new_file): ?>
                    <?php if($new_file->kategori == 'ebook'): ?>
                        <?php if($file->judul != $new_file->judul): ?>
                            <div class="my-3">
                                <a href="<?=base_url()?>detail?id_file=<?=$new_file->id_file?>">
                                    <p class="font-weight-bold mb-0 text-info">
                                        <?=$new_file->judul?> 
                                    </p>
                                    <small class="text-secondary">
                                        <?= date('d M Y', strtotime($new_file->tgl_upload)); ?>
                                    </small>
                                </a>
                            </div>
                        <?php endif;?>
                    <?php endif; ?>
                <?php endforeach;?>

                <?php else: ?>
                <?php foreach($files as $new_file): ?>
                    <?php if($new_file->kategori == 'jurnal' || $new_file->kategori == 'skripsi'): ?>
                        <?php if($file->judul != $new_file->judul): ?>
                            <div class="my-3">
                                <a href="<?=base_url()?>detail?id_file=<?=$new_file->id_file?>">
                                    <p class="font-weight-bold mb-0 text-info">
                                        <?=$new_file->judul?> 
                                    </p>
                                    <small class="text-secondary">
                                        <?= date('d M Y', strtotime($new_file->tgl_upload)); ?>
                                    </small>
                                </a>
                            </div>
                        <?php endif;?>
                    <?php endif; ?>
                <?php endforeach;?>

            <?php endif; ?>
        </div>
    </div>
</div>