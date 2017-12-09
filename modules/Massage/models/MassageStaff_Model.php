<?php if ( ! defined('BASEPATH')) exit('No direct script core allowed');

class MassageStaff_Model extends CI_Model
{
    var $table = 'massage_staff';
    var $data_fields = array(
        'id' => array( 'type' => 'hidden'),
        'massage' => array( 'type' => 'hidden'),
        'number' => array(
            'label' => 'Number',
            'desc' => null,
            'icon' => 'send'
        ),
        'rate' => array( 'type' => 'number'),
        'body' => array('type' => 'textarea'),
        'service' => array('type' => 'textarea'),
        'note' => array('type' => 'textarea'),
        "status" => ""

    );

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function fields()
    {
        return $this->data_fields;
    }

    function get_item_by_id($id=0){
        return $this->db->where('id',$id)->get($this->table)->row();
    }

    function check_exist($number,$id){
        if( !is_numeric($id) ){
            $id = 0;
        }
        $this->db->where('number',$number)
            ->where('id <>',$id);
        $result = $this->db->get($this->table);
        return ( $result->num_rows() > 0) ? true : false;
    }

    function update($data=NULL){
        
        if( !isset($data['id']) ){
            $data['id'] = 0;
        }

        if( $this->check_exist($data['number'],$data['id']) ){
            set_error('Dupplicate Massage Staff');
            return false;
        } elseif( intval($data['id']) > 0 ) {
            $data['modified'] = date("Y-m-d H:i:s");
            $id = $data['id']; 
            unset($data['id']);
            $this->db->where('id',$id)->update($this->table,$data);
        } else {
            $data['created'] = date("Y-m-d H:i:s");
            $this->db->insert($this->table,$data);
            $id = $this->db->insert_id();
        }
        return $id;
    }

    function items_json($massage_id=0){
        $this->db->select('id, number, body, rate')->where("massage",$massage_id);
        $this->db->order_by('id DESC');
        $query = $this->db->get($this->table);
        $items = array();
        foreach ($query->result() AS $ite){
            $ite->actions = "";
            $items[] = $ite;
        }
        return jsonData(array('data'=>$items));
    }
}