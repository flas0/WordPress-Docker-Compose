<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_Spool
{
 public function start();
 public function stop();
 public function isStarted();
 public function queueMessage(Swift_Mime_SimpleMessage $message);
 public function flushQueue(Swift_Transport $transport, &$failedRecipients = null);
}
