<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class HomesTable extends Table
{
    public static function testConnectionName() {
        return 'replica_db';
    }
   
    public function initialize(array $config)
    {
        parent::initialize($config);

       
    }

   
    public function validationDefault(Validator $validator)
    {
      

        return $validator;
    }

    
    
}
