
<div class="panel panel-blue" style="background:#fff;">
    <div class="panel-heading">User Form</div><br>
    
        <div class="panel-body">
            <table class="table table-hover ">
                <tbody>
                
                <?php echo form_open('itservice/add'); ?>
                <?php if ($type=="Edit"){
                    echo form_hidden('itservice_id', $this->input->get('itservice'));
                } ?>
                         <tr >
                            <td class="col-md-1">Nama Pemesan</td>
                            <td class="col-md-6"><input class="col-md-3" autofocus type="text" name="nama_pemesan" value="<?php if($type=="Edit"){echo $itservice[0]->nama_pemesan;} ?>"></td>
                          </tr>     
                          <tr>
                            <td>Departement</td>
                            <td><input class="col-md-3"  type="text" name="departement" value="<?php if($type=="Edit"){echo $itservice[0]->departement;} ?>"></td>
                          </tr>
                          <tr>
                            <td>Tanggal Buat</td>
                            <td><input class="col-md-6" type="date" name="tanggal_buat" value="<?php if($type=="Edit"){echo $itservice[0]->tanggal_buat;} ?>"></td>
                          </tr>
                          <tr>
                            <td>Tanggal Selesai</td>
                            <td><input class="col-md-6" type="date" name="tanggal_selesai" value="<?php if($type=="Edit"){echo $itservice[0]->tanggal_selesai;} ?>"></td>
                          </tr>
                          <tr>
                            <td>Category</td>
                            <td><input class="col-md-6" type="text" name="category" value="<?php if($type=="Edit"){echo $itservice[0]->category;} ?>"></td>
                          </tr>
                          <tr>
                            <td>Keluhan</td>
                            <td><textarea class="col-md-6" type="text" name="keluhan" value="<?php if($type=="Edit"){echo $itservice[0]->keluhan;} ?>" ></textarea></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>
                                <a href="<?php echo site_url('itservice'); ?>" >
                                    <button type="button" class="btn btn-success">   
                                        Kembali
                                    </button>
                                </a>
                                
                                <input class="btn btn-primary" type="submit" name="simpan" value="<?php echo $type; ?>">
                            </td>
                          </tr>
                          <?php echo form_close(); ?>
                        
               
                </tbody>
             
            </table>
     </div>
</div>