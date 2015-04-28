<?php
defined('SITEBILL_DOCUMENT_ROOT') or die('Restricted access');
/**
 * mailbox admin backend
 * @author Kondin Dmitriy <kondin@etown.ru> http://www.sitebill.ru
 */

class predefinedlinks_admin extends Object_Manager {
    private $data_manager_export;
    /**
     * Constructor
     */
    function __construct() {
        $this->SiteBill();
        $this->table_name = 'predefinedlinks';
        $this->action = 'predefinedlinks';
        
        
        $this->primary_key = 'predefinedlinks_id';
        
        require_once(SITEBILL_DOCUMENT_ROOT.'/apps/predefinedlinks/admin/predefinedlinks_model.php');
        $Object=new Predefinedlinks_Model();
        $this->data_model=$Object->get_model();
    }
    
    protected function _installAction(){
    	$this->install();
    }
    
    public function checkAlias($alias){
    	$query='SELECT * FROM '.DB_PREFIX.'_'.$this->table_name.' WHERE alias=?';
    	$DBC=DBC::getInstance();
    	$stmt=$DBC->query($query, array($alias));
    	if($stmt){
    		$ar=$DBC->fetch($stmt);
    		$ar['params']=$this->unpackParams($ar['params']);
    		return $ar;
    	}
    	return false;
    }
    
    private function unpackParams($paramsString){
    	parse_str($paramsString, $p);
    	return $p;
    }
    
    
    
    function install () {
    	$query = "CREATE TABLE IF NOT EXISTS `".DB_PREFIX."_predefinedlinks` (
  `predefinedlinks_id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
 `description` text NOT NULL,
  PRIMARY KEY (`predefinedlinks_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=".DB_ENCODING." ;";
    	$this->db->exec($query);
    	if ( !$this->db->success ) {
    		echo $this->db->error.'<br>';
    	}
    	$rs = Multilanguage::_('L_APPLICATION_INSTALLED');
        return $rs;
    }
    
    function grid () {
    	return parent::grid(array('grid_item' => array($this->primary_key, 'title', 'alias')));
    	require_once(SITEBILL_DOCUMENT_ROOT.'/apps/system/lib/system/view/grid.php');
        $common_grid = new Common_Grid($this);
        $common_grid->set_grid_table($this->table_name);
        
        if(isset($params['grid_item']) && count($params['grid_item'])>0){
        	foreach($params['grid_item'] as $grid_item){
        		$common_grid->add_grid_item($grid_item);
        	}
        }else{
        	$common_grid->add_grid_item($this->primary_key);
        	$common_grid->add_grid_item('name');
        }
        
        if(isset($params['grid_controls']) && count($params['grid_controls'])>0){
        	foreach($params['grid_controls'] as $grid_item){
        		$common_grid->add_grid_control($grid_item);
        	}
        }else{
        	$common_grid->add_grid_control('edit');
        	$common_grid->add_grid_control('delete');
        }
        
        if(isset($params['grid_conditions']) && count($params['grid_conditions'])>0){
        	$common_grid->set_conditions($params['grid_conditions']);
        }
        
        //$common_grid->set_grid_query('SELECT * FROM '.DB_PREFIX.'_'.$this->table_name.' ORDER BY name ASC');
        
        
        $common_grid->setPagerParams(array('action'=>$this->action, 'page'=>$this->getRequestValue('page'), 'per_page'=>$this->getConfigValue('common_per_page')));
        
        $rs = $common_grid->construct_grid();
        return $rs;
    }
    
    
    
    
}