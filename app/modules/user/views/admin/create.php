<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('admin'),
    UserModule::t('Create'),
);

$this->menu = array(
    array('label' => UserModule::t('Manage Users'), 'url' => array('admin')),
);
?>
    <h1><?php echo UserModule::t("Create User"); ?></h1>

<?php
echo $this->renderPartial('_form', array('model' => $model));
?>