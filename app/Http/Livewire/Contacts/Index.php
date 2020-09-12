<?php

namespace App\Http\Livewire\Contacts;

use App\Models\Contact;
use App\Models\ContactType;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $contact_types;
    public $search, $location_search, $type_search, $sorting;
    public $pagination_links;

    protected $queryString = ['search' => ['except' => ''], 'location_search' => ['except' => ''], 'type_search', 'sorting'];


    public function mount()
    {
        $this->contact_types = ContactType::all();

        // $orderBy = "latest";

        // switch ($this->sorting) {
        //     case 'recent':
        //         $orderBy = "latest";
        //         break;

        //     case 'old':
        //         $orderBy = "oldest";
        //         break;
        // }

        // // $this->contacts = Contact::where([
        // //     ['name', 'like', '%' . $this->search . '%'],
        // //     ['country', 'like', '%' . $this->location_search . '%']
        // // ])
        // //     ->where(function ($query) {
        // //         if ($this->type_search) $query->where('type_id', $this->type_search);
        // //         else $query;
        // //     })
        // //     ->$orderBy()
        // //     ->paginate(10);
    }

    public function searchContacts()
    {
        //resets page to 1
        $this->resetPage();

        // $orderBy = "latest";

        // switch ($this->sorting) {
        //     case 'recent':
        //         $orderBy = "latest";
        //         break;

        //     case 'old':
        //         $orderBy = "oldest";
        //         break;
        // }

        // $this->contacts = Contact::where([
        //     ['name', 'like', '%' . $this->search . '%'],
        //     ['country', 'like', '%' . $this->location_search . '%']
        // ])
        //     ->where(function ($query) {
        //         if ($this->type_search) $query->where('type_id', $this->type_search);
        //         else $query;
        //     })
        //     ->$orderBy()
        //     ->paginate(10);
    }

    public function render()
    {
        $orderBy = "latest";

        switch ($this->sorting) {
            case 'recent':
                $orderBy = "latest";
                break;

            case 'old':
                $orderBy = "oldest";
                break;
        }
        $contacts = Contact::where([
            ['name', 'like', '%' . $this->search . '%'],
            ['country', 'like', '%' . $this->location_search . '%']
        ])
            ->where(function ($query) {
                if ($this->type_search) $query->where('type_id', $this->type_search);
                else $query;
            })
            ->$orderBy()->paginate(10);

        return view('livewire.contacts.index', [
            'contacts' => $contacts,
        ]);
    }
}
