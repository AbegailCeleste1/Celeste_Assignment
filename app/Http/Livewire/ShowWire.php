<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Resident;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class ShowWire extends Component
{
    use LivewireAlert;
    use WithPagination;
    
    public $CivilStatus, $FirstName, $MiddleName, $LastName, $Suffix, $DOB, $PlaceofBirth, $forUpdate;
    protected $paginationTheme = 'bootstrap'; 

    public function render()
    {
        $residents = Resident::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.show-wire', compact('residents'));
    }

    public function delete($id)
    {
        Resident::where('id', $id)->delete();
        $this->alert('success', 'Successfully deleted!');
        $this->residents = Resident::paginate(5); 
    }
}
