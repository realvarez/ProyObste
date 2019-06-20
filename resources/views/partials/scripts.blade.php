@auth
<script>
    var user = {{Auth::user()-> id}};
</script>
@endauth
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/detect.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>

<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>


<!--script autocomplete-->
<script src="{{asset('js/typeahead.bundle.js')}}"></script>
<!--Tag input-->
<script src="{{asset('js/bootstrap-tagsinput.min.js')}}"></script>

<script src="{{asset('plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>

<script src="{{asset('js/pikeadmin.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

{{-- Para carga de script segun la ruta, usar! --}}
@switch(explode ('.',\Route::currentRouteName())[0])
    @case('category')
        @break
    @case('')
        <script src="{{asset('js/categories/show.js')}}"></script>
        @break
    @default
@endswitch




<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";

    $('input.typeahead').typeahead({

        source: function(query, process) {

            return $.get(path, {
                query: query
            }, function(data) {

                return process(data);

            });

        }

    });
</script>
