<?php
/* Smarty version 3.1.30, created on 2017-03-31 14:50:38
  from "/var/www/html/cars/application/templates/adminpanel/cars/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
    'unifunc' => 'content_58de428ea6bd48_57353491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '164011807d8cacb29f4cf8f81b492014755fc8c1' => 
    array (
      0 => '/var/www/html/cars/application/templates/adminpanel/cars/index.tpl',
        1 => 1490961034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cars/brand.tpl' => 1,
    'file:cars/type_transport.tpl' => 1,
      'file:cars/colors.tpl' => 1,
      'file:cars/cars.tpl' => 1,
  ),
),false)) {
    function content_58de428ea6bd48_57353491(Smarty_Internal_Template $_smarty_tpl)
    {
?>
<div id="info">

</div>
        <div class="panel panel-default">
            <div class="panel-heading">Работа с машинами</div>

        </div>
        <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <?php $_smarty_tpl->_subTemplateRender("file:cars/brand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        <div class="col-xs-12 col-sm-4">
            <?php $_smarty_tpl->_subTemplateRender("file:cars/type_transport.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div class="col-xs-12 col-sm-4">
            <?php $_smarty_tpl->_subTemplateRender("file:cars/colors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
            ?>

        </div>
            <div class="col-xs-12 col-sm-12">
                <?php $_smarty_tpl->_subTemplateRender("file:cars/cars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
    <div class="panel-footer">
        Test
    </div>
</div><?php }
}
