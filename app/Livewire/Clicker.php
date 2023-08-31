<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    public $username = 'teste';
    public function createNewUser()
    {
        User::create([
            'name'=>'Marcelo de Azevedo',
            'email'=> 'marcelobazevedo@gmail.com',
            'password'=>'r00tld@p'
        ]);
    }
    public function render()
    {
        $title = 'teste';
        $users = User::all();
        return view('livewire.clicker', [
            'title'=> $title,
            'users' => $users
        ]);
    }
}
