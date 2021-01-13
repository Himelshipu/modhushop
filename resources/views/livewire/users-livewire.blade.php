<div>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Users</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="search">
                        <input type="text" placeholder="search" style="height: 35px;" class="inline float float-right"
                               wire:model="search">
                        <h3 class="tile-title">User List</h3>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $index=>$user)
                            <tr class="">
                                <td>{{$index+1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->getRoleNames()->isNotEmpty())
                                        {!! $user->getRoleNames()->implode(" ") !!}
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary rounded" data-toggle="modal"
                                            data-target="#userUpdateModal" wire:click.prevent="edit({{$user->id}})">
                                        Edit
                                    </button>
                                    <button class="btn btn-danger rounded">Delete</button>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                        {{$users->links()}}
                    </table>
                </div>
            </div>
        </div>
    </main>
    @include('backend.update')
</div>
