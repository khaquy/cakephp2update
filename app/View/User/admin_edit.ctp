<?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
<div class="form-group">
<label>Username</label>
<?php echo $this->Form->input('username', array('class'=>'form-control')); ?>
</div>
<div class="form-group">
<label>password</label>
<?php echo $this->Form->input('password', array('class'=>'form-control')); ?>
</div>
<button type="submit" class="btn btn-default">Save</button>
<?php echo $this->Form->end();?>
