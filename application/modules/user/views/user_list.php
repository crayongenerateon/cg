<div class="col-sm-9 col-md-10 main">
    <h3 class="page-header">
        Daftar Admin
        <a href="<?php echo site_url('user/user_admin/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a>
    </h3>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>USERNAME</th>
                    <th>NAMA LENGKAP</th>
                    <th>EMAIL</th>
                    <th>STATUS ADMIN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <?php
            if (!empty($user)) {
                foreach ($user as $row) {
                    ?>
                    <tbody>
                        <tr>
                            <td ><?php echo $row['user_name']; ?></td>
                            <td ><?php echo $row['user_full_name']; ?></td>
                            <td ><?php echo $row['user_email']; ?></td>
                            <td ><?php echo $row['role_name']; ?></td>
                            <td>
                                    <a class="btn btn-warning btn-xs" href="<?php echo site_url('user/user_admin/view/' . $row['user_id']); ?>" ><span class="glyphicon glyphicon-eye-open"></span></a>
                                    <a class="btn btn-success btn-xs" href="<?php echo site_url('user/user_admin/add/' . $row['user_id']); ?>" ><span class="glyphicon glyphicon-edit"></span></a>
                                <?php if ($this->session->userdata('user_id_admin') != $row['user_id']) { ?>
                                    <a class="btn btn-primary btn-xs" href="<?php echo site_url('user/user_admin/rpw/' . $row['user_id']); ?>" ><span class="ion-refresh"></span>&nbsp; Reset Password</a>
                                <?php } else {
                                    ?>
                                    <a class = "btn btn-primary btn-xs" href = "<?php echo site_url('user/user_admin/cpw/'); ?>" ><span class = "ion-refresh"></span>&nbsp; Ubah Password</a>
                                <?php } ?>
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
    <div >
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>