@extends('admin.adminBase')


@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="display-6">Manage Categories (10)</h2>
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->cat_title}}</td>
                                    <td>
                                        <a href="" class="btn btn-danger">X</a>
                                        <a href="" class="btn btn-success">Edit</a>

                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">Title</label>
                                        <input type="text" name="cat_title" value="{{old("cat_title")}}" class="form-control">
                                        @error('cat_title')
                                         <p class="small text-danger">{{$massage}}</p>                                            
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-success" value="Create Category">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection