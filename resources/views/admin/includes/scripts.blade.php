<!-- jquery 3.3.1 -->
<script src="{{asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('admin/assets/libs/js/main-js.js')}}"></script>
<!-- chart chartist js -->
<script src="{{asset('admin/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
<!-- sparkline js -->
<script src="{{asset('admin/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<!-- morris js -->
<script src="{{asset('admin/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
<!-- chart c3 js -->
<script src="{{asset('admin/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
<script src="{{asset('admin/assets/libs/js/dashboard-ecommerce.js')}}"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin/assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin/assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/datatables/js/data-table.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script>
    $(document).on('click', '.delete', function () {
        return confirm("Are You Sure To Delete This!");
    });
    $('.putImage1').on('change', function () {
        var src = this;
        var target = document.getElementById('target1');
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#target1').attr('src', e.target.result);
        }
        reader.readAsDataURL(src.files[0]);
    });
</script>
@stack('post_scripts')
@include('sweetalert::alert')
