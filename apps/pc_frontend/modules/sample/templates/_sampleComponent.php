 <?php
 $form->getWidget('content')->setAttribute('rows', 2);
 $form->getWidget('content')->setAttribute('cols', 40);
 $options = array('title' => 'My News');
 ?>
<?php slot('my_news') ?>
<?php echo $form->renderFormTag(url_for('sample/updateNews') ,array('method' => 'post')) ?>
<?php echo $form->renderHiddenFields() ?>
<?php echo $form['content']->render() ?>
<input type="submit" />
</form>
<?php end_slot('my_news'); ?>
<?php op_include_box('MyNews', get_slot('my_news'), $options);
