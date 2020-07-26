<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| SendGrid Setup
|--------------------------------------------------------------------------
|
| All we have to do is configure CodeIgniter to send using the SendGrid
| SMTP relay:
*/
$config['protocol']	= 'smtp';
$config['smtp_port']	= '587';
$config['smtp_host']	= getenv('SMTP_HOST');
$config['smtp_user']	= getenv('SMTP_USER');
$config['smtp_pass']	= getenv('SMTP_PASS');
