<?php
// src/Template/Languages/search.ctp
echo $this->Html->script('search.js', ['block' => true]);
?>

<?= $this->Form->create($countries) ?>
<?= $this->Form->control('name', ['url' => 'countries/search']) ?>
<?= $this->Form->end() ?>



<?php
$options = ['$countries' => 'countries', 'F' => 'Female'];
echo $this->Form->select('gender', $options, ['empty' => true]);
?>