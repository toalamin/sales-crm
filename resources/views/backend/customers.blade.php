@extends('layouts.backend')

@section('content')
    @include('backend.partials._message')

    <div class="content">
        <!-- Full Table -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Customers List</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>

            <div class="block-content" id="app">
                <customers title="Customers"></customers>
            </div>
        </div>
        <!-- END Full Table -->
    </div>
@stop
