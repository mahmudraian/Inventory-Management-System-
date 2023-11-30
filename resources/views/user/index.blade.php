@extends('layouts.layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">User Management</h2>
            <table class="table table-bordered table-success table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($all_users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><img src="{{ asset(Storage::url($user->image)) }}" alt="" width="50px"></td>
                        <td>
                            

                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $all_users->links() }}
        </div>
    </div>
</div>

@endsection

