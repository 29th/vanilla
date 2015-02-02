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
    $Sender->EventArguments['Object']->Body = preg_replace('/(\r?\n)/', '  $1', $Sender->EventArguments['Object']->Body);
  }
  public function PostController_BeforeCommentPreviewFormat_Handler($Sender) {
    $Sender->Comment->Body = preg_replace('/(\r?\n)/', '  $1', $Sender->Comment->Body);
  }
  public function Base_BeforeConversationMessageBody_Handler($Sender) {
    $Sender->EventArguments['Message']->Body = preg_replace('/(\r?\n)/', '  $1', $Sender->EventArguments['Message']->Body);
  }
}