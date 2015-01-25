<?php if (!defined('APPLICATION')) exit();
  $PluginInfo['MarkdownMarkup'] = array(
   'Name' => 'MarkdownMarkup',
   'Description' => 'This addon modifies the Markdown input formatter so that it honors soft line breaks and converts them to -br- code.',
   'Version' => '0.1',
   'Author' => "doycet",
   'AuthorEmail' => 'doyce.testerman@gmail.com',
   'AuthorUrl' => 'http://vanillaforums.org/discussion/comment/214129'
);

class MarkdownMarkupPlugin extends Gdn_Plugin {
public function DiscussionController_BeforeCommentBody_Handler($Sender) {
	    $Comment = $Sender->EventArguments['Object']->Body;
	    $Comment = preg_replace('/(\r?\n)/', '  $1', $Comment);
	    $Sender->EventArguments['Object']->Body = $Comment;
	}
}