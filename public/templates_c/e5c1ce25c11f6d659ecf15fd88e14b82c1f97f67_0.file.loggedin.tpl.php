<?php
/* Smarty version 4.3.4, created on 2024-06-18 01:36:52
  from 'C:\Users\Maja\Desktop\PSS\XAMPP\htdocs\cantor\app\views\loggedin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670c894a6ff72_53590661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5c1ce25c11f6d659ecf15fd88e14b82c1f97f67' => 
    array (
      0 => 'C:\\Users\\Maja\\Desktop\\PSS\\XAMPP\\htdocs\\cantor\\app\\views\\loggedin.tpl',
      1 => 1718667277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6670c894a6ff72_53590661 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
    <div id="loggedin" style="color:blue;background-color:red">
        Zalogowano jako: <?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>

    </div>
        <?php } else { ?>
    <div id="loggedin" style="color:blue;background-color:red">
        Niezalogowany
    </div>
<?php }
}
}
