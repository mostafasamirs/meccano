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
      {{-- button create --}}
      <div class="card" id="card">

        <div class="row">

            <div class="col-lg-10 col-md-6">
                <h4 class="mb-0 styletitle">
                    @lang('site.countries')
                    <small>({{$countries->count()}})</small>
                </h4>
            </div>

          <div class="col-lg-2 col-md-6">
            <a href="{{url('dashboard/posts/create')}}" class="btn btn-info btn-md styleadd">
              <i class="fas fa-plus"></i>
              @lang('site.add')
            </a>
          </div>
        </div>
        <!-- end of form -->
      </div>
    </div>
    {{-- button create --}}
    <div class="card" id="card">

    <article class="container">
      <div class="row">
        <div class="table-responsive">
          <table class="mb-0 my-5 table cell-border table-bordered table-hover table-striped text-center table-bordered"
            id="myTable" style="width:100%" cellspacing="0">
            @if($countries->count()>0)
            <thead class="table cell-border table-bordered table-hover table-striped text-center table-bordered">
              <tr>
              <tr>
                <th>@lang('site.No')</th>
                <th>@lang('site.name_ar')</th>
                <th>@lang('site.name_en')</th>
                <th>@lang('site.phone_code')</th>
                <th>@lang('site.status')</th>
                <th>@lang('site.action')</th>
              </tr>
              </tr>
            </thead>

            <tbody class="table cell-border table-bordered table-hover table-striped text-center table-bordered">
              @foreach ($countries as $index=> $country)
              <tr>
                <td>{{$index +1}}</td>
                <td>{{$country->name_ar}}</td>
                <td>{{$country->name_en}}</td>
                <td>{{$country->phone_code}}</td>
                <td>{{$country->status}}</td>
                <td>
                  <a href="{{route('dashboard.countries.edit',$country->id)}}"
                    class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                    @lang('site.edit')
                  </a>
                  <form action="{{route('dashboard.countries.destroy', $country->id)}}"
                    class="formData" method="POST" style="display: inline-block">
                    @csrf
                    {{method_field('delete')}}

                    <button type="submit" class="deleted btn btn-danger btn-md">
                      <i class="fas fa-trash"></i>
                      @lang('site.delete')
                    </button>

                  </form>
                </td>


              </tr>

              @endforeach


            </tbody>

            @else
            <h4>@lang('site.no_data_found')</h4>
            @endif

          </table>
          {!! $countries->links() !!}

        </div>
        </div>



      </article>
    </div>
  </div>
</div>
</div>
@endsection
