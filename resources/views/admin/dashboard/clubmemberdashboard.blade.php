@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')

        <!-- partial -->
          <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">NK NAZMUL</p>
              <p class="designation">Club Member</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/widgets.html">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Widget</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Page Layouts</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/rtl-layout.html">Rtl</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Sidebar Layouts</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
            <!--sample pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Sample pages</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">Authentication</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="authSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html">
                      Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login-2.html">
                      Login 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html">
                      Register
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register-2.html">
                      Register 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/lock-screen.html">
                      Lockscreen
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="errorSubmenu">
                <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="errorSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html">
                      404
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html">
                      500
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="generalSubmenu">
                <i class="mdi mdi-google-pages menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="generalSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html">
                      Blank Page
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/landing-page.html">
                      Landing Page
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/profile.html">
                      Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/faq.html">
                      FAQ
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/faq-2.html">
                      FAQ 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/news-grid.html">
                      News grid
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/portfolio-1.html">
                      Portfolio 1
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/portfolio-2.html">
                      Portfolio 2
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/search-results.html">
                      Search result
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/timeline.html">
                      Timeline
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ecommerceSubmenu" aria-expanded="false" aria-controls="ecommerceSubmenu">
                <i class="mdi mdi-cart-outline menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="ecommerceSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/pricing.html">
                      Pricing
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/invoice.html">
                      Invoice
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/orders.html">
                      Orders
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!--sample pages end-->
            <!--ui features start-->
            <li class="nav-item nav-category">
              <span class="nav-link">UI Features</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu" aria-expanded="false" aria-controls="uiBasicSubmenu">
                <i class="mdi mdi-buffer menu-icon"></i>
                <span class="menu-title">Basic Elements</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiBasicSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/modals.html">Modals</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiAdvancedSubmenu" aria-expanded="false" aria-controls="uiAdvancedSubmenu">
                <i class="mdi mdi-cube-outline menu-icon"></i>
                <span class="menu-title">Advanced Elements</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiAdvancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/image-cropper.html">Cropper</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiPopupSubmenu" aria-expanded="false" aria-controls="uiPopupSubmenu">
                <i class="mdi mdi-message-text-outline menu-icon"></i>
                <span class="menu-title">Popups</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiPopupSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/alerts.html">Alerts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/avgrund.html">Avgrund</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/tour.html">Tour</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiNotificationsSubmenu" aria-expanded="false" aria-controls="uiNotificationsSubmenu">
                <i class="mdi mdi-bell-outline menu-icon"></i>
                <span class="menu-title">Notifications</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiNotificationsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/notifications.html">Simple Notification</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/desktop-notifications.html">Desktop Notification</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sliderSubmenu" aria-expanded="false" aria-controls="sliderSubmenu">
                <i class="mdi mdi-bulletin-board menu-icon"></i>
                <span class="menu-title">Sliders</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sliderSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/no-ui-slider.html">noUiSlider</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/ion-range-slider.html">ion-rangeSlider</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#iconsSubmenu" aria-expanded="false" aria-controls="iconsSubmenu">
                <i class="mdi mdi-album menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="iconsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/icons/themify.html">Themify icons</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- ui end -->
            <!-- data rep start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Data representation</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#chartsSubmenu" aria-expanded="false" aria-controls="chartsSubmenu">
                <i class="mdi mdi-chart-donut menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="chartsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/morris.html">Morris</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/flot-chart.html">Float</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/c3.html">C3 charts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartist.html">Chartists</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/rickshaw.html">Rickshaw</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/charts/justGage.html">JustGage</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tablesSubmenu" aria-expanded="false" aria-controls="tablesSubmenu">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="tablesSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/data-table.html">Data table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/bootstrap-table.html">Bootstrap table</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#mapsSubmenu" aria-expanded="false" aria-controls="mapsSubmenu">
                <i class="mdi mdi-map-marker-outline menu-icon"></i>
                <span class="menu-title">Maps</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="mapsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/maps/vector-map.html">Vector map</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--data rep end-->
            <!--forms start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Forms</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#formsSubmenu" aria-expanded="false" aria-controls="formsSubmenu">
                <i class="mdi mdi-clipboard-outline menu-icon"></i>
                <span class="menu-title">Form components</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="formsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic-elements.html">Basic elements</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/x-editable.html">X-editable</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/typeahead.html">Typeahead</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-repeater.html">Form repeater</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-mask.html">Form mask</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Advanced components</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-addons.html">Form addons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-picker.html">Form Picker</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/bt-select-splitter.html">Splitter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/icheck.html">Icheck</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#validationSubmenu" aria-expanded="false" aria-controls="validationSubmenu">
                <i class="mdi mdi-flag-outline menu-icon"></i>
                <span class="menu-title">Validation</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="validationSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/form-validation.html">Form validation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/bt-maxlength.html">Maxlength</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#fileUploadSubmenu" aria-expanded="false" aria-controls="fileUploadSubmenu">
                <i class="mdi mdi-attachment menu-icon"></i>
                <span class="menu-title">File upload</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="fileUploadSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/dropify.html">Dropify</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/dropzone.html">Dropzone</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/jquery-file-upload.html">Jquery upload</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#textEditorSubmenu" aria-expanded="false" aria-controls="textEditorSubmenu">
                <i class="mdi mdi-pencil menu-icon"></i>
                <span class="menu-title">Text editors</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="textEditorSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/summernote.html">Summernote</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/tinymce.html">Tinymce</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/quill-editor.html">Quill editor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/simplemde-editor.html">Simplemde</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/wysihtml.html">Wysihtml</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#codeEditorSubmenu" aria-expanded="false" aria-controls="codeEditorSubmenu">
                <i class="mdi mdi-code-brackets menu-icon"></i>
                <span class="menu-title">Code editors</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="codeEditorSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/ace_editor.html">Ace</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/forms/code-mirror.html">Codemirror</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--forms end-->
            <!--Apps start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Applications</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/email.html">
                <i class="mdi mdi-email-outline menu-icon"></i>
                <span class="menu-title">E-mail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/calendar.html">
                <i class="mdi mdi-calendar-check menu-icon"></i>
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/todo-list.html">
                <i class="mdi mdi-calendar-text menu-icon"></i>
                <span class="menu-title">To-do list</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/gallery.html">
                <i class="mdi mdi-folder-multiple-image menu-icon"></i>
                <span class="menu-title">Gallery</span>
              </a>
            </li>
            <!--Apps end-->
            <li class="nav-item">
              <a class="nav-link" href="pages/documentation.html">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
          </ul>
        </nav>


        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Orders</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Market Growth</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Stock Price</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 revenue-card grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Website Traffic</h2>
                  <ul class="ct-legend mt-5"></ul>
                  <div id="dashboard-chartist-simple"></div>
                  <div class="row mx-1 mt-5 d-none d-sm-flex">
                    <div class="col-12">
                      <hr class="mt-1">
                    </div>
                    <div class="col-12 col-sm-4 revenue-details text-center text-sm-left">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                    <div class="col-12 col-sm-4 d-flex justifiy-content-center flex-column text-center revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                    <div class="col-12 col-sm-4 text-center text-sm-right revenue-details">
                      <p class="head text-muted">Gross Revenue</p>
                      <p class="count">9,362.74</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 stock-price grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Stock Price</h2>
                  <div class="amount-column-wrapper wrapper">
                    <p class="total-performance">$ 9856</p>
                    <div class="row">
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">58.8%</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">+32</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="col-12"><hr></div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-down-thick text-danger"></i>
                          <p class="progess mb-0">18.2%</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                      <div class="performace-tile col-6">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-up-thick text-success"></i>
                          <p class="progess mb-0">+89</p>
                        </div>
                        <p class="description">Lorem Ipsum is simply</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 d-flex flex-row align-items-center mt-4">
                        <p class="mb-0 mr-3">Sources: </p>
                        <a href="#" class="btn btn-rounded bg-google btn-social mr-2"><i class="mdi mdi-google"></i></a>
                        <a href="#" class="btn btn-rounded bg-facebook btn-social mr-2"><i class="mdi mdi-facebook"></i></a>
                        <a href="#" class="btn btn-rounded bg-twitter btn-social"><i class="mdi mdi-twitter"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><i class="mdi mdi-facebook"></i><p class="mb-0">Post to facebook</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><i class="mdi mdi-twitter"></i><p class="mb-0">Tweet this job</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class="mdi mdi-google"></i><p class="mb-0">Post in Google+</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-linkedin"><i class="mdi mdi-linkedin"></i><p class="mb-0">Post to Linkedin</p></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body px-3" style="height:333px">
                      <div class="d-flex align-items-center justify-content-between">
                        <h2 class="card-title">Invites</h2>
                        <p class="mb-2 text-muted">This month</p>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-danger"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-success"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-warning"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Task List</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Shiply Order</p>
                        <p class="reference-url">URL<a href="#">goo.gl/tp.ttt</a></p>
                      </div>
                      <p class="ticket-number ml-auto">#1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>AMOUNT</small>
                        <small class="value">$2599</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <a href="#" class="btn btn-secondary btn-sm">More Details</a>
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>Batchly is a global</h2>
                      <p>We began with intensive and in-depth session to collate the needs of stakeholders</p>
                      <a href="#" class="btn btn-outline-secondary">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card image-card w-100">
                <div class="wrapper image-container">
                  <div class="wrapper controls d-flex align-items-center justify-content-between px-3">
                    <p class="mb-0 text-white">Collection</p>
                    <a href="#" class="btn btn-rounded bg-primary btn-icon"><i class="mdi mdi-arrow-up text-white"></i></a>
                  </div>
                </div>
                <div class="wrapper text-wrapper py-4 px-3">
                  <p class="text-center card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo</p>
                  <div class="wrapper text-center mb-1"><a class="btn btn-primary btn-rounded btn-sm" href="#">Follow</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h2 class="card-title">Timeline Archive</h2>
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-success">31/50</div></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-primary">23/45</div></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill badge-warning">16/25</div></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-success">17/54</div></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-danger">23/25</div></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Lorem ipsum dolor.</td>
                        <td><div class="badge badge-pill  badge-primary">23/25</div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin d-flex align-items-stretch">
              <div class="card profile-card w-100">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center">
                    <img class="profile-img profile-img-lg" src="http://via.placeholder.com/47x47" alt="">
                    <div class="wrapper d-flex flex-column">
                      <h3 class="mb-0 bold ml-4">Smijth John</h3>
                      <small class="ml-4 text-muted">Developer</small>
                    </div>
                  </div>
                  <p class="mt-3 text-muted" style="height:83px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum recusandae iusto minus, libero tempora sapiente optio.iusto minus, libero tempora sapiente optio.</p>
                  <div class="table-responsive">
                    <table class="table mt-3 mb-0">
                      <tbody>
                        <tr>
                          <td><i class="mdi mdi-calendar-blank mdi-18px"></i></td>
                          <td>06.02.1987</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><i class="mdi mdi-cellphone-android mdi-18px"></i></td>
                          <td>097 00 000 00 00</td>
                          <td><a href="#" class="badge badge-success">SMS</a></td>
                        </tr>
                        <tr>
                          <td><i class="mdi mdi-email-outline mdi-18px"></i></td>
                          <td>smijith@gmail.com</td>
                          <td><a href="#" class="badge badge-warning">Email</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
 @endsection       