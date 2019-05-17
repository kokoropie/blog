<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover dataTable" data-table>
            <thead>
              <tr>
                <th>IP</th>
                <th>THỜI GIAN</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>IP</th>
                <th>THỜI GIAN</th>
              </tr>
            </tfoot>
            <tbody>
              {foreach $cms.log as $value}
              <tr id="log_{$value@key}">
                <td>{$value.ip}</td>
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
