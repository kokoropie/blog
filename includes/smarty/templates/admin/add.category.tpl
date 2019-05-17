<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <form action="/action/add-category.admin" method="post" id="add_category">
          <div class="row clearfix">
            <div class="col-sm-7">
              <h2 class="card-inside-title">Tiêu Đề</h2>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" class="form-control" name="title" required placeholder="Tiêu Đề">
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
                    <option value="{$value.cat_id}">{$value.name}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" name="submit" value="Create" class="btn bg-{$theme} waves-effect">Tạo Chuyên Mục</button>
              <button type="reset" name="reset" id="reset_button" value="Reset" class="btn bg-{$theme} waves-effect">Nhập Lại</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
