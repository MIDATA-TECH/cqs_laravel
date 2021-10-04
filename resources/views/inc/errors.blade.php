@error('password')
               
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong> 
                       
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @enderror



        

@isset($profile["errors"])
    

        
        @foreach ($profile["errors"] as $item)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $item }}</strong> 
                
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        @endforeach
   
@endisset
