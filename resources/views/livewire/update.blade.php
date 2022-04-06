    <!-- Modal update-->
    <div wire:ignore.self class="modal fade" id="editStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Country</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form wire:submit.prevent="update" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group row">
                            <label for="name_ar" class="col-3">Name Arabic</label>
                            <div class="col-9">
                                <input type="text" id="name_ar" class="form-control" wire:model="name_ar" placeholder="Name Arabic">
                                @error('name_ar')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name_en" class="col-3">Name English</label>
                            <div class="col-9">
                                <input type="text" id="name_en" class="form-control" wire:model="name_en"  placeholder="Name English">
                                @error('name_en')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_code" class="col-3">phone code</label>
                            <div class="col-9">
                                <input type="text" id="phone_code" class="form-control" wire:model="phone_code"  placeholder="phone code">
                                @error('phone_code')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-3">phone</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="code" placeholder="phone">
                                @error('phone')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-3">status</label>
                            <div class="col-9">
                                <select class="form-control selected" wire:model.lazy="status" name="status" required>
                                    <option disabled>choose</option>
                                    <option value="ok">Ok</option>
                                    <option value="no_ok"> No OK </option>
                                  </select>

                                @error('status')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Edit Country</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal update-->
