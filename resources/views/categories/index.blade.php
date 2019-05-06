@extends('layouts.app');

@section('content')

    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
    </div>
    
    <div class="card">
        <div class="card-header">Categories</div>
        <div class="card-body">
            @if($categories->count() > 0)
            <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Posts Count</th>
                        <th>Actions</th>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>

                                <td>{{$category->posts->count()}}</td>
                               
                                <td>
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-small">Edit</a>
                                    <button class="btn btn-danger" onclick="handleDelete({{$category->id}})">Delete</button>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No Categories Yet</h3>
            @endif

                 <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                   <form action="" method="POST" id="deleteCategoryForm">
                        @csrf
                        @method('DELETE')
                      

                        <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModal">Delete Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center text-bold">
                                        Tem certeza que deseja excluir esta Categoria ?
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                </div>
                                </div>
                   </form>
                </div>
                </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id){
            var form = document.getElementById('deleteCategoryForm')
            form.action = '/cms/public/categories/' + id
            $('#deleteModal').modal('show')
        }
    </script>
@endsection