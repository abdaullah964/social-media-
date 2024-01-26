@extends('frontend.main_master')
@section('header')
@include('frontend.body.header')
@endsection

@section('bodyhead')
<section>
    <div class="feature-photo">
        <figure><img src="{{asset('frontend/assets/images/resources/timeline-1.jpg')}}" alt=""></figure>
        <div class="add-btn">
            <a href="#" title="" data-ripple="">JOIN GROUP</a>
        </div>
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
            <input type="file"/>
            </label>
        </form>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="{{asset('frontend/assets/images/resources/ahmad.jpg')}}" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input type="file"/>
                                </label>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                              <h5>Ahmad Zytoon</h5>
                              <span>Group Admin</span>
                            </li>
                            <li>
                                <a class="active" href="time-line.html" title="" data-ripple="">time line</a>
                                <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@section('body')
<div class="gap gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="page-contents">
@include('frontend.body.rightsidebar')
<form action="{{ route('group.store') }}" method="post"  enctype="multipart/form-data">
    @csrf
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="groupDescription">Group Name</label>
        <input name="name" style="background-color: white" id="groupDescription" rows="3" placeholder="Enter group name">
      </div>
      <div class="form-group col-md-6">
        <label for="groupDescription">image:</label>
        <input type="file" name="image" style="background-color: white" id="groupDescription" rows="3" placeholder="Enter group description">
      </div>
      <div class="form-group col-md-6">
        <label for="groupDescription">Group Description:</label>
        <textarea name="description" style="background-color: white" id="groupDescription" rows="3" placeholder="Enter group description"></textarea>
      </div>

    </div>


    <button type="submit" class="btn btn-primary">Create</button>
</form>

@include('frontend.body.liftsidebar')
</div>
</div>
</div>
</div>
</div>
@endsection

@endsection

@section('footer')
@include('frontend.body.footer')
@endsection
