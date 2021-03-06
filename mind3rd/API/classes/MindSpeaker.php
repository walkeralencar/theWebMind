<?php
/**
 * This file is part of TheWebMind 3rd generation.
 * 
 * @author Felipe Nascimento de Moura <felipenmoura@gmail.com>
 * @license licenses/mind3rd.license
 */
/**
 * This class will write out messages to the user as the application is used.
 */
class MindSpeaker
{
    /**
	 * This method returns or outputs messages using the L10N library
	 * You can pass a rich string with %s, %i, etc, sending extra parameters
	 * If the boolean flag $echo is sent, it prints it to the output, otherwise,
	 * only returns it
	 *
	 * @param String $k
	 * @param Bolean $echo
	 * @param mixed... extra parameter to be treated in the string
	 * @return String
	 */
	public static function write($k, $echo=true, $args=false)
	{
		$msg= Mind::$l10n->getMessage($k);
		if(!$msg)
		{
			$msg= Mind::message("L10N: Message $k does not exist", '[Fail]', false);
		}
		if(!is_array($args)){
			$args= func_get_args();
        }
        array_shift($args);
        array_shift($args); // ugly, isn't it?!
            
		$parms= "";
		if(sizeof($args)>=1)
		{
			for($i=0; $i<sizeof($args); $i++)
			{
				$parms.= ', "'.addslashes($args[$i]).'"';
			}
			$parms= '"'.$msg.'"'.$parms;
            try{
                eval("\$print= sprintf(".$parms.");");
            }catch(Exception $exc){
                // actually,  do nothing...
            }
		}else{
				$print= $msg;
			 }
		$count= 1;
		while(strlen($print) >= _CONSOLE_LINE_LENGTH_ && strpos($print, '..')>-1)
		{
			$print= preg_replace("/\.\./", '.', $print, $count);
		}
		if($echo)
			echo $print;
		return $msg;
	}

	/**
	 * This method returns or prints a message formated to represent failures, passes
	 * or any kind of alert
	 *
	 * @param String $message The message itself
	 * @param String $status The status to be shown in the end of the message
	 * @param Boolean $echo if it should be printed or not
	 * @return string
	 */
	public static function message($message, $status, $echo=true)
	{
		$msg= str_pad($message, _CONSOLE_LINE_LENGTH_ - strlen($status), '.').$status."\n";
		if($echo)
			echo $msg;
		return $msg;
	}
}