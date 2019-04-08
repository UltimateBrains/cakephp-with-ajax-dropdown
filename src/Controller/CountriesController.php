<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Countries Controller
 *
 * @property \App\Model\Table\CountriesTable $Countries
 *
 * @method \App\Model\Entity\Country[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CountriesController extends AppController
{

    public $base_url;

    public function initialize(){
       parent :: initialize();
       
       $this->base_url = Router::url("/",true);

      
    } 
    public function index()
    {
       
        $countries = $this->paginate($this->Countries);

        $this->set(compact('countries'));
    }

    /**
     * View method
     *
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => []
        ]);

        $this->set('country', $country);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $country = $this->Countries->newEntity();
        if ($this->request->is('post')) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('The country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country could not be saved. Please, try again.'));
        }
        $this->set(compact('country'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $country = $this->Countries->patchEntity($country, $this->request->getData());
            if ($this->Countries->save($country)) {
                $this->Flash->success(__('The country has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The country could not be saved. Please, try again.'));
        }
        $this->set(compact('country'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Country id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $country = $this->Countries->get($id);
        if ($this->Countries->delete($country)) {
            $this->Flash->success(__('The country has been deleted.'));
        } else {
            $this->Flash->error(__('The country could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function search(){
        $this->request->allowMethod('ajax');
      
        $keyword = $this->request->query('keyword');
        
        $query = $this->Countries->find('all',[
              'conditions' => ['name LIKE'=>'%'.$keyword.'%'],
              'order' => ['name'=>'DESC'],
              'limit' => 10
        ]);
        $this->set('countries', $this->paginate($query));
        $this->set('_serialize', ['countries']);
    }
    public function export()
    {
        
        $data = $this->Countries->find()->toArray();;
        $_header = ['ID', 'Name'];
        $_serialize = 'data';

        $this->viewBuilder()->setClassName('CsvView.Csv');
        $this->set(compact('data','_header', '_serialize'));
    }
    public function certificateView(){
        $this->set("baseurl",$this->base_url);

    }
     public function exportpdf()
        {
            $invoice = $this->Countries->find();
            $this->viewBuilder()->setClassName('CakePdf.Pdf');
            $this->viewBuilder()->options([
                'pdfConfig' => [
                    'download'=> false,
                   
                    'orientation' => 'portrait',
                    'filename' => 'certificate_'
                ],
                'options' => [
                'print' => true,
                'outline' => true,
                'dpi' => 96
            ],
            ]);
            $this->set('invoice', $invoice);
        }

        public function exportexcel(){

            $datatbl ='';
            $datatbl = '<table cellspacing="2" cellpadding="5" style="border:2px; text-align:center; width:60%; border:3;">';

            $datatbl .= '<tr>
                        <th style="text-align:center;">Sr. No.</th>
                        <th style="text-align:center;">Name</th>
                        </tr>';

            $country = $this->Countries->find();
            foreach ($country as $country) {
                 
                 $id = $country['id'];
                 $name = $country['name'];
                 $datatbl .= '<tr>
                        <th style="text-align:center;">'.$id.'</th>
                        <th style="text-align:center;">'.$name.'</th>
                        </tr>';
             }
             $datatbl .= '</table>';
             // Excel Export
             header('Content-Type: application/force-download');
             header('Content-disposition:attachment;filename=general_order_detail_list.xls');
             header('Pragm:');
             header('Cache-Control: ');
             echo $datatbl;
             die;

        }

}
