<?php if ( ! defined('BASEPATH')) exit('No direct script core allowed');

class Massage_Model extends CI_Model {
    var $table = 'massage';
    var $course_fields = array(
        'id' => array(
            'type' => 'hidden'
        ),
        "imgthumb"=>array('type' => 'file', "value"=>null),
        "images"=>array('type' => 'file', "value"=>null),
        'name' => array(
            'label' => 'Shop Name',
            'desc' => null,
            'icon' => 'send'
        ),
        'alias' => array(
            'label' => 'Alias',
            'desc' => null,
            'icon' => 'link'
        ),
        'summary' => array( 'type' => 'textarea' ),
        'price' => array( 'type' => 'textarea'),
        'address' => array( 'type' => 'textarea' ),
        'csvc' => array( 'type' => 'textarea' ),
        "service" => array( 'type' => 'textarea' ),
        'content' => array( 'type' => 'textarea' ),
        "status"=>""

    );

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function fields(){
        return $this->course_fields;
    }
    function get_item_by_id($id=0){
        return $this->db->where('id',$id)->get($this->table)->row();
    }

    function items_json($actions_allow=NULL){
        $this->db->select('id, name, alias');
        $this->db->order_by('id DESC');
        $query = $this->db->get($this->table);
        $items = array();
        foreach ($query->result() AS $ite){
            $ite->actions = "";
            $staff_count = 0;
            $ite->staff = anchor("admin/massage/staff?shop=".$ite->id,$staff_count);
            $items[] = $ite;
        }
        return jsonData(array('data'=>$items));
    }

    function update($data=NULL){
        if( !isset($data['alias']) OR  strlen($data['alias']) < 1 ){
            if( strlen($data['name']) > 0 ){
                $data['alias'] = url_title($data['name'],'-',true);
            } else {
                set_error('Please enter alias');
                return false;
            }

        }
        if( !isset($data['id']) ){
            $data['id'] = 0;
        }

        if( $this->check_exist($data['alias'],$data['id']) ){
            set_error('Dupplicate Massage Shop');
            return false;
        } elseif( intval($data['id']) > 0 ) {
            $data['modified'] = date("Y-m-d H:i:s");
            $id = $data['id']; unset($data['id']);
            $this->db->where('id',$id)->update($this->table,$data);
        } else {
            $data['created'] = date("Y-m-d H:i:s");
            $this->db->insert($this->table,$data);
            $id = $this->db->insert_id();
        }
        return $id;
    }

    function check_exist($alias,$id){
        if( !is_numeric($id) ){
            $id = 0;
        }
        $this->db->where('alias',$alias)
            ->where('id <>',$id);
        $result = $this->db->get($this->table);
        return ( $result->num_rows() > 0) ? true : false;
    }

}