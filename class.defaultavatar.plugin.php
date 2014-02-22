<?php if (!defined('APPLICATION')) exit();


// Define the plugin:
$PluginInfo['DefaultAvatar'] = array(
   'Name' => 'DefaultAvatar',
   'Description' => "Provides a custom default user avatar if they have not uploaded one. ",
   'Version' => '1.0',
   'Author' => 'VrijVlinder',
   'AuthorEmail' => 'contact@vrijvlinder.com.com',
   'AuthorUrl' => 'http://www.vrijvlinder.com/',
   'MobileFriendly' => TRUE,
);

class DefaultAvatarPlugin extends Gdn_Plugin {
   public function ProfileController_AfterAddSideMenu_Handler($Sender, $Args) {
      if (!$Sender->User->Photo) {
           
           $Sender->User->Photo = C('Plugins.DefaultAvatar.Image');
      }
   }
}

if (!function_exists('UserPhotoDefaultUrl')) {
   function UserPhotoDefaultUrl($User, $Options = array()) {

      $PhotoUrl = C('Plugins.DefaultAvatar.Image');
      return $PhotoUrl;
   }
}


  