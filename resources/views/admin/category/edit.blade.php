<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{route('category.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('category.update', $category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Category Name <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$category->name}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="position">Menu position <span class="text-danger">*</span></label>
                            <input id="position" class="form-control" type="number" name="position" value="{{$category->position}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
