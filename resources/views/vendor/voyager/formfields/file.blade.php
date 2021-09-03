@if(isset($dataTypeContent->{$row->field}))
    @if ($dataType->slug == 'videos')
      <div data-field-name="{{ $row->field }}">
        <video controls style="max-width:100%;">
          <source src="{{ isset( $dataTypeContent->{$row->field}[0] ) ? Storage::disk(config('voyager.storage.disk'))->url( json_decode($dataTypeContent->{$row->field})[0]->download_link ) : $dataTypeContent->{$row->field} }}" >
          Your browser does not support the audio element.
        </video>  
        
      </div>
    @else 
      @if(json_decode($dataTypeContent->{$row->field}) !== null)
          @foreach(json_decode($dataTypeContent->{$row->field}) as $file)
            <div data-field-name="{{ $row->field }}">
              <a class="fileType" target="_blank"
                href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                data-file-name="{{ $file->original_name }}" data-id="{{ $dataTypeContent->getKey() }}">
                {{ $file->original_name ?: '' }}
              </a>
              
              <a href="#" class="voyager-x remove-multi-file"></a>
            </div>
          @endforeach
      @else
        <div data-field-name="{{ $row->field }}">
          <a class="fileType" target="_blank"
            href="{{ Storage::disk(config('voyager.storage.disk'))->url($dataTypeContent->{$row->field}) }}"
            data-file-name="{{ $dataTypeContent->{$row->field} }}" data-id="{{ $dataTypeContent->getKey() }}">>
            Download
          </a>
          <a href="#" class="voyager-x remove-single-file"></a>
        </div>
        @endif
    @endif
@endif
@if($dataType->slug == 'videos')
  <input style="margin:20px 0;"  id="input_for_{{ $row->field }}"  @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}" >

  {{-- <a type="button" role="button" class="mx-4"  id="add_a_link_switch_button_for_{{ $row->field }}">
    add a link instead ?
  </a>

  <a type="button" role="button" class="mx-4" hidden id="upload_switch_button_for_{{ $row->field }}">
    upload a local video
  </a> --}}
    
@else
  <input style="margin:20px 0;"   @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}[]" multiple >

@endif

{{-- 

@push('javascript')
    <script>
      

        $(function(){

          $('#add_a_link_switch_button_for_{{ $row->field }}').on('click' , function(){
              $('#add_a_link_switch_button_for_{{ $row->field }}').hide();
              $('#upload_switch_button_for_{{ $row->field }}').show();
              $('#input_for_{{ $row->field }}').attr('type' , 'text')
              $('#input_for_{{ $row->field }}').attr('placeholder' , 'external link')
              $('#input_for_{{ $row->field }}').addClass('form-control')
              $('#input_for_{{ $row->field }}').attr('name' , '{{ $row->field }}')

            })

            $('#upload_switch_button_for_{{ $row->field }}').on('click' , function(){
              $('#add_a_link_switch_button_for_{{ $row->field }}').show();
              $('#upload_switch_button_for_{{ $row->field }}').hide();
              $('#input_for_{{ $row->field }}').attr('type' , 'file')
              $('#input_for_{{ $row->field }}').removeClass('form-control')
              $('#input_for_{{ $row->field }}').attr('placeholder' , '')
              $('#input_for_{{ $row->field }}').attr('name' , '{{ $row->field }}[]')

            })
             
            
        });
    </script>
@endpush
 --}}
