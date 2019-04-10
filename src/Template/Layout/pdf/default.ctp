<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    
    
    <?= $this->Html->script('jquery.min.js') ?>
   <?php echo $this->Html->css('certi_style.css', ['fullBase' => true]); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
<div id="background">
 <div id="layer_1"><?php echo $this->Html->image('layer_1.png', ['fullBase' => true]); ?></div>
 <div id="layer_2"><?php echo $this->Html->image('layer_2.png', ['fullBase' => true]); ?></div>
 <div id="layer_3"><?php echo $this->Html->image('layer_3.png', ['fullBase' => true]); ?></div>
 <div id="layer_4"><?php echo $this->Html->image('layer_4.png', ['fullBase' => true]); ?></div>
 <div id="layer_5"><?php echo $this->Html->image('layer_5.png', ['fullBase' => true]); ?></div>
 <div id="layer_6"><?php echo $this->Html->image('layer_6.png', ['fullBase' => true]); ?></div>
 <div id="W"><?php echo $this->Html->image('W.png', ['fullBase' => true]); ?></div> 
 <div id="YourName"><?php echo $this->Html->image('YourName.png', ['fullBase' => true]); ?></div>
 <div id="layer_8"><?php echo $this->Html->image('layer_8.png', ['fullBase' => true]); ?></div>
 <div id="Inrecognitionofoutst"><?php echo $this->Html->image('Inrecognitionofoutst.png', ['fullBase' => true]); ?></div>
 <div id="OfAchievement"><?php echo $this->Html->image('OfAchievement.png', ['fullBase' => true]); ?></div>                   
 <div id="Thiscertificateispro"><?php echo $this->Html->image('Thiscertificateispro.png', ['fullBase' => true]); ?></div>            
 <div id="CERTIFICATE"><?php echo $this->Html->image('CERTIFICATE.png', ['fullBase' => true]); ?></div>             
 <div id="layer_13"><?php echo $this->Html->image('layer_13.png', ['fullBase' => true]); ?></div>
 <div id="DATE"><?php echo $this->Html->image('DATE.png', ['fullBase' => true]); ?></div>        
<div id="layer_15"><?php echo $this->Html->image('layer_15.png', ['fullBase' => true]); ?></div>   
<div id="SIGNATURE"><?php echo $this->Html->image('SIGNATURE.png', ['fullBase' => true]); ?></div>   
<div id="layer_17"><?php echo $this->Html->image('layer_17.png', ['fullBase' => true]); ?></div>
<div id="layer_18"><?php echo $this->Html->image('layer_18.png', ['fullBase' => true]); ?></div>
<div id="layer_19"><?php echo $this->Html->image('layer_19.png', ['fullBase' => true]); ?></div>
</div>
    </div>
    <footer>
    </footer>
   
</body>
</html>
