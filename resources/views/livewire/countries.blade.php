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
                            <div class="col-lg-3 md-12">
                                <label for="search">Search</label>
                                <input type="search" class="form-control w-100" placeholder="search" wire:model.debounce.350ms="search" />
                            </div>

                            <div class="col-lg-3 md-12">
                            <label for="selected">Selected</label>
                            <select wire:model="byContinent" class="form-control selected" id="selected">
                                <option value="">NO selected</option>
                                @foreach ($countries as  $country)
                                <option value="{{$country->id}}">{{ $country->code }} - {{ $country->name_ar }}</option>
                                @endforeach
                            </select>
                        </div>
                            <div class="col-lg-2 md-12">
                                <label for="Per Page">Per Page</label>
                                <select wire:model="PerPage" class="form-control">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="25">25</option>
                                </select>
                            </div>

                            <div class="col-lg-2 md-12">
                                <label for="orderBy">OrderBy</label>
                                <select wire:model="orderBy" class="form-control">
                                    <option value="name_ar">Country Name Arabic</option>
                                    <option value="name_en">Country Name English</option>
                                </select>
                            </div>

                            <div class="col-lg-2 md-12">
                                <label for="sortBy">SortBy</label>
                                <select wire:model="sortBy" class="form-control">
                                    <option value="asc">Asc</option>
                                    <option value="desc">Desc</option>
                                </select>
                            </div>


                        </div>



                        <article class="container">
                        <div class="row">
                        <div class="table-responsive">
                            <table class="mb-0 my-5 table cell-border table-bordered table-hover table-striped text-center table-bordered"
                              id="myTable" style="width:100%" cellspacing="0">

                                <tr>
                                    <th>ID</th>
                                    <th>Name Arabic</th>
                                    <th>Name English</th>
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


    {{--select2--}}
    <script>
            $(document).ready(function() {
            $('#selected').select2({
                placeholder: 'Select an option',
            });
            $(document).on('change', '#selected', function (e) {
                @this.set('byContinent', e.target.value);
            });
        });
        document.addEventListener("livewire:load", function (event) {
            window.livewire.hook('afterDomUpdate', () => {
                $('#selected').select2({
                    placeholder: 'Select an option',
                });
            });
        });
    </script>
    {{--select2--}}


@endpush
