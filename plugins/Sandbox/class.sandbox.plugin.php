<?php if (!defined('APPLICATION')) exit();

$PluginInfo['Sandbox'] = array(
	'Name' => 'Sandbox',
	'Description' => 'Plugin to play around in',
	'Version' => '1.0',
	//'RequiredApplications' => array('Yaga' => '0.5'),
	'MobileFriendly' => TRUE,
	'Author' => 'Wilson29thID',
	'AuthorEmail' => 'wilson@29th.org',
	'AuthorUrl' => 'http://29th.org',
	'License' => 'MIT'
);

class Sandbox extends Gdn_Plugin {

  public function DiscussionController_AuthorInfo_Handler($Sender) {
/*    $Author = $Sender->EventArguments['Author'];
    $RankID = $Author->RankID;
    
    // Don't iterate unless rank ID is set
    if(is_null($RankID)) {
      return;
    }
    $RankModel = Yaga::RankModel();
    $Ranks = $RankModel->Get();
    $AuthorRank = new stdClass();
    $AuthorRank->Name = NULL;
    foreach($Ranks as $Rank) {
      if($Rank->RankID == $RankID) {
        $AuthorRank = $Rank;
        break;
      }
    }
  */  
//    echo WrapIf($AuthorRank->Name, 'span', array('class' => 'MItem Rank Rank-' . Gdn_Format::Url($AuthorRank->Name)));
	echo 'rank here'; 
 }

}
