<?php
/* Smarty version 4.3.4, created on 2024-06-15 21:52:51
  from 'C:\Users\Maja\Desktop\PSS\XAMPP\htdocs\cantor\app\views\singup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666df1134ca9b6_45099277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8fcb092650bbd974e8830407655108b2cd713c5' => 
    array (
      0 => 'C:\\Users\\Maja\\Desktop\\PSS\\XAMPP\\htdocs\\cantor\\app\\views\\singup.tpl',
      1 => 1718481104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666df1134ca9b6_45099277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_733690021666df1134c25f3_34161952', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_733690021666df1134c25f3_34161952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_733690021666df1134c25f3_34161952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="register" method="post">
        <div class="input">
            <label for="name">Imię</label>
            <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" />
        </div>

        <div class="input">
            <label for="surname">Nazwisko</label>
            <input type="text" id="surname" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" />
        </div>

        <div class="input">
            <label for="city">Miasto</label>
            <input type="text" id="city" name="city" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->city;?>
" />
        </div>

        <div class="input">
            <label for="username">Nazwa użytkownika</label>
            <input type="text" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
" />
        </div>

        <div class="input">
            <label for="password">Hasło</label>
            <input type="password" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" />
        </div>

        <div class="input">
            <label for="confirm_password">Powtórz hasło</label>
            <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->confirm_password;?>
" />
        </div>

        <div class="input">
            <input type="submit" value="Zarejestruj" />
        </div>
    </form>
<?php
}
}
/* {/block "content"} */
}
