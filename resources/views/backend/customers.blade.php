@extends('layouts.backend')

@section('content')
    @include('backend.partials._message')

    <div class="content">
        <!-- Full Table -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Customers List</h3>
            </div>

            <div class="block-content" id="app">
                <customers-list title="Customers List"></customers-list>
            </div>
        </div>
        <!-- END Full Table -->
    </div>
@stop
