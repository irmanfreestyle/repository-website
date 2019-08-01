let base_url = '';
$(document).ready(function() {
    base_url = $('.base_url').val();
    setTimeout(function() {
        $("input[data-layout=fixed]").prop('checked', true)
        $(".sidebar-mini").addClass('fixed')
    }, 500)
})

function uploadFile(e, baseUrl, type, index) {    
    let parent = $(e).parent().parent().parent();    
    

    switch(type) {
        case 'image':                        
            let image = new FormData();
            image.append('image', e.files[0])    
            
            $(e).parent().find('.progress-file').text('Mengupload...')
            
        
            $.ajax({
                url: baseUrl+'admin/uploadFile?type=image',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: image,
                type: 'post',
                success: function(res) { 
                    res = JSON.parse(res)
                    if(res.status == 'success') {
                        $(e).parent().find('.progress-file').text('Selesai mengupload')
                        $("#gambar_file").val(res.filename)
                        $(".img-place").html(`
                            <img style="margin: 10px 0" src="${baseUrl}assets/images/upload/${res.filename}" width="200px">
                        `)
                    } else {
                        $(e).parent().find('.progress-file').text('Terjadi error')
                        console.log(res)
                        alert('Terjadi Kesalahan '+res.error)
                    }       
                }
            })
        break;

        case 'file':
            let file = new FormData();
            file.append('file', e.files[0])    

            $(e).parent().find('.progress-file').text('Mengupload...')
    
            $.ajax({
                url: baseUrl+'admin/uploadFile?type=file',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: file,
                type: 'post',
                success: function(res) {        
                    console.log(res)    
                    res = JSON.parse(res)
                    
                    if(res.status == 'success') {
                        $(parent).find('#filename').val(res.filename)
                        $(e).parent().find('.progress-file').text('Selesai mengupload')    
                    } else {
                        $(".progress-file").text('Terjadi error '+res.error)
                    } 
                }
            })
        break;
    }    
}

$(document).on('DOMNodeInserted', function() {
    $(".delete-file-btn").click(function(e) {
        $(this).parent().parent().parent().remove()
        let i = 2;
        $(".index-file").each(function(e, el) {
            $(el).text('File '+ i++)
        })
    })
})

function addFile() {        

    let childLength = $("#file-choose").children().length    
    
    $("#file-choose").append(`
        <div class="row" style="border: 1px solid grey;margin:5px;">
            <div class="col-sm-12">
                <small class="text-info index-file">File ${childLength+1}</small>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group" enctype="multipart/form-data" >
                    <label class="text-success" for="file">Pilih File</label>
                    <input type="file" id="file" required name="file" onchange="uploadFile(this, '${base_url}', 'file')">
                    <small class="progress-file text-success"></small>
                    <button type="button" class="btn-xs btn bg-red delete-file-btn">hapus</button>  
                </div>    
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="form-group" enctype="multipart/form-data" >
                    <label class="text-success">Nama File</label> <br>
                    <input class="form-control" type="text" name="nama_file[]" required placeholder="contoh: Cover">                    
                    <input type="hidden" name="path[]" id="filename">
                </div>                  
            </div>
        </div>
    `)
}