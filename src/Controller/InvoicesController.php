<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
    

class InvoicesController extends AppController
{
        // In your Invoices controller you could set additional configs,
        // or override the global ones:

    public function initialize(){
       parent :: initialize();

       $this->loadModel("Cities");
       $this->loadComponent('RequestHandler');
      
    }   




        public function view($id = 3)
        {
            $invoice = $this->Cities->get($id);
            $this->viewBuilder()->options([
                'pdfConfig' => [
                    'orientation' => 'portrait',
                    'filename' => 'Invoice_' . $id
                ]
            ]);
            $this->viewBuilder()->setClassName('CakePdf.Pdf');
            $this->set('invoice', $invoice);
        }
    }
?>