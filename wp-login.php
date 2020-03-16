<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="it-IT">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="it-IT">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Login &lsaquo; TortaPrint &#8212; WordPress</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='dashicons-css'  href='https://tortaprint.com/wp-includes/css/dashicons.min.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='https://tortaprint.com/wp-includes/css/buttons.min.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='https://tortaprint.com/wp-admin/css/forms.min.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='https://tortaprint.com/wp-admin/css/l10n.min.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='https://tortaprint.com/wp-admin/css/login.min.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='anr-login-style-css'  href='https://tortaprint.com/wp-content/plugins/advanced-nocaptcha-recaptcha/assets/css/style.css?ver=5.3.2' type='text/css' media='all' />
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="https://tortaprint.com/wp-content/uploads/2019/03/cropped-tortaprint_icon-32x32.jpg" sizes="32x32" />
<link rel="icon" href="https://tortaprint.com/wp-content/uploads/2019/03/cropped-tortaprint_icon-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://tortaprint.com/wp-content/uploads/2019/03/cropped-tortaprint_icon-180x180.jpg" />
<meta name="msapplication-TileImage" content="https://tortaprint.com/wp-content/uploads/2019/03/cropped-tortaprint_icon-270x270.jpg" />
	</head>
	<body class="login no-js login-action-login wp-core-ui  locale-it-it">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://it.wordpress.org/">Powered by WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="https://tortaprint.com/wp-login.php" method="post">
			<p>
				<label for="user_login">Nome utente o indirizzo email</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Password</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Mostra password">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<div class="anr_captcha_field"><div id="anr_captcha_field_1" class="anr_captcha_field_div"></div></div>			<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">Ricordami</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Login" />
									<input type="hidden" name="redirect_to" value="https://tortaprint.com/wp-admin/" />
									<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

					<p id="nav">
				<a rel="nofollow" href="https://tortaprint.com/wp-login.php?action=register">Registrati</a> | 					<a href="https://tortaprint.com/wp-login.php?action=lostpassword">Password dimenticata?</a>
								</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog"><a href="https://tortaprint.com/">
		&larr; Torna a TortaPrint		</a></p>
		<div class="privacy-policy-page-link"><a class="privacy-policy-link" href="https://tortaprint.com/privacy-policy/">Privacy Policy</a></div>	</div>
				<script type="text/javascript">
				var anr_onloadCallback = function() {
					for ( var i = 0; i < document.forms.length; i++ ) {
						var form = document.forms[i];
						var captcha_div = form.querySelector( '.anr_captcha_field_div' );

						if ( null === captcha_div )
							continue;
						captcha_div.innerHTML = '';
						( function( form ) {
							var anr_captcha = grecaptcha.render( captcha_div,{
								'sitekey' : '6LedR3wUAAAAALpbkKpGhPoAmMP9czgUossaTsxt',
								'size'  : 'normal',
								'theme' : 'light'
							});
							if ( typeof wc_checkout_params !== 'undefined' ) {
								jQuery( document.body ).on( 'checkout_error', function(){
									grecaptcha.reset(anr_captcha);
								});
							}
							if ( typeof wpcf7 !== 'undefined' ) {
								document.addEventListener( 'wpcf7submit', function() {
									grecaptcha.reset(anr_captcha);
								}, false );
							}
						})(form);
					}
				};
			</script>
						<script src="https://www.google.com/recaptcha/api.js?onload=anr_onloadCallback&#038;render=explicit"
				async defer>
			</script>
			<script type='text/javascript' src='https://tortaprint.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://tortaprint.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/tortaprint.com\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='https://tortaprint.com/wp-includes/js/zxcvbn-async.min.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Efficacia della password sconosciuta","short":"Molto debole","bad":"Debole","good":"Media","strong":"Forte","mismatch":"Mancata corrispondenza"};
/* ]]> */
</script>
<script type='text/javascript' src='https://tortaprint.com/wp-admin/js/password-strength-meter.min.js?ver=5.3.2'></script>
<script type='text/javascript' src='https://tortaprint.com/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://tortaprint.com/wp-includes/js/wp-util.min.js?ver=5.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var userProfileL10n = {"warn":"La tua nuova password non \u00e8 stata salvata.","warnWeak":"Conferma l'uso della password debole.","show":"Visualizza","hide":"Nascondi","cancel":"Annulla","ariaShow":"Mostra password","ariaHide":"Nascondi password"};
/* ]]> */
</script>
<script type='text/javascript' src='https://tortaprint.com/wp-admin/js/user-profile.min.js?ver=5.3.2'></script>
	<div class="clear"></div>
	</body>
	</html>
	