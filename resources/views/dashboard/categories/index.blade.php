@extends('layouts.dashboardlayout')
@section('content')
<div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Categories Table
                    </h3>
                </div>
                <div class="col-lg-6 m--align-right">
                    <button  class="btn m-btn--pill m-btn m-btn--gradient-from-primary m-btn--gradient-to-info" style="float:left">
                        <a style="color:white" href="{{route('Categories.create')}}">
                            Add New Category
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Title</th>
                        <th>Category Description</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->desc}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>
                                <div class="col-md-12">
                                    <a  href="{{url('dashboard/Categories/')}}/{{$category->id}}/edit" class="btn btn-icon-only blue">
                                        Edit <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <form method="POST" action="{{url('dashboard/Categories/')}}/{{$category->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                            Delete <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links()}}
        </div>
    </div>
@endsection
