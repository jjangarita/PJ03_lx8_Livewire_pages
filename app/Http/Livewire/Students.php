<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Students extends Component
{
    use  WithPagination;
    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    public function resetInputFields()
{
    $this->firstname = '';
    $this->lastname = '';
    $this->email='';
    $this->phone='';
}
public function store()
{
    $validatedData = $this->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
]);
    Student::create($validatedData);
    session()->flash('message','Se ha creado un nuevo registro!');
    $this->resetInputFields();
    $this->emit('studentAdded');
}

public function edit($id)
{
    $student = Student::where('id',$id)->first();
    $this->ids = $student->id;
    $this->firstname = $student->firstname;
    $this->lastname = $student->lastname;
    $this->email = $student->email;
    $this->phone = $student->phone;
}
public function update()
{
    $this->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
]);
if($this->ids)
{
    $student = Student::find($this->ids);
    $student->update([
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'email' => $this->email,
        'phone' => $this->phone
]);
        session()->flash('message','Información actualizada correctamente!');
        $this->resetInputFields();
        $this->emit('studentUpdated');
    }
}

//Eliminación directa
public function delete($id)
{
    $student = Student::where('id',$id)->delete();
    return redirect()->back()->with('El estudiante ha sido eliminado!');
}

//Eliminación con verificación
public function destroy()
{
    $this->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
]);
if($this->ids)
{
    $student = Student::find($this->ids);
    $student->delete([
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'email' => $this->email,
        'phone' => $this->phone
]);
        session()->flash('message','Registro eliminado!');
        $this->resetInputFields();
        $this->emit('studentDeleted');
    }
}

public function render()
{
    $students = Student::orderBy('id','DESC')->paginate(7);
    return view('livewire.students',['students'=>$students]);
}
}