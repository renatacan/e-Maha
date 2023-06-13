<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Artikel;

class FormArtikel extends Component
{
    public $judul;
    public $deskripsi;
    public function render()
    {
        return view('livewire.form-artikel');
    }

    public function simpan() 
    {
        $artikel = artikel::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi
        ]);
        $this->resetInput();
        //Untuk reset / kosong textbox

        //trigger
        $this->emit('indexArtikel', $artikel);
    }
    private function resetInput()
    {
        $this->judul = null;
        $this->deskripsi = null;
    }
}
