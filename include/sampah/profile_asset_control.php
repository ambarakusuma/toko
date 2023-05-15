<!-- Menu ini adalah Menu untuk Profile Unit Area -->
<!-- create by dewa tgl 20190214 -->
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #ddd;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
 <li><?php
 if($user_sedang_login != true) {
    echo '<a href="index.php?p=form_login" >Login</a>';
}
?>
</li>
  <li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Transaksi';
    }
}
?></a>
  <div class="dropdown-content">
     <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        //echo '<a href="index.php?p=penerimaan" >Asset Terima</a>';
		echo '<a href="index.php?p=b_penerimaan_ho" >Asset Terima</a>';
    }
}
?></a>
</div></li>
<li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Update Status';
    }
}
?></a>

  <div class="dropdown-content">
  <!--
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=update_region" >Update Region</a>';
    }
}
?></a>

<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=update_area" >Update Area</a>';
    }
}
?></a>

<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=update_lokasi" >Update Lokasi</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=update_status_aset" >Update Status Aset</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=transaksi_upload_status_aset" >Update Status Aset Massal</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=transaksi_upload_status_fisik" >Update Status Fisik Massal</a>';
    }
}
?></a>

<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=transaksi_upload_ruangan" >Upload Ruangan</a>';
    }
}
?></a><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=transaksi_upload_lantai" >Upload Lantai</a>';
    }
}
?></a>	
-->
	<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=new_transaksi_upload_type" >New Upload Type</a>';
    }
}
?></a><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=new_transaksi_upload_sn" >New Upload SN</a>';
    }
}
?></a><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=new_transaksi_upload_warna" >New Upload Warna</a>';
    }
}
?></a><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=new_transaksi_upload_data_pengurangan" >New Update Nilai Pengurangan</a>';
    }
}

?></a><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_delete" >New Delete Label</a>';
    }
}

?></a>

<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=new_transaksi_upload_nilai_asset" >New Upload Nilai Asset</a>';
    }
}
?></a>
</div></li>

<li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 6) {
        echo 'Pencarian';
    }
}
?></a>
<!--
  <div class="dropdown-content">
 <?php if($user_sedang_login == true) {
    if($hak_akses >= 6) {
        echo '<a href="index.php?p=searching" >Pencarian Aset</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 7) {
        echo '<a href="index.php?p=history" >History Aset</a>';
    }
}
?></a>
-->
  <div class="dropdown-content">
 <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=searching_dep" >Pencarian Nilai Asset</a>';
    }
}
?></a>

</div>

  <div class="dropdown-content">
 <?php if($user_sedang_login == true) {
    if($hak_akses >= 6) {
        echo '<a href="index.php?p=core/b_searching" >New Pencarian Aset</a>';
    }
}
?></a>
 <?php if($user_sedang_login == true) {
    if($hak_akses >= 6) {
        echo '<a href="index.php?p=core/b_history" >New History Aset</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 7) {
        echo '<a href="index.php?p=history" >History Aset Lama</a>';
    }
}
?></a>
  <div class="dropdown-content">
 <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=searching_dep" >Pencarian Nilai Asset</a>';
    }
}
?></a>
</div></li>

<li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Admin';
    }
}
?></a>
  <div class="dropdown-content">


<!--
      <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="download_data_all.php" >Downoad All</a>';
    }
}
?></a>
-->
      <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=download_data_filter2" >Downoad All</a>';
    }
}
?></a>
<!--
      <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="download_data_all2.php" >Downoad All (so)</a>';
    }
}
?></a>
-->
      <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_serial_number_double" >Serial Number Duplicate</a>';
    }
}
?></a>
      <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_user" >List User</a>';
    }
}
?>
<!--</a>
      <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=transaksi_ganti_label" >Ganti Label</a>';
    }
}
?></a>
-->
      <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_exit_clearence" >List EC</a>';
    }
}
?></a>
<!--
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=update_type_sn" >Update Type SN</a>';
    }
}
?></a>
-->
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_warna" >List Warna</a>';
    }
}
?></a><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_parameter_karyawan" >List Parameter Karyawan</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_lantai" >List Lantai</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_ruangan" >List Ruangan</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_rack" >List Rack</a>';
    }
}
?></a>
<!--
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_delete" >Delete Label</a>';
    }
}
?></a>
-->
</div></li>


<li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Approval';
    }
}
?></a>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_approval">Approval FOC</a>';
    }
}
?>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_approval">Approval Penjualan</a>';
    }
}
?>
</div></li>

<li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 6) {
        echo 'Admin Barang';
    }
}
?></a>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_master_stock" >Master Stock</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_master_barang" >Master Barang</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_master_vendor" >Master Supplier / Vendor</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=master_uom" >Master Uom</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_list_transaksi" >List Transaksi</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_list_transaksi_fixed" >List Transaksi Fixed Aset</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_change_status" >Change Status</a>';
    }
}
?></a>

<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=qty_stock" >Master Stock Nasional</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=qty_stock_card" >Stock Card</a>';
    }
}
?></a>
<?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_penerimaan_ho" >Adjustment</a>';
    }
}
?></a>
</div></li>

 <li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Report';
    }
}
?></a>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=rekapitulasi_aset">Laporan Rekapitulasi Aset Transvision</a>';
    }
}
?>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_report_mutasi_penambahan">Laporan Mutasi Penambahan Aset Transvision</a>';
    }
}
?>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_report_mutasi_pengurangan">Laporan Mutasi Pengurangan Aset Transvision</a>';
    }
}
?>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_report_rekap_penambahan_pengurangan">Laporan Penambahan dan Pengurangan Aset Transvision</a>';
    }
}
?>

  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_report_rekap_penambahan_pengurangan_ro">Rekap Penambahan dan Pengurangan RO/Area/Unit</a>';
    }
}
?>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_report_data_detail_ro">Report Data Detail RO/Area/Unit</a>';
    }
}
?>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_report_rekap_status_label">Laporan Aset Tagging</a>';
    }
}
?>

  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_report_rekap_aset_nonlabel">Laporan Aset No Tagging</a>';
    }
}
?>

 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_repstock_ga">Report General Affair</a>';
    }
}
?>


 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_repstock_ga_amu">Report General Affair / AMU</a>';
    }
}
?>

 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_repstock_ga_amu_pengurangan">Dashboard Pengurangan</a>';
    }
}
?>

</div></li>
<li><?php
if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=catatan_login" >Catatan Login</a>';
    }
}
?></a></li>


<li><?php
if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=r_repstock_ga" >Dashboard</a>';
    }
}
?></a></li>
<li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Lelang';
    }
}
?></a>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=lelang_admin">Admin Lelang</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=lelang_data">Data Lelang</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=lelang_aturan">Aturan Lelang</a>';
    }
}
?>
</div></li>
 <li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Task';
    }
}
?></a>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=photo_searching">Project Photo</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="count/count.php">Jumlah Validasi</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=photo_satgas">Anomali</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="download_photo_blm_valid.php">Download Photo Blm Valid</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="photo_download.php">Download Photo Belum Ada</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=photo_summary">Rekap Photo</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=project_pindahan">Project Pindahan</a>';
    }
}
?>
</div></li>
<li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Stock Opname';
    }
}
?></a>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_setup_so_fixed_admin">Setup Jadwal Fixed Aset</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_setup_so">Setup Jadwal Non Fixed Aset</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_graph_so_fixed">Report Stock Opname Fixed Aset</a>';
    }
}
?>
<div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_graph_so">Report Stock Opname Non Fixed Aset</a>';
    }
}
?>
 <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=b_setup_so_admin_all">Setup Jadwal SO Aset All</a>';
    }
}
?>
 <li class="dropdown">
  <a href="#" class="dropbtn"><?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo 'Profile';
    }
}
?></a>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_user_single">Profile</a>';
    }
}
?>
  <div class="dropdown-content">
  <?php if($user_sedang_login == true) {
    if($hak_akses >= 8) {
        echo '<a href="index.php?p=list_tentang_aplikasi">Improvement</a>';
    }
}
?>      </div></li>


<li><?php

    if($user_sedang_login == true) {
    echo '<a href="logout.php" >Logout</a> ';
    echo '( <b>'.$datauserlogin[2]["username"].'</b> )';
}

?></a></li>
</ul>

</body>
</html>
