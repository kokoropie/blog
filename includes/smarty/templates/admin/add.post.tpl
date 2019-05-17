<div class="row clearfix">
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
                    {foreach $categories.main as $value}
                    <optgroup label="--- {$value.name} ---">
                      {foreach $categories['sub'][$value@key] as $val}
                      <option value="{$val.cat_id}">{$val.name}</option>
                      {/foreach}
                    </optgroup>
                    {/foreach}
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <h2 class="card-inside-title">Nổi Bật</h2>
              <div class="switch">
                  <label><input type="checkbox" name="sticky" value="1"><span class="lever switch-col-{$theme}"></span></label>
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
                  <button type="button" onclick="$('#file_thumbnail').click()" class="btn bg-{$theme} form-control">Chọn Ảnh</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" name="submit" value="Create" class="btn bg-{$theme} waves-effect">Đăng Bài Viết</button>
              <button type="reset" name="reset" value="Reset" class="btn bg-{$theme} waves-effect">Nhập Lại</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
