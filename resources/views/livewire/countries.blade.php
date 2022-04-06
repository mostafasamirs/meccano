<div>
    <div class="container mt-4">
        <div class="row mb-4">
            {{-- <div class="col-md-12 text-center">
                <h3><strong></strong></h3>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Countries ({{$countries->count()}})</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addStudentModal">Add New</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif


                        <div class="row mb-1">
                            <div class="col-md-12">
                                <input type="search" class="form-control w-25" placeholder="search" wire:model="searchTerm" style="float: right;" />
                            </div>
                        </div>
                        <article class="container">
                        <div class="row">
                        <div class="table-responsive">
                            <table class="mb-0 my-5 table cell-border table-bordered table-hover table-striped text-center table-bordered"
                              id="myTable" style="width:100%" cellspacing="0">

                                <tr>
                                    <th>ID</th>
                                    <th>Name arabic</th>
                                    <th>Name english</th>
                                    <th>phone code</th>
                                    <th>phone</th>
                                    <th>
                                        Status
                                    </th>

                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($countries->count() > 0)
                                    @foreach ($countries as $index=> $country)
                                        <tr>
                                            <td>{{ $index+1}}</td>
                                            <td>{{ $country->name_ar }}</td>
                                            <td>{{ $country->name_en }}</td>
                                            <td>{{ $country->phone_code }}</td>
                                            <td>{{ $country->code }}</td>
                                            <td class="text-center">
                                                @if ($country->status =='ok')
                                                <button class="btn btn-sm btn-soft-success" wire:click="changestatus({{ $country->id }})">OK</button>
                                                @else
                                                <button class="btn btn-sm btn-warning" wire:click="changestatus({{ $country->id }})">No OK</button>
                                                @endif

                                            </td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-sm btn-secondary" wire:click="viewDetails({{ $country->id }})">View</button>
                                                <button class="btn btn-sm btn-primary" wire:click="edit({{ $country->id }})">Edit</button>
                                                <button class="btn btn-sm btn-danger" wire:click="deleteConfirmation({{ $country->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center;"><small>No country Found</small></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        {{$countries->links()}}
                    </div>
                </div>
            </div>
        </div>



      </article>
            </div>
        </div>
    </div>


    <!-- Modal create-->
    @include('livewire.create')
    <!-- Modal create-->

    <!-- Modal update-->
    @include('livewire.update')
    <!-- Modal update-->

    <!-- Modal show-->
    @include('livewire.show')
    <!-- Modal show-->

    <!-- Modal delete-->
    @include('livewire.delete')
    <!-- Modal delete-->

</div>


@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#addStudentModal').modal('hide');
            $('#editStudentModal').modal('hide');
            $('#deleteStudentModal').modal('hide');
        });


        window.addEventListener('show-edit-modal', event =>{
            $('#editStudentModal').modal('show');
        });


        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#deleteStudentModal').modal('show');
        });


        window.addEventListener('show-view-modal', event =>{
            $('#viewStudentModal').modal('show');
        });
    </script>
    <script>
          $(document).ready(function() {
      $('.selected').select2();
  });
    </script>
@endpush
