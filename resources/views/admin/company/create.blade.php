<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{route('company.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Company Name <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="Enter Company Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Company Address <span class="text-danger">*</span></label>
                            <input id="address" class="form-control" type="text" name="address" placeholder="Enter Company address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact">Company Contact <span class="text-danger">*</span></label>
                            <input id="contact" class="form-control" type="text" name="contact" placeholder="Contact No.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Company Email <span class="text-danger">*</span></label>
                            <input id="email" class="form-control" type="text" name="email" placeholder="Enter Company email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regno">Company Registration <span class="text-danger">*</span></label>
                            <input id="regno" class="form-control" type="text" name="regno" placeholder="Enter Company Registration No.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo">Upload Company Logo <span class="text-danger">*</span></label>
                            <input id="logo" class="form-control-file" type="file" name="logo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>



</x-app-layout>
