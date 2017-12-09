<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: QuanICT
 * Date: 7/28/2017
 * Time: 2:58 PM
 */

class Massage extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->fields = $this->Massage_Model->fields();
    }

    var $table_fields = array(
        'id' => array("#",5),
        'name' => array("Title"),
        'staff' => array("Staff",10),
        'actions' => array(NULL, 5, false),
    );

    function items()
    {
        
        if ($this->uri->extension == 'json') {
            return $this->Massage_Model->items_json('edit');
        }
        $data = array('fields' => $this->table_fields, 'columns_filter' => true);
        $data['data_json_url'] = base_url($this->uri->uri_string() . '.json', NULL);

        $data['columns_fields'] = "";
        foreach ($this->table_fields AS $k => $f) {

            $col_data = "data:'$k'";
            $col_order = NULL;
            if (isset($f[2]) && $f[2] != true) {
                $col_order = ',"orderable": false';
            }
            $col_width = NULL;
            if (isset($f[1]) && is_numeric($f[1])) {
                $col_width = ',"width": "' . $f[1] . '%"';
            }
            $content_default = NULL;
            if ($k == 'actions') {
                $col_data = "data:null";
                $content_default = ', "defaultContent" : \'<button class="btn btn-xs btn-default" data-action="edit" ><i class="fa fa-pencil"></i></button>\'';
            }
            $data['columns_fields'] .= "{ $col_data $col_order $col_width $content_default},";
        }
        $data['columns_fields'] = substr($data['columns_fields'], 0, -1);


        $this->template
            ->title(lang('welcome_to') . ' ' . config_item('company_name'))
            ->build('backend/datatables', $data);
    }

    public function form($id=0){

        if ($this->input->post()) {
            $formdata = array();
            foreach ($this->fields as $name => $field) {
                $this->fields[$name]['value'] = $formdata[$name] = $this->input->post($name);
            }
            $config['upload_path']    = APPPATH."/uploads/massage/";
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if ( $this->upload->do_upload_images('imgthumb') ){
                $upload_data = $this->upload->images_data;
                $images = array();
                foreach ($upload_data AS $f){
                    $images[] = $f['file_name'];
                }
                $formdata["imgthumb"] = $images[0];
                mb_internal_encoding('utf-8');
                $formdata["images"] = serialize($images);
            } else {
                bug($this->upload->display_errors());
                die("have error");
            }

            $add = $this->Massage_Model->update($formdata);

            if( $add && is_int($add) ){
                set_error(lang('Success.'));
                redirect('admin/massage');
            }

        } else {
            $item = $this->Massage_Model->get_item_by_id($id);
            foreach ($this->fields AS $field=>$val){
                if( isset($item->$field) ){
                    $this->fields[$field]['value']=$item->$field;
                }
            }
        }

        $data = array(
            'fields' => $this->fields
        );


        temp_view('Massage/form',$data);
    }


    function staff($action=NULL,$id=0,$massage_id=0){
        $this->load->module('Massage/Staff');
        if( strlen($action) > 0 ){
           
            if( method_exists($this->staff, $action) ){
                return $this->staff->$action($massage_id);
            } elseif( $action=='add' ){
                return $this->staff->form(0,$massage_id);
            } elseif( $action=='edit' ){
                return $this->staff->form($id,$massage_id);
            } else {
                show_404();
            }
        } else {
            return  $this->staff->items($massage_id);
        }
    }
}