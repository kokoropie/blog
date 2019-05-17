<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
  {if isset($ss.logined)}
  <ul class="nav nav-tabs tab-nav-right" role="tablist">
    <li role="presentation"><a href="#skins" data-toggle="tab">GIAO DIỆN</a></li>
    <li role="presentation" class="active"><a href="#settings" data-toggle="tab">CÀI ĐẶT</a></li>
  </ul>
  {/if}
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade {if empty($ss.logined)}in active{/if}" id="skins">
      <ul class="demo-choose-skin">
        {foreach $cms.themes as $value}
        <li data-theme="{$value.color}" onclick="change_theme('{$value.color}')" {if $theme==$value.color}class="active" {/if}> <div class="{$value.color}">
    </div>
    <span>{$value.name}</span>
    </li>
    {/foreach}
    </ul>
  </div>
  {if isset($ss.logined)}
  <div role="tabpanel" class="tab-pane fade in active" id="settings">
    <form action="/action/settings.admin" method="post" id="settings_form">
      <div class="demo-settings">
        <p>THÔNG TIN WEBSITE</p>
        <ul class="setting-list">
          <li>
            <span>Tiêu Đề</span>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="title" class="form-control" placeholder="Tiêu Đề" value="{$cms.title}" required>
                <input type="hidden" name="title_now" value="{$title}">
              </div>
            </div>
          </li>
          <li>
            <span>Từ Khóa</span>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="keywords" class="form-control" data-role="tagsinput" placeholder="Từ Khóa" value="{$cms.keywords}" required>
              </div>
            </div>
          </li>
          <li>
            <span>Mô Tả</span>
            <div class="form-group">
              <div class="form-line">
                <textarea name="description" class="form-control no-resize auto-growth" placeholder="Mô Tả" required>{$cms.description}</textarea>
              </div>
            </div>
          </li>
          <li>
            <span>Ảnh Nền</span>
            <div class="form-group">
              <div class="form-line">
                <img class="img-responsive" alt="" src="{$cms.thumbnail}" id="preview_thumbnail" data-src="{$cms.thumbnail}">
              </div>
              <div class="form-group">
                <div class="form-line">
                  <input type="file" name="file_thumbnail" class="hidden" data-preview="#preview_thumbnail" onchange="icon(this);" accept="image/*">
                  <button type="button" class="form-control bg-{$theme}" onclick="$('[name=file_thumbnail]').click()">Chọn File</button>
                </div>
              </div>
          </li>
          <li>
            <span>Favicon</span>
            <div class="form-group">
              <div class="form-line">
                <img class="img-responsive" alt="" src="{$cms.favicon}" id="preview_favicon" data-src="{$cms.favicon}">
              </div>
              <div class="form-group">
                <div class="form-line">
                  <input type="file" name="file_favicon" class="hidden" data-preview="#preview_favicon" onchange="icon(this);" accept="image/*">
                  <button type="button" class="form-control bg-{$theme}" onclick="$('[name=file_favicon]').click()">Chọn File</button>
                </div>
              </div>
          </li>
          <li>
            <div class="form-group">
              <button type="reset" name="reset" value="reset" id="reset_settings" class="form-control bg-{$theme}">ĐẶT LẠI</button>
              <hr />
              <button type="submit" name="submit" value="submit" class="form-control bg-{$theme}">LƯU</button>
            </div>
          </li>
        </ul>
      </div>
    </form>
  </div>
  {/if}
  </div>
</aside>
<!-- #END# Right Sidebar -->
