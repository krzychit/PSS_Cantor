<?php
/* Smarty version 4.3.4, created on 2024-06-15 04:37:15
  from 'C:\Users\Maja\Desktop\PSS\XAMPP\htdocs\cantor\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666cfe5b73c863_25194447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b62d289877c6cea894a3b6d77ef16130a9cf99f' => 
    array (
      0 => 'C:\\Users\\Maja\\Desktop\\PSS\\XAMPP\\htdocs\\cantor\\app\\views\\templates\\main.tpl',
      1 => 1718419031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666cfe5b73c863_25194447 (Smarty_Internal_Template $_smarty_tpl) {
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

								<!-- Nav -->
									<nav id="nav">
										<a href="main.tpl">Strona główna</a>
										<a href="login.tpl">Zaloguj się</a>
										<a href="singup.tpl">Zarejestruj się</a>
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
                                        <!-- Login -->
                                            <div id="login">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_877818786666cfe5b73ae74_21068339', "login");
?>

                                            </div>

                                            
						<div class="row aln-center">
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1900824535666cfe5b73c0e2_95608549', 'content');
?>
  
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
/* {block "login"} */
class Block_877818786666cfe5b73ae74_21068339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_877818786666cfe5b73ae74_21068339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php
}
}
/* {/block "login"} */
/* {block 'content'} */
class Block_1900824535666cfe5b73c0e2_95608549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1900824535666cfe5b73c0e2_95608549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="col-4 col-12-medium">
                                                            
                                                            <p></p>
						</div>
                                                  <?php
}
}
/* {/block 'content'} */
}
