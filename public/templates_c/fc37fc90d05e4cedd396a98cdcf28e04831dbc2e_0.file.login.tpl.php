<?php
/* Smarty version 4.3.4, created on 2024-06-15 20:20:06
  from 'C:\Users\Maja\Desktop\PSS\XAMPP\htdocs\cantor\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ddb56b636f5_95413455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc37fc90d05e4cedd396a98cdcf28e04831dbc2e' => 
    array (
      0 => 'C:\\Users\\Maja\\Desktop\\PSS\\XAMPP\\htdocs\\cantor\\app\\views\\login.tpl',
      1 => 1718475517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ddb56b636f5_95413455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1893699914666ddb56b5c278_94178831', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1893699914666ddb56b5c278_94178831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1893699914666ddb56b5c278_94178831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="login" method="post">
        <div class="input">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
        </div>

        <div class="input">
            <label for="password">Hasło</label>
            <input type="password" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" />
        </div>

        <div class="input">
            <input type="submit" value="Zaloguj" />
        </div>
    </form>
<?php
}
}
/* {/block "content"} */
}
