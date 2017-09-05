<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* user Model Class
 *
 * @package     GROOT
 * @subpackage  Models
 * @category    Models
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */

class Model_departement extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    
    
    
    // Get From Databases
    function list_departement()
    {
        $departement = $this->db->get('departement');
        return $departement;
    }
    
 
    function cari_departement($pencarian){

    	if ($pencarian){
    		$this->db->like('departement_name', $pencarian);
    	}
    	$query = $this->db->get('departement');
    	$result['hasil'] = $query->result();
    	return $result;
    }

    function input($create)
    {
    	$this->db->insert('departement', $create);
    	return true;
    }

    function getEdit($departement_id){
    	$this->db->where('departement_id', $departement_id);
    	$query = $this->db->get('departement');
    	return $query->result();
    }

    function edit($create, $departement_id){
    	$this->db->where('departement_id', $departement_id);
    	$this->db->update('departement', $create);
    	return true;
    }
  	
  	function delete($departement_id){
    	$this->db->where('departement_id', $departement_id);
    	$this->db->delete('departement');
    	return true;
    }
    

}
