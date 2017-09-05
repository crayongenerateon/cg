
<div class="panel panel-red">
    <div class="panel-heading">Departement Table</div>
    <div class="table ">
    
    <form class="panel-body" action="<?php echo site_url('departement'); ?>" method="post" > 
        <input type="search" name="pencarian" placeholder="Cari berdasarkan Nama Departement">
        <input type="submit" name="q" value="Cari">
    </form>
    </div>
        <div class="panel-body">
            <a href="<?php echo site_url('master/departement/input'); ?>" >
                <button type="button" class="btn btn-success">   
                    Tambah
                </button>
            </a> <tr></tr>
            <table class="table table-hover table-bordered">
                <thead>
                 <tr>
                    <th>Id</th>
                    <th>Nama Departement</th>
                    <th>Operasi</th>
                 </tr>
                </thead>
                <?php
            		if (!empty($departement)) {
                		foreach ($departement as $row) {
                ?>
                        <tbody>
                         <tr>
                          	<td><?php echo $row->departement_id; ?></td>
                            <td><?php echo $row->departement_name; ?></td>
                            <td><a href="<?= site_url("master/departement/edit")."?departement=".$row->departement_id; ?>">
                                    <span class="label label-sm label-warning">Edit</span>
                                </a>
                                <a href="<?= site_url("master/departement/delete")."?departement=".$row->departement_id; ?>">
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