        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                    BootstrapDash.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="{{  asset('assets/dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{  asset('assets/dashboard/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{  asset('assets/dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{  asset('assets/dashboard/vendors/progressbar.js/progressbar.min.js')}}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{  asset('assets/dashboard/js/off-canvas.js')}}"></script>
        <script src="{{  asset('assets/dashboard/js/hoverable-collapse.js')}}"></script>
        <script src="{{  asset('assets/dashboard/js/template.js')}}"></script>
        <script src="{{  asset('assets/dashboard/js/settings.js')}}"></script>
        <script src="{{  asset('assets/dashboard/js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{  asset('assets/dashboard/js/jquery.cookie.js')}}" type="text/javascript"></script>
        <script src="{{  asset('assets/dashboard/js/dashboard.js')}}"></script>
        <script src="{{  asset('assets/dashboard/js/Chart.roundedBarCharts.js')}}"></script>
        <script src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
        <!-- End custom js for this page-->
        </body>

        </html>
