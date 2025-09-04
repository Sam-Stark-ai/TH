@extends('layouts.app.master')

@section('title', 'About Section Management')

@section('css')
@endsection

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>About Section Management</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">CMS</li>
                        <li class="breadcrumb-item active">About Section</li>
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
                        <h5>About Section Content</h5>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.about.update') }}">
                            @csrf
                            @method('PUT')

                            <!-- Main About Section -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h6 class="mb-3 text-primary">Main About Section</h6>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tab Title</label>
                                        <input type="text" class="form-control" name="tab_title" 
                                               value="{{ old('tab_title', $aboutSection->tab_title ?? '') }}" 
                                               placeholder="Enter tab title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Heading</label>
                                        <input type="text" class="form-control" name="heading" 
                                               value="{{ old('heading', $aboutSection->heading ?? '') }}" 
                                               placeholder="Enter heading">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Paragraph</label>
                                        <textarea class="form-control" name="paragraph" rows="4" 
                                                  placeholder="Enter paragraph content">{{ old('paragraph', $aboutSection->paragraph ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistics Section -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h6 class="mb-3 text-primary">Statistics</h6>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Users</label>
                                        <input type="text" class="form-control" name="user" 
                                               value="{{ old('user', $aboutSection->user ?? '') }}" 
                                               placeholder="e.g., 10K+">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Countries</label>
                                        <input type="text" class="form-control" name="countries" 
                                               value="{{ old('countries', $aboutSection->countries ?? '') }}" 
                                               placeholder="e.g., 50+">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Satisfaction</label>
                                        <input type="text" class="form-control" name="satisfaction" 
                                               value="{{ old('satisfaction', $aboutSection->satisfaction ?? '') }}" 
                                               placeholder="e.g., 98%">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Connections</label>
                                        <input type="text" class="form-control" name="connections" 
                                               value="{{ old('connections', $aboutSection->connections ?? '') }}" 
                                               placeholder="e.g., 1M+">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Growth</label>
                                        <input type="text" class="form-control" name="growth" 
                                               value="{{ old('growth', $aboutSection->growth ?? '') }}" 
                                               placeholder="e.g., 200%">
                                    </div>
                                </div>
                            </div>

                            <!-- Map Section -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h6 class="mb-3 text-primary">Map Section</h6>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Map Tab Title</label>
                                        <input type="text" class="form-control" name="map_tab_title" 
                                               value="{{ old('map_tab_title', $aboutSection->map_tab_title ?? '') }}" 
                                               placeholder="Enter map tab title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Map Heading</label>
                                        <input type="text" class="form-control" name="map_heading" 
                                               value="{{ old('map_heading', $aboutSection->map_heading ?? '') }}" 
                                               placeholder="Enter map heading">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Map Paragraph</label>
                                        <textarea class="form-control" name="map_paragraph" rows="4" 
                                                  placeholder="Enter map paragraph content">{{ old('map_paragraph', $aboutSection->map_paragraph ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save me-2"></i>Update About Section
                                    </button>
                                </div>
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
@endsection 