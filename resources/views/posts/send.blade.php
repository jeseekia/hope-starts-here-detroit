@extends('layout')

@section('content')
<!-- Form needs to be updated -->
<div class="panel panel-default">
  <div class="panel-body">
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="subtitle">Subtitle</label>
        <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Subtitle">
      </div>
      <div class="form-group">
        <label for="slug">Slug</label>
        <input name="slug" type="text" class="form-control" id="slug" placeholder="Unique slug">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" rows="8" class="form-control" id="body" placeholder="Body"></textarea>
      </div>
      <div class="form-group">
        <label for="thumbnail">Image</label>
        <input name="thumbnail" type="file" id="thumbnail">
        <p class="help-block">Image</p>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="draft" id="yes" value="1" checked>
          Draft
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="draft" id="no" value="0">
          Not a Draft
        </label>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
</div>

@stop
