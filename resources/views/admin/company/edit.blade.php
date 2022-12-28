<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{route('company.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('company.update', $company->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Company Name <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$company->name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Company Address <span class="text-danger">*</span></label>
                            <input id="address" class="form-control" type="text" name="address"  value="{{$company->address}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact">Company Contact <span class="text-danger">*</span></label>
                            <input id="contact" class="form-control" type="text" name="contact"  value="{{$company->contact}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Company Email <span class="text-danger">*</span></label>
                            <input id="email" class="form-control" type="text" name="email"  value="{{$company->email}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regno">Company Registration <span class="text-danger">*</span></label>
                            <input id="regno" class="form-control" type="text" name="regno"  value="{{$company->regno}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo">Upload Company Logo <span class="text-danger">*</span></label>
                            <input id="logo" class="form-control-file" type="file" name="logo">
                        </div>
                        <div>
                            <img src="{{asset($company->logo)}}" width="120px" alt="">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Update Record</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

