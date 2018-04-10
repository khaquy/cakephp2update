<?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
 <div class="form-group">
 <label>Username</label>
 <?php echo $this->Form->input('username', array('class'=>'form-control')); ?> 
 </div>
 <div class="form-group">
 <label>Mật khẩu</label>
 <?php echo $this->Form->input('password', array('class'=>'form-control')); ?>
 </div>
 
 <button id="linkUpdate" type="submit" class="btn btn-success">Save</button>
 <button type="button" onclick="window.location.href='/admin/user/list'" class="btn btn-info">Danh sách</button>
 <?php echo $this->Form->end();?>