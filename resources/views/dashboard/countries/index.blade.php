@extends('layouts.dashboard.app')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li> --}}
                                {{-- <li class="breadcrumb-item active">@lang('site.countries')</li> --}}
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card" id="card">

                <div>
                    @livewire('countries')
                </div>

            </div>
        </div>
    </div>
    @endsection
