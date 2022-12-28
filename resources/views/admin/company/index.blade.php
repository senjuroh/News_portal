<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                @if (empty($company))
                    <a href="{{route('company.index')}}" class="btn btn-primary">Go Back</a>
                @else
                    <h5>Company Information</h5>
                @endif
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Logo</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        @if (!empty($company))
                        <td><img src="{{asset($company->logo)}}" width="120" alt=""></td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->address}}</td>
                        <td>{{$company->contact}}</td>
                        <td>
                            <a href="{{route('company.edit', $company->id)}}" class="badge badge-primary">Edit</a>
                        </td>
                        @endif
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
