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
                            <input id="title" class="form-control" type="number" name="title" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="category_id">Choose Category  <span class="text-danger">*</span></label>
                            <select id="category_id" class="form-control" name="category_id[]" multiple>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_word">Meta_Word</label>
                            <input id="meta_word" class="form-control" type="text" name="meta_word" placeholder="seperated by comma">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_description">Meta_Description</label>
                            <input id="meta_description" class="form-control" type="text" name="meta_description" placeholder="maximum 160 words">
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
