<div class="">
  <div class="card profile-card">
    <div class="header">
      <i class="fas fa-chart-line"></i> THỐNG KÊ
    </div>
    <div class="profile-footer">
      <ul>
        <li>
          <span>Đang Truy Cập</span>
          <span>{number_format($cms.online)}</span>
        </li>
        <li>
          <span>Lượt Truy Cập Hôm Nay</span>
          <span>{number_format($cms.count.today)}</span>
        </li>
        <li>
          <span>Lượt Truy Cập Hôm Qua</span>
          <span>{number_format($cms.count.yesterday)}</span>
        </li>
        <li>
          <span>Lượt Truy Cập Trong Tuần</span>
          <span>{number_format($cms.count.week)}</span>
        </li>
        <li>
          <span>Lượt Truy Cập Trong Tháng</span>
          <span>{number_format($cms.count.month)}</span>
        </li>
        <li>
          <span>Tổng Lượt Truy Cập</span>
          <span>{number_format($cms.count.total)}</span>
        </li>
        <li>
          <span>Lượt Truy Cập Trung Bình</span>
          <span>{number_format($cms.count.avg)}</span>
        </li>
      </ul>
    </div>
  </div>
</div>
