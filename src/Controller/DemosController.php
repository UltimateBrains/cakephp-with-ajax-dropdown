<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Demos Controller
 *
 *
 * @method \App\Model\Entity\Demo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemosController extends AppController
{

    public function initialize()
    {
        
       

        $this->loadModel('Countries');
        $this->loadModel('States');
        $this->loadModel('Cities');
    }
    


        
    
    public function getstatess() {
        $statess = array();
        if (isset($this->request['data']['id'])) {
            $statess = $this->Countries->States->find('list', array(
                'fields' => array(
                    'id',
                    'states_name',
                ),
                'conditions' => array(
                    'states.countries_id' => $this->request['data']['id']
                )
            ));
        }
        header('Content-Type: application/json');
        echo json_encode($statess);
        exit();
    }
    //www.techsofttutorials.com
    // free latest programming technology tutorials and demo.
    public function index() {
        $countries = $this->Countries->find('list', array(
            'fields' => array(
                'id',
                'countries_name',
            ),
        ));
        $this->set('countries', $countries);
    }

    public function getCities() {
        $cities = array();
        if (isset($this->request['data']['id'])) {
            $cities = $this->Countries->States->City->find('list', array(
                'fields' => array(
                    'id',
                    'city_name',
                ),
                'conditions' => array(
                    'City.states_id' => $this->request['data']['id']
                )
            ));
        }
        header('Content-Type: application/json');
        echo json_encode($cities);
        exit();
    }

}
