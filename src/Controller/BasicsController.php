<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


class BasicsController extends AppController
{
	public function initialize(){
       parent :: initialize();

       $this->loadModel("Basics");
      
    } 	
	public function index(){
	    
       
        if($this->request->is('post')){
           $basic = $this->Basics->newEntity($this->request->getData());
      	   $form_data = $this->request->data;
      	   $basic->languages = implode('',($form_data['languages']));

      	
      	   $this->Basics->save($basic);
           $this->Flash->set("checked values has been added successfully",[
                        "element"=>"success"
                    ]);
        }
		
            
    }
}