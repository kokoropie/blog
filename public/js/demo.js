$(function () {
    skinChanger();
    activateNotificationAndTasksScroll();

    setSkinListHeightAndScroll(true);
    setSettingListHeightAndScroll(true);
    $(window).resize(function () {
        setSkinListHeightAndScroll(false);
        setSettingListHeightAndScroll(false);
    });
});

//Skin changer
function skinChanger() {
    $('.right-sidebar .demo-choose-skin li').on('click', function () {
        var $body = $('body');
        var $breadcrumb = $('.breadcrumb');
        var $this = $(this);

        var $bg = $('.bg-' + $theme + ':not(.not)');
        var $col = $('.col-' + $theme + ':not(.not)');
        var $tab = $('.tab-col-' + $theme + ':not(.not)');
        var $switch = $('.switch-col-' + $theme + ':not(.not)');
		$theme = $('.right-sidebar .demo-choose-skin li.active').data('theme');

        $('.right-sidebar .demo-choose-skin li').removeClass('active');

        $this.addClass('active');

        $body.removeClass('theme-' + $theme).addClass('theme-' + $this.data('theme'));
        $breadcrumb.removeClass('breadcrumb-bg-' + $theme).addClass('breadcrumb-bg-' + $this.data('theme'));

        $bg.each(function(){
          $(this).removeClass('bg-' + $theme).addClass('bg-' + $this.data('theme'));
        });
        $col.each(function(){
          $(this).removeClass('col-' + $theme).addClass('col-' + $this.data('theme'));
        });
        $tab.each(function(){
          $(this).removeClass('tab-col-' + $theme).addClass('tab-col-' + $this.data('theme'));
        });
        $switch.each(function(){
          $(this).removeClass('switch-col-' + $theme).addClass('switch-col-' + $this.data('theme'));
        });
    });
}

//Skin tab content set height and show scroll
function setSkinListHeightAndScroll(isFirstTime) {
    var height = $(window).height() - ($('.navbar').innerHeight() + $('.right-sidebar .nav-tabs').outerHeight());
    var $el = $('.demo-choose-skin');

    if (!isFirstTime){
      $el.slimScroll({ destroy: true }).height('auto');
      $el.parent().find('.slimScrollBar, .slimScrollRail').remove();
    }

    $el.slimscroll({
        height: height + 'px',
        color: 'rgba(0,0,0,0.5)',
        size: '6px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Setting tab content set height and show scroll
function setSettingListHeightAndScroll(isFirstTime) {
    var height = $(window).height() - ($('.navbar').innerHeight() + $('.right-sidebar .nav-tabs').outerHeight());
    var $el = $('.right-sidebar .demo-settings');

    if (!isFirstTime){
      $el.slimScroll({ destroy: true }).height('auto');
      $el.parent().find('.slimScrollBar, .slimScrollRail').remove();
    }

    $el.slimscroll({
        height: height + 'px',
        color: 'rgba(0,0,0,0.5)',
        size: '6px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Activate notification and task dropdown on top right menu
function activateNotificationAndTasksScroll() {
    $('.navbar-right .dropdown-menu .body .menu').slimscroll({
        height: '254px',
        color: 'rgba(0,0,0,0.5)',
        size: '4px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}
