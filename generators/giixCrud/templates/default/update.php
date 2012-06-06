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
	GxHtml::valueEx(\$model) => array('view', 'id' => GxActiveRecord::extractPkValue(\$model, true)),
	'Update',
);\n";
?>

$this->menu = array(
	array('label' => 'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label' => 'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label' => 'View' . ' ' . $model->label(), 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => 'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo '<?php'; ?> echo 'Update' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php echo "<?php\n"; ?>
$this->renderPartial('_form', array(
		'model' => $model));
?>