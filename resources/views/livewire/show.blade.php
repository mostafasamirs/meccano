 <!-- Modal delete-->

 <div wire:ignore.self class="modal fade" id="viewStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Country Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeView">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>
                        {{-- <tr>
                            <th>ID: </th>
                            <td>{{ $country_view_id }}</td>
                        </tr> --}}


                        <tr>
                            <th>Name Arabic: </th>
                            <td>{{ $name_ar }}</td>
                        </tr>


                        <tr>
                            <th>Name English: </th>
                            <td>{{ $name_en }}</td>
                        </tr>

                        <tr>
                            <th>Phone Code: </th>
                            <td>{{ $phone_code }}</td>
                        </tr>

                        <tr>
                            <th>Phone: </th>
                            <td>{{ $code }}</td>
                        </tr>

                        <tr>
                            <th>Status: </th>
                            <td>{{ $status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- Modal delete-->
