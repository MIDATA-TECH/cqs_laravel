@extends('layouts.front')

@section('content')
<div class="container mb-4" style="margin-top: 100px;margin-bottom: 100px;"">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header bg-white text-primary">
                <i class="bi bi-box-arrow-in-down text-primary"></i>
                    {{ __('Register') }}
                    

                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                         <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Preliminary Information') }}</label>
                        </div>
                         <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder={{ __('Firstname') }} autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete="middlename" placeholder={{ __('Middlename') }} autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           
                        </div>

                        <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" placeholder={{ __('Surname') }} autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input id="nationalID" type="text" class="form-control @error('nationalID') is-invalid @enderror" name="nationalID" value="{{ old('nationalID') }}" required autocomplete="nationalID" placeholder='National ID' }} autofocus>

                                @error('nationalID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           
                        </div>


                        <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                           

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder={{ __('Phone') }} autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder={{ __('Email Address') }} required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder={{ __('Password') }} autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder='Confirm Password' autocomplete="new-password">
                            </div>
                        </div>

                        

                        @isset($accountType)

                        
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Account Type</label>
                            <hr>
                            <div class="col-md-12 row">
                            @if ($accountType == 'LSSP')

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="radio" name="accountType" value="LSSP" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Local Suppliers and Service Providers
                                </label>
                                </div>
                            
                            @elseif($accountType == 'Professional')

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="radio" name="accountType" id="flexRadioDefault1" value="Professional" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Professional
                                </label>
                                </div>

                            @endif
                            
                          
                            </div>
                        </div>
                        @else

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">Account Type</label>
                            <hr>
                            <div class="col-md-12 row">

                        <div class="form-check col-md-6">
                            <input class="form-check-input" type="radio" name="accountType" value="LSSP" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Local Suppliers and Service Providers
                            </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="radio" name="accountType" id="flexRadioDefault1" value="Professional" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Professional
                                </label>
                                </div>

                            </div>
                        </div>

                        @endisset

                        
                        
                        

                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
