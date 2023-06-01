<table class="table">
    <thead>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Suffix</th>
        <th>Date of Birth</th>
        <th>Place of Birth</th>
        <th>Civil Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        @if($residents->count())
            @foreach($residents as $c)
                <tr>
                    <td>{{ $c->FirstName }}</td>
                    <td>{{ $c->MiddleName }}</td>
                    <td>{{ $c->LastName }}</td>
                    <td>{{ $c->Suffix }}</td>
                    <td>{{ $c->DOB }}</td>
                    <td>{{ $c->PlaceofBirth }}</td>
                    <td>{{ $c->CivilStatus }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm"
                        wire:click="delete('{{ $c->id }}')">
                        Delete</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $residents->links() }}
