<div class="row clearfix">
  <div class="col-xs-12 col-sm-8">
    <div class="card">
      <div class="body">
        <div>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in">
              {if count($result) > 0}
              {foreach $result as $value}
              <div class="panel panel-default panel-post" style="display: none;" loadMore>
                <div class="panel-heading">
                  <div class="media">
                    <div class="media-body">
                      <h3 class="media-heading font-24">
                        <a href="/post/{$value.url}.html" class="col-{$theme}">{$value.name}</a>
                      </h3>
                      {if !empty($ss.logined)}
                      <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <i class="material-icons">more_vert</i>
                          </a>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="/admin/edit-post.{$value.post_id}.html" class=" waves-effect waves-block">Sửa Bài Viết</a></li>
                            <li><a href="/admin/delete-post.{$value.post_id}.html" class=" waves-effect waves-block">Xóa Bài Viết</a></li>
                          </ul>
                        </li>
                      </ul>
                      {/if}
                      <div class="col-xs-6 margin-0 padding-0">
                        <b><i class="fas fa-eye"></i> {number_format($value.view)}</b>
                      </div>
                      <div class="col-xs-6 text-right margin-0 padding-0">
                        <b>{$value.time} <i class="far fa-clock"></i></b>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="post">
                    <div class="post-heading font-20">
                      <p>{$value.description}</p>
                    </div>
                    <div class="post-content">
                      <a href="/post/{$value.url}.html"><img src="{$value.thumbnail}" class="img-responsive" /></a>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <ul>
                    <li>
                      <a href="javascript:void(0)" data-like="{$value.post_id}" data-update="0" {if $value.has_like}class="col-{$theme}" {/if}> <i class="material-icons">thumb_up</i>
                        <span>{number_format($value.like)} Thích</span>
                      </a>
                    </li>
                    <li>
                      <a href="/post/{$value.url}.html#comment">
                        <i class="material-icons">comment</i>
                        <span>{number_format($value.comment)} Bình Luận</span>
                      </a>
                    </li>
                    <li>
                      <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Chia Sẻ Lên Facebook" href="https://www.facebook.com/share.php?u={$cms.url_home}/post/{$value.url}.html">
                        <i class="material-icons">share</i>
                        <span>Chia Sẻ</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              {/foreach}
              <button type="button" class="btn bg-{$theme} form-control" data-target="[loadMore]" {if count($result) <=5}style="display:none" {/if} id="loadMore">Hiển Thị Thêm</button>
              {else}
              <div class="panel panel-default panel-post">
                <div class="panel-body">
                  <div class="post">
                    <div class="post-heading font-30">
                      <p>Không Có Dữ Liệu</p>
                    </div>
                    <div class="post-content">
                      <img src="/public/images/404.png" class="img-responsive" />
                    </div>
                  </div>
                </div>
              </div>
              {/if}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4">
    {include file="dashboard.tpl"}
  </div>
</div>
