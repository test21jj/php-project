@extends('admin.dashboard')
@section('DynamicContent')


<div class='card'>
	<div class='card-header'><br><br><br>
		<h3 class="text-dark">Meals Table</h3>

        <div class="row">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
	</div>

	<div class='card-body'>

        <div class="row justfy-content-center my-3">
            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">Add New Meal</a>
        </div>


		<div class="row">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Meals Name</th>
                    <th>Meals Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>bergur</td>
                    <td>it's small food and good</td>
                </tr>
            </tbody>
        </table>

		</div>
	</div>

</div>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Meal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('Meals.store') }}" method='post'>
        @csrf
      <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <lable class="form-lable">MealName</lable>
                <input type="text" class='form-control' name="MealName">
            </div>
            <div class="col-6">
                <lable class="form-lable">MealDesc</lable>
                <textarea id="" cols="30" class='form-control' name="MealDesc"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Meal</button>
      </div></form>
    </div>
  </div>
</div>

@endsection