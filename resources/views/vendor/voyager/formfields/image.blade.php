@if(isset($dataTypeContent->{$row->field}))
    <div data-field-name="{{ $row->field }}">
        <a href="#" class="voyager-x remove-single-image" style="position:absolute;"></a>
        <img src="@if( !filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $dataTypeContent->{$row->field} ) }}@else{{ $dataTypeContent->{$row->field} }}@endif"
          data-file-name="{{ $dataTypeContent->{$row->field} }}" data-id="{{ $dataTypeContent->getKey() }}"
          style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
    </div>
@endif

<input style="margin-bottom : 10px;" @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}" accept="image/*">
<a type="button" role="button" class="mx-4" data-toggle="modal" id="unsplashSearchModalOpen_for_{{ $row->field }}" data-target="#unsplashSearchModal_for_{{ $row->field }}">
    find photo on unsplash ?
</a>

<!-- Modal -->
    <div class="modal fade" id="unsplashSearchModal_for_{{ $row->field }}" tabindex="-1" role="dialog" aria-labelledby="unsplashSearchLabel_for_{{ $row->field }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="unsplashSearchLabel_for_{{ $row->field }}">Unsplash Search</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <input type="text" name="unsplashQuery" id="unsplashSearch_for_{{ $row->field }}">
                    </div>
                    <div id="unsplashResults">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="unsplashSave_for_{{ $row->field }}" class="btn btn-primary">Save</button>
                </div>
                
            </div>
        </div>
        
    </div>

@push('javascript')
    <script>
        $(function(){
            $('#unsplashSearchModalOpen_for_{{ $row->field }}').on('click' ,function(el){
                        $('#unsplashSave_for_{{ $row->field }}').on('click', function(e){
                            e.preventDefault();
                            $.ajax({
                                url: "/test",
                                type:"GET",
                                data:{
                                    query:$('#unsplashSearch_for_{{ $row->field }}').val(),
                                },
                                success:function(response){
                                    if(response) {
                                        console.log(response.query)
                                        // $('.success').text(response.success);
                                        // $("#ajaxform")[0].reset();
                                    }
                                },
                            });
                        })
            })
        });
    </script>
@endpush
