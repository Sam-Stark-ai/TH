@extends('layouts.app.master')

@section('title', 'Edit Ring')

@section('css')
@endsection

@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Edit Ring</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
              <svg class="stroke-icon">
                <use href="{{ asset('AdminAssets/svg/icon-sprite.svg#stroke-home') }}"></use>
              </svg></a>
            </li>
            <li class="breadcrumb-item">CMS</li>
            <li class="breadcrumb-item active">Edit Ring</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5>Edit Ring Form</h5>
          </div>
          <div class="card-body">
            <form class="row g-3 common-form" method="POST" action="{{ route('admin.ring.update', $ring->id) }}">
              @csrf
              @method('PUT')

              <div class="col-md-12">
                <label class="form-label">Ring Icon</label>
                <input class="form-control" name="icon" type="text" value="{{ old('icon', $ring->icon) }}">
              </div>

              <div class="col-md-12">
                <label class="form-label">Ring Title</label>
                <input class="form-control" name="title" type="text" value="{{ old('title', $ring->title) }}">
              </div>

              <div class="col-md-12">
                <label class="form-label">Ring Rings Count</label>
                <input class="form-control" name="rings_count" type="text" value="{{ old('rings_count', $ring->rings_count) }}">
              </div>

                      <div class="col-md-12">
                <label class="form-label">Ring Couples Connected</label>
                <input class="form-control" name="couples_connected" type="text" value="{{ old('couples_connected', $ring->couples_connected) }}">
              </div>

              <div class="col-md-12">
                <label class="form-label">Price</label>
                <input class="form-control" name="price" type="text" value="{{ old('price', $ring->price) }}">
              </div>

              <div class="col-md-12">
                <label class="form-label">Ring Description</label>
                <textarea id="gift_description" name="description" class="form-control" rows="6">{{ old('description', $ring->description) }}</textarea>
              </div>

              <div class="col-md-12">
                <label class="form-label">Includes</label>
                <div id="includes-wrapper">
                  @php
                    $includes = json_decode($ring->includes, true) ?? [];
                  @endphp
                  @foreach($includes as $include)
                    <div class="input-group mb-2">
                      <input type="text" name="includes[]" class="form-control" value="{{ $include }}" placeholder="Enter included item">
                      <button type="button" class="btn btn-danger remove-include">Remove</button>
                    </div>
                  @endforeach
                </div>
                <button type="button" class="btn btn-success mt-2" id="add-include">Add More</button>
              </div>

              <div class="col-md-6 mt-3">
                <button class="btn btn-primary f-w-500" type="submit">Update Ring</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js" integrity="sha512-OF6VwfoBrM/wE3gt0I/lTh1ElROdq3etwAquhEm2YI45Um4ird+0ZFX1IwuBDBRufdXBuYoBb0mqXrmUA2VnOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    CKEDITOR.replace('gift_description', {
      toolbar: [
        { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
        { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
        { name: 'styles', items: ['Format', 'FontSize'] },
        { name: 'links', items: ['Link', 'Unlink'] }
      ],
      removePlugins: 'elementspath',
      resize_enabled: false
    });

    const addIncludeBtn = document.getElementById('add-include');
    const includesWrapper = document.getElementById('includes-wrapper');

    addIncludeBtn.addEventListener('click', function () {
      const newInputGroup = document.createElement('div');
      newInputGroup.classList.add('input-group', 'mb-2');
      newInputGroup.innerHTML = `
        <input type="text" name="includes[]" class="form-control" placeholder="Enter included item">
        <button type="button" class="btn btn-danger remove-include">Remove</button>
      `;
      includesWrapper.appendChild(newInputGroup);
    });

    includesWrapper.addEventListener('click', function (e) {
      if (e.target && e.target.classList.contains('remove-include')) {
        e.target.closest('.input-group').remove();
      }
    });
  });
</script>
@endsection
