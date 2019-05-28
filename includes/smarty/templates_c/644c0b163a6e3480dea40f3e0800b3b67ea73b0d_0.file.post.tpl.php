<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-28 10:09:38
  from 'C:\Users\shell\Documents\GitHub\blog\includes\smarty\templates\post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5ceca6729cb9a8_05214237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '644c0b163a6e3480dea40f3e0800b3b67ea73b0d' => 
    array (
      0 => 'C:\\Users\\shell\\Documents\\GitHub\\blog\\includes\\smarty\\templates\\post.tpl',
      1 => 1558987498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashboard.tpl' => 1,
  ),
),false)) {
function content_5ceca6729cb9a8_05214237 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-xs-12 col-sm-8">
    <div class="card">
      <div class="body">
        <div class="panel panel-default panel-post">
          <div class="panel-heading">
            <div class="media">
              <div class="media-body">
                <h3 class="media-heading font-24">
                  <?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>

                </h3>
                <div class="col-xs-6 margin-0 padding-0">
                  <b><i class="fas fa-eye"></i> <?php echo number_format($_smarty_tpl->tpl_vars['post']->value['view']);?>
</b>
                </div>
                <div class="col-xs-6 text-right margin-0 padding-0">
                  <b><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
 <i class="far fa-clock"></i></b>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="post" gallery>
              <div class="post-heading padding-0">
                <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['thumbnail'];?>
" thumbnail class="js-animating-object img-responsive animated zoomIn" alt="" />
              </div>
              <div class="post-content p-l-15 p-r-15 p-t-15 p-b-15">
                <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

              </div>
            </div>
          </div>
          <div class="panel-footer" style="border-top: 1px solid #ddd;">
            <ul>
              <li>
                <?php if (empty($_smarty_tpl->tpl_vars['post']->value['prev'])) {?>
                <button class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" disabled>
                  << Bài Trước
                </button>
                <?php } else { ?>
                <a href="/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['prev']['url'];?>
.html" data-prev-post data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['post']->value['prev']['name'];?>
">
                  <button class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">
                    << Bài Trước
                  </button>
                </a>
                <?php }?>
              </li>
              <li>
                <?php if (empty($_smarty_tpl->tpl_vars['post']->value['next'])) {?>
                <button class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" disabled>
                  Bài Sau >>
                </button>
                <?php } else { ?>
                <a href="/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['next']['url'];?>
.html" data-next-post data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['post']->value['next']['name'];?>
">
                  <button class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">
                    Bài Sau >>
                  </button>
                </a>
                <?php }?>
              </li>
            </ul>
          </div>
          <div class="panel-footer">
            <ul>
              <li>
                <a href="javascript:void(0)" data-like="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['has_like']) {?>class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"<?php }?>>
                  <i class="material-icons">thumb_up</i>
                  <span><?php echo number_format($_smarty_tpl->tpl_vars['post']->value['like']);?>
 Thích</span>
                </a>
              </li>
              <li>
                <a href="#comment" data-hash>
                  <i class="material-icons">comment</i>
                  <span><?php echo number_format(count($_smarty_tpl->tpl_vars['post']->value['comment']));?>
 Bình Luận</span>
                </a>
              </li>
              <li>
                <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Chia Sẻ Lên Facebook" href="https://www.facebook.com/share.php?u=<?php echo $_smarty_tpl->tpl_vars['cms']->value['url_home'];?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
.html">
                  <i class="material-icons">share</i>
                  <span>Chia Sẻ</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4">
    <div class="" id="comment">
      <div class="card">
        <div class="header">
          <i class="fas fa-comments"></i> BÌNH LUẬN
        </div>
        <div class="body">
          <div class="row">
            <form action="/action/comment" id="form_comment" method="post">
              <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" />
              <div class="col-xs-6">
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['info']['name'];?>
" required>
                    <label class="form-label">Tên</label>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['info']['email'];?>
">
                    <label class="form-label">Email (Tùy Chọn)</label>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group form-float">
                  <div class="form-line">
                    <textarea class="form-control no-resize auto-growth" name="comment" required></textarea>
                    <label class="form-label">Bình Luận</label>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <input type="reset" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 form-control" name="reset" value="NHẬP LẠI">
              </div>
              <div class="col-xs-6">
                <input type="submit" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 form-control" name="submit" value="BÌNH LUẬN">
              </div>
            </form>
          </div>
          <div class="row">
            <div class="card-about-me">
              <div class="body">
                <ul id="list_comment">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['comment'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                  <li loadMore>
                    <div class="title col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">
                      <?php echo $_smarty_tpl->tpl_vars['value']->value['from'];?>

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
                <button type="button" class="btn bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 form-control" id="loadMore" data-target="[loadMore]" <?php if (count($_smarty_tpl->tpl_vars['post']->value['comment']) <= 5) {?>style="display:none;"<?php }?>>Tải Thêm</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="card">
        <div class="header">
          <i class="fas fa-random"></i> BÀI VIẾT LIÊN QUAN
        </div>
        <div class="body">
          <?php if (count($_smarty_tpl->tpl_vars['post']->value['data']) > 0) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['data'], 'value');
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
      </div>
    </div>
    <div class="">
      <div class="card">
        <div class="header">
          <i class="fas fa-tags"></i> TỪ KHÓA
        </div>
        <div class="body">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",$_smarty_tpl->tpl_vars['post']->value['keywords']), 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
          <a href="/search?q=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><span class="label bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span></a>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div>
<?php }
}
