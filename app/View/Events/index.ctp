<?php if (!$isAjax):?><div id="newsfeed">
<h2><?php echo __('Events');?></h2><?php endif;?>
<?php foreach($events as $event):?>
<h3><?php echo h($event['Event']['title']); ?></h3>
<h4>Posted: <?php echo h($event['Event']['created']); ?></h4>
<p><?php echo nl2br(h($event['Event']['description'])); ?></p>
<hr/>
<?php endforeach; ?>
<?php if (!$isAjax):?></div><?php endif;?>
<?php if (!$isAjax):?>
<div>
<h3><?php echo __('Actions'); ?></h3>
<ul>
<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?></li>
</ul>
</div>
<?php
//echo $this->Html->script('jquery', false);
 echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js&#8217'); 



		echo $this->Html->script('//code.jquery.com/jquery-1.10.2.min.js');
		echo $this->Html->script('//code.jquery.com/ui/1.10.4/jquery-ui.min.js');
		echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js');
// $maxPage = $this->Paginator->counter('%pages%');

$maxPage = $this->Paginator->counter("page");
?>
<script type="text/javascript">
var lastX = 0;
var currentX = 0;
var page = 1;
$(window).scroll(function () {
if (page < <?php echo $maxPage;?>) {
currentX = $(window).scrollTop();
if (currentX - lastX > 200 * page) {
lastX = currentX;
page++;
$.get('events/index/page:' + page, function(data) {
$('#newsfeed').append(data);
});
}
}
});
</script>
<?php endif;?>
