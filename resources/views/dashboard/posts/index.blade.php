@extends('layouts.dashboardlayout')
@section('content')
<div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="col-lg-6 m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Posts Table
                    </h3>
                </div>

                <div class="col-lg-6 m--align-right">
                    <button class="btn m-btn--pill m-btn m-btn--gradient-from-primary m-btn--gradient-to-info" style="float:left">
                        <a style="color:white" href="{{route('Posts.create')}}">
                            Add New Post
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
                        <th>#</th>
                        <th>Post Title</th>
                        <th>Post Category</th>
                        <th>Post Descripition</th>
                        <th>Post Content</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}} </td>
                            <td>{{$post->category->title}}</td>
                            <td>{{$post->desc}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <div class="col-md-12">
                                    <a  href="{{url('dashboard/Posts/')}}/{{$post->id}}/edit" class="btn btn-icon-only blue">
                                        Edit <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <form method="POST" action="{{url('dashboard/Posts/')}}/{{$post->id}}">
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
            {{ $posts->links()}}
        </div>
    </div>
@endsection
