<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


class HomesController extends AppController
{
    public function initialize(){
       parent :: initialize();

       $this->loadModel("Countries");
       $this->loadModel("States"); 
       $this->loadModel("Cities");
    } 
    public function index(){
        $country = $this->Countries->find("all");
       // $country = $query->all();
       // $this->set(compact('country'));
        $this->set("country",$country);

    }

    public function statess(){
        $this->request->allowMethod('ajax');
      
        $country_id = $this->request->query('country_id');
     
        $state = $this->States->find()->select('name')->where(['country_id'=> $country_id]);
        
        return $this->response
            ->withType('application/json')
            ->withStringBody(json_encode([
              'state' => $state,
              
            ]));     
    }

    public function getCities($state_id){
         $state = $this->Cities->find()->select('name')->where(['state_id =' => $state_id]);
        return $this->response
          ->withType('application/json')
          ->withStringBody(json_encode([
            'state' => $state,
           
        ]));
    }
   

}
