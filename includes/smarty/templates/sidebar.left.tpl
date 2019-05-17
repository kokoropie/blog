<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar" data-main="{$where.main}" data-sub="{$where.sub}">
  <!-- Menu -->
  <div class="menu">
    <div>
      <ol class="breadcrumb breadcrumb-bg-{$theme} margin-0">
        {foreach $breadcrumb as $value}
        {if $value@key == (count($breadcrumb) - 1)}
        <li class="active">{$value.title}</li>
        {else}
        <li><a href="{$value.url}">{$value.title}</a></li>
        {/if}
        {/foreach}
      </ol>
    </div>
    <ul class="list">
      <li {if $where.main == "home"}class="active"{/if}>
        <a href="/">
          <i class="material-icons">home</i>
          <span>Home</span>
        </a>
      </li>
      <li class="header {if $where.main == "category"}active{/if}" id="list_category">
        <a href="/category">
          <i class="material-icons">widgets</i>
          <span>CHUYÊN MỤC (<b>{number_format(count($categories.main))}</b>)</span>
        </a>
      </li>
      {if isset($ss.logined)}
      <li {if $where.main == "add-category"}class="active"{/if}>
        <a href="/admin/add-category.html">
          <i class="material-icons">add_box</i>
          <span>Tạo Chuyên Mục</span>
        </a>
      </li>
      {/if}
      {foreach $categories.main as $value}
      <li {if $where.main == $value.cat_id}class="active"{/if} id="li_cat_{$value.cat_id}">
      {if $value.numb == 0}
        <a href="/category/{$value.url}.html">
          <i class="material-icons">dashboard</i>
          <span>{$value.name}</span>
        </a>
      {else}
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">dashboard</i>
          <span>{$value.name} (<b>{number_format($value.numb)}</b>)</span>
        </a>
        <ul class="ml-menu">
          {foreach $categories['sub'][$value@key] as $val}
          <li {if $where.sub == $val.cat_id}class="active"{/if}>
            <a href="/category/{$val.url}.html">{$val.name} (<b>{number_format($val.numb)}</b>)</a>
          </li>
          {/foreach}
        </ul>
      {/if}
      </li>
      {/foreach}
    </ul>
  </div>
  <!-- #Menu -->
  <!-- Footer -->
  <div class="legal">
    <div class="copyright">
      Copyright &copy; {date('Y')}
    </div>
    <div class="version">
      <b>Version: </b> 1.0.5
    </div>
    <div class="version">
      <b id="timer">{date("Y-m-d H:i:s")}</b>
    </div>
  </div>
  <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
