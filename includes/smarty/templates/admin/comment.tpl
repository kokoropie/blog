<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>
                  <input type="checkbox" data-check="[data-target=checkbox]" id="check_all_1" onchange="document.getElementById('check_all_2').checked = this.checked" class="filled-in chk-col-{$theme}" />
                  <label for="check_all_1"></label>
                </th>
                <th>THÔNG TIN</th>
                <th>BÌNH LUẬN</th>
                <th>BÀI VIẾT</th>
                <th>THỜI GIAN</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>
                  <input type="checkbox" data-check="[data-target=checkbox]" id="check_all_2" onchange="document.getElementById('check_all_1').checked = this.checked" class="filled-in chk-col-{$theme}" />
                  <label for="check_all_2"></label>
                </th>
                <th>THÔNG TIN</th>
                <th>BÌNH LUẬN</th>
                <th>BÀI VIẾT</th>
                <th>THỜI GIAN</th>
              </tr>
            </tfoot>
            <tbody>
              {foreach $comment as $value}
              <tr>
                <td>
                  <input type="checkbox" name="comment_id[{$value.comment_id}]" value="{$value.comment_id}" data-target="checkbox" id="comment_id_{$value.comment_id}" class="filled-in chk-col-{$theme}" />
                  <label for="comment_id_{$value.comment_id}"></label>
                </td>
                <td>{$value.from}</td>
                <td>{$value.comment}</td>
                <td><a href="/post/{$value.post_url}.html" class="col-{$theme}">{$value.post_name}</a></td>
                <td>{$value.time}</td>
              </tr>
              {/foreach}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
