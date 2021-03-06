<?php
/**
 * View models in table format
 * @author Kondin Dmitriy <kondin@etown.ru> http://www.sitebill.ru
 */
class Table_View extends Data_Model {
    /**
     * Construct
     * @param void
     * @return void
     */
    function __construct() {
        $this->SiteBill();
    }
    
    /**
     * Compile view
     * @param $form_data form data
     * @return string
     */
    function compile_view ( $form_data ) {
        //echo '<pre>';
        //print_r($form_data);
        //echo '</pre>';
        foreach ( $form_data as $item_id => $item_array ) {
            switch ( $item_array['type'] ) {
                case 'select_box':
                    $rs .= $this->get_select_box_row($item_array);
                break;
                
                case 'select_by_query':
                    $rs .= $this->get_select_box_by_query_row($item_array);
                break;
                
                case 'select_box_structure':
                    $rs .= $this->get_select_box_structure_row($item_array);
                break;
                
                case 'uploadify_image':
                    $rs .= $this->get_uploadify_row($item_array);
                break;
                
                case 'checkbox':
                    $rs .= $this->get_checkbox_box_row($item_array);
                break;
                
                case 'textarea':
                    $rs .= $this->get_textarea_row($item_array);
                break;
                
                case 'safe_string':
                    $rs .= $this->get_safe_text_input($item_array);
                break;
                
                case 'price':
                    $rs .= $this->get_safe_text_input($item_array);
                break;
                
                case 'email':
                    $rs .= $this->get_safe_text_input($item_array);
                break;
                
                case 'mobilephone':
                    $rs .= $this->get_safe_text_input($item_array);
                break;
                case 'dtdatetime':
                	$rs .= $this->get_safe_text_input($item_array);
                	break;
                	case 'dtdate':
                		$rs .= $this->get_safe_text_input($item_array);
                		break;
                		case 'dttime':
                			$rs .= $this->get_safe_text_input($item_array);
                			break;
            }
        }
        return $rs;
    }
    
    /**
     * Get select box row
     * @param array $item_array
     * @return string
     */
    function get_select_box_row ( $item_array ) {
        $rs = '<tr>';
        $rs .= '<td>';
        $rs .= $item_array['title'];
        $rs .= '</td>';
        $rs .= '<td>';
        $rs .= $item_array['select_data'][$item_array['value']];
        $rs .= '</td>';
        $rs .= '</tr>';
        
        return $rs;
    }
    
    
    /**
     * Get select box row
     * @param array $item_array
     * @return string
     */
    function get_select_box_by_query_row ( $item_array ) {
        $rs = '<tr>';
        $rs .= '<td>';
        $rs .= $item_array['title'];
        $rs .= '</td>';
        $rs .= '<td>';
        
        $item_array['value_string'] = $this->get_string_value_by_id($item_array['primary_key_table'], $item_array['primary_key_name'], $item_array['value_name'] ,$item_array['value']);
        
        $rs .= $item_array['value_string'];
        $rs .= '</td>';
        $rs .= '</tr>';
        
        return $rs;
    }
    
    
    /**
     * Get select box structure row
     * @param array $item_array
     * @return string
     */
    function get_select_box_structure_row ( $item_array ) {
        require_once(SITEBILL_DOCUMENT_ROOT.'/apps/system/lib/admin/structure/structure_manager.php');
        $Structure_Manager = new Structure_Manager();
        $category_structure = $Structure_Manager->loadCategoryStructure();
        
        $rs = '<tr>';
        $rs .= '<td>';
        $rs .= $item_array['title'];
        $rs .= '</td>';
        $rs .= '<td>';

        $params['topic_id'] = $item_array['value'];
        $rs .= $this->get_category_breadcrumbs_string( $params, $category_structure);        
        
        $rs .= '</td>';
        $rs .= '</tr>';
        
        return $rs;
    }
    
    /**
     * Get checkbox box row
     * @param array $item_array
     * @return string
     */
    function get_checkbox_box_row ( $item_array ) {
        $rs = '<tr>';
        $rs .= '<td>';
        $rs .= $item_array['title'];
        $rs .= '</td>';
        $rs .= '<td>';
        $rs .= $this->get_checkbox($item_array);
        $rs .= '</td>';
        $rs .= '</tr>';
        
        return $rs;
    }
    
    /**
     * Get uploadify row
     * @param array $item_array
     * @return string
     */
    function get_uploadify_row ( $item_array ) {
        
        $rs .= '<tr>';
        $rs .= '<td colspan="2">';
        $rs .= '<h2>'.Multilanguage::_('L_PHOTO').'</h2>';
        
        //$action, $table_name, $key, $record_id
        
        $rs .= $this->getImageListAdmin($item_array['action'], $item_array['table_name'], $item_array['primary_key'], $item_array['primary_key_value']);
        $rs .= '</td>';
        $rs .= '</tr>';
        //echo $rs;
        //exit;
        
        return $rs;
    }
    
    
    /**
     * Get check box
     * @param array $item_array
     * @return string
     */
    function get_checkbox ( $item_array ) {
        if ( $item_array['value'] == 1 ) {
            $rs .= Multilanguage::_('L_YES');
        } else {
            $rs .= Multilanguage::_('L_NO');
        } 
        return $rs;
    }
    
    
    /**
     * Get textarea row
     * @param array $item_array
     * @return string
     */
    function get_textarea_row ( $item_array ) {
        $rs = '<tr>';
        $rs .= '<td>';
        $rs .= $item_array['title'];
        $rs .= '</td>';
        $rs .= '<td>';
        $rs .= $item_array['value'];
        $rs .= '</td>';
        $rs .= '</tr>';
        
        return $rs;
    }
    
    /**
     * Get safe string input
     * @param unknown_type $item_array
     * @return string
     */
    function get_safe_text_input ( $item_array ) {

        /*Un-quote slashes*/
        $value = stripslashes( $value );
        /*HTML code*/
        $string .= "<tr>\n";

        $string .= "<td class=\"$bg_color\">".$item_array['title']."</td>\n";

        $string .= "<td class=\"$bg_color\">".$item_array['value']."</td>\n";
        $string .= "</tr>\n";

        /*Return html code*/
        return $string;
    }
}
?>
