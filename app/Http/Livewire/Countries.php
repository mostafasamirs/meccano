<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Countrie;
use Livewire\WithPagination;
use App\Http\Requests\CountryRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Countries extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name_ar, $name_en, $name_fr, $code, $phone_code, $status;

    public $edit_id, $delete_id ,$view_id; //pass id

    public $searchTerm; //search

    // render data livewire.countries
    public function render()
    {
        //Get all students
        $countries = Countrie::where('name_ar', 'like', '%'.$this->searchTerm.'%')
        ->orWhere('name_en', 'like', '%'.$this->searchTerm.'%')
        ->orWhere('status', 'like', '%'.$this->searchTerm.'%')
        ->orWhere('code', 'like', '%'.$this->searchTerm.'%')
        ->orWhere('phone_code', 'like', '%'.$this->searchTerm.'%')->latest()->paginate();
        return view('livewire.countries', ['countries'=>$countries])->layout('dashboard.index');
    }

    // start add
    //on form submit validation
    public function store()
    {
        //on  form submit validation
        $this->validate([
            'name_ar' => 'required|max:200',
            'name_en' => 'required|max:200',
            'name_fr' => 'sometimes|max:200',
            'code' => 'sometimes|max:200',
            'phone_code' => 'required|max:200',
            'status' => 'required',
        ]);
        //Add Student Data
        $country = new Countrie();
        $country->name_ar = $this->name_ar;
        $country->name_en = $this->name_en;
        $country->name_fr = $this->name_fr;
        $country->code = $this->code;
        $country->phone_code = $this->phone_code;
        $country->status = $this->status;
        $country->save();
        session()->flash('message', 'New Country has been added successfully');

        //For hide modal after add student success
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->code = '';
        $this->phone_code = '';
        $this->status =  ''; //default data
        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');

    }

    public function resetInputs()
    {
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->code = '';
        $this->phone_code = '';
        $this->status = '';
    }

    public function close()
    {
        $this->resetInputs();
    }
    // end add

    // start update
    //Input fields on update validation
    // public function updated($fields)
    // {
    //     $this->validateOnly($fields, [
    //         'name_ar' => 'required',
    //         'name_en' => 'required',
    //         'name_fr' => 'sometimes',
    //         'code' => 'required',
    //         'phone_code' => 'required',
    //         'status' => 'sometimes',
    //     ]);
    // }

    public function edit($id)
    {
        $country = Countrie::where('id', $id)->first();
        $this->edit_id = $country->id;
        $this->name_ar = $country->name_ar;
        $this->name_en = $country->name_en;
        // $this->name_fr = $country->name_fr;
        $this->code = $country->code;
        $this->phone_code = $country->phone_code;
        $this->status = $country->status;
        $this->dispatchBrowserEvent('show-edit-modal');

    }

    public function update()
    {
        //on form submit validation
        $this->validate([
            'name_ar' => 'required|max:200',
            'name_en' => 'required|max:200',
            'name_fr' => 'sometimes|max:200',
            'code' => 'sometimes|max:200',
            'phone_code' => 'required|max:200',
            'status' => 'sometimes',
        ]);


        $country = Countrie::where('id', $this->edit_id )->first();
        $country->name_ar = $this->name_ar;
        $country->name_en = $this->name_en;
        $country->name_fr = $this->name_fr;
        $country->code = $this->code;
        $country->phone_code = $this->phone_code;
        $country->status = $this->status;

        $country->save();
        session()->flash('message', 'Country has been updated successfully');
        //For hide modal after add student success
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->code = '';
        $this->phone_code = '';
        $this->status =  ''; //default data
        //For hide modal after add student success

        $this->dispatchBrowserEvent('close-modal');

    }
    // end update



    //Delete Confirmation //
    //start delete
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id; //student id
        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    public function delete()
    {
        $country = Countrie::where('id', $this->delete_id)->first();
        $country->delete();

        session()->flash('message', 'Country has been deleted successfully');

        $this->dispatchBrowserEvent('close-modal');

        $this->delete_id= '';
    }


    public function cancel()
    {
        $this->delete_id = '';
    }

    //end delete


    //start viewDetails

    public function viewDetails($id)
    {
        $country = Countrie::where('id', $id)->first();
        $this->view_id = $country->id;
        $this->name_ar = $country->name_ar;
        $this->name_en = $country->name_en;
        $this->name_fr = $country->name_fr;
        $this->code = $country->code;
        $this->phone_code = $country->phone_code;
        $this->status = $country->status;

        $this->dispatchBrowserEvent('show-view-modal');
    }

    public function closeView()
    {
        $this->name_ar = '';
        $this->name_en = '';
        $this->name_en = '';
        $this->name_fr = '';
        $this->code = '';
        $this->phone_code = '';
        $this->status = '';
    }
    //end viewDetails

    // start changestatus
     public function changestatus($id)
    {
        $country = Countrie::where('id', $id)->first();
        $status =  $country->status  == "ok" ? "no_ok" : "ok";
        $country->update(['status' => $status]);
        session()->flash('message', 'change status successfully');
    }
    // end changestatus


}
