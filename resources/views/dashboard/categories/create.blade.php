@extends('layouts.dashboardlayout')
@section('content')
    <!--begin::Portlet-->
	<div class="m-portlet">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
					</span>
					<h3 class="m-portlet__head-text">
						Adding A New Category
					</h3>
				</div>
			</div>
		</div>
		<!--begin::Form-->
        <form method="POST" action="{{route('Categories.store')}}" enctype="multipart/form-data" class="m-form">
            @csrf
			<div class="m-portlet__body">
				<div class="m-form__section m-form__section--first">
					<div class="form-group m-form__group">
						<label>Title:</label>
						<input name="title" type="text" class="form-control m-input"  value="{{ old('title') }}" placeholder="Category Title">
						<span class="m-form__help">Please enter Category Title</span>
					</div>
					<div class="form-group m-form__group">
						<label>Description:</label>
						<input type="text" name="desc" class="form-control m-input" value="{{ old('desc') }}" placeholder="Description">
						<span class="m-form__help">Please enter Description</span>
					</div>

				</div>
			</div>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions m-form__actions">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
		<!--end::Form-->
	</div>
@endsection
