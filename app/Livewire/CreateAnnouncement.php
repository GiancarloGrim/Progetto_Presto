<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;
    public $announcement;
    public $image; 


    protected $rules = [
        'title'=>'required|min:5',
        'body'=>'required|min:10',
        'price'=>'required|numeric',
        'category'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',

    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'il campo :attribute è troppo corto',
        'numeric' => 'Il campo prezzo deve contenere un numero',
        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine deve essere massimo di 1mb',
        'images.image' => 'L\'immagine è richiesta',
        'images.max' => 'L\'immagine deve essere massimo di 1mb',
    ];

    public function updatedTemporaryImages(){
        if ($this->validate([
                'temporary_images.*'=>'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store(){

        $this->validate();
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
            if(count($this->images)){
                foreach ($this->images as $image) {
                    $newFileName = "announcements/{$this->announcement->id}";
                    $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);
                    
                    RemoveFaces::withChain([
                        new ResizeImage($newImage->path , 400, 300),
                        new GoogleVisionSafeSearch($newImage->id),
                        new GoogleVisionLabelImage($newImage->id)
                    ])->dispatch(($newImage->id));
        }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        
        // dd(Auth::user()); 
        $this->announcement->user()->associate(Auth::user());

        $this->announcement->save();

        session()->flash('message', 'Annuncio inserito con successo');
        $this->cleanForm();
    }


    // public $message = 'Annuncio inserito con successo';

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}





