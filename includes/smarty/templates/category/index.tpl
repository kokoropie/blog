<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover dataTable" data-table>
            <thead>
              <tr>
                <th>TÊN</th>
                <th>CHUYÊN MỤC CON</th>
                {if !empty($ss.logined)}
                <th>HÀNH ĐỘNG</th>
                {/if}
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>TÊN</th>
                <th>CHUYÊN MỤC CON</th>
                {if !empty($ss.logined)}
                <th>HÀNH ĐỘNG</th>
                {/if}
              </tr>
            </tfoot>
            <tbody>
              {foreach $categories.main as $value}
              <tr>
               <td><a href="/category/{$value.url}.html" class="col-{$theme}">{$value.name}</a></td>
               <td>{number_format($value.numb)}</td>
               {if !empty($ss.logined)}
               <td><a href="/admin/edit-category.{$value.cat_id}.html" class="col-{$theme}">Sửa Chuyên Mục</a> | <a href="/admin/delete-category.{$value.cat_id}.html" class="col-{$theme}">Xóa Chuyên Mục</a></td>
               {/if}
              </tr>
              {/foreach}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
