<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		
                <title>{$page_title|default:"Tytuł domyślny"}</title>
                <meta name="description" content="{$page_description|default:"Opis domyślny"}">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$css_url|default:"css/main.css"}" />
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
                                                                        {include file="loggedin.tpl"}

								<!-- Nav -->
									<nav id="nav">
                                                                            <a href="main">Strona główna</a>
                                                                                {if !isset ($user)}										
                                                                                    <a href="loginShow">Zaloguj się</a>
                                                                                    <a href="registerShow">Zarejestruj się</a>
                                                                                    {else}
                                                                                        {if $user['role'] == 'Admin'}
                                                                                            <a href="addUserShow">Dodaj użytkownika</a>
                                                                                            <a href="usersList">Lista użytkowników</a>
                                                                                        {/if}
                                                                                    <a href="logout">Wyloguj się</a>
                                                                                {/if}
                                                                                
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
                                                {block "content"}
                                                    {foreach from=$currencies item=currency}
                                                        <div>
                                                        <div>{$currency['currencyname']} [ {$currency['currencycode']} ]</div>
                                                    <div>$ {$currency['priceindollars']}</div>
                                                </div>
                                            {/foreach}
                                            {include "exchangecurrency.tpl"}
                                                {/block}
                                            </div>
                                            {if count($msgs->getMessages()) > 0}
                                                <div id="errors">
                                                    {foreach $msgs->getMessages() as $msg}
                                                        <p>{$msg->text}</p>
                                                    {/foreach}
                                                </div>
                                            {/if}
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
        
</html>