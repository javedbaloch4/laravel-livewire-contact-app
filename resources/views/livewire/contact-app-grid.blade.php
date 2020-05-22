<div class="container">
    <h4><i class="fa fa-list mb-2"></i> Grid View</h4>

    <div class="row pt-3 d-flex align-self-left justify-content-between ">

        @forelse($contacts as $contact)
            @livewire('contact-app-grid-item', ['contact' => $contact])
        @empty
            No items found.
        @endforelse
    </div>
</div>
