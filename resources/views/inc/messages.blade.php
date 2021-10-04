
@isset($profile["messages"])
    

        
        @foreach ($profile["messages"] as $item)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $item }}</strong> 
                
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        @endforeach
   
@endisset 
