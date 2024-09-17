<?php

namespace App\Livewire;

use Livewire\Component;

#[Layout ('layouts.app')]
class Login extends Component
{
    public $email, $password;
    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('home');
        }

        $this->addError('email', 'Wrong credentials');
        $this->addError('password', 'Wrong credentials');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
