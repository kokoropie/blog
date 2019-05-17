      </div>
    </section>
    <a href="javascript:void(0)" rel="nofollow" class="button-fixed scrollToTop bg-{$theme} btn" style="display: block;">
      <i class="fas fa-chevron-up"></i>
    </a>
    <a href="javascript:void(0)" rel="nofollow" class="button-fixed scrollToBottom bg-{$theme} btn" style="display: block;">
      <i class="fas fa-chevron-down"></i>
    </a>
    <!-- Jquery Core Js -->
    <script src="/public/plugins/jquery/jquery.js?kaga={time()}"></script>

    <!-- Bootstrap Core Js -->
    <script src="/public/plugins/bootstrap/js/bootstrap.js?kaga={time()}"></script>

    <!-- Select Plugin Js -->
    <script src="/public/plugins/bootstrap-select/js/bootstrap-select.js?kaga={time()}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="/public/plugins/bootstrap-notify/bootstrap-notify.js?kaga={time()}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/public/plugins/jquery-slimscroll/jquery.slimscroll.js?kaga={time()}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/public/plugins/node-waves/waves.js?kaga={time()}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="/public/plugins/jquery-countto/jquery.countTo.js?kaga={time()}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="/public/plugins/sweetalert/sweetalert.min.js?kaga={time()}"></script>

    <!-- Dropzone Plugin Js -->
    <script src="/public/plugins/dropzone/dropzone.js?kaga={time()}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="/public/plugins/jquery-inputmask/jquery.inputmask.bundle.js?kaga={time()}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="/public/plugins/multi-select/js/jquery.multi-select.js?kaga={time()}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="/public/plugins/jquery-spinner/js/jquery.spinner.js?kaga={time()}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="/public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js?kaga={time()}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="/public/plugins/nouislider/nouislider.js?kaga={time()}"></script>

    <!-- Morris Plugin Js -->
    <script src="/public/plugins/raphael/raphael.min.js?kaga={time()}"></script>
    <script src="/public/plugins/morrisjs/morris.js?kaga={time()}"></script>

    <!-- Chart Plugins Js -->
    <script src="/public/plugins/chartjs/Chart.bundle.js?kaga={time()}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="/public/plugins/flot-charts/jquery.flot.js?kaga={time()}"></script>
    <script src="/public/plugins/flot-charts/jquery.flot.resize.js?kaga={time()}"></script>
    <script src="/public/plugins/flot-charts/jquery.flot.pie.js?kaga={time()}"></script>
    <script src="/public/plugins/flot-charts/jquery.flot.categories.js?kaga={time()}"></script>
    <script src="/public/plugins/flot-charts/jquery.flot.time.js?kaga={time()}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="/public/plugins/jquery-datatable/jquery.dataTables.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/dataTables.select.min.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/extensions/export/buttons.flash.min.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/extensions/export/jszip.min.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/extensions/export/pdfmake.min.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/extensions/export/vfs_fonts.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/extensions/export/buttons.html5.min.js?kaga={time()}"></script>
    <script src="/public/plugins/jquery-datatable/extensions/export/buttons.print.min.js?kaga={time()}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="/public/plugins/jquery-sparkline/jquery.sparkline.js?kaga={time()}"></script>

    <!-- Validation Plugin Js -->
    <script src="/public/plugins/jquery-validation/jquery.validate.js?kaga={time()}"></script>

    <!-- Autosize Plugin Js -->
    <script src="/public/plugins/autosize/autosize.js?kaga={time()}"></script>

    <!-- Moment Plugin Js -->
    <script src="/public/plugins/momentjs/moment.js?kaga={time()}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="/public/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js?kaga={time()}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="/public/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js?kaga={time()}"></script>

    <!-- Ckeditor -->
    <script src="/public/plugins/ckeditor/ckeditor.js?kaga={time()}"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="/public/plugins/light-gallery/js/lightgallery-all.js?kaga={time()}"></script>

    <!-- High Light Plugin Js -->
    <script src="/public/plugins/highlight/highlight.pack.js?kaga={time()}"></script>
    <script src="/public/plugins/highlight/highlight.line-numbers.js?kaga={time()}"></script>
    <script src="/public/plugins/highlight/highlight.copy-button.js?kaga={time()}"></script>

    <!-- ACE Plugin Js -->
    <script src="/public/plugins/ace/ace.js?kaga={time()}"></script>

    <!-- Share Button Plugin Js -->
    <script src="/public/plugins/jquery-sharebuttons/js/jquery.share-buttons.js?kaga={time()}"></script>

    <!-- nProgress Plugin Js -->
    <script src="/public/plugins/jquery-nprogress/jquery.nprogress.js?kaga={time()}"></script>

    <!-- Custom Js -->
    <script src="/public/js/admin.js?kaga={time()}"></script>
    <script src="/public/js/demo.js?kaga={time()}"></script>
    <script src="/public/js/kaga.js?kaga={time()}"></script>
    <script src="/public/js/functions.js?kaga={time()}"></script>
    {if isset($ss.logined)}
    <script src="/public/js/admin/settings.js?kaga={time()}"></script>
    {/if}

    {if count($script) > 0}
    {foreach $script as $value}
    <script src="{$value}?kaga={time()}"></script>
    {/foreach}
    {/if}

    {if count($script_array) > 0}
    <script>
      {foreach $script_array as $value}
      {$value}
      {/foreach}
    </script>
    {/if}

    {if strlen($script_text) > 0}
    <script>
      {$script_text}
    </script>
    {/if}
  </body>
</html>
