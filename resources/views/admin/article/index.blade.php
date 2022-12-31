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
                        <th>Action </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
