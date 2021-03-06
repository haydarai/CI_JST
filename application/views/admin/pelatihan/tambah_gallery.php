<?php 
$this->load->view('template_admin/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template_admin/topbar');
$this->load->view('template_admin/sidebar');
?>

 <script src="<?php echo base_url('assets/admin/AdminLTE-2.0.5/plugins/jQuery/jquery-2.2.0.min.js') ?>"></script>
 <script>
    function Checkfiles()
    {
        var fup = document.getElementById('filename');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
        if(ext == "png" || ext == "jpg" || ext == "jpeg" || ext == "gif" || ext == "")
        {
            return true;
        } 
/*        else if(ext=="")
        {
            alert("No file selected");
            fup.focus();
            return false;
        }*/else
        {
            alert("Maaf file yang diperbolehkan adalah .png .jpeg .jpg!");
            fup.focus();
            return false;
        }
    }
 </script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Gallery Pelatihan
        <small>Form Tambah Gallery</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Staf</a></li>
        <li class="active">Tambah Gallery Pelatihan</li>
    </ol>
<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambahkan Pelatihan -> tambahkan staf pengajar -> Tambah Gallery untuk pelatihan <?php echo $data->row('nama_pelatihan') ?> </h3>
                 
                  
                </div><!-- /.box-header -->
                <!-- form start -->
               <form action="<?php echo site_url('admin/pelatihan/act_simpan_gallery') ?>" onsubmit="return Checkfiles();" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="box-body">
                     <input type="text" name="judul" required class="form-control" placeholder="Masukkan Judul Gallery">
                     <textarea class="form-control" required name="deskripsi" placeholder="Deskripsi Gallery"></textarea> 
                    <table class="table">
                      <tr>
                        <th>Upload</th>
                        <th>Judul</th>
                      </tr>
                     <input type="hidden" name="id_pelatihan" value="<?php echo $data->row('id_pelatihan'); ?>">
                      <tbody id="itemlist">
                       <tr>
                        <td><input type="file" name="gambar[0]" id="filename" required class="form-control" placeholder="Masukkan Judul Gambar"></td>
                        <td>
                          <input type="text" name="nama_foto[0]" required class="form-control" placeholder="Masukkan Nama Foto">
                        </td>
                      </tr>
                     </tbody>
                        <td>
                          <button onclick="additem(); return false" class="btn btn-sm btn-success" title="Edit"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
                          <button class="btn btn-sm btn-info" title="Edit"><i class="glyphicon glyphicon-plus"></i> Upload</button>
                         </td>
                      
                    </table>
                    </form>
                
               <script>
            var i = 1;
            function additem() {
//                menentukan target append
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var jenis = document.createElement('td');
                var jumlah = document.createElement('td');
                var deskripsi = document.createElement('td');
                var aksi = document.createElement('td');
 
//                meng append element
                itemlist.appendChild(row);
                row.appendChild(jenis);
                row.appendChild(jumlah);
                row.appendChild(aksi);
 
//                membuat element input
                var jenis_input = document.createElement('input');
                jenis_input.setAttribute('name', 'gambar[' + i + ']');
                jenis_input.setAttribute('class', 'form-control');
                jenis_input.setAttribute('type', 'file');
                jenis_input.setAttribute('id', 'filename');
 
                var jumlah_input = document.createElement('input');
                jumlah_input.setAttribute('name', 'nama_foto[' + i + ']');
                jumlah_input.setAttribute('class', 'form-control');
                jumlah_input.setAttribute('placeholder', 'Masukkan Judul Gambar');
          
 
                var hapus = document.createElement('span');
 
//                meng append element input
                jenis.appendChild(jenis_input);
                jumlah.appendChild(jumlah_input);

  
                aksi.appendChild(hapus);
 
                hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
 
                i++;
            }
        </script>    
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  
                  </div><!-- /.box-footer -->
                
              </div><!-- /.box -->
   

<?php 
$this->load->view('template_admin/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template_admin/foot');
?>