<?php echo $header; ?>

<hgroup class="wrap">
	<h1><?php echo $info['name']; ?></h1>
</hgroup>

<section class="wrap">
	<fieldset class="split">
		<p><?php echo $info['description']; ?></p>
		<p><code>Version <?php echo $info['version']; ?></code></p>
	</fieldset>

	<aside class="buttons">
	<?php if($plugin): ?>
	<?php echo Html::link('admin/extend/plugins/' . $info['path'] . '/uninstall', 'Uninstall', array('class' => 'btn red delete')); ?>
	<?php else: ?>
	<?php echo Html::link('admin/extend/plugins/' . $info['path'] . '/install', 'Install', array('class' => 'btn')); ?>
	<?php endif; ?>
	<?php echo Html::link('admin/extend/plugins', 'Return to plugins', array('class' => 'btn blue')); ?>
	</aside>
</section>

<?php echo $footer; ?>