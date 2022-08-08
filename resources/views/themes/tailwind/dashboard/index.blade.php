@extends('theme::layouts.app')


@section('content')


<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
    <div class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
            <div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
                <svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="relative flex-1">
                <h3 class="text-lg font-medium leading-6 text-gray-700">
                    Welcome to your Dashboard
                </h3>
                <p class="text-sm leading-5 text-gray-500 mt">
                    Learn More Below
                </p>
            </div>

        </div>
        <div class="relative p-5">
            <p class="text-base leading-loose text-gray-500">This is your application <a href="{{ route('wave.dashboard') }}" class="underline text-wave-500">dashboard</a>, you can customize this view inside of <code class="px-2 py-1 font-mono text-base font-medium text-gray-600 bg-gray-100 rounded-md">{{ theme_folder('/dashboard/index.blade.php') }}</code><br><br> (Themes are located inside the <code>resources/views/themes</code> folder)</p>
            <span class="inline-flex mt-5 rounded-md shadow-sm">
                <a href="{{ url('docs') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
                    Read The Docs
                </a>
            </span>
        </div>
    </div>
    <div class="flex flex-col justify-start flex-1 overflow-hidden bg-white border rounded-lg lg:ml-3 border-gray-150">
        <div class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
            <div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
                <svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                </svg>
            </div>
            <div class="relative flex-1">
                <h3 class="text-lg font-medium leading-6 text-gray-700">
                    Learn more about Wave
                </h3>
                <p class="text-sm leading-5 text-gray-500 mt">
                    Are you more of a visual learner?
                </p>
            </div>

        </div>
        <div class="relative p-5">
            <p class="text-base leading-loose text-gray-500">Make sure to head on over to the Wave Video Tutorials to learn more how to use and customize Wave.<br><br>Click on the button below to checkout the video tutorials.</p>
            <span class="inline-flex mt-5 rounded-md shadow-sm">
                <a href="https://devdojo.com/course/wave" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50">
                    Watch The Videos
                </a>
            </span>
        </div>
    </div>

</div>
<div class="flex flex-col px-8 mx-auto my-6 lg:flex-row max-w-7xl xl:px-5">
    <div class="w-full">
        <div class="p-4 border-b border-gray-200 shadow">
            <!-- <table> -->
            <table id="dataTable" class="p-4 w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="p-8 text-xs text-gray-500">
                            Ticker
                        </th>
                        <th class="p-8 text-xs text-gray-500">
                            Price
                        </th>
                        <th class="p-8 text-xs text-gray-500">
                            Chg%
                        </th>
                        <th class="p-8 text-xs text-gray-500">
                            RSI
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            MACD
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            PE Ratio
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Volume
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            52 Week High
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            1 M %
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            3 M %
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            6 M %
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            1 Y %
                        </th>
                        <!-- <th class="px-6 py-2 text-xs text-gray-500">
                            Edit
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Delete
                        </th> -->
                    </tr>
                </thead>
                <tbody class="bg-white">

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading">Edit Stock</h4>
            </div>
            <div class="modal-body">
                <form id="stockForm" name="stockForm" class="form-horizontal">
                    <input type="hidden" name="stock_id" id="stock_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Ticker</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="ticker" name="ticker" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Price</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="price" name="price" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Change %</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="change_percent" name="change_percent" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">RSI</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="rsi" name="rsi" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">MACD</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="macd" name="macd" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">PE RATIO</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pe_ratio" name="pe_ratio" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Volume</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="volume" name="volume" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">52 High week</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="high52Wk" name="high52Wk" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">1 Month Performance</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="performances_1" name="performances_1" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">3 Month Performance</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="performances_3" name="performances_3" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">6 Month Performance</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="performances_6" name="performances_6" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">12 Month Performance</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="performances_12" name="performances_12" value="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteStock(e) {
        var url = '{{ route("stock.destroy", "id=:id") }}';
        url = url.replace(':id', e);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        sweetAlert({
            title: "Delete ?",
            text: "Data will be deleted!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm !"
        }, function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: url,
                    type: "delete",
                    success: function(data) {
                        $('#dataTable').DataTable().ajax.reload();
                    }
                })
            }
        })
    }

    $(document).ready(function() {

        $('body').on('click', '.editStock', function() {
            var url = '{{ route("stock.edit", "id=:id") }}';
            var stockId = $(this).data('id');
            url = url.replace(':id', stockId);

            $.ajax({
                url: url,
                type: "get",
                success: function(data) {
                    $("#high52Wk").val(data.high52Wk)
                    $("#change_percent").val(data.change_percent)
                    $("#stock_id").val(data.id)
                    $("#pe_ratio").val(data.pe_ratio)
                    $("#performances_1").val(data.performances_1)
                    $("#performances_3").val(data.performances_3)
                    $("#performances_6").val(data.performances_6)
                    $("#performances_12").val(data.performances_12)
                    $("#price").val(data.price)
                    $("#rsi").val(data.rsi)
                    $("#ticker").val(data.ticker)
                    $("#volume").val(data.volume)
                    $("#macd").val(data.macd)
                    $('#ajaxModel').modal('show');

                }

            });
        });

        $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          data: $('#stockForm').serialize(),
          url: '{{ route("stock.store") }}',
          type: "POST",
          dataType: 'json',
          success: function (data) {
            sweetAlert({
            title: "Saved",
            text: "Data saved Successfuly!",
            icon: "success",
        });
              $('#stockForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              $('#dataTable').DataTable().ajax.reload();
          }
      });
    });

    
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('wave.dashboard') }}",
            columns: [{
                    data: 'ticker',
                    name: 'ticker'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'change_percent',
                    name: 'change_percent'
                },
                {
                    data: 'rsi',
                    name: 'rsi'
                },
                {
                    data: 'macd',
                    name: 'macd'
                },
                {
                    data: 'pe_ratio',
                    name: 'pe_ratio'
                },
                {
                    data: 'volume',
                    name: 'volume'
                },
                {
                    data: 'high52Wk',
                    name: 'high52Wk'
                },
                {
                    data: 'performances_1',
                    name: 'performances_1'
                },
                {
                    data: 'performances_3',
                    name: 'performances_3'
                },
                {
                    data: 'performances_6',
                    name: 'performances_6'
                },
                {
                    data: 'performances_12',
                    name: 'performances_12'
                },
                // {
                //     data: 'edit',
                //     name: 'edit',
                //     orderable: false,
                //     searchable: false
                // },
                // {
                //     data: 'delete',
                //     name: 'delete',
                //     orderable: false,
                //     searchable: false
                // },
            ]
        });

    });
</script>
@endsection