<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url('index.php/C_dashboard'); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SI</b>SMP</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->

            <!-- Tasks: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/image/guru1.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Yuniar</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="image/guru1.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body pdg">
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">KBM</li>
          <li class="treeview">
            <a href="<?php echo base_url(); ?> ('index.php/nilaisiswa.php')">
              <i class="fa fa-dashboard"></i> <span>Kesiswaan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Penerimaan Peserta Didik Baru </a>
               <ul class="treeview-menu">
                <li ><a href="ppdbujian.php"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
                <li ><a href="ppdbneg.php"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
              </ul>
            </li>
            <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Daftar Ulang </a> 
             <ul class="treeview-menu">
              <li ><a href="daftarulang.php"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
              <li ><a href="daftarkenaikan.php"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
            </ul>
          </li>

          <li ><a href="distribusi.php"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
            <ul class="treeview-menu">
              <li ><a href="distribusi.php"><i class="fa fa-circle-o text-red"></i> Kelas Reguler </a></li>
              <li ><a href="distribusi2.php"><i class="fa fa-circle-o text-red"></i> Kelas Tambahan </a></li>
            </ul>
            <li ><a href="mutasi.php"><i class="fa fa-circle-o"></i> Mutasi </a>
              <ul class="treeview-menu">
                <li ><a href="masuk.php"><i class="fa fa-circle-o text-red"></i> Mutasi Masuk</a></li>
                <li ><a href="keluar.php"><i class="fa fa-circle-o text-red"></i> Mutasi Keluar</a></li>
              </ul>
            </li>
          </li>

        </ul>
      </li>


      <li class="treeview active">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Kurikulum</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="kaldik.php"><i class="fa fa-circle-o text-red "></i> <span>Kaldik</span></a></li>
          <li><a href="kurikulum.php"><i class="fa fa-circle-o text-red"></i> <span>Kurikulum</span></a></li>
          <li><a href="presensisiswa.php"><i class="fa fa-circle-o text-red"></i> <span>Presensi Siswa</span></a></li>
          <li><a href="jammengajar.php"><i class="fa fa-circle-o text-red"></i> <span>Pembagian Jam Mengajar Guru</span></a></li>
          <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Penjadwalan</a>
            <ul class="treeview-menu">
              <li><a href="mapel.php"><i class="fa fa-circle-o"></i> Manajemen Mata Pelajaran</a></li>
              <li ><a href="harirentang.php"><i class="fa fa-circle-o text-red"></i> Manajemen Hari & Jam</a></li>
              <li ><a href="jadwalmapel.php"><i class="fa fa-circle-o text-red"></i> Jadwal Mapel</a></li>
              <li><a href="jadwalpiketguru.php"><i class="fa fa-circle-o text-red"></i> Jadwal Piket Guru</a></li>
              <li><a href="jadwaltambahan.php"><i class="fa fa-circle-o text-red"></i> Jadwal Tambahan</a></li>
            </ul>
          </li>

          <li class="active"><a href="#"><i class="fa fa-circle-o "></i> Penilaian</a>
           <ul class="treeview-menu active">
            <li class="active"><a href="<?php echo base_url('index.php/penilaian') ?>"><i class="fa fa-circle-o text-red"></i> Nilai Siswa</a></li>
            <li ><a href="<?php echo base_url('index.php/Penilaian/Kategorinilai') ?>"><i class="fa fa-circle-o text-red"></i> Kategori Nilai</a></li>
            <li><a href="<?php echo base_url('index.php/penilaian/jenisNA') ?>"><i class="fa fa-circle-o text-red"></i> Jenis Nilai Akhir</a></li>
            <li ><a href="<?php echo base_url('index.php/penilaian/deskripsinilai') ?>"><i class="fa fa-circle-o text-red"></i> Deskripsi Nilai</a></li>
            <li ><a href="<?php echo base_url('index.php/penilaian/rapor') ?>"><i class="fa fa-circle-o text-red"></i> Rapor</a></li>
          </ul>
        </li>

      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Kepegawaian</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li ><a href="Datapegawai.php"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
        <li ><a href="presensipegawai.php"><i class="fa fa-circle-o"></i> Presensi Pegawai</a></li>
        <li><a href="jadwalmengajar.php"><i class="fa fa-circle-o"></i>Jadwal Mengajar</a></li>

      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Non akademik</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>\
      </a>
      <ul class="treeview-menu">
        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">
            <li><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
            <li><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
            <li><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
            <li><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
            <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
          </ul>
        </li>

        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
          <ul class="treeview-menu">
            <li ><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
            <li><a href="absensi_harian.php"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
            <li><a href="pelanggaran.php"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
            <li><a href="prestasi.php"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
          </ul>
        </li>
      </li>  
    </ul>

  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <center style="color:navy;">Nilai Siswa SMP Yogyakarta <br></center>
      <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard.php">Dashboard</a></li>
    </ol>
  </section>

  <!-- =========================================================================================== -->
  <!-- =========================================================================================== -->
  <!-- =========================================================================================== -->
  <!-- =========================================================================================== -->
  <!-- =========================================================================================== -->
  <!-- =========================================================================================== -->
  <!-- =========================================================================================== -->
  <!-- =========================================================================================== -->


  
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <!-- /.col -->
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#daftar" data-toggle="tab">Daftar Nilai</a></li>
            <li class=""><a href="#presensisiswa" data-toggle="tab">Tambah Nilai</a></li>
            <li><a href="#leger" data-toggle="tab">LEGER</a></li>
          </ul>
          <div class="tab-content">
            <div class=" tab-pane" id="presensisiswa">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="<?php echo base_url('penilaian/tambah_nilai'); ?>">
                    <select>
                      <?php
                      foreach ($kelas_reguler_berjalan as $d){
                        ?>
                        <option value="" name=""><?php echo $d->nama_kelas;?></option>
                        <?php
                      }?>
                    </select>
                    <button onclick="tambahNilai()">Tambah Nilai</button>
                    <script type="text/javascript">
                      function tambahNilai() {
                        var head = '<th style="position: relative">'+
                        'NILAI <br>'+
                        '<select>' 
                        <?php foreach ($kategori_nilai as $w ) {

                         ?>+
                         '<option>'<?php echo "$w->kategori_nilai" ?>'</option>'+
                         <?php
                       }
                       ?> +
                       '<select>' +
                       '<option>Pengetahuan</option>' +
                       '<option>Ketrampilan</option>' +
                       '</select>' +
                       '<button onclick="Wclose()" style="position: absolute; right: 0; top: 0;">x</button>'+
                       '</th>';
                       var body = '<th>'+
                       '<input type="text" style="width: 100%" />'+
                       '</th>';
                       $('#head').append(head);
                       $('#body').append(body);
                     }
                     function Wclose(){
                      $('#head').hide();
                      $('#body').hide();
                    }
                  </script>
                <!-- <form class="posisikanan">
                  <select>
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                  </select>
                </form>
              --><br/><br/>
              <div style="overflow: auto">
                <table class="table table-bordered table-striped nilaisiswa" style="width: 100%">
                  <thead>
                    <tr class="barishari" id="head">
                      <th class="fit">No</th>
                      <th class="fit">Nama Siswa</th>
                      <th class="fit">
                        NILAI <br>
                        <select name="katnilai">
                          <?php foreach ($kategori_nilai as $w ) {

                           ?>
                           <option value="<?php echo $w->id_kategorinilai;?>"><?php echo $w->kategori_nilai;?></option>
                           <?php
                         }
                         ?>
                       </select>
                       <select name="jenis_na">
                        <?php
                        foreach ($jenis_nilai_akhir as $d){
                          ?>
                          <option value="<?php echo $d->id_jenis_na;?>"><?php echo $d->Jenis_na;?></option>
                          <?php
                        }?>
                      </select>
                      <select name="mapel">
                        <?php foreach ($mapel as $m ) {

                         ?>
                         <option value="<?php echo $m->id_mapel;?>"><?php echo $m->nama_mapel;?></option>
                         <?php
                       }
                       ?>
                     </select>
                   </th>

                 </tr>
               </thead>
               <tbody>
                <?php
                $no=0;
                foreach ($siswa as $c ) {
                          # code...
                  $no=$no+1;
                  ?>
                  <tr id="body">
                    <th class="fit"><?php echo $no; ?></th>
                    <th><?php echo $c->nama; ?>
                      <input type="text" class="hidden" name="nisn[]" value="<?php echo $c->nisn; ?>">
                    </th> 
                    <th>
                      <input type="text" name="nilai[]" style="width: 100%" >
                    </th>
                  </tr>
                  <?php }
                  ?>
                </tbody>
              </table>
            </div>
            <button class="btnjdwl" type="Submit">Submit</button>
          </form>
        </div>
        <!-- /.box-body -->
      </div>

    </div>
    <!-- /.tab-pane -->

    <div class="active tab-pane" id="daftar">
     <select>
      <?php
      foreach ($kelas_reguler_berjalan as $d){
        ?>
        <option value=""><?php echo $d->nama_kelas;?></option>
        <?php
      }?>
    </select>
    <form class="">
      <select>
        <?php
        foreach ($mapel as $x){
          ?>
          <option value=""><?php echo $x->nama_mapel;?></option>
          <?php
        }?></select>
      </form>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Daftar Nilai Siswa</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="fit">No</th>
                <th>Nama</th>
                <th>Kategori Nilai</th>
                <th>Jenis Nilai</th>
                <th>Mata Pelajaran</th>
                <th>Nilai Siswa</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $no=0;
              foreach($nilai_siswa as $f){
                $no=$no+1;
                echo "<tr>";
                echo "<td>$no</td>"; 
                echo "<td>{$f->nama}</td>";
                echo "<td>{$f->kategori_nilai}</td>";
                echo "<td>{$f->Jenis_na}</td>";
                echo "<td>{$f->nama_mapel}</td>";
                echo "<td>{$f->Nilai_siswa}</td>";
                echo "<td>";
                ?>
                <a data-toggle="modal" data-show="true" data-target="#nilai<?php echo $no; ?>" class="btn btn-block btn-primary button-action btnedit" href="<?php echo base_url("penilaian/form_edit_deskripsi/".$f->id_nilai_siswa); ?>" >Edit</a>
                <a type="button" style="background: red ; border: red;" class="btn btn-block btn-primary button-action btnhapus " href="<?php echo base_url("penilaian/hapus_nilai/".$f->id_nilai_siswa); ?>" onclick="return confirm_delete();">Hapus
                  <?php
                  echo "</tr>";
                  ?>
                  <div id="nilai<?php echo $no; ?>" class="modal fade " role="dialog">
                    <div class="modal-dialog modal-lg" >
                      <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title">Edit Nilai Siswa</h4>
                       </div>
                       <div class="modal-body"> 
                       </div>
                     </div>



                   </div>
                 </div>
                 <?php
               }
               ?>                  
             </tbody>
           </table>
         </div>
         <!-- /.box-body -->
       </div>
     </div>


     <div class="tab-pane" id="leger">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">MATEMATIKA</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <select>
          <option>Kelas 7A</option>
          <option>Kelas 7B</option>
          <option>Kelas 7C</option>
          <option>Kelas 8A</option>
          <option>Kelas 8B</option>
          <option>Kelas 8C</option>
          <option>Kelas 9A</option>
        </select>
        <form class="posisikanan">
          <select>
            <option>Januari</option>
            <option>Februari</option>
            <option>Maret</option>
            <option>April</option>
            <option>Mei</option>
            <option>Juni</option>
            <option>Juli</option>
            <option>Agustus</option>
            <option>September</option>
            <option>Oktober</option>
            <option>November</option>
            <option>Desember</option>
          </select>
        </form>
        <div class="tab-content">
          <div class="active tab-pane" id="leger">
            <div class="box">
              <div class="box-header jarakbox" style="overflow: auto">

                <center><embed src="dokumen_kurikulum/contoh rapor.pdf" width="1000" height="1000"> </embed></center>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <!-- /.tab-pane -->

        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->

<script type="text/javascript">
  $(document).ready(function() {
      var max_fields      = 50; //maximum input boxes allowed
      var wrapper         = $(".bigbox-mapel"); //Fields wrapper
      var add_button      = $("#tambahmapel"); //Add button ID
      var box_mapel       = `<div class="box-mapel">
      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Nama Mata Pelajaran</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Nama Mata Pelajaran">
      </div>
      </div>

      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">KKM</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="KKM">
      </div>
      </div>

      <div class="form-group formgrup jarakform">
      <label for="inputKurikulum" class="col-sm-2 control-label">Jam Belajar</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName" placeholder="Jam Belajar">
      </div>
      </div>
      <i class="fa fa-minus-circle text-red tambahmapel"></i><a style="color:red" href="#" class="remove_field"> Hapus mapel</a>

      </div>`;
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append(box_mapel); //add input box
            }
          });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
  </script>
  </html>

