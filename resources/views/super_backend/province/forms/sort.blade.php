{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <h3>Drag and Drop to Sort Provinces</h3>
    {!! Form::select('lang',
    ['' => 'Select Language']+$languages, 'en',
    array('class'=>'form-control', 'id'=>'lang', 'onchange'=>'refreshProvinceSortData();')) !!}
    <div id="provinceSortDataDiv"></div>
</div>
@push('scripts') 
<script>
    $(document).ready(function () {
        refreshProvinceSortData();
    });
    function refreshProvinceSortData() {
        var language = $('#lang').val();
        $.ajax({
            type: "GET",
            url: "{{ route('province.sort.data') }}",
            data: {lang: language},
            success: function (responseData) {
                $("#provinceSortDataDiv").html('');
                $("#provinceSortDataDiv").html(responseData);
                /**************************/
                $('#sortable').sortable({
                    update: function (event, ui) {
                        var stateOrder = $(this).sortable('toArray').toString();
                        $.post("{{ route('province.sort.update') }}",
                            {stateOrder: stateOrder, _method: 'PUT', _token: '{{ csrf_token() }}'})
                    }
                });
                $("#sortable").disableSelection();
                /***************************/
            }
        });
    }
</script> 
@endpush
