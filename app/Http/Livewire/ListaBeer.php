<?php

namespace App\Http\Livewire;

use http\Client\Curl\User;
use Livewire\Component;

class ListaBeer extends Component
{
    public $item;
    public $nomes = 'Rafael, Paula, Magno';
    public $lista = [];
    public $key;
    public $acao = 'cadastrar';

    public function render()
    {
        return view('livewire.lista-beer');
    }

    public function add()
    {
        array_unshift($this->lista, $this->item);
        $this->item = "";
    }

    public function edit(int $key)
    {
        $this->key = $key;
        $this->acao = 'atualizar';
        $this->item = $this->lista[$key];
    }

    public function resetLista()
    {
        unset($this->lista);
        $this->lista = [];
    }

    public function delete(int $key)
    {
        unset($this->lista[$key]);
    }

    public function update()
    {
        $this->lista = array_replace($this->lista,[$this->key => $this->item]);
        $this->item = '';
        $this->acao = 'cadastrar';
    }

}
