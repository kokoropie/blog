<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-17 12:11:05
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\admin\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cde4269d97963_29298453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8ca450eae742d83c01bbd9189f064d90d79de3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\admin\\settings.tpl',
      1 => 1558069174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde4269d97963_29298453 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-xs-12 col-sm-9">
    <div class="card">
      <div class="body">
        <div>
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#admin_settings" aria-controls="settings" role="tab" data-toggle="tab">Admin</a></li>
            <li role="presentation"><a href="#contact_settings" aria-controls="settings" role="tab" data-toggle="tab">Liên Kết Xã Hội</a></li>
            <li role="presentation"><a href="#other_settings" aria-controls="settings" role="tab" data-toggle="tab">Cài Đặt Khác</a></li>
          </ul>
          <div class="tab-content" data-tab>
            <div role="tabpanel" class="tab-pane fade in" id="admin_settings">
              <form class="form-horizontal" action="/action/admin-settings.admin" method="post" id="admin_form">
                <div class="form-group">
                  <label for="Username" class="col-sm-2 control-label">Tài Khoản</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="text" class="form-control" name="username" placeholder="Tài Khoản" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value['admin']['username'];?>
" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="OldPassword" class="col-sm-2 control-label">Mật Khẩu Cũ</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="password" class="form-control" name="old_password" placeholder="Mật Khẩu Cũ">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NewPassword" class="col-sm-2 control-label">Mật Khẩu Mới</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="password" class="form-control" name="new_password" placeholder="Mật Khẩu Mới">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ReNewPassword" class="col-sm-2 control-label">Mật Khẩu Mới (Nhập Lại)</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="password" class="form-control" name="re_new_password" placeholder="Mật Khẩu Mới (Nhập Lại)">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" value="Submit" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">CẬP NHẬT</button>
                  </div>
                </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="contact_settings">
              <form class="form-horizontal" action="/action/contact-settings.admin" method="post" id="contact_form">
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-facebook-square" style="color: #3b5998"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[facebook]" placeholder="Facebook" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['facebook'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['facebook'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-linkedin" style="color: #0077b5"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" data-mask-url class="form-control" name="contact[linkedin]" placeholder="Linkedin" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['linkedin'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['linkedin'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-twitter" style="color: #1da1f2"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[twitter]" placeholder="Twitter" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['twitter'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['twitter'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-github" style="color: #24292e"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[github]" placeholder="Github" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['github'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['github'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-reddit" style="color: #ff4500"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[reddit]" placeholder="Reddit" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['reddit'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['reddit'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-pinterest" style="color: #e60023"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[pinterest]" placeholder="Pinterest" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['pinterest'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['pinterest'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fas fa-phone" style="color: #4caf50"></i>
                    </span>
                    <div class="form-line">
                      <input type="tel" class="form-control" name="contact[phone]" placeholder="Số Điện Thoại" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['phone'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['phone'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fas fa-envelope" style="color: #d93025"></i>
                    </span>
                    <div class="form-line">
                      <input type="email" class="form-control" name="contact[email]" placeholder="email" value="<?php if (!empty($_smarty_tpl->tpl_vars['cms']->value['contact']['email'])) {
echo $_smarty_tpl->tpl_vars['cms']->value['contact']['email'];
}?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class=" col-sm-offset-1 col-sm-11">
                    <button type="submit" type="submit" name="submit" value="Submit" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">CẬP NHẬT</button>
                  </div>
                </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="other_settings">
              <form class="form-horizontal" action="/action/other-settings.admin" method="post" id="other_form">
                <div class="form-group">
                  <label for="Logo" class="col-sm-2 control-label">Logo</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="text" class="form-control" name="logo" placeholder="Logo" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value['logo'];?>
" onkeyup="$('#logo').text(this.value)" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Author" class="col-sm-2 control-label">Tác Giả</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="text" class="form-control" name="author" placeholder="Tác Giả" value="<?php echo $_smarty_tpl->tpl_vars['cms']->value['author'];?>
" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Intro" class="col-sm-2 control-label">Tự Bạch</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <textarea class="form-control no-resize auto-growth" name="intro" placeholder="Tự Bạch" required><?php echo $_smarty_tpl->tpl_vars['cms']->value['intro'];?>
</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="TimeZone" class="col-sm-2 control-label">Múi Giờ</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <select class="form-control show-tick" name="timezone">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms']->value['list_timezone'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['cms']->value['timezone']) {?>selected<?php }?>>
                          <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                        </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
