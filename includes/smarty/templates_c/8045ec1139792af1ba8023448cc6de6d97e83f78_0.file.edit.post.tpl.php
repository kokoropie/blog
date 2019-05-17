<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-14 21:10:13
  from 'C:\xampp\htdocs\includes\smarty\templates\admin\edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cdacc457ba455_08437550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8045ec1139792af1ba8023448cc6de6d97e83f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\includes\\smarty\\templates\\admin\\edit.post.tpl',
      1 => 1556517371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdacc457ba455_08437550 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <form action="/action/edit-post.admin" method="post" id="edit_post">
    <input name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" type="hidden" />
    <div class="col-sm-8">
      <div class="card">
        <div class="body">
          <div class="row clearfix">
            <div class="col-sm-12">
              <h2 class="card-inside-title">Tiêu Đề (Tối Đa 1,000 Ký Tự)</h2>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" class="form-control" maxlength="1000" name="title" required placeholder="Tiêu Đề" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
">
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Nội Dung</h2>
              <div class="form-group">
                <div class="form-line">
                  <textarea name="content" required placeholder="Nội Dung" id="content" data-ckeditor="true"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
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
                    <option value="hidden" data-subtext="(Không Hiện Trước Khách)" <?php if ($_smarty_tpl->tpl_vars['post']->value['status'] != "public") {?>selected<?php }?>>Ẩn</option>
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
"  <?php if ($_smarty_tpl->tpl_vars['post']->value['cat_id'] == $_smarty_tpl->tpl_vars['val']->value['cat_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
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
                  <label><input type="checkbox" name="sticky" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value['sticky'] == 1) {?>checked<?php }?>><span class="lever switch-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"></span></label>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Từ Khóa (Tùy Chọn)</h2>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" class="form-control" name="keywords" placeholder="Từ Khóa" data-role="tagsinput" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keywords'];?>
">
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Mô Tả (Tùy Chọn)</h2>
              <div class="form-group">
                <div class="form-line">
                  <textarea name="description" class="form-control no-resize auto-growth" placeholder="Mô Tả"><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Ảnh Nền (Tùy Chọn)</h2>
              <div class="form-group">
                <div class="form-line">
                  <img alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['thumbnail'];?>
" class="img-responsive" id="post_preview" data-src="<?php echo $_smarty_tpl->tpl_vars['post']->value['thumbnail'];?>
" />
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
 waves-effect">Sửa Bài Viết</button>
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
