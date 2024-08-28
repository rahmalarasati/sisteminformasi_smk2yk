<section class="content-header">  
        <h1>
          <?= $title ?>
        </h1>
        <br>
</section>
<div class="row"> 
    <div class="col-sm-12">
    <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $title ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="tambah"><i class="fa fa-plus"></i>Tambah</button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
          <th width="50px" class="text-center">No</th>
          <th>NIS</th>
          <th>NISN</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Kelas</th>
          <th>Email</th>
          <th>No. Bukti Pendaftaran</th>
          <th>Peminatan</th>
          <th>NIK</th>
          <th>Jenis Kelamin</th>
          <th>No. HP</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Agama</th>
          <th>Tinggi Badan</th>
          <th>Berat Badan</th>
          <th>Golongan Darah</th>
          <th>Hobi</th>
          <th>Cita-cita</th>
          <th>No. Registrasi Akta Kelahiran</th>
          <th>Upload Scan Akta Kelahiran</th>
          <th>Sekolah Asal</th>
          <th>Alamat Sekolah Asal</th>
          <th>Tahun Lulus SMP</th>
          <th>No. Seri Ijazah SMP</th>
          <th>Tinggal Dengan</th>
          <th>Jarak Rumah Ke Sekolah</th>
          <th>Transportasi Ke Sekolah</th>
          <th>Waktu Tempuh Ke Sekolah</th>
          <th>No. Kartu Keluarga</th>
          <th>Upload Scan Kartu Keluarga</th>
          <th>Anak Ke</th>
          <th>Julah Saudara Kandung</th>
          <th>Upload KPS/PKH</th>
          <th>Apakah Punya KIP</th>
          <th>Upload KIP</th>
          <th>Prestasi 3 Tahun Terakhir</th>
          <th width="150px" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($data_siswa as $key => $value) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $value['siswa_nis']?></td>
            <td><?= $value['siswa_nisn']?></td>
            <td><?= $value['siswa_nama']?></td>
            <td><?= $value['siswa_jurusan']?></td>
            <td><?= $value['siswa_kelas']?></td>
            <td><?= $value['siswa_email']?></td>
            <td><?= $value['siswa_no_bukti_pendaftaran']?></td>
            <td><?= $value['siswa_peminatan']?></td>
            <td><?= $value['siswa_nik']?></td>
            <td><?= $value['siswa_jenis_kel']?></td>
            <td><?= $value['siswa_no_hp']?></td>
            <td><?= $value['siswa_tempat_lahir']?></td>
            <td><?= $value['siswa_tgl_lahir']?></td>
            <td><?= $value['siswa_agama']?></td>
            <td><?= $value['siswa_Tbadan']?></td>
            <td><?= $value['siswa_Bbadan']?></td>
            <td><?= $value['siswa_goldarah']?></td>
            <td><?= $value['siswa_hobby']?></td>
            <td><?= $value['siswa_citacita']?></td>
            <td><?= $value['siswa_no_Reg_Akta_Lahir']?></td>
            <td><?= $value['siswa_scan_Akta_Lahir']?></td>
            <td><?= $value['siswa_sekolah_asal']?></td>
            <td><?= $value['siswa_alamat_Sekolah_Asal']?></td>
            <td><?= $value['siswa_tahun_lulus_SMP']?></td>
            <td><?= $value['siswa_no_Seri_Ijazah_SMP']?></td>
            <td><?= $value['siswa_tinggal_dengan']?></td>
            <td><?= $value['siswa_jarak_rumah_ke_sekolah']?></td>
            <td><?= $value['siswa_transportasi_ke_sekolah']?></td>
            <td><?= $value['siswa_waktu_tempuh_ke_sekolah']?></td>
            <td><?= $value['siswa_no_KK']?></td>
            <td><?= $value['siswa_upload_Scan_KK']?>             
            <img class="img-responsive pad" src="<?= base_url('gambar/scankk.jpg') ?>"width= "" alt="Photo"></td>
            <td><?= $value['siswa_anak_ke']?></td>
            <td><?= $value['siswa_jumlah_saudara_kandung']?></td>
            <td><?= $value['siswa_upload_KPS_PKH']?>
            <img class="img-responsive pad" src="<?= base_url('gambar/scankk.jpg') ?>"width= "" alt="Photo"></td>
            <td><?= $value['siswa_apakah_Punya_KIP']?></td>
            <td><?= $value['siswa_upload_KIP_Atau_KIPK']?>
            <img class="img-responsive pad" src="<?= base_url('gambar/scankk.jpg') ?>"width= "" alt="Photo"></td>
            <td><?= $value['siswa_prestasi_3Th_Terakhir']?></td>
            <td class="text-center">
              <button class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
  </div>
</div>

