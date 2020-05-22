<div>
    <div class="container">

        <div class="input-group input-group-lg mt-5">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-search"></i></span>
            </div>
            <input type="text" class="form-control shadow-none" aria-label="" placeholder="Search for Contact"
                   aria-describedby="inputGroup-sizing-lg">
        </div>

        <div class="btn-toolbar mt-5 float-right" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-success shadow-none" data-toggle="modal"
                        data-target="#exampleModal"><i class="fa fa-plus"></i></button>
            </div>

            <div class="btn-group" role="group" aria-label="Third group">
                <button type="button" wire:click="toggleView('list')"
                        class="btn btn-primary shadow-none {{ $viewMode == 'list' ? 'active' : '' }}"><i
                        class="fa fa-list"></i></button>
                <button type="button" wire:click="toggleView('grid')"
                        class="btn btn-primary shadow-none {{ $viewMode == 'grid' ? 'active' : '' }}"><i
                        class="fa fa-th-large"></i></button>
            </div>
        </div>

        <div class="clearfix"></div>

        @livewire('contact-app-list', ['contacts' => $contacts, 'viewMode' => $viewMode], key(time()))


        <!-- Button trigger modal -->
        <div class="col-md-12">
            <div class="float-right">
                {{ $contacts->links() }}
            </div>
            <div class="clearfix"></div>
            <button type="button" class="btn btn-primary btn-lg mb-5" data-toggle="modal" data-target="#exampleModal">
                Add A Contact
            </button>
        </div>

        <!-- Modal -->
        @livewire('contact-form')
    </div>
</div>
