<?php

namespace Helilabs\FlashMessages;

use Illuminate\Support\HtmlString;

class FlashMessages{

	protected $types = ['info','warning','success','danger'];
	
	protected $type ='info';
	protected $message;
	private $hasFlash = false;

	public function setType($type){
		$this->type = $type;
		return $this;
	}

	public function setMessage($message){
		$this->message = $message;
		return $this;
	}

	public function create(){
		if(!in_array($this->type, $this->types)){
			$this->type = 'info';
		}
		if(!empty($this->message)){
			session()->flash('flash-'.$this->type,$this->message);
		}
	}

	public function get(){
		$htmlString = '';
		foreach($this->types as $type){
			if(session()->has('flash-'.$type)){
				
				$this->hasFlash = true;
				$htmlString .= $this->alertWrapper($type,session()->get('flash-'.$type));
			}			
		}
		if($this->hasFlash){
			return new HtmlString($htmlString);
		}
	}

	public function alertWrapper($type,$message){
		return view('Helilabs\FlashMessages::view',[
				'type'=>'alert-'.$type,
				'message' => $message,
			]);
	}

}