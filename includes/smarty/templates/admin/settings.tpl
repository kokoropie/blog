<div class="row clearfix">
  <div class="col-xs-12 col-sm-9">
    <div class="card">
      <div class="body">
        <div>
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#admin_settings" aria-controls="settings" role="tab" data-toggle="tab">Admin</a></li>
            <li role="presentation"><a href="#contact_settings" aria-controls="settings" role="tab" data-toggle="tab">Liên Kết Xã Hội</a></li>
            <li role="presentation"><a href="#other_settings" aria-controls="settings" role="tab" data-toggle="tab">Cài Đặt Khác</a></li>
          </ul>
          <div class="tab-content" data-tab>
            <div role="tabpanel" class="tab-pane fade in" id="admin_settings">
              <form class="form-horizontal" action="/action/admin-settings.admin" method="post" id="admin_form">
                <div class="form-group">
                  <label for="Username" class="col-sm-2 control-label">Tài Khoản</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="text" class="form-control" name="username" placeholder="Tài Khoản" value="{$cms.admin.username}" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="OldPassword" class="col-sm-2 control-label">Mật Khẩu Cũ</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="password" class="form-control" name="old_password" placeholder="Mật Khẩu Cũ">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NewPassword" class="col-sm-2 control-label">Mật Khẩu Mới</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="password" class="form-control" name="new_password" placeholder="Mật Khẩu Mới">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ReNewPassword" class="col-sm-2 control-label">Mật Khẩu Mới (Nhập Lại)</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="password" class="form-control" name="re_new_password" placeholder="Mật Khẩu Mới (Nhập Lại)">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" value="Submit" class="btn bg-{$theme}">CẬP NHẬT</button>
                  </div>
                </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="contact_settings">
              <form class="form-horizontal" action="/action/contact-settings.admin" method="post" id="contact_form">
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-facebook-square" style="color: #3b5998"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[facebook]" placeholder="Facebook" value="{if !empty($cms.contact.facebook)}{$cms.contact.facebook}{/if}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-linkedin" style="color: #0077b5"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" data-mask-url class="form-control" name="contact[linkedin]" placeholder="Linkedin" value="{if !empty($cms.contact.linkedin)}{$cms.contact.linkedin}{/if}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-twitter" style="color: #1da1f2"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[twitter]" placeholder="Twitter" value="{if !empty($cms.contact.twitter)}{$cms.contact.twitter}{/if}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-github" style="color: #24292e"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[github]" placeholder="Github" value="{if !empty($cms.contact.github)}{$cms.contact.github}{/if}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-reddit" style="color: #ff4500"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[reddit]" placeholder="Reddit" value="{if !empty($cms.contact.reddit)}{$cms.contact.reddit}{/if}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fab fa-pinterest" style="color: #e60023"></i>
                    </span>
                    <div class="form-line">
                      <input type="url" class="form-control" name="contact[pinterest]" placeholder="Pinterest" value="{if !empty($cms.contact.pinterest)}{$cms.contact.pinterest}{/if}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fas fa-phone" style="color: #4caf50"></i>
                    </span>
                    <div class="form-line">
                      <input type="tel" class="form-control" name="contact[phone]" placeholder="Số Điện Thoại" value="{if !empty($cms.contact.phone)}{$cms.contact.phone}{/if}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fas fa-envelope" style="color: #d93025"></i>
                    </span>
                    <div class="form-line">
                      <input type="email" class="form-control" name="contact[email]" placeholder="email" value="{if !empty($cms.contact.email)}{$cms.contact.email}{/if}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class=" col-sm-offset-1 col-sm-11">
                    <button type="submit" type="submit" name="submit" value="Submit" class="btn bg-{$theme}">CẬP NHẬT</button>
                  </div>
                </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="other_settings">
              <form class="form-horizontal" action="/action/other-settings.admin" method="post" id="other_form">
                <div class="form-group">
                  <label for="Logo" class="col-sm-2 control-label">Logo</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="text" class="form-control" name="logo" placeholder="Logo" value="{$cms.logo}" onkeyup="$('#logo').text(this.value)" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Author" class="col-sm-2 control-label">Tác Giả</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <input type="text" class="form-control" name="author" placeholder="Tác Giả" value="{$cms.author}" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Intro" class="col-sm-2 control-label">Tự Bạch</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <textarea class="form-control no-resize auto-growth" name="intro" placeholder="Tự Bạch" required>{$cms.intro}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="TimeZone" class="col-sm-2 control-label">Múi Giờ</label>
                  <div class="col-sm-10">
                    <div class="form-line">
                      <select class="form-control show-tick" name="timezone">
                        {foreach $cms.list_timezone as $value}
                        <option value="{$value}" {if $value == $cms.timezone}selected{/if}>
                          {$value}
                        </option>
                        {/foreach}
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
