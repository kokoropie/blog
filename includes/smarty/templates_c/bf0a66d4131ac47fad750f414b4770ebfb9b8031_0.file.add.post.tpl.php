<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-14 20:34:01
  from 'C:\xampp\htdocs\includes\smarty\templates\admin\add.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cdac3c9aabc36_07341708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0a66d4131ac47fad750f414b4770ebfb9b8031' => 
    array (
      0 => 'C:\\xampp\\htdocs\\includes\\smarty\\templates\\admin\\add.post.tpl',
      1 => 1556517375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdac3c9aabc36_07341708 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <form action="/action/add-post.admin" method="post" id="add_post">
    <div class="col-sm-8">
      <div class="card">
        <div class="body">
          <div class="row clearfix">
            <div class="col-sm-12">
              <h2 class="card-inside-title">Tiêu Đề (Tối Đa 1,000 Ký Tự)</h2>
              <div class="form-group">
                <div class="form-line focused">
                  <input type="text" class="form-control" autofocus maxlength="1000" name="title" required placeholder="Tiêu Đề">
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Nội Dung</h2>
              <div class="form-group">
                <div class="form-line">
                  <textarea name="content" required placeholder="Nội Dung" id="content" data-ckeditor="true"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="body">
          <div class="row clearfix">
            <div class="col-sm-6">
              <h2 class="card-inside-title">Tình Trạng</h2>
              <div class="form-group">
                <div class="form-line">
                  <select class="form-control show-tick" name="status">
                    <option value="public">Công Khai</option>
                    <option value="hidden" data-subtext="(Không Hiện Trước Khách)">Ẩn</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <h2 class="card-inside-title">Chuyên Mục</h2>
              <div class="form-group">
                <div class="form-line">
                  <select class="form-control show-tick" name="cat_id">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['main'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
                    <optgroup label="--- <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 ---">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['sub'][$_smarty_tpl->tpl_vars['value']->key], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </optgroup>
                    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Nổi Bật</h2>
              <div class="switch">
                  <label><input type="checkbox" name="sticky" value="1"><span class="lever switch-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"></span></label>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Từ Khóa (Tùy Chọn)</h2>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" class="form-control" name="keywords" placeholder="Từ Khóa" data-role="tagsinput">
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Mô Tả (Tùy Chọn)</h2>
              <div class="form-group">
                <div class="form-line">
                  <textarea name="description" class="form-control no-resize auto-growth" placeholder="Mô Tả"></textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Ảnh Nền (Tùy Chọn)</h2>
              <div class="form-group">
                <div class="form-line">
                  <img alt="" class="img-responsive" id="post_preview" data-src="" />
                  <input name="thumbnail" class="hidden" id="file_thumbnail" accept="image/*" onchange="icon(this);" type="file" data-preview="#post_preview" />
                  <button type="button" onclick="$('#file_thumbnail').click()" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 form-control">Chọn Ảnh</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" name="submit" value="Create" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 waves-effect">Đăng Bài Viết</button>
              <button type="reset" name="reset" value="Reset" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 waves-effect">Nhập Lại</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php }
}
