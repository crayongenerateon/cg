
<div class="panel panel-blue" style="background:#fff;">
    <div class="panel-heading">User Form</div><br>
    
        <div class="panel-body">
            <table class="table table-hover ">
                <tbody>
                
                <?php echo form_open('master/departement/add'); ?>
                <?php if ($type=="Edit"){
                    echo form_hidden('departement_id', $this->input->get('departement'));
                } ?>
                         <tr >
                            <td class="col-md-1">Nama Department</td>
                            <td class="col-md-6"><input class="col-md-3" autofocus type="text" name="departement_name" value="<?php if($type=="Edit"){echo $departement[0]->departement_name;} ?>"></td>
                          </tr>     
                          
                          <tr>
                            <td></td>
                            <td>
                                <a href="<?php echo site_url('master/departement'); ?>" >
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