@extends('layouts.app')

@section('content')

    <h1 class="mb-3">HR Hub System</h1>

    <div class="bg-light p-4 rounded">
        <h1>Employees</h1>
        <div class="lead">

        </div>

        <div class="mt-2">

        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Email</th>
                <th scope="col" width="10%">DOB</th>
                <th scope="col" width="10%">Position</th>
                <th scope="col" width="10%">Is Invited To Hubspot?</th>
                <th scope="col" width="10%">Roles</th>
                <th scope="col" width="1%" colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->position }}</td>
                        <td>{{ $user->is_synched_to_hubspot }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        {{-- <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td> --}}
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>

                            <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger btn-sm">Deactivate</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>

    </div>
@endsection
