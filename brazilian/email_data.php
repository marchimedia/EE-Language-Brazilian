<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
Algu&eacute;m assinou sua lista de e-mail
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Uma nova ssinatura da lista de e-mail foi aceita.

Endere&ccedil;o de Email: {email}
Lista de Email: {mailing_list}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Uma nova mat&eacute;ria foi publicada
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Uma nova mat&eacute;ria foi publicada na seguinte se&ccedil;&atilde;o:
{weblog_name}

O t&iacute;tulo da mat&eacute;ria &eacute;:
{entry_title}

Publicada por: {name}
Email: {email}

Para ler a mat&eacute;ria por favor visite: 
{entry_url}

EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Aviso de um novo registro de membro
EOF;
}

function admin_notify_reg()
{
return <<<EOF
A seguinte pessoa enviou um novo registro de membro: {name}

Em: {site_name}

Endere&ccedil;o do seu painel de controle: {control_panel_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Voc&ecirc; recebeu um coment&aacute;rio
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Voc&ecirc; recebeu um coment&aacute;rio na seguinte se&ccedil;&atilde;o:
{weblog_name}

O t&iacute;tulo da mat&eacute;ria &eacute;:
{entry_title}

Localizado em: 
{comment_url}

Publicado por: {name}
E-mail: {email}
Endere&ccedil;o: {url}
Lugar: {location}

{comment}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Voc&ecirc; recebeu um trackback
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Voc&ecirc; recebeu um trackback para a seguinte mat&eacute;ria:
{entry_title}

Localizado em: 
{comment_url}

O trackback foi enviado para o seguinte blog:
{sending_weblog_name}

T&iacute;tulo da mat&eacute;ria:
{sending_entry_title}

Endere&ccedil;o do Blog:
{sending_weblog_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Logo abaixo encontra-se seu c&oacute;digo de ativa&ccedil;&atilde;o
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Obrigado pelo seu registro de membro.

Para ativar sua nova conta, por favor visite o seguinte endere&ccedil;o:

{unwrap}{activation_url}{/unwrap}

Obrigado!

{site_name}

{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Informa&ccedil;&atilde;o de Login
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
{name},

Para resetar sua senha, por favor v&aacute; para a seguinte p&aacute;gina:

{reset_url}

Sua senha ser&aacute; automaticamente resetada, e uma nova senha ser&aacute; enviada por e-mail para voc&ecirc;.

Se voc&ecirc; n&atilde;o gostaria de resetar sua senha, por favor ignore esta mensagem. Ela ir&aacute; expirar em 24 horas.

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Nova informa&ccedil;&atilde;o de Login
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

Aqui est&atilde;o suas novas informa&ccedil;&otilde;es de login:

Usu&aacute;rio: {username}
Senha: {password}

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Sua conta de membro foi ativada
EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

Sua conta de membro foi ativada e est&aacute; pronta para uso.

Obrigado!

{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Sua conta de membro n&atilde;o foi aceita
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

Desculpe, mas nossa equipe n&atilde;o aprovou sua conta de membro.

{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
Confirma&ccedil;&atilde;o de E-mail
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Obrigado por assinar nossa lista de e-mail "{mailing_list}"!

Por favor clique no link abaixo para confirmar seu e-mail.

Se voc&ecirc; n&atilde;o gostaria de ser adicionado em nossa listagem, por favor ignore este email.

{unwrap}{activation_url}{/unwrap}

Obrigado!

{site_name}
EOF;
}
/* END */



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
Algu&eacute;m respondeu ao seu coment&aacute;rio
EOF;
}

function comment_notification()
{
return <<<EOF
Algu&eacute;m respondeu &agrave; mat&eacute;ria que voc&ecirc; assinou em:
{weblog_name}

O t&iacute;tulo da mat&eacute;ria &eacute;:
{entry_title}

Voc&ecirc; pode verificar o coment&aacute;rio no seguinte endere&ccedil;o:
{comment_url}

{comment}

Para parar de receber avisos sobre este coment&aacute;rio, clique aqui:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Voc&ecirc; recebeu um coment&aacute;rio
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Voc&ecirc; recebeu um coment&aacute;rio para a seguinte galeria de fotos:
{gallery_name}

O t&iacute;tulo da entrada &eacute;:
{entry_title}

Localizada em: 
{comment_url}

{comment}
EOF;
}
/* END */

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
Algu&eacute;m respondeu ao seu coment&aacute;rio
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Algu&eacute;m respondeu &agrave; entrada na galeria de fotos que voc&ecirc; assinou em:
{gallery_name}

Voc&ecirc; pode ver o coment&aacute;rio no seguinte endere&ccedil;o:
{comment_url}

{comment}

Para parar de receber avisos sobre este coment&aacute;rio por favor clique aqui:
{notification_removal_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Algu&eacute;m publicou em {forum_name}
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name} enviou uma nova publica&ccedil;&atilde;o em {forum_name}

O t&iacute;tulo do assunto &eacute;:
{title}

O assunto pode ser localizado em:
{post_url}

{body}
EOF;
}
/* END */


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Algu&eacute;m publicou em {forum_name}
EOF;
}

function forum_post_notification()
{
return <<<EOF
Algu&eacute;m publicou em um assunto que voc&ecirc; assinou em:
{forum_name}

O t&iacute;tulo do assunto &eacute;:
{title}

O t&oacute;pico pode ser visualizado em:
{post_url}

{body}

Para parar de receber avisos sobre este coment&aacute;rio, por favor clique aqui:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Algu&eacute;m enviou para voc&ecirc; uma Mensagem Privada
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} enviou para voc&ecirc; uma mensagem privada intitulada  '{message_subject}'.

Voc&ecirc; pode checar a Mensagem Privada logando e verificando sua caixa de entrada em:
{site_url}

Para parar de receber avisos de Mensagens Privadas, desative esta op&ccedil;&atilde;o nas suas Configura&ccedil;&otilde;es de E-mail.
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
Sua caixa de mensagens privadas est&aacute; cheia
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} tentou enviar para voc&ecirc; uma Mensagem Privada,
mas sua Caixa de Entrada est&aacute; cheia, excedendo o limite m&aacute;ximo de armazenamento de {pm_storage_limit}.

Por favor efetue seu logion e remova as mensagens antigas ou indesejadas da sua Caixa de Entrada em:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Aviso de Modera&ccedil;&atilde;o em {forum_name}
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, um moderador {moderation_action} seu assunto.

O t&iacute;tulo do assunto &eacute;:
{title}

O assunto pode ser localizado em:
{thread_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Publica&ccedil;&atilde;o relatada em {forum_name}
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name} relatou uma publica&ccedil;&atilde;o escrita por {author} em:
{forum_name}

Motivo para o relat&oacute;rio:
{reasons}

Notas adicionais de {reporter_name}:
{notes}

A publica&ccedil;&atilde;o pode ser localizada em:
{post_url}

Conte&uacute;do da publica&ccedil;&atilde;o relatada:
{body}
EOF;
}
/* END */


/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

function offline_template()
{
return <<<EOF
<html>
<head>

<title>System Offline</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>System Offline</h1>

<p>This site is currently offline</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

function message_template()
{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

To remove your email from this mailing list, click here:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */


?>