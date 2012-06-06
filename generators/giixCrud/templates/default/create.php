<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n
\$this->breadcrumbs = array(
	\$model->label(2) => array('index'),
	'Create',
);\n";
?>

$this->menu = array(
	array('label'=>'List' . ' ' . $model->label(2), 'url' => array('index')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url' => array('admin')),
);
?>

<h1><?php echo '<?php'; ?> echo 'Create' . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php echo "<?php\n"; ?>
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
<?php echo '?>'; ?>