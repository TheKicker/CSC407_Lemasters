@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 96px;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Update a Kiosk') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('kiosk.update', $kiosk['id']) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="form-group row" style="margin:25px;">
                                <label for="location" class="col-md-2 col-form-label text-md-right">Location</label>
                                <div class="col-md-8">
                                    {{--
                                        The old('firstname') will holld the value of the field to populate the form if there is an error and
                                        you need to fix an error before resubmitting
                                    --}}
                                    <input id="location" name="location" type="text" value="{{ $kiosk['location'] }}" class="form-control here @if ($errors->has('location')) is-invalid @endif">
                                    @if ($errors->has('location'))
                                        <div>
                                            <small id="passwordHelp" class="text-danger">{{ $errors->first('location') }}</small>  </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="margin:25px;">
                                <label for="address" class="col-md-2 col-form-label text-md-right">Address</label>
                                <div class="col-8">
                                    <input id="address" name="address" value="{{ $kiosk['address'] }}" type="text" class="form-control here @if ($errors->has('address')) is-invalid @endif">
                                    @if ($errors->has('address'))
                                        <div>
                                            <small id="passwordHelp" class="text-danger">{{ $errors->first('middlename') }}</small>  </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" align="right">
                                <div class="col-md-6 offset-md-4">
                                    <button name="submit" type="submit" class="btn btn-primary">{{__('Update Kiosk')}}</button>
                                    <a href="{{ route('kiosk.index') }}" id="kioskCancelButton" name="kioskCancelButton" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
@endsection
