@extends('layouts.app')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Update Employee</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $user->name }}"
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}"
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Dob</label>
                    <input value="{{ $user->dob }}"
                        type="date"
                        class="form-control"
                        name="dob"
                        placeholder="Dob" required>
                    @if ($errors->has('dob'))
                        <span class="text-danger text-left">{{ $errors->first('dob') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Position</label>
                    <input value="{{ $user->position }}"
                        type="text"
                        class="form-control"
                        name="position"
                        placeholder="Position" required>
                    @if ($errors->has('position'))
                        <span class="text-danger text-left">{{ $errors->first('position') }}</span>
                    @endif
                </div>


                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control"
                        name="role" required>
                        <option value="">Select role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}"
                                {{ in_array($role->name, $userRole)
                                    ? 'selected'
                                    : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update user</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</button>
            </form>
        </div>

    </div>
@endsection
