<div>

    <div class="container mt-5">
        <h4><i class="fa fa-list mb-3"></i> List View</h4>
        <div class="table-responsive">
            <table class="table bg-white">
                <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($contacts as $contact)
                    @livewire('contact-app-list-items', ['contact' => $contact])
                @empty
                    No Contact Found
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
