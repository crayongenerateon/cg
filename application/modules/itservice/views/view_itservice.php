
<div class="panel panel-red">
    <div class="panel-heading">User Table</div>
    <div class="table ">
    
    <form class="panel-body" action="<?php echo site_url('itservice'); ?>" method="post" > 
        <input type="search" name="pencarian">
        <input type="submit" name="q" value="Cari">
    </form>
    </div>
        <div class="panel-body">
            <a href="<?php echo site_url('itservice/input'); ?>" >
                <button type="button" class="btn btn-success">   
                    Tambah
                </button>
            </a> <tr></tr>
            <table class="table table-hover table-bordered">
                <thead>
                 <tr>
                    <th>Id</th>
                    <th>Nama Pemesan</th>
                    <th>Departement</th>
                    <th>Tanggal Buat</th>
                    <th>Tanggal selesai</th>
                    <th>Category</th>
                    <th>status</th>
                    <th>Keluhan</th>
                    <th>PIC</th>
                    <th>Action</th>
                 </tr>
                </thead>
                <?php
            		if (!empty($itservice)) {
                		foreach ($itservice as $row) {
                ?>
                        <tbody>
                         <tr>
                          	<td><?php echo $row->itservice_id; ?></td>
                            <td><?php echo $row->nama_pemesan; ?></td>
                            <td><?php echo $row->departement; ?></td>
                            <td><?php echo $row->tanggal_buat; ?></td>
                            <td><?php echo $row->tanggal_selesai; ?></td>
                            <td><?php echo $row->category; ?></td>
                            <td><?php echo $row->keluhan; ?></td>
                            <td><?php echo $row->status; ?></td>
                            <td><?php echo $row->pic; ?></td>
                            <td><span class="label label-sm label-success"><?php echo $row->user_role; ?></span></td>
                            <td><a href="<?= site_url("itservice/edit")."?itservice=".$row->itservice_id; ?>">
                                    <span class="label label-sm label-warning">Edit</span>
                                </a>
                                <a href="<?= site_url("itservice/delete")."?itservice=".$row->itservice_id; ?>">
                                    <span class="label label-sm label-danger">Delete</span>
                                </a>
                            </td>
                          </tr>    

                        </tbody>
                <?php
                }
            } else {
                ?>
                <tbody>
                    <tr id="row">
                        <td colspan="5" align="center">Data Kosong</td>
                    </tr>
                </tbody>
                <?php
            }
            ?> 
            </table>
     </div>
</div>