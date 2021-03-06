<?php
$this->load->view('template_frontend/head');
$this->load->view('template_frontend/header');
?>

<div id="content">

<?php 
function rupiah($nilai, $pecahan = 0) {
    return number_format($nilai, $pecahan, ',', '.');
}
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
		$BulanIndo = array("Januari", "Februari", "Maret",
						   "April", "Mei", "Juni",
						   "Juli", "Agustus", "September",
						   "Oktober", "November", "Desember");
	
		$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
		$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
		$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
		
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
	}
?>
			<!-- Page Banner -->
			<div class="page-banner">
				<div class="container">
					<h2>Pelatihan</h2>
					<ul class="page-tree">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pelatihan</a></li>
						<li><a href="#"><?php echo $b->row('nama') ?></a></li>
					</ul>		
				</div>
			</div>
			<?php 
				if ($b->num_rows()==0) {
					redirect('home/index');
				}
				else
				{


			?>
			<!-- blog-box Banner -->
			<div class="single-project-page">
				<div class="container">
					<div class="row">
					<h2 align="center"><?php echo $b->row('nama')?></h2>
					<br>
					<?php
						$base = base_url('assets/images/pelatihan');
					 ?>
						<div class="col-md-7">
							<div class="single-project-content">
								<img alt="" src="<?php echo $base.'/'.$b->row('url') ?>" width="450" height="500">
							</div>
						</div>
	
					<div class="col-md-5 sidebar">
							<div class="sidebar-widgets">
			
								<div class="accordion-widget widget">
									
									<div class="accordion-box">

										<div class="accord-elem active">
											<div class="accord-title">
												<h5><i class="fa fa-question"></i>Lokasi</h5>
												<a class="accord-link" href="#"></a>
											</div>
											<div class="accord-content">
												<b><?php echo $b->row('lokasi') ?></b>
											</div>
										</div>
											<div class="accord-elem">
											<div class="accord-title">
												<h5><i class="fa fa-question"></i>Waktu</h5>
												<a class="accord-link" href="#"></a>
											</div>
											<div class="accord-content">
											<table class="table">
												<tr>
													<th>Mulai</th>
													<th>:</th>
													<td><?php echo DateToIndo($b->row('waktu_mulai'))?></td>
												</tr>
												<tr>
													<th>Selesai</th>
													<th>:</th>
													<td><?php echo DateToIndo($b->row('waktu_selesai'))?></td>
												</tr>
											</table>
												
											</div>
										</div>
										<div class="accord-elem">
											<div class="accord-title">
												<h5><i class="fa fa-question"></i>Staf Pengajar</h5>
												<a class="accord-link" href="#"></a>
											</div>
											<div class="accord-content">
											<table class="table">
												<?php 
													foreach ($staf->result() as $data) { ?>
													<tr>
														<td><b><?php echo $data->nama_lengkap ?></b></td>
														<td><?php echo $data->bidang ?></td>
													</tr>
												
												<?php
													}
												?>
											</table>
											</div>
										</div>
										<div class="accord-elem">
											<div class="accord-title">
												<h5><i class="fa fa-question"></i>Keterangan</h5>
												<a class="accord-link" href="#"></a>
											</div>
											<div class="accord-content">
												<b><?php echo $b->row('keterangan') ?></b>
											</div>
										</div>
									</div>
								</div>
								

							</div>
						</div>
					</div>

		
								<?php 
									}
								?>			
				</div>
			</div>

		</div>
<?php		
$this->load->view('template_frontend/footer');
$this->load->view('template_frontend/foot');
$this->load->view('template_frontend/js');
?>