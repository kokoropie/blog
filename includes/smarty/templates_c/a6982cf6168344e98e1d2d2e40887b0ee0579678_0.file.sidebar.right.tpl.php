<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-17 12:05:23
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\sidebar.right.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cde41138468d6_58781540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6982cf6168344e98e1d2d2e40887b0ee0579678' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\sidebar.right.tpl',
      1 => 1558069174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde41138468d6_58781540 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
  <?php if (isset($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
  <ul class="nav nav-tabs tab-nav-right" role="tablist">
    <li role="presentation"><a href="#skins" data-toggle="tab">GIAO DIỆN</a></li>
    <li role="presentation" class="active"><a href="#settings" data-toggle="tab">CÀI ĐẶT</a></li>
  </ul>
  <?php }?>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade <?php if (empty($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>in active<?php }?>" id="skins">
      <ul class="demo-choose-skin">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms']->value['themes'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <li data-theme="<?php echo $_smarty_tpl->tpl_vars['value']->value['color'];?>
" onclick="change_theme('<?php echo $_smarty_tpl->tpl_vars['value']->value['color'];?>
')" <?php if ($_smarty_tpl->tpl_vars['theme']->value == $_smarty_tpl->tpl_vars['value']->value['color']) {?>class="active" <?php }?>> <div class="<?php echo $_smarty_tpl->tpl_vars['value']->value['color'];?>
">
    </div>
    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</span>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
  <div role="tabpanel" class="tab-pane fade in active" id="settings">
    <form action="/action/settings.admin" method="post" id="settings_form">
      <div class="demo-settings">
        <p>THÔNG TIN WEBSITE</p>
        <ul class="setting-list">
          <li>
            <span>Tiêu Đề</span>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="title" class="form-control" placeholder="Tiêu Đề" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value['title'];?>
" required>
                <input type="hidden" name="title_now" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
              </div>
            </div>
          </li>
          <li>
            <span>Từ Khóa</span>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="keywords" class="form-control" data-role="tagsinput" placeholder="Từ Khóa" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value['keywords'];?>
" required>
              </div>
            </div>
          </li>
          <li>
            <span>Mô Tả</span>
            <div class="form-group">
              <div class="form-line">
                <textarea name="description" class="form-control no-resize auto-growth" placeholder="Mô Tả" required><?php echo $_smarty_tpl->tpl_vars['cms']->value['description'];?>
</textarea>
              </div>
            </div>
          </li>
          <li>
            <span>Ảnh Nền</span>
            <div class="form-group">
              <div class="form-line">
                <img class="img-responsive" alt="" src="<?php echo $_smarty_tpl->tpl_vars['cms']->value['thumbnail'];?>
" id="preview_thumbnail" data-src="<?php echo $_smarty_tpl->tpl_vars['cms']->value['thumbnail'];?>
">
              </div>
              <div class="form-group">
                <div class="form-line">
                  <input type="file" name="file_thumbnail" class="hidden" data-preview="#preview_thumbnail" onchange="icon(this);" accept="image/*">
                  <button type="button" class="form-control bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" onclick="$('[name=file_thumbnail]').click()">Chọn File</button>
                </div>
              </div>
          </li>
          <li>
            <span>Favicon</span>
            <div class="form-group">
              <div class="form-line">
                <img class="img-responsive" alt="" src="<?php echo $_smarty_tpl->tpl_vars['cms']->value['favicon'];?>
" id="preview_favicon" data-src="<?php echo $_smarty_tpl->tpl_vars['cms']->value['favicon'];?>
">
              </div>
              <div class="form-group">
                <div class="form-line">
                  <input type="file" name="file_favicon" class="hidden" data-preview="#preview_favicon" onchange="icon(this);" accept="image/*">
                  <button type="button" class="form-control bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" onclick="$('[name=file_favicon]').click()">Chọn File</button>
                </div>
              </div>
          </li>
          <li>
            <div class="form-group">
              <button type="reset" name="reset" value="reset" id="reset_settings" class="form-control bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">ĐẶT LẠI</button>
              <hr />
              <button type="submit" name="submit" value="submit" class="form-control bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">LƯU</button>
            </div>
          </li>
        </ul>
      </div>
    </form>
  </div>
  <?php }?>
  </div>
</aside>
<!-- #END# Right Sidebar -->
<?php }
}
