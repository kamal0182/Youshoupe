@extends('layouts.main')
@section('contenu')

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Open Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Enter Name and Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                    <!-- Form inside modal -->
                    <form id="nameDescriptionForm" method="post">
                        @CSRF
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Title</label>
                            <input type="text" class="form-control" id="nameInput" name="title" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">Description</label>
                            <textarea class="form-control" id="descriptionInput" name="description" rows="3" placeholder="Enter description" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="nameDescriptionForm">Save</button>
                </div>
            </div>
        </div>
    </div>


        <!-- Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                @foreach($categories as $categorie)
                <tr>
                    <td>
                        {{$categorie->title}}
                    </td>
                    <td>{{$categorie->description}}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="update({{$categorie->id}}, {{$categorie->title}},{{$categorie->description}})">Edit</button>
                        <!-- Button to open the modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nameDescriptionModal">
  Open Name and Description Modal
</button>


                        <form action="/admin/delete/{{$categorie->id}}" >
                        @CSRF
                            <input type="hidden" name="" value="{{$categorie->id}}" id="">
                            <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Modal -->
<div class="modal fade" id="nameDescriptionModal" tabindex="-1" aria-labelledby="nameDescriptionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameDescriptionModalLabel">Enter Name and Description</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form inside modal -->
        <form id="nameDescriptionForm" method="post">
            <!-- @method('put') -->
          @csrf <!-- CSRF token for security if needed in Laravel -->
          <div class="mb-3">
            <label for="nameInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="nameInput" name="title" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="descriptionInput" class="form-label">Description</label>
            <textarea class="form-control" id="descriptionInput" name="description" rows="3" placeholder="Enter description" required></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="nameDescriptionForm">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

        <script>
            // update($id , name , description) {

            // }
        </script>

@endsection
