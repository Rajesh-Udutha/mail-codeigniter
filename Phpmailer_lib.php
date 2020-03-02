<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter PhpMailer Class
 * 
 * This Class can enables SMTP with PHPMailer
 * 
 * @category Libraries
 */

//use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Phpmailer_lib
{
    public function __construct()
    {
        
    }
    
    public  function load()
    {
        include_once APPPATH.'third_party/PHPMailer/Exception.php';
        include_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
        include_once APPPATH.'third_party/PHPMailer/SMTP.php';
        
       
        $mail = new PHPMailer;
        $mail = $this->getSMTPConfig($mail);
     
        
        
        return $mail;
    }
    
    
    public function getSMTPConfig($mail)
    {
        //$config = Widget::loadMailConfigValue('mail');
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'username';
        $mail->Password = 'password';
        $mail->SMTPSecure = 'tls';
     //   $mail->Port = 587;
	    $mail->Port = 465;
        return $mail;
    }
}
