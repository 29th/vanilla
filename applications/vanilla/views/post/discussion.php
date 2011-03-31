<?php if (!defined('APPLICATION')) exit();
$this->Title(T('Start a New Discussion'));
$Session = Gdn::Session();
$CancelUrl = '/vanilla/discussions';
if (C('Vanilla.Categories.Use') && is_object($this->Category))
   $CancelUrl = '/vanilla/discussions/0/'.$this->Category->CategoryID.'/'.Gdn_Format::Url($this->Category->Name);

?>
<div id="DiscussionForm">
   <h1><?php echo T(property_exists($this, 'Discussion') ? 'Edit Discussion' : 'Start a New Discussion'); ?></h1>
   <?php
      echo $this->Form->Open();
      echo $this->Form->Errors();
      $this->FireEvent('BeforeFormInputs');
      
      echo '<div class="P">';
      echo $this->Form->Label('Discussion Title', 'Name');
      echo $this->Form->TextBox('Name', array('maxlength' => 100, 'class' => 'InputBox BigInput'));
      echo '</div>';

      if ($this->ShowCategorySelector === TRUE) {
         echo '<div class="P"><div class="Category">';
         echo $this->Form->Label('Category', 'CategoryID'), ' ';
         echo $this->Form->DropDown('CategoryID', $this->CategoryData, array('TextField' => 'Name', 'ValueField' => 'CategoryID'));
         echo '</div></div>';
      }
      
      $this->FireEvent('BeforeBodyInput');
      
      echo '<div class="P">', $this->Form->TextBox('Body', array('MultiLine' => TRUE)), '</div>';

//      echo "<div class=\"PostFormControlPanel\">\n";
      $Options = '';
      // If the user has any of the following permissions (regardless of junction), show the options
      // Note: I need to validate that they have permission in the specified category on the back-end
      // TODO: hide these boxes depending on which category is selected in the dropdown above.
      if ($Session->CheckPermission('Vanilla.Discussions.Announce'))
         $Options .= '<li>'.$this->Form->CheckBox('Announce', T('Announce'), array('value' => '1')).'</li>';

      if ($Session->CheckPermission('Vanilla.Discussions.Close'))
         $Options .= '<li>'.$this->Form->CheckBox('Closed', T('Close'), array('value' => '1')).'</li>';

		$this->EventArguments['Options'] = &$Options;
		$this->FireEvent('DiscussionFormOptions');

      if ($Options != '')
         echo '<ul class="List Inline PostOptions">' . $Options .'</ul>';

      echo '<div class="Buttons">';
      $this->FireEvent('BeforeFormButtons');
      echo $this->Form->Button((property_exists($this, 'Discussion')) ? 'Save' : 'Post Discussion', array('class' => 'Button DiscussionButton'));
      if (!property_exists($this, 'Discussion') || !is_object($this->Discussion) || (property_exists($this, 'Draft') && is_object($this->Draft))) {
         echo $this->Form->Button('Save Draft', array('class' => 'Button DraftButton'));
      }
      echo $this->Form->Button('Preview', array('class' => 'Button PreviewButton'));
      $this->FireEvent('AfterFormButtons');
      echo Anchor(T('Cancel'), $CancelUrl, 'Cancel');
      echo '</div>';
//      echo "</div>\n";
      echo $this->Form->Close();
   ?>
</div>
