<?php
/* @var $this EmploymentStatusController */
/* @var $model EmploymentStatus */

$this->breadcrumbs = array(
    'Employment Statuses' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List EmploymentStatus', 'url' => array('index')),
    array('label' => 'Create EmploymentStatus', 'url' => array('create')),
);
?>

<h1>Manage Employment Statuses</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'employment-status-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'itemsCssClass' => 'table table-hover',
    'columns' => array(
        'id',
        'name',
        'description',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{delete}',
            'htmlOptions' => array('width' => '90px'),
            'buttons' => array
                (
                'view' => array
                    (
                    'label' => '<i class="fa fa-eye"></i>',
                    'imageUrl' => false,
                    'options' => array(
                        'style' => 'margin-right: 3px',
                        'class' => 'btn btn-primary btn-xs tt',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'top',
                        'title' => '',
                        'data-original-title' => 'View Holiday',
                    ),
                ),
                'update' => array
                    (
                    'label' => '<i class="fa fa-pencil"></i>',
                    'imageUrl' => false,
                    'options' => array(
                        'style' => 'margin-right: 3px',
                        'class' => 'btn btn-primary btn-xs tt',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'top',
                        'title' => '',
                        'data-original-title' => 'Edit Holiday',
                    ),
                ),
                'delete' => array
                    (
                    'label' => '<i class="fa fa-times"></i>',
                    'imageUrl' => false,
                    'options' => array(
                        'class' => 'btn btn-danger btn-xs tt',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'top',
                        'title' => '',
                        'data-original-title' => 'Delete Holiday',
                    ),
                ),
            ),
        ),
    ),
    'pager' => array(
        'class' => 'CLinkPager',
        'maxButtonCount' => 5,
        'nextPageLabel' => '<i class="fa fa-step-forward"></i>',
        'prevPageLabel' => '<i class="fa fa-step-backward"></i>',
        'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
        'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
        'header' => '',
        'htmlOptions' => array('class' => 'pagination'),
    ),
    'pagerCssClass' => 'pagination-container',
));
?>
