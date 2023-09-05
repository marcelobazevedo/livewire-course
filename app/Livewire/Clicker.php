<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;

    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min:2')]
    public $password = '';

    public function createNewUser()
    {
        ;
        $validated = $this->validate();
        User::create([
//            'name'=>$this->name,
//            'email'=> $this->email,
//            'password'=>$this->password
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'Usuario criado com sucesso!');
    }

    public function render()
    {
        $users = User::paginate(2);
        return view('livewire.clicker', [
            'users' => $users
        ]);
    }
}
