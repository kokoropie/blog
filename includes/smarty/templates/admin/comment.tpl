<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover dataTable" data-table>
            <thead>
              <tr>
                <th>
                  <input type="checkbox" data-check="[data-target=checkbox]" id="check_all_1" onchange="document.getElementById('check_all_2').checked = this.checked" class="filled-in chk-col-{$theme}" />
                  <label for="check_all_1"></label>
                </th>
                <th>ID</th>
                <th>TÊN</th>
                <th>BÀI VIẾT</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>
                  <input type="checkbox" data-check="[type=checkbox]:not([data-check])" id="check_all_2" onchange="document.getElementById('check_all_1').checked = this.checked" class="filled-in chk-col-{$theme}" />
                  <label for="check_all_2"></label>
                </th>
                <th>ID</th>
                <th>TÊN</th>
                <th>BÀI VIẾT</th>
              </tr>
            </tfoot>
            <tbody>
              {foreach $comment as $value}
              <tr>
                <td>
                  <input type="checkbox" data-target="checkbox" id="comment_id_{$value.comment_id}" onchange="document.getElementById('real_' + this.id).checked = this.checked" class="filled-in chk-col-{$theme}" />
                  <label for="comment_id_{$value.comment_id}"></label>
                </td>
                <td>
                  {$value.comment_id}
                </td>
                <td><a href="/category/{$value.post_id}.html" class="col-{$theme}">{$value.from}</a></td>
                <td>{$value.comment}</td>
              </tr>
              {/foreach}
            </tbody>
          </table>
          {foreach $comment as $value}
          <input type="checkbox" id="real_comment_id_{$value.comment_id}" data-comment="{$value.comment_id}" class="filled-in chk-col-{$theme}" />
          {/foreach}
        </div>
      </div>
    </div>
  </div>
</div>
