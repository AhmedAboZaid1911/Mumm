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
						Edit {{$post->title}}
					</h3>
				</div>
			</div>
		</div>
		<!--begin::Form-->
        <form method="POST" action="{{url('dashboard/Posts/')}}/{{$post->id}}" enctype="multipart/form-data" class="m-form">
            @method('PATCH')
            @csrf
			<div class="m-portlet__body">
				<div class="m-form__section m-form__section--first">
					<div class="form-group m-form__group">
                        <label>Category:</label>
    					<Select name="category_id" class="form-control m-select">
                            @foreach (\App\Categories::all() as $cat)
                                <option value="{{$cat->id}}">
                                    {{$cat->title}}
                                </option>
                            @endforeach
                        </Select>
						<span class="m-form__help">Please Select Post Category</span>
					</div>
					<div class="form-group m-form__group">
						<label>Title:</label>
						<input name="title" type="text" class="form-control m-input"  value="{{$post->title}}" placeholder="Post Title">
						<span class="m-form__help">Please enter Post Title</span>
					</div>
					<div class="form-group m-form__group">
						<label>Description:</label>
						<input type="text" name="desc" class="form-control m-input" value="{{$post->desc}}" placeholder="Description">
						<span class="m-form__help">Please enter Description</span>
					</div>
					<div class="form-group m-form__group">
						<label>Content:</label>
						<textarea name="content" class="form-control m-input"  placeholder="Content"> {{$post->content}} </textarea>
						<span class="m-form__help">Please enter Content</span>
					</div>

				</div>
			</div>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions m-form__actions">
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</div>
		</form>
		<!--end::Form-->
	</div>
@endsection
