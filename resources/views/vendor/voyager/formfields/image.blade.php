@if(isset($dataTypeContent->{$row->field}))
    <div data-field-name="{{ $row->field }}">
        <a href="#" class="voyager-x remove-single-image" style="position:absolute;"></a>
        <img id="image_for_{{ $row->field }}" src="@if( !filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $dataTypeContent->{$row->field} ) }}@else{{ $dataTypeContent->{$row->field} }}@endif"
          data-file-name="{{ $dataTypeContent->{$row->field} }}" data-id="{{ $dataTypeContent->getKey() }}" 
          style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
    </div>
@endif

<input id="image_input_for_{{ $row->field }}" style="margin-bottom : 10px;" @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}" accept="image/*">
<a type="button" role="button" class="mx-4" data-toggle="modal" id="unsplash_search_modal_open_for_{{ $row->field }}" data-target="#unsplash_search_modal_for_{{ $row->field }}">
    find an image online ? (copyright free)
</a>

<a type="button" role="button" class="mx-4" hidden id="image_upload_open_for_{{ $row->field }}">
    use a local image
</a>

<!-- Modal -->
    <div class="modal  fade" id="unsplash_search_modal_for_{{ $row->field }}" tabindex="-1" role="dialog" aria-labelledby="unsplashSearchLabel_for_{{ $row->field }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&#10006;</span>
                    </button>
                    <h3 class="modal-title" id="unsplashSearchLabel_for_{{ $row->field }}">Unsplash Search</h3>
                </div>
                <div class="modal-body form">
                    <div class="form-group">
                        <input class="form-control" style="margin-bottom: 20px" type="text" name="unsplashQuery" id="unsplashSearch_for_{{ $row->field }}">
                        <div style="min-height: 50px">
                            
                            <span class="hidden" id="unsplash_results_pagination_for_{{ $row->field }}">

                                <a role="button" class="btn btn-dark btn-sm disabled"   id="unsplash_results_previous_for_{{ $row->field }}">previous</a>
                                <a role="button" class="btn btn-primary btn-sm" id="unsplash_results_next_for_{{ $row->field }}">next</a>
                            </span>
                            
                            <button id="unsplashSave_for_{{ $row->field }}" class="btn btn-primary float-right">Search</button>
                            
                        </div>

                    </div>
                    <div style="display: none ;min-height:200px ;flex-wrap:wrap;justify-content :center;align-items:center " id="loader_for_unsplash_results_for_{{ $row->field }}">
                        <img   src="{{ asset('/ajax-loader.gif') }}" alt="" srcset="">
                    </div>
                    <div id="unsplash_results_for_{{ $row->field }}" style="display: flex;flex-wrap:wrap;justify-content :center;align-items:center" >
                    </div>
                </div>
               
                
            </div>
        </div>
        
    </div>

@push('javascript')
    <script>
        // global variable for results
        window.results = null
        window.currentPage = 1;
        window.numberOfPages = null;
        
        

        // function to check current page value to disable pagination buttons
        function check(field) {
            let next = $("#unsplash_results_next_for_"+field);
            let previous = $("#unsplash_results_previous_for_"+field);

            if(currentPage == numberOfPages) {
                next.disabled = true;
                next.addClass('disabled btn-dark');
                next.removeClass('btn-primary');
            }else if(currentPage == 1) {
                previous.disabled = true;
                previous.addClass('disabled btn-dark');
                previous.removeClass('btn-primary');
            } else {
                next.disabled = false;
                next.addClass('btn-primary');
                next.removeClass('btn-dark disabled');
                previous.disabled = false;
                previous.addClass('btn-primary');
                previous.removeClass('btn-dark disabled');
            }
        }

        //function to get unsplash search results and handle input type change and values
        function getUnsplashResults(query , page , field) {
            //clean results div on each new search attemp
            $('#unsplash_results_for_'+field).html('');

            //display the ajax loader spinner gif
            $("#loader_for_unsplash_results_for_"+field).css('display' , 'flex');

            // request for search 
            $.ajax({
                url: "/test",
                type:"GET",
                data:{
                    query: query,
                    page : page
                },
                success:function(response){
                    if(response) {
                        window.numberOfPages = response.results.total_pages
                        check(field);
                        // remove the ajax loader spinner gif
                        $("#loader_for_unsplash_results_for_"+field).css('display' , 'none');
                        
                        
                        // asign results to window
                        window.results = response.results;
                        console.log(window.results);
                        
                        if(window.numberOfPages) {
                            $('#unsplash_results_pagination_for_'+field).removeClass('hidden')
                        }else{
                            $('#unsplash_results_pagination_for_'+field).addClass('hidden')
                        }
                        if(!  (window.results.results.length > 0)) {
                            $('#unsplash_results_for_'+field).html(' <div style="text-align:center;"> no results </div> ');
                        }
                        Array.from(window.results.results).forEach(element => {
                            // loop throught results objects and append its div to results div
                            $('#unsplash_results_for_'+field).append('<div class="overlay shadow "  style="cursor:pointer; margin:1rem ;height:250px;width: 250px;display:flex;align-items:center;justify-content:center; overflow:hidden"><img src="'+
                                 (element.urls.regular ?? element.urls.raw) 
                                 +'"alt="" class="img-fluid" style="width:100% ; flex-shrink : 0;" id="image_'+element.id+'"/></div>'); 

                            // on image click handle values changes and input type
                            $('#image_'+element.id).on('click',function (){

                                //global var for url
                                window.selected_image_url = $(this).attr('src');

                                // change input type to text instead of file and put url as its value
                                $('#image_input_for_' + field).attr('type', 'text')
                                $('#image_input_for_' + field).attr('value' , window.selected_image_url) ;


                                // add form control for full width and style 
                                // showing the image upload button instead of the find on unsplash 
                                // close modal
                                $('#image_input_for_' + field).addClass('form-control')
                                $('#image_upload_open_for_'+field).show();
                                $('#unsplash_search_modal_open_for_'+field).hide();
                                $('#unsplash_search_modal_for_'+field + ' .close').click();
                                window.currentPage = 1 ;
                                window.numberOfPages = null ;
                                // on image upload click (to go back to classic image upload)
                                // hide the image upload btn
                                // show the search on unsplash btn
                                // change type for the input and class back to orignal
                                $('#image_upload_open_for_'+field).on('click' , function () { 
                                    $('#image_upload_open_for_'+field).hide();
                                    $('#unsplash_search_modal_open_for_'+field).show();
                                    $('#image_input_for_' + field).attr('type', 'file');
                                    $('#image_input_for_' + field).removeClass('form-control');

                                });
                                
                            });   
                        });
                        //remove the backend loaded image on change
                        $('#image_for_'+field).parent().remove();
                        
                    }
                },
                error:function() {
                    $("#loader_for_unsplash_results_for_"+field).css('display' , 'none');
                    $('#unsplash_results_for_'+field).html(' <div style="text-align:center;"> no results </div> ');
                }
            });
        }

        

        $(function(){

            // on modal opened  
            $('#unsplash_search_modal_open_for_{{ $row->field }}').on('click' ,function(el){
                                
                        // on search
                        $('#unsplashSave_for_{{ $row->field }}').on('click', function(e){
                            e.preventDefault();
                            //getting the query and calling the search func
                            var query = $('#unsplashSearch_for_{{ $row->field }}').val();
                            getUnsplashResults(query , window.currentPage , '{{ $row->field }}');

                        })
                        $('#unsplash_results_next_for_{{ $row->field }}').on('click' , function (el) {
                            var query = $('#unsplashSearch_for_{{ $row->field }}').val();
                            window.currentPage++;
                            getUnsplashResults(query , window.currentPage ,  '{{ $row->field }}');
                        })
                        $('#unsplash_results_previous_for_{{ $row->field }}').on('click' , function (el) {
                            var query = $('#unsplashSearch_for_{{ $row->field }}').val();
                            window.currentPage--;
                            getUnsplashResults(query , window.currentPage ,  '{{ $row->field }}');
                        })
                        
            })





        });
    </script>
@endpush


<style>
    .overlay{
        opacity: 0.9;
        border-radius: 5px;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
        transition: all 0.3s;
    }
    .overlay:hover {
        opacity: 1;
        transform: scale(1.05);
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: all 0.3s;
    }
</style>
