<?php

namespace App\Livewire;

use Livewire\Component;

#[Layout ('layouts.app')]
class Home extends Component

{
    public function mount(){
        if(!auth()->check()){
            return redirect()->route('login');
        }
        // check(): This method specifically checks whether the user is authenticated. If a user is logged in, check() will return true
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.home');
    }
}
