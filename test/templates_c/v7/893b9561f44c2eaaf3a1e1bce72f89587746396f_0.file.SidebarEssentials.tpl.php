<?php
/* Smarty version 4.5.5, created on 2025-05-21 18:41:13
  from 'C:\xampp\htdocs\pilgrim-sage-sutra\layouts\v7\modules\Vtiger\partials\SidebarEssentials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_682e1e49cdd843_04940066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893b9561f44c2eaaf3a1e1bce72f89587746396f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pilgrim-sage-sutra\\layouts\\v7\\modules\\Vtiger\\partials\\SidebarEssentials.tpl',
      1 => 1747849267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682e1e49cdd843_04940066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pilgrim-sage-sutra\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="sidebar-menu">
    <div class="module-filters" id="module-filters">
        <div class="sidebar-container lists-menu-container">
            <div class="sidebar-header clearfix">
                <h5 class="pull-left"><?php echo vtranslate('LBL_LISTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5>
                <button id="createFilter" data-url="<?php echo CustomView_Record_Model::getCreateViewUrl($_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="btn btn-sm btn-default pull-right sidebar-btn" title="<?php echo vtranslate('LBL_CREATE_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
                    <div class="fa fa-plus" aria-hidden="true"></div>
                </button> 
            </div>
            <hr>
            <div>
                <input class="search-list" type="text" placeholder="<?php echo vtranslate('LBL_SEARCH_FOR_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
            </div>
            <div class="menu-scroller scrollContainer" style="position:relative; top:0; left:0;">
				<div class="list-menu-content">
						<?php $_smarty_tpl->_assignInScope('CUSTOM_VIEW_NAMES', array());?>
                        <?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value && php7_count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?>
                            <?php $_smarty_tpl->_assignInScope('IS_ADMIN', $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->isAdminUser());?> <!-- Libertus Mod -->
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'GROUP_CUSTOM_VIEWS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) {
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value != 'Mine' && $_smarty_tpl->tpl_vars['GROUP_LABEL']->value != 'Shared') {?>
                                <?php continue 1;?>
                             <?php }?>
                            <div class="list-group" id="<?php if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value == 'Mine') {?>myList<?php } else { ?>sharedList<?php }?>">   
                                <h6 class="lists-header <?php if (php7_count($_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) <= 0) {?> hide <?php }?>" >
                                    <?php if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value == 'Mine') {?>
                                        <?php echo vtranslate('LBL_MY_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                    <?php } else { ?>
                                        <?php echo vtranslate('LBL_SHARED_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                    <?php }?>
                                </h6>
                                <input type="hidden" name="allCvId" value="<?php echo CustomView_Record_Model::getAllFilterByModule($_smarty_tpl->tpl_vars['MODULE']->value)->get('cvid');?>
" />
                                <ul class="lists-menu">
								<?php $_smarty_tpl->_assignInScope('shown_count', 0);?>
								<?php $_smarty_tpl->_assignInScope('hidden_count', 0);?>
								<?php $_smarty_tpl->_assignInScope('LISTVIEW_URL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl());?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value, 'CUSTOM_VIEW', false, NULL, 'customView', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value) {
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_customView']->value['iteration']++;
?>
                                    <?php $_smarty_tpl->_assignInScope('IS_DEFAULT', $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isDefault());?>
									<?php $_smarty_tpl->_assignInScope('CUSTOME_VIEW_RECORD_MODEL', CustomView_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId()));?>
									<?php $_smarty_tpl->_assignInScope('MEMBERS', $_smarty_tpl->tpl_vars['CUSTOME_VIEW_RECORD_MODEL']->value->getMembers());?>
									<?php $_smarty_tpl->_assignInScope('LIST_STATUS', $_smarty_tpl->tpl_vars['CUSTOME_VIEW_RECORD_MODEL']->value->get('status'));?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEMBERS']->value, 'MEMBER_LIST', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['MEMBER_LIST']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['MEMBER_LIST']->value) {
$_smarty_tpl->tpl_vars['MEMBER_LIST']->do_else = false;
?>
										<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['MEMBER_LIST']->value) > 0) {?>
										<?php $_smarty_tpl->_assignInScope('SHARED_MEMBER_COUNT', 1);?>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_customView']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_customView']->value['iteration'] : null) <= 10) {?> 
                                        <?php $_smarty_tpl->_assignInScope('shown_count', $_smarty_tpl->tpl_vars['shown_count']->value+1);?>
                                    <?php } else { ?> 
                                        <?php $_smarty_tpl->_assignInScope('hidden_count', $_smarty_tpl->tpl_vars['hidden_count']->value+1);?> 
                                    <?php }?>
									<li style="font-size:12px;" class='listViewFilter <?php if ($_smarty_tpl->tpl_vars['VIEWID']->value == $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId() && ((isset($_smarty_tpl->tpl_vars['CURRENT_TAG']->value)) && $_smarty_tpl->tpl_vars['CURRENT_TAG']->value == '')) {?> active<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_customView']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_customView']->value['iteration'] : null) > 10) {?> filterHidden hide<?php }?>'> 
                                        <?php ob_start();
echo vtranslate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('VIEWNAME', $_prefixVariable1);?>
										<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['CUSTOM_VIEW_NAMES']) ? $_smarty_tpl->tpl_vars['CUSTOM_VIEW_NAMES']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['VIEWNAME']->value;
$_smarty_tpl->_assignInScope('CUSTOM_VIEW_NAMES', $_tmp_array);?>
                                         <a class="filterName listViewFilterElipsis" href="<?php echo (((($_smarty_tpl->tpl_vars['LISTVIEW_URL']->value).('&viewname=')).($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId())).('&app=')).($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value);?>
" oncontextmenu="return false;" data-filter-id="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['VIEWNAME']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['VIEWNAME']->value, ENT_QUOTES, 'UTF-8', true);?>
</a> 
                                            <div class="pull-right">
                                                <span class="js-popover-container" style="cursor:pointer;">
                                                    <span  class="fa fa-angle-down" rel="popover" data-toggle="popover" aria-expanded="true" 
                                                        <?php if (($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isMine() || $_smarty_tpl->tpl_vars['IS_ADMIN']->value) && $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname') != 'All') {?>
                                                            data-deletable="<?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isDeletable()) {?>true<?php } else { ?>false<?php }?>" 
                                                            data-editable="<?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isEditable()) {?>true<?php } else { ?>false<?php }?>" 
                                                            <?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isEditable()) {?> data-editurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getEditUrl();
}?>" 
                                                            <?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isDeletable()) {?> 
                                                                <?php if ($_smarty_tpl->tpl_vars['SHARED_MEMBER_COUNT']->value == 1 || $_smarty_tpl->tpl_vars['LIST_STATUS']->value == 3) {?> data-shared="1"<?php }?> 
                                                                data-deleteurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDeleteUrl();?>
"
                                                            <?php }?>
                                                        <?php }?>
                                                        toggleClass="fa <?php if ($_smarty_tpl->tpl_vars['IS_DEFAULT']->value) {?>fa-check-square-o<?php } else { ?>fa-square-o<?php }?>" 
                                                        data-filter-id="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
" 
                                                        data-is-default="<?php echo $_smarty_tpl->tpl_vars['IS_DEFAULT']->value;?>
" 
                                                        data-defaulttoggle="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getToggleDefaultUrl();?>
" 
                                                        data-default="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDuplicateUrl();?>
" 
                                                        data-isMine="<?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isMine()) {?>true<?php } else { ?>false<?php }?>" 
                                                        data-isadmin="<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?>true<?php } else { ?>false<?php }?>">
                                                    </span>
                                                     </span>
                                                </div>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
								<div class='clearfix'> 
									<?php if ($_smarty_tpl->tpl_vars['hidden_count']->value) {?> 
										<a class="toggleFilterSize" data-more-text="<?php echo $_smarty_tpl->tpl_vars['hidden_count']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strtolower' ][ 0 ], array( vtranslate('LBL_MORE','Vtiger') ));?>
" data-less-text="Show less">
												<?php echo $_smarty_tpl->tpl_vars['hidden_count']->value;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strtolower' ][ 0 ], array( vtranslate('LBL_MORE','Vtiger') ));?>
 
										</a><?php }?> 
									</div>
                             </div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								
							<input type="hidden" id='allFilterNames'  value='<?php echo Vtiger_Util_Helper::toSafeHTML(Zend_JSON::encode($_smarty_tpl->tpl_vars['CUSTOM_VIEWS_NAMES']->value));?>
'/>
                            <div id="filterActionPopoverHtml">
                                <ul class="listmenu hide" role="menu">
                                    <li role="presentation" class="editFilter">
                                            <a role="menuitem"><i class="fa fa-pencil"></i>&nbsp;<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                                        </li>
                                    <li role="presentation" class="deleteFilter">
                                            <a role="menuitem"><i class="fa fa-trash"></i>&nbsp;<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                                    </li>
                                    <li role="presentation" class="duplicateFilter">
                                                <a role="menuitem" ><i class="fa fa-files-o"></i>&nbsp;<?php echo vtranslate('LBL_DUPLICATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                                            </li>
                                    <li role="presentation" class="toggleDefault">
                                                <a role="menuitem" >
                                            <i data-check-icon="fa-check-square-o" data-uncheck-icon="fa-square-o"></i>&nbsp;<?php echo vtranslate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                                </a>
                                            </li>
                                        </ul>
                            </div>

                        <?php }?>
                        <div class="list-group hide noLists">
                            <h6 class="lists-header"><center> <?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate('LBL_LISTS');?>
 <?php echo vtranslate('LBL_FOUND');?>
 ... </center></h6>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_assignInScope('EXTENSION_LINKS', Vtiger_Extension_View::getExtensionLinks($_smarty_tpl->tpl_vars['MODULE']->value));?>
    <?php if (!empty($_smarty_tpl->tpl_vars['EXTENSION_LINKS']->value)) {?>
        <div class="module-filters module-extensions">
            <div class="sidebar-container lists-menu-container">
                <h5 class="sidebar-header"><?php echo vtranslate('LBL_EXTENSIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5>
                <hr>
                <div class="menu-scroller scrollContainer" style="position:relative; top:0; left:0;">
                    <div class="list-menu-content">
                        <ul class="lists-menu"> 
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXTENSION_LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['LINK']->value->isExtensionAccessible()) {?>
                                    <li style="font-size:12px;" class="listViewFilter <?php if ($_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value == $_smarty_tpl->tpl_vars['LINK']->value->get('linklabel')) {?> active <?php }?>">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linkurl');?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['LINK']->value->get('linklabel'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <div class="module-filters">
        <div class="sidebar-container lists-menu-container">
            <h5 class="lists-header">
                <?php echo vtranslate('LBL_TAGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

            </h5>
            <hr>
            <div class="menu-scroller scrollContainer" style="position:relative; top:0; left:0;">
                <div class="list-menu-content">
                    <div id="listViewTagContainer" class="multiLevelTagList" 
                    <?php if ((isset($_smarty_tpl->tpl_vars['ALL_CUSTOMVIEW_MODEL']->value)) && $_smarty_tpl->tpl_vars['ALL_CUSTOMVIEW_MODEL']->value) {?> data-view-id="<?php echo $_smarty_tpl->tpl_vars['ALL_CUSTOMVIEW_MODEL']->value->getId();?>
" <?php }?>
                    data-list-tag-count="<?php echo Vtiger_Tag_Model::NUM_OF_TAGS_LIST;?>
">
                    <?php if ((isset($_smarty_tpl->tpl_vars['TAGS']->value))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAGS']->value, 'TAG_MODEL', false, NULL, 'tagCounter', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAG_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tagCounter']->value['iteration']++;
?>
                            <?php $_smarty_tpl->_assignInScope('TAG_LABEL', $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName());?>
                            <?php $_smarty_tpl->_assignInScope('TAG_ID', $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getId());?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tagCounter']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tagCounter']->value['iteration'] : null) > Vtiger_Tag_Model::NUM_OF_TAGS_LIST) {?>
                                <?php break 1;?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "Tag.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('NO_DELETE'=>true,'ACTIVE'=>$_smarty_tpl->tpl_vars['CURRENT_TAG']->value == $_smarty_tpl->tpl_vars['TAG_ID']->value), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div> 
                            <a class="moreTags <?php if ((php7_count($_smarty_tpl->tpl_vars['TAGS']->value)-Vtiger_Tag_Model::NUM_OF_TAGS_LIST) <= 0) {?> hide <?php }?>">
                                <span class="moreTagCount"><?php echo php7_count($_smarty_tpl->tpl_vars['TAGS']->value)-Vtiger_Tag_Model::NUM_OF_TAGS_LIST;?>
</span>
                                &nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strtolower' ][ 0 ], array( vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE']->value) ));?>

                            </a>
                            <div class="moreListTags hide">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAGS']->value, 'TAG_MODEL', false, NULL, 'tagCounter', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAG_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tagCounter']->value['iteration']++;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tagCounter']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tagCounter']->value['iteration'] : null) <= Vtiger_Tag_Model::NUM_OF_TAGS_LIST) {?>
                                <?php continue 1;?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "Tag.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('NO_DELETE'=>true,'ACTIVE'=>$_smarty_tpl->tpl_vars['CURRENT_TAG']->value == $_smarty_tpl->tpl_vars['TAG_ID']->value), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                             </div>
                        </div>
                    <?php }?>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "AddTagUI.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_NAME'=>'','TAGS_LIST'=>array()), 0, true);
?>
                </div>
                <div id="dummyTagElement" class="hide">
                    <?php $_smarty_tpl->_assignInScope('TAG_MODEL', Vtiger_Tag_Model::getCleanInstance());?>
                    <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "Tag.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('NO_DELETE'=>true), 0, true);
?>
                </div>
                <div>
                    <div class="editTagContainer hide">
                        <input type="hidden" name="id" value="" />
                        <div class="editTagContents">
                            <div>
                                <input type="text" name="tagName" value="" style="width:100%" maxlength="25"/>
                            </div>
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" name="visibility" value="<?php echo Vtiger_Tag_Model::PRIVATE_TYPE;?>
"/>
                                        <input type="checkbox" name="visibility" value="<?php echo Vtiger_Tag_Model::PUBLIC_TYPE;?>
" />
                                        &nbsp; <?php echo vtranslate('LBL_SHARE_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-mini btn-success saveTag" type="button" style="width:50%;float:left">
                                <center> <i class="fa fa-check"></i> </center>
                            </button>
                            <button class="btn btn-mini btn-danger cancelSaveTag" type="button" style="width:50%">
                                <center> <i class="fa fa-close"></i> </center>
                            </button>
                        </div>
                    </div>
                </div>
           </div>
        </div>
     </div>
</div>
<?php }
}
