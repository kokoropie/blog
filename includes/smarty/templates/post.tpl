<div class="row clearfix">
  <div class="col-xs-12 col-sm-8">
    <div class="card">
      <div class="body">
        <div class="panel panel-default panel-post">
          <div class="panel-heading">
            <div class="media">
              <div class="media-body">
                <h3 class="media-heading font-24">
                  {$post.name}
                </h3>
                <div class="col-xs-6 margin-0 padding-0">
                  <b><i class="fas fa-eye"></i> {number_format($post.view)}</b>
                </div>
                <div class="col-xs-6 text-right margin-0 padding-0">
                  <b>{$post.time} <i class="far fa-clock"></i></b>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="post" gallery>
              <div class="post-heading padding-0">
                <img src="{$post.thumbnail}" thumbnail class="js-animating-object img-responsive animated zoomIn" alt="" />
              </div>
              <div class="post-content p-l-15 p-r-15 p-t-15 p-b-15">
                {$post.content}
              </div>
            </div>
          </div>
          <div class="panel-footer" style="border-top: 1px solid #ddd;">
            <ul>
              <li>
                {if empty($post.prev)}
                <button class="btn bg-{$theme}" disabled>
                  << Bài Trước
                </button>
                {else}
                <a href="/post/{$post.prev.url}.html" data-prev-post data-toggle="tooltip" data-placement="bottom" title="" data-original-title="{$post.prev.name}">
                  <button class="btn bg-{$theme}">
                    << Bài Trước
                  </button>
                </a>
                {/if}
              </li>
              <li>
                {if empty($post.next)}
                <button class="btn bg-{$theme}" disabled>
                  Bài Sau >>
                </button>
                {else}
                <a href="/post/{$post.next.url}.html" data-next-post data-toggle="tooltip" data-placement="bottom" title="" data-original-title="{$post.next.name}">
                  <button class="btn bg-{$theme}">
                    Bài Sau >>
                  </button>
                </a>
                {/if}
              </li>
            </ul>
          </div>
          <div class="panel-footer">
            <ul>
              <li>
                <a href="javascript:void(0)" data-like="{$post.post_id}" {if $post.has_like}class="col-{$theme}"{/if}>
                  <i class="material-icons">thumb_up</i>
                  <span>{number_format($post.like)} Thích</span>
                </a>
              </li>
              <li>
                <a href="#comment" data-hash>
                  <i class="material-icons">comment</i>
                  <span>{number_format(count($post.comment))} Bình Luận</span>
                </a>
              </li>
              <li>
                <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Chia Sẻ Lên Facebook" href="https://www.facebook.com/share.php?u={$cms.url_home}/post/{$post.url}.html">
                  <i class="material-icons">share</i>
                  <span>Chia Sẻ</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-4">
    <div class="" id="comment">
      <div class="card">
        <div class="header">
          <i class="fas fa-comments"></i> BÌNH LUẬN
        </div>
        <div class="body">
          <div class="row">
            <form action="/action/comment" id="form_comment" method="post">
              <input type="hidden" name="post_id" value="{$post.post_id}" />
              <div class="col-xs-6">
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="text" class="form-control" name="name" value="{$post.info.name}" required>
                    <label class="form-label">Tên</label>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="email" class="form-control" name="email" value="{$post.info.email}">
                    <label class="form-label">Email (Tùy Chọn)</label>
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group form-float">
                  <div class="form-line">
                    <textarea class="form-control no-resize auto-growth" name="comment" required></textarea>
                    <label class="form-label">Bình Luận</label>
                  </div>
                </div>
              </div>
              <div class="col-xs-6">
                <input type="reset" class="btn bg-{$theme} form-control" name="reset" value="NHẬP LẠI">
              </div>
              <div class="col-xs-6">
                <input type="submit" class="btn bg-{$theme} form-control" name="submit" value="BÌNH LUẬN">
              </div>
            </form>
          </div>
          <div class="row">
            <div class="card-about-me">
              <div class="body">
                <ul id="list_comment">
                  {foreach $post.comment as $value}
                  <li loadMore>
                    <div class="title col-{$theme}">
                      {$value.from}
                    </div>
                    <div class="content">
                      {$value.comment|nl2br}
                      <br />
                      <small>{$value.time}</small>
                    </div>
                  </li>
                  {/foreach}
                </ul>
                <button type="button" class="btn bg-{$theme} form-control" id="loadMore" data-target="[loadMore]" {if count($post.comment) <= 5}style="display:none;"{/if}>Tải Thêm</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="card">
        <div class="header">
          <i class="fas fa-random"></i> BÀI VIẾT LIÊN QUAN
        </div>
        <div class="body">
          {if count($post.data) > 0}
          {foreach $post.data as $value}
          <div class="media">
            <div class="media-left">
              <a href="/post/{$value.url}.html">
                <img class="media-object" src="{$value.thumbnail}" width="64" height="64">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><a href="/post/{$value.url}.html" class="col-{$theme}">{$value.name}</a></h4>
              {$value.description}
            </div>
          </div>
          {/foreach}
          {else}
          <div class="media">
            <div class="media-left">
              <a href="#404">
                <img class="media-object" src="/public/images/404.jpg" width="64" height="64">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Không Có Dữ Liệu</h4>
            </div>
          </div>
          {/if}
        </div>
      </div>
    </div>
    <div class="">
      <div class="card">
        <div class="header">
          <i class="fas fa-tags"></i> TỪ KHÓA
        </div>
        <div class="body">
          {foreach explode(",", $post.keywords) as $value}
          <a href="/search?q={$value}"><span class="label bg-{$theme}">{$value}</span></a>
          {/foreach}
        </div>
      </div>
    </div>
    {include file="dashboard.tpl"}
  </div>
</div>
