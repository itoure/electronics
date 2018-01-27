<?php $view->extend('::base.html.twig') ?>

<?php $view['slots']->set('title', 'AppBundle:Products:list') ?>

<?php $view['slots']->start('body') ?>
    <h1>Welcome to the Products:list page</h1>
<?php $view['slots']->stop() ?>
