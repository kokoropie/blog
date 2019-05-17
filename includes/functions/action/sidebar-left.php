<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

$where['main'] = empty($_POST['main']) ? NULL : $_POST['main'];
$where['sub'] = empty($_POST['sub']) ? NULL : $_POST['sub'];
?>
<li <?=($where['main'] == "home" ? 'class="active"' : NULL)?>>
  <a href="/">
    <i class="material-icons">home</i>
    <span>Home</span>
  </a>
</li>
<li class="header <?=($where['main'] == "category" ? 'active' : NULL)?>" id="list_category">
  <a href="/category">
    <i class="material-icons">widgets</i>
    <span>CHUYÊN MỤC (<b><?=number_format(count($categories['main']))?></b>)</span>
  </a>
</li>
<?php if (!empty($ss->get('logined'))) { ?>
<li <?=($where['main'] == "add-category" ? 'class="active"' : NULL)?>>
  <a href="/admin/add-category.html">
    <i class="material-icons">add_box</i>
    <span>Tạo Chuyên Mục</span>
  </a>
</li>
<?php }
foreach ($categories['main'] as $key => $value) { ?>
<li <?=($where['main'] == $value['cat_id'] ? 'class="active"' : NULL)?> id="li_cat_<?=$value['cat_id']?>">
<?php if ($value['numb'] == 0) { ?>
  <a href="/category/<?=$value['url']?>.html">
    <i class="material-icons">dashboard</i>
    <span><?=$value['name']?></span>
  </a>
<?php } else { ?>
  <a href="javascript:void(0);" class="menu-toggle">
    <i class="material-icons">dashboard</i>
    <span><?=$value['name']?> (<b><?=number_format($value['numb'])?></b>)</span>
  </a>
  <ul class="ml-menu">
    <?php foreach ($categories['sub'][$key] as $val) { ?>
    <li <?=($where['main'] == $val['cat_id'] ? 'class="active"' : NULL)?>>
      <a href="/category/<?=$val['url']?>.html"><?=$val['name']?> (<b><?=number_format($val['numb'])?></b>)</a>
    </li>
  <?php } ?>
  </ul>
<?php } ?>
</li>
<?php }
