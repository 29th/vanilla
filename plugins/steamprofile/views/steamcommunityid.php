<?php if (!defined('APPLICATION')) exit(); ?>
	<li class="SteamProfile">
      <?php
         echo $Sender->Form->Label('Steam Profile');

         // Do we happen to already have a Steam ID for our current user?
         if ($Sender->Data('SteamID64')) {
            // If so, we just output it.  Nothing fancy.
            echo '<div>'.T('Steam ID').': '.Gdn_Format::Text($Sender->Data('SteamID64')).'</div>';
         } else {
            // If not, we drop in a button and set the stage for OpenID magic.
            echo Anchor(
               Img('plugins/steamprofile/design/images/sits_small.png', array('alt' => 'Sign in through Steam')),
               $Sender->Data('SteamAuthenticationUrl'),
               '',
               array('title' => 'Sign in through Steam')
            );
         }
      ?>
   </li>
