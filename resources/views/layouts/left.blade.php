<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect {{ is_active(route('dashboard')) }}">
                        <i class="ti-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="text-muted menu-title">Master Data</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect waves-light"><i class="ti-package"></i> <span> Hardware </span> </a>
                    <ul class="list-unstyled">
                        <li class="{{ is_active(route('asset.index')) }}"><a href="{{ route('asset.index') }}" class="{{ is_active(route('asset.index')) }}">Asset</a></li>
                        <li class="{{ is_active(route('peripheral.index')) }}"><a href="{{ route('peripheral.index') }}" class="{{ is_active(route('peripheral.index')) }}">Peripheral</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('software.index') }}" class="waves-effect {{ is_active(route('software.index')) }}">
                        <i class="ti-microsoft-alt"></i>
                        <span>Software</span>
                    </a>
                </li>

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-palette"></i> <span> UI Kit </span> </a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li class="active"><a href="ui-buttons.html" class="active">Buttons</a></li>--}}
                        {{--<li><a href="ui-panels.html">Panels</a></li>--}}
                        {{--<li><a href="ui-portlets.html">Portlets</a></li>--}}
                        {{--<li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>--}}
                        {{--<li><a href="ui-tabs.html">Tabs</a></li>--}}
                        {{--<li><a href="ui-modals.html">Modals</a></li>--}}
                        {{--<li><a href="ui-progressbars.html">Progress Bars</a></li>--}}
                        {{--<li><a href="ui-notification.html">Notification</a></li>--}}
                        {{--<li><a href="ui-images.html">Images</a></li>--}}
                        {{--<li><a href="ui-carousel.html">Carousel</a>--}}
                        {{--<li><a href="ui-bootstrap.html">Bootstrap UI</a></li>--}}
                        {{--<li><a href="ui-typography.html">Typography</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-invert-colors-on"></i><span class="label label-primary pull-right">8</span><span> Components </span> </a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="components-grid.html">Grid</a></li>--}}
                        {{--<li><a href="components-widgets.html">Widgets</a></li>--}}
                        {{--<li><a href="components-nestable-list.html">Nesteble</a></li>--}}
                        {{--<li><a href="components-range-sliders.html">Range sliders</a></li>--}}
                        {{--<li><a href="components-animation.html">Animation</a></li>--}}
                        {{--<li><a href="components-sweet-alert.html">Sweet Alerts</a></li>--}}
                        {{--<li><a href="components-treeview.html">Tree view</a></li>--}}
                        {{--<li><a href="components-tour.html">Tour</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-polymer"></i> <span> Icons </span> </a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="icons-glyphicons.html">Glyphicons</a></li>--}}
                        {{--<li><a href="icons-materialdesign.html">Material Design</a></li>--}}
                        {{--<li><a href="icons-ionicons.html">Ion Icons</a></li>--}}
                        {{--<li><a href="icons-fontawesome.html">Font awesome</a></li>--}}
                        {{--<li><a href="icons-themifyicon.html">Themify Icons</a></li>--}}
                        {{--<li><a href="icons-simple-line.html">Simple line Icons</a></li>--}}
                        {{--<li><a href="icons-weather.html">Weather Icons</a></li>--}}
                        {{--<li><a href="icons-typicons.html">Typicons</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-now-widgets"></i><span> Forms </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="form-elements.html">General Elements</a></li>--}}
                        {{--<li><a href="form-advanced.html">Advanced Form</a></li>--}}
                        {{--<li><a href="form-validation.html">Form Validation</a></li>--}}
                        {{--<li><a href="form-pickers.html">Form Pickers</a></li>--}}
                        {{--<li><a href="form-wizard.html">Form Wizard</a></li>--}}
                        {{--<li><a href="form-mask.html">Form Masks</a></li>--}}
                        {{--<li><a href="form-summernote.html">Summernote</a></li>--}}
                        {{--<li><a href="form-wysiwig.html">Wysiwig Editors</a></li>--}}
                        {{--<li><a href="form-uploads.html">Multiple File Upload</a></li>--}}
                        {{--<li><a href="form-xeditable.html">X-editable</a></li>--}}
                        {{--<li><a href="form-image-crop.html">Image Crop</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-view-list"></i><span>Tables </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="tables-basic.html">Basic Tables</a></li>--}}
                        {{--<li><a href="tables-datatable.html">Data Table</a></li>--}}
                        {{--<li><a href="tables-editable.html">Editable Table</a></li>--}}
                        {{--<li><a href="tables-responsive.html">Responsive Table</a></li>--}}
                        {{--<li><a href="tables-foo-tables.html">FooTable</a></li>--}}
                        {{--<li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>--}}
                        {{--<li><a href="tables-tablesaw.html">Tablesaw</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-poll"></i><span class="label label-default pull-right">11</span><span> Charts </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="chart-flot.html">Flot Chart</a></li>--}}
                        {{--<li><a href="chart-morris.html">Morris Chart</a></li>--}}
                        {{--<li><a href="chart-chartjs.html">Chartjs</a></li>--}}
                        {{--<li><a href="chart-peity.html">Peity Charts</a></li>--}}
                        {{--<li><a href="chart-chartist.html">Chartist Charts</a></li>--}}
                        {{--<li><a href="chart-c3.html">C3 Charts</a></li>--}}
                        {{--<li><a href="chart-nvd3.html"> Nvd3 Charts</a></li>--}}
                        {{--<li><a href="chart-sparkline.html">Sparkline charts</a></li>--}}
                        {{--<li><a href="chart-radial.html">Radial charts</a></li>--}}
                        {{--<li><a href="chart-other.html">Other Chart</a></li>--}}
                        {{--<li><a href="chart-ricksaw.html">Ricksaw Chart</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-place"></i><span> Maps </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="map-google.html"> Google Map</a></li>--}}
                        {{--<li><a href="map-vector.html"> Vector Map</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="text-muted menu-title">More</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-pages"></i><span> Pages </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="page-starter.html">Starter Page</a></li>--}}
                        {{--<li><a href="page-login.html">Login</a></li>--}}
                        {{--<li><a href="page-login-v2.html">Login v2</a></li>--}}
                        {{--<li><a href="page-register.html">Register</a></li>--}}
                        {{--<li><a href="page-register-v2.html">Register v2</a></li>--}}
                        {{--<li><a href="page-signup-signin.html">Signin - Signup</a></li>--}}
                        {{--<li><a href="page-recoverpw.html">Recover Password</a></li>--}}
                        {{--<li><a href="page-lock-screen.html">Lock Screen</a></li>--}}
                        {{--<li><a href="page-400.html">Error 400</a></li>--}}
                        {{--<li><a href="page-403.html">Error 403</a></li>--}}
                        {{--<li><a href="page-404.html">Error 404</a></li>--}}
                        {{--<li><a href="page-404_alt.html">Error 404-alt</a></li>--}}
                        {{--<li><a href="page-500.html">Error 500</a></li>--}}
                        {{--<li><a href="page-503.html">Error 503</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-redeem"></i><span> Extras </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="extra-profile.html">Profile</a></li>--}}
                        {{--<li><a href="extra-timeline.html">Timeline</a></li>--}}
                        {{--<li><a href="extra-sitemap.html">Site map</a></li>--}}
                        {{--<li><a href="extra-invoice.html">Invoice</a></li>--}}
                        {{--<li><a href="extra-email-template.html">Email template</a></li>--}}
                        {{--<li><a href="extra-maintenance.html">Maintenance</a></li>--}}
                        {{--<li><a href="extra-coming-soon.html">Coming-soon</a></li>--}}
                        {{--<li><a href="extra-faq.html">FAQ</a></li>--}}
                        {{--<li><a href="extra-search-result.html">Search result</a></li>--}}
                        {{--<li><a href="extra-gallery.html">Gallery</a></li>--}}
                        {{--<li><a href="extra-pricing.html">Pricing</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-apps"></i><span class="label label-pink pull-right">3</span><span> Apps </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="apps-inbox.html"> Email</a></li>--}}
                        {{--<li><a href="apps-calendar.html"> Calendar</a></li>--}}
                        {{--<li><a href="apps-contact.html"> Contact</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-view-quilt"></i><span> Layouts </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="layout-leftbar_2.html"> Leftbar with User</a></li>--}}
                        {{--<li><a href="layout-menu-collapsed.html"> Menu Collapsed</a></li>--}}
                        {{--<li><a href="layout-menu-small.html"> Small Menu</a></li>--}}
                        {{--<li><a href="layout-header_2.html"> Header style</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="javascript:void(0);" class="waves-effect waves-light"><i class="md md-share"></i><span>Multi Level </span></a>--}}
                    {{--<ul>--}}
                        {{--<li class="has_sub">--}}
                            {{--<a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> </a>--}}
                            {{--<ul style="">--}}
                                {{--<li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>--}}
                                {{--<li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>--}}
                                {{--<li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="javascript:void(0);"><span>Menu Level 1.2</span></a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="text-muted menu-title">Extra</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-account-box"></i><span> Crm </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="crm-dashboard.html"> Dashboard </a></li>--}}
                        {{--<li><a href="crm-contact.html"> Contacts </a></li>--}}
                        {{--<li><a href="crm-opportunities.html"> Opportunities </a></li>--}}
                        {{--<li><a href="crm-leads.html"> Leads </a></li>--}}
                        {{--<li><a href="crm-customers.html"> Customers </a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-light"><i class="md md-add-shopping-cart"></i><span> eCommerce </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="ecommerce-dashboard.html"> Dashboard</a></li>--}}
                        {{--<li><a href="ecommerce-products.html"> Products</a></li>--}}
                        {{--<li><a href="ecommerce-product-detail.html"> Product Detail</a></li>--}}
                        {{--<li><a href="ecommerce-orders.html"> Orders</a></li>--}}
                        {{--<li><a href="ecommerce-sellers.html"> Sellers</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->