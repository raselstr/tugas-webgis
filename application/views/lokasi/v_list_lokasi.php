
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
                Advanced Tables
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lokasi</th>
                            <th>Posisi Lokasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php $no=1;
                         foreach ($lokasi as $key => $value) { ?>
                        <tr class="odd gradeX">
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_lokasi; ?></td>
                            <td><?= $value->latitude; ?> , <?= $value->longitude; ?></td>
                            <td class="center">
                                <a class="btn btn-xs btn-success" href="<?= base_url("lokasi/edit/".$value->id) ?>">Edit</a>
                                <a class="btn btn-xs btn-warning" href="<?= base_url("lokasi/detail/".$value->id) ?>">Detail</a>
                                <a onclick="return confirm()" class="btn btn-xs btn-danger" href="<?= base_url('lokasi/delete/'.$value->id) ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>       
                    </tbody>
                        
                </table>
            </div>
            
        </div>
    </div>
    <!--End Advanced Tables -->
</div>