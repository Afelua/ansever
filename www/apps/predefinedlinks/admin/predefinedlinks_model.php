<?php
require_once SITEBILL_DOCUMENT_ROOT.'/apps/system/lib/model/model.php';
class Predefinedlinks_Model extends Data_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function get_model(){
		
		$form_data = array();
		
		$form_data['predefinedlinks']['predefinedlinks_id']['name'] = 'predefinedlinks_id';
		$form_data['predefinedlinks']['predefinedlinks_id']['title'] = 'ID';
		$form_data['predefinedlinks']['predefinedlinks_id']['value'] = 0;
		$form_data['predefinedlinks']['predefinedlinks_id']['length'] = 40;
		$form_data['predefinedlinks']['predefinedlinks_id']['type'] = 'primary_key';
		$form_data['predefinedlinks']['predefinedlinks_id']['required'] = 'off';
		$form_data['predefinedlinks']['predefinedlinks_id']['unique'] = 'off';
		
		
		$form_data['predefinedlinks']['alias']['name'] = 'alias';
		$form_data['predefinedlinks']['alias']['title'] = 'ALIAS';
		$form_data['predefinedlinks']['alias']['value'] = '';
		$form_data['predefinedlinks']['alias']['length'] = 40;
		$form_data['predefinedlinks']['alias']['type'] = 'safe_string';
		$form_data['predefinedlinks']['alias']['required'] = 'off';
		$form_data['predefinedlinks']['alias']['unique'] = 'off';
		
		$form_data['predefinedlinks']['title']['name'] = 'title';
		$form_data['predefinedlinks']['title']['title'] = 'Заголовок';
		$form_data['predefinedlinks']['title']['value'] = '';
		$form_data['predefinedlinks']['title']['length'] = 40;
		$form_data['predefinedlinks']['title']['type'] = 'safe_string';
		$form_data['predefinedlinks']['title']['required'] = 'off';
		$form_data['predefinedlinks']['title']['unique'] = 'off';
		
		$form_data['predefinedlinks']['params']['name'] = 'params';
		$form_data['predefinedlinks']['params']['title'] = 'PARAMS';
		$form_data['predefinedlinks']['params']['value'] = '';
		$form_data['predefinedlinks']['params']['length'] = 40;
		$form_data['predefinedlinks']['params']['type'] = 'textarea';
		$form_data['predefinedlinks']['params']['required'] = 'off';
		$form_data['predefinedlinks']['params']['unique'] = 'off';
		
		$form_data['predefinedlinks']['meta_title']['name'] = 'meta_title';
		$form_data['predefinedlinks']['meta_title']['title'] = 'Meta Title';
		$form_data['predefinedlinks']['meta_title']['value'] = '';
		$form_data['predefinedlinks']['meta_title']['length'] = 40;
		$form_data['predefinedlinks']['meta_title']['type'] = 'safe_string';
		$form_data['predefinedlinks']['meta_title']['required'] = 'off';
		$form_data['predefinedlinks']['meta_title']['unique'] = 'off';
		
		$form_data['predefinedlinks']['meta_keywords']['name'] = 'meta_keywords';
		$form_data['predefinedlinks']['meta_keywords']['title'] = 'Meta Keywords';
		$form_data['predefinedlinks']['meta_keywords']['value'] = '';
		$form_data['predefinedlinks']['meta_keywords']['length'] = 40;
		$form_data['predefinedlinks']['meta_keywords']['type'] = 'safe_string';
		$form_data['predefinedlinks']['meta_keywords']['required'] = 'off';
		$form_data['predefinedlinks']['meta_keywords']['unique'] = 'off';
		
		$form_data['predefinedlinks']['meta_description']['name'] = 'meta_description';
		$form_data['predefinedlinks']['meta_description']['title'] = 'Meta Description';
		$form_data['predefinedlinks']['meta_description']['value'] = '';
		$form_data['predefinedlinks']['meta_description']['length'] = 40;
		$form_data['predefinedlinks']['meta_description']['type'] = 'safe_string';
		$form_data['predefinedlinks']['meta_description']['required'] = 'off';
		$form_data['predefinedlinks']['meta_description']['unique'] = 'off';
		
		$form_data['predefinedlinks']['description']['name'] = 'description';
		$form_data['predefinedlinks']['description']['title'] = 'Описание';
		$form_data['predefinedlinks']['description']['value'] = '';
		$form_data['predefinedlinks']['description']['length'] = 40;
		$form_data['predefinedlinks']['description']['type'] = 'textarea_editor';
		$form_data['predefinedlinks']['description']['required'] = 'off';
		$form_data['predefinedlinks']['description']['unique'] = 'off';
		
		return $form_data;
	}
}