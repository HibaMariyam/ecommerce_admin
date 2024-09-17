<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\User;


class Register extends Component
{   
    public $name, $email, $password, $password_confirmation,$message;
    public function register() {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user=User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->login($user);
        return redirect()->route('home');
       
    }
    public function render()
    {
        return view('livewire.register');
    }
}