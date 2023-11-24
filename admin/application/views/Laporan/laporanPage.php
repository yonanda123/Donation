<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<title>Laporan | Lentera Kasih</title>
<?php $this->load->view('layout/css'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Laporan Donasi</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-file"></i> Laporan</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-8 col-md-offset-2">
            <!-- <form action="<?php ?>" method="post" class="chart-box"> -->
                <div class="row">
                    <div class="col-md-6"> 
                        <form action="<?php echo base_url('admin/Laporan/harian'); ?>" method="post" class="chart-box">
                            <fieldset class="form-group text-center">
                                <h4>Laporan Harian</h4>
                                <br />
                                <div class="col-md">
                                <input class="form-control input-cus" placeholder="Pilih Tanggal" name="tgl_transaksi" type="text" id="dateP" required>
                                </div>
                                <br />
                                <!-- Tombol Cetak -->
                                <button type="submit" class="btn btn-primary" name="action" value="cetak">Cetak</button>

                                <!-- Tombol Preview -->
                                <button type="submit" class="btn btn-secondary" name="action" value="preview">Preview</button>
                            </fieldset>
                        </form>
                    </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?php echo base_url('admin/Laporan/bulanan'); ?>" method="post" class="chart-box">
                        <fieldset class="form-group text-center">
                            <h4>Laporan Bulanan</h4>
                            <br />
                            <div class="col-md">
                                <input class="form-control input-cus" placeholder="Pilih Bulan" name="bulan" type="text" id="dateB" required>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-primary" name="action" value="cetak">Cetak</button>

                                <!-- Tombol Preview -->
                                <button type="submit" class="btn btn-secondary" name="action" value="preview">Preview</button>
                            </form>
                        </fieldset>
                    </div>
                    <?php if (isset($tmpTransaksiHari)): ?>
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-box">
                            <h4>Data Donasi</h4>
                            <div class="table-responsive m-top-2">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Donatur</th>
                                        <th>No Telp</th> 
                                        <th>Pesan</th>
                                        <th>Jumlah Donasi</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;

                                        foreach($tmpTransaksiHari as $rows) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rows->nama_donatur; ?></td>
                                            <td><?php echo $rows->no_telp_donatur; ?></td>
                                            <td><?php echo $rows->pesan_donatur; ?></td>
                                            <td><?php echo $rows->jumlah_donasi; ?></td>
                                            <td><?php echo tgl_indo($rows->tgl_transaksi); ?></td>
                                        </tr>
                                    <?php
                                        $no++;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
                    <?php if (isset($tmpTransaksiBulan)): ?>
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-box">
                            <h4>Data Donasi</h4>
                            <div class="table-responsive m-top-2">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Donatur</th>
                                        <th>No Telp</th> 
                                        <th>Pesan</th>
                                        <th>Jumlah Donasi</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;

                                        foreach($tmpTransaksiBulan as $rows) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rows->nama_donatur; ?></td>
                                            <td><?php echo $rows->no_telp_donatur; ?></td>
                                            <td><?php echo $rows->pesan_donatur; ?></td>
                                            <td><?php echo $rows->jumlah_donasi; ?></td>
                                            <td><?php echo tgl_indo($rows->tgl_transaksi); ?></td>
                                        </tr>
                                    <?php
                                        $no++;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <!-- </form> -->
          </div>
        </section>
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $('#dateP').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-365d',
        todayHighlight: true
    });

    $('#dateB').datepicker({
        format: "mm",
        viewMode: "months", 
        minViewMode: "months"
    });
 
</script>
<?php $this->load->view('layout/js'); ?>

</body>
</html>