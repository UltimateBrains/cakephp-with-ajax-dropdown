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
       $country = $this->Countries->find()->extract('name');
       $this->set(compact('country'));
       
       
        
    }
    public function getStates(){
    	$state = $this->States->find()->extract('name');
    	echo json_encode($state);
    }
    public function getCities(){
    	$city = $this->Cities->find()->extract('name');
    	echo json_encode($city);
    }

}
