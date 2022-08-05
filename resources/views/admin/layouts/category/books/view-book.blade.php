@extends('admin.master')

@section('content')

{{-- <form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form> --}}

    {{-- <div id="divToPrint"> --}}

        <a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>

        <div class="card" id="printableArea">


<h1>Book Details</h1>

      <dl class="row">
      <dt class="col-sm-2">Book Name:</dt>
      <dd class="col-sm-2">{{$list->book_name}}</dd>
      </dl>
      <dl class="row">
        <dt class="col-sm-2">Writer_Name:</dt>
        <dd class="col-sm-2">{{$list->writer}}</dd>
        </dl>
      <dl class="row">
      <dt class="col-sm-2">Category:</dt>
      <dd class="col-sm-2">{{$list->category}}</dd>
      </dl>
      <dl class="row">
        <dt class="col-sm-2">file name:</dt>
        <dd class="col-sm-2"><a href="{{url('/uploads/',$list->file)}}">{{$list->file}}</a> </dd>
        </dl>
    </div>




      <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>



@endsection

{{-- <script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script> --}}
