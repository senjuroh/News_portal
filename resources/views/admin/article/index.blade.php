<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                    <a href="{{route('article.create')}}" class="btn btn-primary">Add Aticle</a>
            </div>
            <div class="card-body">
                <span></span>
                <table class="table">
                    <tr>
                        <th>Post ID</th>
                        <th>Title</th>
                        <th>Posted On</th>
                        <th>Action </th>
                    </tr>
                    @foreach ($articles as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{nepalidate($item->created_at) }}</td>
                            <td><a href="{{route('article.edit')}}" class="btn btn-primary">edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
