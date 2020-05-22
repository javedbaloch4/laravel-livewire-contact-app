<div>
    <tr>
        <td scope="row"><img src="{{asset('images/contact.png')}}"
                             class="img-thumbnail rounded-circle py-0 my-0 mr-1"
                             style="width: 40px!important" alt="John Doe"/>
            <button class="btn btn-link p-0">{{ $contact->fullName }}</button>
        </td>
        <td class="text-muted">{{ $contact->email }}</td>
        <td class="text-muted">{{ $contact->number }}</td>
        <td>
            @livewire('contact-app-actions')
        </td>
    </tr>
</div>
