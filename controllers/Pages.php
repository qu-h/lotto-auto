<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller
{
    function __construct()
    {
        $this->load->module('Layouts');
        $this->template->set_layout('bootstrap');
        $this->createStore();
    }
	public $numbersCheck = [];

    function home()
    {
    	$data = ['number' =>'' ,'totalCal'=>[],'chamCal'=>[]];
    	if( $this->input->post() ){
    		$number = $this->input->post("number");
    		$numbers = explode(" ", $number);
    		if( !empty($numbers) ){
    			foreach ($numbers as $key => $value) {
    				$numbers[$key] = str_split($value);
    				if( count($numbers[$key]) > 0 ){
    					$data["totalCal"][] = $this->calculator($numbers[$key]);
	    				// $numbers[$key."_exits"] = $this->calculator($numbers[$key]);
	    				$data["chamCal"][] = $this->calculatorTotal($numbers[$key]);
	    			}
    			}

    		}
    		$data['number'] = $number;
    	}
        temp_view('coupbal',$data);
    }


    private function createStore(){
    	for( $i=0;$i<10;$i++ ){
    		for( $y=0;$y<10;$y++ ){
    			$this->numbersCheck[] = "$i$y";
    		}
    	}
    }
    private function calculator($locking=[]){
    	$items = [];
    	
    	foreach ($locking as $num) {
    		if( is_numeric($num) ){
				foreach ($this->numbersCheck AS $value) {
					if (strpos($value, $num) !== false && !in_array($value, $items)) {
						$items[] = $value;
					}
				}
    		}
    	}
    	return implode(",", $items);
    }

    private function calculatorTotal($locking=[]){
    	$items = [];
    	
    	foreach ($locking as $num) {
    		if( is_numeric($num) ){
				foreach ($this->numbersCheck AS $value) {
					$total = array_sum(str_split($value));
					if( $total > 10 ){
						$total -= 10;
					}

					if ($total ==$num && !in_array($value, $items)) {
						$items[] = $value;
					}
				}
    		}
    	}
    	return implode(",", $items);
    }

}