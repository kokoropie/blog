<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <form action="/action/edit-category.admin" method="post" id="edit_category">
          <input type="hidden" name="cat_id" value="{$cat.cat_id}">
          <div class="row clearfix">
            <div class="col-sm-7">
              <h2 class="card-inside-title">Tiêu Đề</h2>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" class="form-control" name="title" required placeholder="Tiêu Đề" value="{$cat.name}">
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <h2 class="card-inside-title">Chuyên Mục Mẹ</h2>
              <div class="form-group">
                <div class="form-line" id="by_id">
                  <select class="form-control show-tick" name="by_id">
                    <option value="0">-- Chuyên Mục Mẹ --</option>
                    {foreach $categories.main as $value}
                    <option value="{$value.cat_id}" {if $cat.by_id == $value.cat_id}selected{/if}>{$value.name}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" name="submit" value="Edit" class="btn bg-{$theme} waves-effect">Sửa Chuyên Mục</button>
              <button type="reset" name="reset" id="reset_button" value="Reset" class="btn bg-{$theme} waves-effect">Nhập Lại</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
