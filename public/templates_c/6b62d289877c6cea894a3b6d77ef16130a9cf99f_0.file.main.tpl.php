<?php
/* Smarty version 4.3.4, created on 2024-06-18 01:33:22
  from 'C:\Users\Maja\Desktop\PSS\XAMPP\htdocs\cantor\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6670c7c2bdeab2_00778793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b62d289877c6cea894a3b6d77ef16130a9cf99f' => 
    array (
      0 => 'C:\\Users\\Maja\\Desktop\\PSS\\XAMPP\\htdocs\\cantor\\app\\views\\templates\\main.tpl',
      1 => 1718667199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loggedin.tpl' => 1,
  ),
),false)) {
function content_6670c7c2bdeab2_00778793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		
                <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
                <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Logo -->
									<h1><a href="main.tpl" id="logo">Kantor</a></h1>
                                                                        <?php $_smarty_tpl->_subTemplateRender("file:loggedin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

								<!-- Nav -->
									<nav id="nav">
                                                                            <a href="main">Strona główna</a>
                                                                                <?php if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>										
                                                                                
                                                                                    <a href="loginShow">Zaloguj się</a>
                                                                                
                                                                                    <a href="registerShow">Zarejestruj się</a>

                                                                                    <?php } else { ?>

                                                                                    <a href="logout">Wyloguj się</a>

                                                                                <?php }?>
                                                                        </nav>

							</div>
						</div>
					</div>
					<div id="banner">
						<div class="container">
							<div class="row">
								<div class="col-6 col-12-medium">

									<!-- Banner Copy -->
										<p>TU MOZE BYC TWOJA REKLAMA</p>
								</div>
								<div class="col-6 col-12-medium imp-medium">
                                                                    
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

							</div>
						</div>
					</div>
				</section>

			<!-- Content -->
				<section id="content">
                                    
					<div class="container">
                                        <!-- Content by me -->
                                            <div id="content">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12761973546670c7c2bd3479_28112756', "content");
?>

                                            </div>



                                            <?php if (count($_smarty_tpl->tpl_vars['msgs']->value->getMessages()) > 0) {?>
                                                <div id="errors">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            <?php }?>
					</div>
                                        
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">

								<!-- Links -->
									<section>
									
									</section>

							</div>
							<div class="col-4 col-12-medium imp-medium">

								<!-- Informacje o stronie -->
									<section>
										<h2>Informacje o stronie:</h2>
										<p>
											Aplikacja "Cantor" została stworzona na potrzeby zaliczenia modułu.<br />
                                                                                        

										</p>
									</section>

							</div>
						</div>
					</div>
				</section>

			<!-- Copyright -->
				<div id="copyright">
					&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
				</div>

		</div>

	</body>
        
</html><?php }
/* {block "content"} */
class Block_12761973546670c7c2bd3479_28112756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12761973546670c7c2bd3479_28112756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                        <div>
                                                        <div><?php echo $_smarty_tpl->tpl_vars['currency']->value['currencyname'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['currency']->value['currencycode'];?>
 ]</div>
                                                    <div>$ <?php echo $_smarty_tpl->tpl_vars['currency']->value['priceindollars'];?>
</div>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php
}
}
/* {/block "content"} */
}
