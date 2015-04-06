<?php
/**
 * @File: remind.php
 * @Author: Kondin Dmitry
 * @Date: 15.05.06 10:03
 * @Description: Class library for remind password
 */
class Remind extends User_Object {
      /**
       * Constructor of the class
       * @param void
       * @return void
       */
      function Remind () {
      	
          $this->SiteBill();
      }
      
      /**
       * Main
       */
      function main () {
      	if(isset($_POST['submit'])){
      		$user_array=$this->getUserId(trim($this->getRequestValue('login')), trim($this->getRequestValue('email')));
      		
      		if($user_array){
      			$code=$this->addPasswordRecovery($user_array['user_id']);
      			/*require_once (SITEBILL_DOCUMENT_ROOT.'/apps/system/lib/system/mailer/mailer.php');
				$mailer = new Mailer();*/
				$message=sprintf(Multilanguage::_('REMIND_PASSWORD_BODY','system'),$_SERVER['HTTP_HOST'],'<a href="http://'.$_SERVER['HTTP_HOST'].SITEBILL_MAIN_URL.'/remind/?recovery_code='.$code.'">http://'.$_SERVER['HTTP_HOST'].SITEBILL_MAIN_URL.'/remind/?recovery_code='.$code.'</a>');
				
				$subject = sprintf(Multilanguage::_('REMIND_PASSWORD_TITLE','system'),$_SERVER['HTTP_HOST']);
				//echo '<pre>';
				//print_r($user_array);
				//echo '</pre>';
				$to = trim($user_array['email']);
				//echo "to = $to<br>";
				$from = $this->getConfigValue('order_email_acceptor');
				/*if ( $this->getConfigValue('use_smtp') ) {
					$mailer->send_smtp($to, $from, $subject, $message, 1);
				} else {
					$mailer->send_simple($to, $from, $subject, $message, 1);
				}*/
				$this->sendFirmMail($to, $from, $subject, $message);
				$rs=sprintf(Multilanguage::_('REMIND_INSTRUCTION','system'),$to);
      		}else{
      			$rs=Multilanguage::_('NO_SUCH_USER','system');
      			$rs.=$this->getForm();
      		}
      	}elseif(isset($_REQUEST['recovery_code'])){
      		//echo 'recovery<br>';
      		$user_id=$this->checkRecoveryCode($this->getRequestValue('recovery_code'));
      		//echo 'user_id = '.$user_id.'<br>';
      		if($user_id!=0){
      			$login = $this->getLoginByUserID($user_id);    
      			$email = $this->getEmail($user_id);
      			if ( $login == '' ) {
      				$login = $email;
      			}
      			    
      			$new_password=$this->generatePassword();
      			$this->updatePassword($user_id, $new_password);
      			/*require_once (SITEBILL_DOCUMENT_ROOT.'/apps/system/lib/system/mailer/mailer.php');
				$mailer = new Mailer();*/
				$message = sprintf(Multilanguage::_('NEW_PASSWORD_ASC_BODY','system'), $login, $new_password, 'http://'.$_SERVER['HTTP_HOST'].SITEBILL_MAIN_URL);
				$subject = sprintf(Multilanguage::_('NEW_PASSWORD_ASC_TITLE','system'), $_SERVER['HTTP_HOST']);
				
				$to = $this->getEmail($user_id);
				$from = $this->getConfigValue('order_email_acceptor');
				/*if ( $this->getConfigValue('use_smtp') ) {
					$mailer->send_smtp($to, $from, $subject, $message, 1);
				} else {
					$mailer->send_simple($to, $from, $subject, $message, 1);
				}*/
				$this->sendFirmMail($to, $from, $subject, $message);
				$rs = '<div class="message">'.sprintf(Multilanguage::_('NEW_PASS_ON_POST','system'), $to).'</div>';
      		}else{
      			$rs = $this->getForm();
      		}
      	}else{
      		$rs = $this->getForm();
      	}
      	return $rs;
      }
      
      /**
       * Send password
       * @param int $user_id user id
       * @return string
       */
      /*
      function sendPassword ($user_id) {
		$new_password = $this->generatePassword();
          
		$login = $this->getLoginByUserID($user_id);          
		$this->updatePassword($user_id, $new_password);
          
		require_once (SITEBILL_DOCUMENT_ROOT.'/apps/system/lib/system/mailer/mailer.php');
		$mailer = new Mailer();
		$message = "Здравствуйте.<br><br>";
		$message .= "Вы запросили новый пароль.<br><br>";
		$message .= "Ваш login: ".$login."<br>";
		$message .= "Ваш пароль: ".$new_password."<br>";
		$subject = 'Новый пароль на сайте '.$_SERVER['HTTP_HOST'];
		$to = $this->getEmail($user_id);
		$from = $this->getConfigValue('order_email_acceptor');
		if ( $this->getConfigValue('use_smtp') ) {
			$mailer->send_smtp($to, $from, $subject, $message, 1);
		} else {
			$mailer->send_simple($to, $from, $subject, $message, 1);
		}
		$rs = '<div class="message">Новый пароль отправлен на почту '.$to.'</div>';
          
		return $rs;
      }
      */
      /**
       * Update password
       * @param int $user_id user id
       * @param string $password password
       * @return mixed
	   */
      function updatePassword ( $user_id, $password ) {
          $query = "UPDATE ".DB_PREFIX."_user SET password=? WHERE user_id=?";
          $DBC=DBC::getInstance();
          $stmt=$DBC->query($query, array(md5($password), $user_id));
          return true;
      }
      
      /**
       * Generate new password
       * @param void
       * @return string
	   */
      function generatePassword () {
          $number = 6;
          $arr = array('a','b','c','d','e','f',
                 	   'g','h','i','j','k','l',
                 	   'm','n','o','p','r','s',
                 	   't','u','v','x','y','z',
                       'A','B','C','D','E','F',
                 	   'G','H','I','J','K','L',
                 	   'M','N','O','P','R','S',
                 	   'T','U','V','X','Y','Z',
                 	   '1','2','3','4','5','6',
                 	   '7','8','9','0');

          $pass = "";

          for($i = 0; $i < $number; $i++) {
              $index = rand(0, count($arr) - 1);
              $pass .= $arr[$index];
          }
          return $pass;
      }
      
      /**
       * Get form
       * @param void
       * @return string
       */
      function getForm () {
      	$rs .= '<table border="0" cellpadding="0" cellspacing="0" align="center">';
		$rs .= '<tr>';
		$rs .= '<td class="special">';
		$rs .= '<div id="admin_area">';
		$rs .= '<h1>'.Multilanguage::_('PASSWORD_RECOVERY','system').'</h1>';
       	$rs .= '<form method="post" action="'.SITEBILL_MAIN_URL.'/remind/'.'">';
        $rs .= '';
        $rs .= '<table border="0">';
        
        $rs .= '<tr>';
        $rs .= '<td class="special">'.Multilanguage::_('TYPE_LOGIN_PASS','system').': </td>';
        $rs .= '<td class="special"><input type="text" name="login" id="login"></td>';
        $rs .= '</tr>';
        
        /*
        $rs .= '<tr>';
        $rs .= '<td class="special">Или e-mail: </td>';
        $rs .= '<td class="special"><input type="text" name="email" id="email"></td>';
        $rs .= '</tr>';
        */
        
        $rs .= '<tr>';
        $rs .= '<td class="special"></td>';
        $rs .= '<td class="special"><input type="submit" name="submit" value="'.Multilanguage::_('SEND_PASSWORD','system').'"></td>';
        $rs .= '</tr>';
        $rs .= '</table>';
        //$rs .= '<input type="hidden" name="do" value="login">';
        $rs .= '</form>';
		$rs .= '</div> ';   
		$rs .= '</td>';
		$rs .= '</tr>';
		$rs .= '</table>';
      	
          
          return $rs;
      }
      
    
      function getUserId($login,$email){
      	$id=0;
      	$query="SELECT user_id, email FROM ".DB_PREFIX."_user WHERE login=? OR email=?";
      	$DBC=DBC::getInstance();
      	$stmt=$DBC->query($query, array(mysql_real_escape_string($login), mysql_real_escape_string($login)));
      	if($stmt){
      		$ar=$DBC->fetch($stmt);
      		if($ar['user_id'] > 0){
      			$id=(int)$ar['user_id'];
      			$ra['user_id'] = $id;
      			$ra['email'] = $ar['email'];
      			return $ra;
      		}
      	}
      	return false;
      }
      
      function addPasswordRecovery($user_id){
      	$code=md5(time());
      	$query="INSERT INTO ".DB_PREFIX."_password_recovery (user_id, recovery_code) VALUES (?, ?)";
      	$DBC=DBC::getInstance();
      	$stmt=$DBC->query($query, array($user_id, $code));
      	return $code;
      }
      
      function checkRecoveryCode($code){
      	$id=0;
      	$query="SELECT user_id FROM ".DB_PREFIX."_password_recovery WHERE recovery_code=?";
      	$DBC=DBC::getInstance();
      	$stmt=$DBC->query($query, array(mysql_real_escape_string($code)));
      	
      	if($stmt){
      		$ar=$DBC->fetch($stmt);
      		$id=(int)$ar['user_id'];
      	}
      	return $id;
      }
}
?>
