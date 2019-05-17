<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-17 12:05:23
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cde411386bf30_18929324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2a9d7e429ba2e3885c32ab91fd8ca4f9887b09f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\home.tpl',
      1 => 1558069174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashboard.tpl' => 1,
  ),
),false)) {
function content_5cde411386bf30_18929324 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-xs-12 col-sm-8">
    <div class="card">
      <div class="body">
        <div>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in">
              <?php if (count($_smarty_tpl->tpl_vars['post']->value) > 0) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
              <div class="panel panel-default panel-post" style="display: none;" loadMore>
                <div class="panel-heading">
                  <div class="media">
                    <div class="media-body">
                      <h3 class="media-heading font-24">
                        <a href="/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>
                      </h3>
                      <?php if (!empty($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
                      <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <i class="material-icons">more_vert</i>
                          </a>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="/admin/edit-post.<?php echo $_smarty_tpl->tpl_vars['value']->value['post_id'];?>
.html" class=" waves-effect waves-block">Sửa Bài Viết</a></li>
                            <li><a href="/admin/delete-post.<?php echo $_smarty_tpl->tpl_vars['value']->value['post_id'];?>
.html" class=" waves-effect waves-block">Xóa Bài Viết</a></li>
                          </ul>
                        </li>
                      </ul>
                      <?php }?>
                      <div class="col-xs-6 margin-0 padding-0">
                        <b><i class="fas fa-eye"></i> <?php echo number_format($_smarty_tpl->tpl_vars['value']->value['view']);?>
</b>
                      </div>
                      <div class="col-xs-6 text-right margin-0 padding-0">
                        <b><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
 <i class="far fa-clock"></i></b>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="post">
                    <div class="post-heading font-20">
                      <p><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</p>
                    </div>
                    <div class="post-content">
                      <a href="/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['thumbnail'];?>
" class="img-responsive" /></a>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <ul>
                    <li>
                      <a href="javascript:void(0)" data-like="<?php echo $_smarty_tpl->tpl_vars['value']->value['post_id'];?>
" data-update="0" <?php if ($_smarty_tpl->tpl_vars['value']->value['has_like']) {?>class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" <?php }?>> <i class="material-icons">thumb_up</i>
                        <span><?php echo number_format($_smarty_tpl->tpl_vars['value']->value['like']);?>
 Thích</span>
                      </a>
                    </li>
                    <li>
                      <a href="/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html#comment">
                        <i class="material-icons">comment</i>
                        <span><?php echo number_format($_smarty_tpl->tpl_vars['value']->value['comment']);?>
 Bình Luận</span>
                      </a>
                    </li>
                    <li>
                      <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Chia Sẻ Lên Facebook" href="https://www.facebook.com/share.php?u=<?php echo $_smarty_tpl->tpl_vars['cms']->value['url_home'];?>
/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html">
                        <i class="material-icons">share</i>
                        <span>Chia Sẻ</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <button type="button" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 form-control" data-target="[loadMore]" <?php if (count($_smarty_tpl->tpl_vars['post']->value) <= 5) {?>style="display:none" <?php }?> id="loadMore">Hiển Thị Thêm</button>
              <?php } else { ?>
              <div class="panel panel-default panel-post">
                <div class="panel-body">
                  <div class="post">
                    <div class="post-heading font-30">
                      <p>Không Có Dữ Liệu</p>
                    </div>
                    <div class="post-content">
                      <img src="/public/images/404.png" class="img-responsive" />
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4">
    <div class="">
      <div class="card">
        <div class="body">
          <ul class="nav nav-tabs tab-nav-right tab-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" role="tablist">
            <li role="presentation" class="active"><a href="#view" data-toggle="tab"><i class="material-icons">remove_red_eye</i></a></li>
            <li role="presentation"><a href="#like" data-toggle="tab"><i class="material-icons">thumb_up</i></a></li>
            <li role="presentation"><a href="#comment" data-toggle="tab"><i class="material-icons">comment</i></a></li>
            <li role="presentation"><a href="#sticky" data-toggle="tab"><i class="material-icons">star</i></a></li>
          </ul>
          <div class="tab-content" data-tab>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_6_saved = $_smarty_tpl->tpl_vars['val'];
?>
            <div role="tabpanel" class="tab-pane fade" id="<?php echo $_smarty_tpl->tpl_vars['val']->key;?>
">
              <?php if (count($_smarty_tpl->tpl_vars['val']->value) > 0) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
              <div class="media">
                <div class="media-left">
                  <a href="/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html">
                    <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['thumbnail'];?>
" width="64" height="64">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></h4>
                  <?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>

                </div>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
              <div class="media">
                <div class="media-left">
                  <a href="#404">
                    <img class="media-object" src="/public/images/404.jpg" width="64" height="64">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Không Có Dữ Liệu</h4>
                </div>
              </div>
              <?php }?>
            </div>
            <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="card card-about-me">
        <div class="header">
          <i class="fas fa-comments"></i> BÌNH LUẬN MỚI NHẤT
        </div>
        <div class="body">
          <ul id="list_comment">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <li>
              <div class="title">
                <a href="/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html#list_comment" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['from'];?>
</a>
              </div>
              <div class="content">
                <?php echo nl2br($_smarty_tpl->tpl_vars['value']->value['comment']);?>

                <br />
                <small><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</small>
              </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div>
<?php }
}
