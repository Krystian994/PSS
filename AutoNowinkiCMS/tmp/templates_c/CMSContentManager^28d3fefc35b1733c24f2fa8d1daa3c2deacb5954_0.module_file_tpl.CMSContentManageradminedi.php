<?php
/* Smarty version 4.2.1, created on 2025-05-27 14:48:44
  from 'module_file_tpl:CMSContentManager;admin_editcontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6835b4accc8c98_31930153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d3fefc35b1733c24f2fa8d1daa3c2deacb5954' => 
    array (
      0 => 'module_file_tpl:CMSContentManager;admin_editcontent.tpl',
      1 => 1746470013,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b4accc8c98_31930153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'submit_buttons' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cmsms\\tmp\\templates_c\\CMSContentManager^28d3fefc35b1733c24f2fa8d1daa3c2deacb5954_0.module_file_tpl.CMSContentManageradminedi.php',
    'uid' => '28d3fefc35b1733c24f2fa8d1daa3c2deacb5954',
    'call_name' => 'smarty_template_function_submit_buttons_7853286406835b4acc354c7_67468228',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.form_start.php','function'=>'smarty_function_form_start',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\admin\\plugins\\function.tab_header.php','function'=>'smarty_function_tab_header',),2=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\admin\\plugins\\function.tab_start.php','function'=>'smarty_function_tab_start',),3=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\admin\\plugins\\function.tab_end.php','function'=>'smarty_function_tab_end',),4=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.form_end.php','function'=>'smarty_function_form_end',),));
echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
$(document).ready(function(){
  var do_locking = <?php if ((isset($_smarty_tpl->tpl_vars['content_id']->value)) && $_smarty_tpl->tpl_vars['content_id']->value > 0 && (isset($_smarty_tpl->tpl_vars['lock_timeout']->value)) && $_smarty_tpl->tpl_vars['lock_timeout']->value > 0) {?>1<?php } else { ?>0<?php }?>;

  // initialize the dirtyform stuff.
  $('#Edit_Content').dirtyForm({
    beforeUnload: function(is_dirty) {
      if( do_locking ) $('#Edit_Content').lockManager('unlock').done(function(){
        console.log('after dirtyform unlock');
      });
    },
    unloadCancel: function(){
      if( do_locking ) $('#Edit_Content').lockManager('relock');
    }
  });

  // initialize lock manager
  if( do_locking ) {
    $('#Edit_Content').lockManager({
      type: 'content',
      oid: <?php echo (($tmp = $_smarty_tpl->tpl_vars['content_id']->value ?? null)===null||$tmp==='' ? -1 ?? null : $tmp);?>
,
      uid: <?php echo get_userid(FALSE);?>
,
      lock_timeout: <?php echo (($tmp = $_smarty_tpl->tpl_vars['lock_timeout']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
,
      lock_refresh: <?php echo (($tmp = $_smarty_tpl->tpl_vars['lock_refresh']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
,
      error_handler: function (err) {
        cms_alert('Locking error: ' + err.type + ' -- ' + err.msg);
      },
      lostlock_handler: function (err) {
        // we lost the lock on this content... make sure we can't save anything.
        // and display a nice message.
        $('[name$=cancel]').fadeOut().attr('value', '<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('close');?>
').fadeIn();
        $('#Edit_Content').dirtyForm('option', 'dirty', false);
        cms_alert('<?php echo strtr((string)$_smarty_tpl->tpl_vars['mod']->value->Lang('msg_lostlock'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
      }
    });
  }

    <?php if ($_smarty_tpl->tpl_vars['content_obj']->value->HasPreview()) {?>
  $('#_preview_').click(function(){
    if( typeof tinyMCE != 'undefined') tinyMCE.triggerSave();
    // serialize the form data
    var data = $('#Edit_Content').find('input:not([type=submit]), select, textarea').serializeArray();
    data.push({
      'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
preview',
      'value': 1
    });
    data.push({
      'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
ajax',
      'value': 1
    });
    $.post('<?php echo $_smarty_tpl->tpl_vars['preview_ajax_url']->value;?>
&showtemplate=false', data, function (resultdata, text) {
      if( resultdata != null && resultdata.response == 'Error' ) {
        $('#previewframe').attr('src','').hide();
        $('#preview_errors').html('<ul></ul>');
        for( var i = 0; i < resultdata.details.length; i++ ) {
          $('#preview_errors').append('<li>'+resultdata.details[i]+'</li>');
        }
        $('#previewerror').show();
      }
      else {
        var x = new Date().getTime();
        var url = '<?php echo $_smarty_tpl->tpl_vars['preview_url']->value;?>
&junk='+x;
        $('#previewerror').hide();
        $('#previewframe').attr('src', url).show();
      }
    },'json');
  });
    <?php }?>

  // submit the form if disable wysiwyg, template id, and/or content-type fields are changed.
  $('#id_disablewysiwyg, #template_id, #content_type').on('change', function () {
    // disable the dirty form stuff, and unlock because we're gonna relockit on reload.
    var self = this;
    var this_id = $(this).attr('id');
    $('#Edit_Content').dirtyForm('disable');
    if( this_id != 'content_type') $('#active_tab').val('<?php echo $_smarty_tpl->tpl_vars['options_tab_name']->value;?>
');
    if( do_locking ) {
      if( do_locking) $('#Edit_Content').lockManager('unlock',1).done(function(){
        $(self).closest('form').submit();
      });
    } else {
      $(self).closest('form').submit();
    }
  });

  // handle cancel/close ... and unlock
  $(document).on('click', '[name$=cancel]', function (ev) {
    // turn off all required elements, we're cancelling
    $('#Edit_Content :hidden').removeAttr('required');
    // do not touch the dirty flag, so that theunload handler stuff can warn us.
    if( do_locking ) {
      // unlock the item, and submit the form.
      var self = this;
      var form = $(this).closest('form');
      ev.preventDefault();
      $('#Edit_Content').lockManager('unlock',1).done(function(){
        var el = $('<input type="hidden"/>');
        el.attr('name',$(self).attr('name')).val($(self).val()).appendTo(form);
        form.submit();
      });
    }
  });

  $(document).on('click', '[name$=submit]', function (ev) {
    // set the form to not dirty.
    $('#Edit_Content').dirtyForm('option','dirty',false);
    if( do_locking ) {
      // unlock the item, and submit the form
      var self = this;
      ev.preventDefault();
      var form = $(this).closest('form');
      $('#Edit_Content').lockManager('unlock',1).done(function(){
        var el = $('<input type="hidden"/>');
        el.attr('name',$(self).attr('name')).val($(self).val()).appendTo(form);
        form.submit();
      });
    }
  });

  // handle apply (ajax submit)
  $(document).on('click', '[name$=apply]', function () {
    // apply does not do an unlock.
    if( typeof tinyMCE != 'undefined') tinyMCE.triggerSave(); // TODO this needs better approach, create a common "ajax save" function that can be reused
    var data = $('#Edit_Content').find('input:not([type=submit]), select, textarea').serializeArray();
    data.push({
      'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
ajax',
      'value': 1
    });
    data.push({
      'name': '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
apply',
      'value': 1
    });
    $.ajax({
      type: 'POST',
      url: '<?php echo $_smarty_tpl->tpl_vars['apply_ajax_url']->value;?>
',
      data: data,
      dataType: 'json',
    }).done(function(data, text) {
      var event = $.Event('cms_ajax_apply');
      event.response = data.response;
      event.details = data.details;
      event.close = '<?php echo strtr((string)$_smarty_tpl->tpl_vars['mod']->value->Lang('close'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
      if( typeof data.url != '' ) event.url = data.url;
      $('body').trigger(event);
    });
    return false;
  });

  $(document).on('cms_ajax_apply',function(e){
    $('#Edit_Content').dirtyForm('option','dirty',false);
    if( typeof e.url != '' && typeof e.url != undefined ) {
      $('a#viewpage').attr('href',e.url);
    }
  });

    <?php if ((isset($_smarty_tpl->tpl_vars['designchanged_ajax_url']->value))) {?>
  $('#design_id').change(function(e,edata){
    var v = $(this).val();
    var lastValue = $(this).data('lastValue');
    var data = { '<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
design_id': v };
    $.get('<?php echo $_smarty_tpl->tpl_vars['designchanged_ajax_url']->value;?>
',data,function(data,text) {
      if( typeof data == 'object' ) {
        var sel = $('#template_id').val();
        var fnd = false;
        var first = null;
        for( key in data ) {
          if( first == null ) first = key;
          if( key == sel ) fnd = true;
        }
        if( !first ) {
          $('#design_id').val(lastValue);
          cms_alert('<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warn_notemplates_for_design');?>
');
        }
        else {
          $('#template_id').val('');
          $('#template_id').empty();
          for( key in data ) {
            $('#template_id').append('<option value="'+key+'">'+data[key]+'</option>');
          }
          if( fnd ) {
            $('#template_id').val(sel);
          }
          else if( first ) {
            $('#template_id').val(first);
          }
          if( typeof edata == 'undefined' || typeof edata.skip_fallthru == 'undefined' ) {
            $('#template_id').trigger('change');
          }
        }
      }
    }, 'json' );
  });

  $('#design_id').trigger('change', [{ skip_fallthru: 1 }]);
  $('#design_id').data('lastValue',$('#design_id').val());
  $('#template_id').data('lastValue',$('#template_id').val());
  $('#Edit_Content').dirtyForm('option','dirty',false);
    <?php }?>
});
// ]]>
<?php echo '</script'; ?>
>

<?php echo (($tmp = $_smarty_tpl->tpl_vars['extra_content']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>


<?php if ($_smarty_tpl->tpl_vars['content_id']->value < 1) {?>
  <h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editpage_addcontent');?>
</h3>
<?php } else { ?>
  <h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editpage_editcontent');?>
&nbsp;<em>(<?php echo $_smarty_tpl->tpl_vars['content_id']->value;?>
)</em></h3>
<?php }?>



<div id="Edit_Content_Result"></div>
<div id="Edit_Content">
<?php echo smarty_function_form_start(array('content_id'=>$_smarty_tpl->tpl_vars['content_id']->value),$_smarty_tpl);?>

  <input type="hidden" id="active_tab" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
active_tab"/>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'submit_buttons', array(), true);?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_names']->value, 'tabname', false, 'key');
$_smarty_tpl->tpl_vars['tabname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tabname']->value) {
$_smarty_tpl->tpl_vars['tabname']->do_else = false;
?>
        <?php echo smarty_function_tab_header(array('name'=>$_smarty_tpl->tpl_vars['key']->value,'label'=>$_smarty_tpl->tpl_vars['tabname']->value,'active'=>$_smarty_tpl->tpl_vars['active_tab']->value),$_smarty_tpl);?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['content_obj']->value->HasPreview()) {?>
        <?php echo smarty_function_tab_header(array('name'=>'_preview_','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_preview')),$_smarty_tpl);?>

    <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_names']->value, 'tabname', false, 'key');
$_smarty_tpl->tpl_vars['tabname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tabname']->value) {
$_smarty_tpl->tpl_vars['tabname']->do_else = false;
?>
        <?php echo smarty_function_tab_start(array('name'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>

        <?php if ((isset($_smarty_tpl->tpl_vars['tab_message_array']->value[$_smarty_tpl->tpl_vars['key']->value]))) {
echo $_smarty_tpl->tpl_vars['tab_message_array']->value[$_smarty_tpl->tpl_vars['key']->value];
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['tab_contents_array']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_contents_array']->value[$_smarty_tpl->tpl_vars['key']->value], 'fld');
$_smarty_tpl->tpl_vars['fld']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fld']->value) {
$_smarty_tpl->tpl_vars['fld']->do_else = false;
?>
              <div class="pageoverflow">
          <p class="pagetext"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fld']->value[0] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
          <p class="pageinput"><?php echo (($tmp = $_smarty_tpl->tpl_vars['fld']->value[1] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
if ((isset($_smarty_tpl->tpl_vars['fld']->value)) && is_array('fld') && count($_smarty_tpl->tpl_vars['fld']->value) == 3) {?><br/><?php echo (($tmp = $_smarty_tpl->tpl_vars['fld']->value[2] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?></p>
        </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['content_obj']->value->HasPreview()) {?>
        <?php echo smarty_function_tab_start(array('name'=>'_preview_'),$_smarty_tpl);?>

      <div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_preview_notice');?>
</div>
      <iframe name="_previewframe_" class="preview" id="previewframe"></iframe>
      <div id="previewerror" class="red" style="display: none; color: #000;">
        <fieldset>
          <legend>LEGEND</legend>
          <ul id="preview_errors"></ul>
        </fieldset>
      </div>
    <?php }?>
    <?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>

    <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

</div><?php }
/* smarty_template_function_submit_buttons_7853286406835b4acc354c7_67468228 */
if (!function_exists('smarty_template_function_submit_buttons_7853286406835b4acc354c7_67468228')) {
function smarty_template_function_submit_buttons_7853286406835b4acc354c7_67468228(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\admin\\plugins\\function.admin_icon.php','function'=>'smarty_function_admin_icon',),));
?>

  <p class="pagetext"></p>
  <p class="pageinput">
  <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
" class="pagebutton" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_submit');?>
"/>
  <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" formnovalidate value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
" class="pagebutton" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_cancel');?>
"/>
      <?php if ($_smarty_tpl->tpl_vars['content_id']->value > 0) {?>
        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
apply" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('apply');?>
" class="pagebutton" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_apply');?>
"/>
      <?php }?>
      <?php if (($_smarty_tpl->tpl_vars['content_id']->value > 0) && $_smarty_tpl->tpl_vars['content_obj']->value->IsViewable() && $_smarty_tpl->tpl_vars['content_obj']->value->Active()) {?>
        <a id="viewpage" rel="external" href="<?php echo $_smarty_tpl->tpl_vars['content_obj']->value->GetURL();?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_editpage_view');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'view.gif','alt'=>lang('view_page')),$_smarty_tpl);?>
</a>
      <?php }?>
</p>
<?php
}}
/*/ smarty_template_function_submit_buttons_7853286406835b4acc354c7_67468228 */
}
