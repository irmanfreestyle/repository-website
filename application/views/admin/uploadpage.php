<input type="hidden" class="base_url" value="<?=base_url()?>">

<div class="box-body">
    <?php if($this->session->flashdata('alert') == 'success'): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Berhasil</h4>            
        </div>
    <?php elseif($this->session->flashdata('alert') == 'error'): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Gagal</h4>            
        </div>
    <?php endif; ?>
    <br>    
    <?php echo form_open_multipart('admin/uploadRepo');?>

        <div class="form-group">
            <label class="text-success" for="gambar-judul">Pilih Gambar File (opsional)</label>
            <input type="file" id="gambar-judul" name="gambar_file" onchange="uploadFile(this, '<?=base_url()?>', 'image')">          
            <input type="hidden" name="gambar_file" id="gambar_file">            
            <div class="img-place">
                <!-- IMAGE PLACE HERE AFTER UPLOAD -->
            </div>
            <div class="progress-image text-green">
                
            </div>
        </div>
        <div class="form-group">
            <label class="text-success">Pilih Kategori File</label>
            <select class="form-control" name="kategori">
                <option value="ebook">E-Book</option>
                <option value="jurnal">Penelitian</option>
            </select>
        </div>
        <div class="form-group">
            <label class="text-success" for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul">
        </div>
        <div class="form-group">
            <label class="text-success" for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" placeholder="Masukkan Pengarang" name="pengarang">
        </div>

        <div class="form-group">
            <label class="text-success" for="dosen-pembimbing">Dosen Pembimbing</label>
            <input type="text" class="form-control" id="dosen-pembimbing" placeholder="Masukkan Dosen Pembimbing" name="pembimbing">
        </div>
        <div class="form-group">
            <label class="text-success" for="kata-kunci">Kata Kunci</label>
            <input type="text" class="form-control" id="kata-kunci" placeholder="Masukkan Kata Kunci" name="kata_kunci">
        </div> 
        <div class="form-group">
            <label class="text-success" for="kata-kunci">Tahun</label>
            <input type="number" class="form-control" id="tahun" placeholder="Masukkan Tahun" name="tahun">
        </div>            
        <div class="form-group">
            <label class="text-success">Abstrak</label>
            <textarea class="form-control" rows="3" placeholder="Masukkan abstrak disini" name="abstrak"></textarea>
        </div>

        <div class="form-group" id="file-choose">
            <div class="row file-choose-child" style="border: 1px solid grey;margin:5px;">
                <div class="col-sm-12">
                    <small class="text-info">File 1</small>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group" enctype="multipart/form-data" >
                        <label class="text-success" for="file">Pilih File</label>
                        <input type="file" id="file" required name="file" onchange="uploadFile(this, '<?=base_url()?>', 'file')">
                        <small class="progress-file text-success"></small>
                    </div>    
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="form-group" enctype="multipart/form-data" >
                        <label class="text-success">Nama File</label> <br>
                        <input class="form-control" name="nama_file[]" type="text" required placeholder="contoh: Cover">
                        <input type="hidden" name="path[]" id="filename">
                    </div>    
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <button type="button" class="btn-xs btn bg-navy " onclick="addFile()">tambah file</button>            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success" id="upload-btn">Upload</button>            
        </div>
        
    </form>    
</div>
