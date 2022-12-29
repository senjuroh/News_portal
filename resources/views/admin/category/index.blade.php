<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                    <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a>
            </div>
            <div class="card-body">
                <span></span>
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Action </th>
                    </tr>
                    <tr>
                        @foreach ($categories as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td><a href="{{route('category.edit', $item->id)}}" class="badge badge-primary">Edit</a></td>
                        </tr>
                        @endforeach
                        <td>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
