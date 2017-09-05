<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     GROOT
 * @subpackage  Models
 * @category    Models
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */

class Model_itservice extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    
    
    
    // Get From Databases
    function list_itservice()
    {
        $itservice = $this->db->get('itservice');
        return $itservice;
    }
    
 
    function cari_itservice($pencarian){

    	if ($pencarian){
    		$this->db->like('nama_pemesan', $pencarian);
    	}
    	$query = $this->db->get('itservice');
    	$result['hasil'] = $query->result();
    	return $result;
    }

    function input($create)
    {
    	$this->db->insert('itservice', $create);
    	return true;
    }

    function getEdit($itservice_id){
    	$this->db->where('itservice_id', $itservice_id);
    	$query = $this->db->get('itservice');
    	return $query->result();
    }

    function edit($create, $itservice_id){
    	$this->db->where('itservice_id', $itservice_id);
    	$this->db->update('itservice', $create);
    	return true;
    }
  	
  	function delete($itservice_id){
    	$this->db->where('itservice_id', $itservice_id);
    	$this->db->delete('itservice');
    	return true;
    }
    

}
