<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{route('article.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"> Title <span class="text-danger">*</span></label>
                            <input id="title" class="form-control" type="text" name="title" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="category_id">Choose Category  <span class="text-danger">*</span></label>
                            <select id="category_id" class="form-control select2" name="category_id[]" multiple>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea id="description" class="form-control summernote" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_word">Meta_Word</label>
                            <textarea id="meta_word" class="form-control" name="meta_word" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_description">Meta_Description</label>
                            <textarea id="meta_description" class="form-control" name="meta_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Featured Image <span class="text-danger">*</span></label>
                            <input id="image" class="form-control-file" type="file" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
