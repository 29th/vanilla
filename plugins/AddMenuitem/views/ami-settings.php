<?php if (!defined('APPLICATION')) exit();
echo $this->Form->Open();
echo $this->Form->Errors();
?>


<h1><?php echo Gdn::Translate('Add Menu Item | by: Peregrine - see donation button below'); ?></h1>

<div class="Info"><?php echo Gdn::Translate('Add Menu Item Options.'); ?></div>

<table class="AltRows">
    <thead>
        <tr>
            <th><?php echo Gdn::Translate('Name to Appear in Menu'); ?></th>
            <th class="Alt"><?php echo Gdn::Translate('Link for Menu Item'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        
             <td class="Alt">
<?php echo Gdn::Translate('Links 1-3  will not appear on mobile devices'); ?>
            </td>
        
        
        </tr>    
        <tr>
            <td>1- 
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name1');
                ?>
            </td>
            <td class="Alt">
                <?php
		echo $this->Form->TextBox('Plugins.AddMenuitem.Link1', array('class'=>'LinkInput','size'=>"80"));
		?>
            </td>
        </tr>

        <tr>
            <td>2- 
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name2');
                ?>
            </td>
            <td>
                <?php
		echo $this->Form->TextBox('Plugins.AddMenuitem.Link2',array('class'=>'LinkInput','size'=>"80"));
		?>
            </td>
        </tr>
        <tr>
            <td>3- 
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name3');
                ?>
            </td>
            <td class="Alt">
                <?php
		echo $this->Form->TextBox('Plugins.AddMenuitem.Link3',array('class'=>'LinkInput','size'=>"80"));
		?>
            </td>
        </tr>
 
   <tr>
        
             <td class="Alt">
<?php echo Gdn::Translate('Links 4-5  will appear on mobile devices as well as non-mobile devices'); ?>
            </td>
        
        
        </tr>  
             
           <tr>
            <td>4- 
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name4');
                ?>
            </td>
            <td class="Alt">
                <?php
		echo $this->Form->TextBox('Plugins.AddMenuitem.Link4',array('class'=>'LinkInput','size'=>"80"));
		?>
            </td>
        </tr>
        
           <tr>
            <td>5- 
                <?php
                echo $this->Form->TextBox('Plugins.AddMenuitem.Name5');
                ?>
            </td>
            <td class="Alt">
                <?php
		echo $this->Form->TextBox('Plugins.AddMenuitem.Link5',array('class'=>'LinkInput','size'=>"80"));
		?>
            </td>
        </tr>
</tbody>        
</table>
<br />
<?php echo $this->Form->Close('Save');?>

<table>
<tr><td>
<h3><strong>Please make a small <i>donation</i> to Peregrine by clicking on the <i>donate</i> button </strong> </h3>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="R78ZA8B7MTFYW">
<p></p>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<h3><strong>Your donations helps support development</strong></h3>
</td></tr>

</table>


