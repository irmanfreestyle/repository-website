<div class="box-body">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#ebook_tab" data-toggle="tab">E-Book</a></li>
            <li><a href="#jurnal_tab" data-toggle="tab">Penelitian</a></li>
     
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="ebook_tab">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Dosen Pembimbing</th>
                            <th>Kata Kunci</th>
                            <th>File</th>     
                            <th>Tahun</th>   
                            <th>Tanggal Upload</th>      
                            <th>Aksi</th>               
                        </tr>
                        <?php $no=1; foreach($files as $file): ?>
                            <?php if($file->kategori == 'ebook'):?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td>
                                        <?php if(strlen($file->gambar_file)): ?>
                                            <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" width="80">
                                            <?php else: ?>
                                            <img src="<?=base_url()?>assets/images/default/book.png" class="rounded float-left" width="80" height="90">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo strlen($file->judul)? $file->judul : '-'?></td>
                                    <td><?php echo strlen($file->pengarang)? $file->pengarang : '-'?></td>
                                    <td><?php echo strlen($file->dosen_pembimbing)? $file->dosen_pembimbing : '-'?></td> 
                                    <td><?php echo strlen($file->kata_kunci)? $file->kata_kunci : '-'?></td>
                                    <td>
                                        <a href="<?=base_url()?>detail?id_file=<?=$file->id_file?>">Lihat</a>
                                    </td>
                                    <td><?php echo strlen($file->tahun_upload)? $file->tahun_upload : '-'?></td>
                                    <td>
                                        <?= date('d M Y', strtotime($file->tgl_upload)); ?>
                                    </td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-info btn-sm">
                                            Edit
                                        </button> -->
                                        <a href="admin/deletefile?id_file=<?=$file->id_file?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="jurnal_tab">
            <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>  
                            <th>Pengarang</th>
                            <th>Dosen Pembimbing</th>
                            <th>Kata Kunci</th>
                            <th>Tahun</th>
                            <th>File</th>       
                            <th>Tanggal Upload</th>      
                            <th>Aksi</th>               
                        </tr>
                        <?php $no=1; foreach($files as $file): ?>
                            <?php if($file->kategori == 'jurnal'):?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td>
                                        <?php if(strlen($file->gambar_file)): ?>
                                            <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" width="80">
                                            <?php else: ?>
                                            <img src="<?=base_url()?>assets/images/default/book.png" class="rounded float-left" width="80" height="90">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo strlen($file->judul)? $file->judul : '-'?></td>
                                    <td><?php echo strlen($file->pengarang)? $file->pengarang : '-'?></td>
                                    <td><?php echo strlen($file->dosen_pembimbing)? $file->dosen_pembimbing : '-'?></td> 
                                    <td><?php echo strlen($file->kata_kunci)? $file->kata_kunci : '-'?></td>
                                    <td><?php echo strlen($file->tahun_upload)? $file->tahun_upload : '-'?></td>
                                    <td>
                                        <a href="<?=base_url()?>detail?id_file=<?=$file->id_file?>">Lihat</a>
                                    </td>
                                    <td>
                                        <?= date('d M Y', strtotime($file->tgl_upload)); ?>
                                    </td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-info btn-sm">
                                            Edit
                                        </button> -->
                                        <a href="admin/deletefile?id_file=<?=$file->id_file?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="skripsi_tab">
            <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Dosen Pembimbing</th>
                            <th>Kata Kunci</th>
                            <th>File</th>       
                            <th>Tanggal Upload</th>      
                            <th>Aksi</th>               
                        </tr>
                        <?php $no=1; foreach($files as $file): ?>
                            <?php if($file->kategori == 'skripsi'):?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td>
                                        <?php if(strlen($file->gambar_file)): ?>
                                            <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" width="80">
                                            <?php else: ?>
                                            <img src="<?=base_url()?>assets/images/default/book.png" class="rounded float-left" width="80" height="90">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo strlen($file->judul)? $file->judul : '-'?></td>
                                    <td><?php echo strlen($file->pengarang)? $file->pengarang : '-'?></td>
                                    <td><?php echo strlen($file->dosen_pembimbing)? $file->dosen_pembimbing : '-'?></td> 
                                    <td><?php echo strlen($file->kata_kunci)? $file->kata_kunci : '-'?></td>
                                    <td>
                                        <a href="<?=base_url()?>assets/files/<?=$file->nama_file?>" download>Download File</a>
                                    </td>
                                    <td>
                                        <?= date('d M Y', strtotime($file->tgl_upload)); ?>
                                    </td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-info btn-sm">
                                            Edit
                                        </button> -->
                                        <a href="admin/deletefile?id_file=<?=$file->id_file?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
</div>