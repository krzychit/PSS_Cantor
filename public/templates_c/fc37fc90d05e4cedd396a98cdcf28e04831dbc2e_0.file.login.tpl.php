<?php
/* Smarty version 4.3.4, created on 2024-06-15 05:11:32
  from 'C:\Users\Maja\Desktop\PSS\XAMPP\htdocs\cantor\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666d0664061fe1_44095499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc37fc90d05e4cedd396a98cdcf28e04831dbc2e' => 
    array (
      0 => 'C:\\Users\\Maja\\Desktop\\PSS\\XAMPP\\htdocs\\cantor\\app\\views\\login.tpl',
      1 => 1718418858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666d0664061fe1_44095499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1453926673666d066405d6e7_53810019', "login");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "login"} */
class Block_1453926673666d066405d6e7_53810019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_1453926673666d066405d6e7_53810019',
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
/* {/block "login"} */
}
