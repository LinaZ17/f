@extends('layouts.master')

@section('title', __('basket.place_order'))

@section('content')
    <h1>:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>: <b>.</b></p>
            <form action="" method="POST">
                <div>
                    <p>:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        @guest
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2"> </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                        @endguest
                    </div>
                    <br>
                    @csrf
                    <input type="submit" class="btn btn-success" value="">
                </div>
            </form>
        </div>
    </div>
@endsection
