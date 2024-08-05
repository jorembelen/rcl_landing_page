<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class HomePage extends Component
{
    public $name;

    public function mount() 
    {
        $this->name = null;
    }

    public function render()
    {
        return view('livewire.home-page');
    }

    public function submit() 
    {
        $this->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Please choose one.'
        ]);

        if(config('app.env') === 'production') {
            return $this->redirectToDomain();
        }
            return $this->redirectToLocal();
    }

    private function redirectToDomain() 
    {
        $domains = [
            'asset' => 'https://assets.rclprojects.com',
            'facility' => 'https://hms.rclprojects.com',
            'employees' => 'https://ems.rclprojects.com',
            'reservation' => 'https://reservation.rclprojects.com',
            'probation' => 'https://probation.rclprojects.com',
            'safety' => 'https://hse.rclprojects.com',
        ];

        if (array_key_exists($this->name, $domains)) {
            return redirect()->away($domains[$this->name]);
        }

        // Handle the case where the name doesn't match any domain
        abort(404, 'Domain not found');
    }

    private function redirectToLocal()
    {
        $domains = [
            'asset' => 'https://assets.dev',
            'facility' => 'https://hms.dev',
            'employees' => 'https://emp_management.dev',
            'reservation' => 'https://rcl_reservations.dev',
            'probation' => 'https://emp_evaluation.dev',
            'safety' => 'https://hse-app.dev',
        ];

        if (array_key_exists($this->name, $domains)) {
            return redirect()->away($domains[$this->name]);
        }

        // Handle the case where the name doesn't match any domain
        abort(404, 'Domain not found');
    }

}
