@extends('adminlte.master')

@section('content')

@endsection

@push('script')
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
