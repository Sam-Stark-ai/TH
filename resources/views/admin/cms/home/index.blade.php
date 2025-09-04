@extends('layouts.app.master')

@section('title', 'Dashboard')

@section('css')
@endsection

@section('content')

     <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Website Sections Management</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">CMS</li>
                    <li class="breadcrumb-item active">Website Sections</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Update All Website Sections</h5>
                  </div>
                  <div class="card-body add-post">
                    <form class="row g-3" method="POST" action="{{ route('admin.website.sections.update') }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="debug_log" value="1">

                      <!-- Hero Section -->
                      <div class="col-sm-12">
                        <h3>Hero Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="hero_heading">Heading:</label>
                          <input class="form-control" id="hero_heading" name="hero_heading" type="text" value="{{ old('hero_heading', $hero->hero_heading ?? '') }}" placeholder="Hero Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="hero_subheading">Sub heading:</label>
                          <input class="form-control" id="hero_subheading" name="hero_subheading" type="text" value="{{ old('hero_subheading', $hero->hero_subheading ?? '') }}" placeholder="Hero Sub Heading">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="hero_button1_text">Button 1 Text:</label>
                              <input class="form-control" id="hero_button1_text" name="hero_button1_text" type="text" value="{{ old('hero_button1_text', $hero->hero_button1_text ?? '') }}" placeholder="Button 1 Text">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="hero_button1_link">Button 1 Link:</label>
                              <input class="form-control" id="hero_button1_link" name="hero_button1_link" type="text" value="{{ old('hero_button1_link', $hero->hero_button1_link ?? '') }}" placeholder="Button 1 Link">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="hero_button2_text">Button 2 Text:</label>
                              <input class="form-control" id="hero_button2_text" name="hero_button2_text" type="text" value="{{ old('hero_button2_text', $hero->hero_button2_text ?? '') }}" placeholder="Button 2 Text">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="hero_button2_link">Button 2 Link:</label>
                              <input class="form-control" id="hero_button2_link" name="hero_button2_link" type="text" value="{{ old('hero_button2_link', $hero->hero_button2_link ?? '') }}" placeholder="Button 2 Link">
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="hero_image">Image:</label>
                          <input class="form-control" id="hero_image" name="hero_image" type="file">
                          @if (!empty($hero->hero_image))
                            <div class="mt-2"><img src="{{ asset($hero->hero_image) }}" alt="Current Hero Image" style="max-width: 200px;"></div>
                          @endif
                        </div>
                      </div>

                      <!-- Feature Section -->
                      <div class="col-sm-12">
                        <h3>Feature Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="feature_badge">Badge:</label>
                          <input class="form-control" id="feature_badge" name="feature_badge" type="text" value="{{ old('feature_badge', $feature->feature_badge ?? '') }}" placeholder="Feature Badge">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="feature_heading">Heading:</label>
                          <input class="form-control" id="feature_heading" name="feature_heading" type="text" value="{{ old('feature_heading', $feature->feature_heading ?? '') }}" placeholder="Feature Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="feature_subheading">Subheading:</label>
                          <input class="form-control" id="feature_subheading" name="feature_subheading" type="text" value="{{ old('feature_subheading', $feature->feature_subheading ?? '') }}" placeholder="Feature Subheading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="feature_image">Image:</label>
                          <input class="form-control" id="feature_image" name="feature_image" type="file">
                          @if (!empty($feature->feature_image))
                            <div class="mt-2"><img src="{{ asset($feature->feature_image) }}" alt="Current Feature Image" style="max-width: 200px;"></div>
                          @endif
                        </div>
                      </div>

                      <!-- Tetherheart Section -->
                      <div class="col-sm-12">
                        <h3>Tetherheart Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="tetherheart_title_badge">Title Badge:</label>
                          <input class="form-control" id="tetherheart_title_badge" name="tetherheart_title_badge" type="text" value="{{ old('tetherheart_title_badge', $tetherheart->tetherheart_title_badge ?? '') }}" placeholder="Title Badge">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="tetherheart_heading">Heading:</label>
                          <input class="form-control" id="tetherheart_heading" name="tetherheart_heading" type="text" value="{{ old('tetherheart_heading', $tetherheart->tetherheart_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="tetherheart_description">Description:</label>
                          <textarea id="tetherheart_description" name="tetherheart_description" class="form-control ckeditor" rows="6">{{ old('tetherheart_description', $tetherheart->tetherheart_description ?? '') }}</textarea>
                        </div>
                      </div>

                      <!-- Download Section -->
                      <div class="col-sm-12">
                        <h3>Download Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="download_heading">Heading:</label>
                          <input class="form-control" id="download_heading" name="download_heading" type="text" value="{{ old('download_heading', $download->download_heading ?? '') }}" placeholder="Download Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="download_subject">Subject:</label>
                          <input class="form-control" id="download_subject" name="download_subject" type="text" value="{{ old('download_subject', $download->download_subject ?? '') }}" placeholder="Download Subject">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="app_store_link">App Store Link:</label>
                          <input class="form-control" id="app_store_link" name="app_store_link" type="text" value="{{ old('app_store_link', $download->app_store_link ?? '') }}" placeholder="App Store Link">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="play_store_link">Play Store Link:</label>
                          <input class="form-control" id="play_store_link" name="play_store_link" type="text" value="{{ old('play_store_link', $download->play_store_link ?? '') }}" placeholder="Play Store Link">
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="mb-3 mt-3">
                              <label for="download_image_1">Image 1:</label>
                              <input class="form-control" id="download_image_1" name="download_image_1" type="file">
                              @if (!empty($download->download_image_1))
                                <div class="mt-2"><img src="{{ asset($download->download_image_1) }}" alt="Download Image 1" style="max-width: 150px;"></div>
                              @endif
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mb-3 mt-3">
                              <label for="download_image_2">Image 2:</label>
                              <input class="form-control" id="download_image_2" name="download_image_2" type="file">
                              @if (!empty($download->download_image_2))
                                <div class="mt-2"><img src="{{ asset($download->download_image_2) }}" alt="Download Image 2" style="max-width: 150px;"></div>
                              @endif
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mb-3 mt-3">
                              <label for="download_image_3">Image 3:</label>
                              <input class="form-control" id="download_image_3" name="download_image_3" type="file">
                              @if (!empty($download->download_image_3))
                                <div class="mt-2"><img src="{{ asset($download->download_image_3) }}" alt="Download Image 3" style="max-width: 150px;"></div>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Productivity Section -->
                      <div class="col-sm-12">
                        <h3>Productivity Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="productivity_tab_title">Tab Title:</label>
                          <input class="form-control" id="productivity_tab_title" name="productivity_tab_title" type="text" value="{{ old('productivity_tab_title', $productivity->productivity_tab_title ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="productivity_heading">Heading:</label>
                          <input class="form-control" id="productivity_heading" name="productivity_heading" type="text" value="{{ old('productivity_heading', $productivity->productivity_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="productivity_subheading">Subheading:</label>
                          <input class="form-control" id="productivity_subheading" name="productivity_subheading" type="text" value="{{ old('productivity_subheading', $productivity->productivity_subheading ?? '') }}" placeholder="Subheading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="productivity_image">Image:</label>
                          <input class="form-control" id="productivity_image" name="productivity_image" type="file">
                          @if (!empty($productivity->productivity_image))
                            <div class="mt-2"><img src="{{ asset($productivity->productivity_image) }}" alt="Productivity Image" style="max-width: 200px;"></div>
                          @endif
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_heading_1">Key Heading 1:</label>
                              <input class="form-control" id="productivity_k_heading_1" name="productivity_k_heading_1" type="text" value="{{ old('productivity_k_heading_1', $productivity->productivity_k_heading_1 ?? '') }}" placeholder="Key Heading 1">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_description_1">Key Description 1:</label>
                              <textarea id="productivity_k_description_1" name="productivity_k_description_1" class="form-control" rows="3">{{ old('productivity_k_description_1', $productivity->productivity_k_description_1 ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_heading_2">Key Heading 2:</label>
                              <input class="form-control" id="productivity_k_heading_2" name="productivity_k_heading_2" type="text" value="{{ old('productivity_k_heading_2', $productivity->productivity_k_heading_2 ?? '') }}" placeholder="Key Heading 2">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_description_2">Key Description 2:</label>
                              <textarea id="productivity_k_description_2" name="productivity_k_description_2" class="form-control" rows="3">{{ old('productivity_k_description_2', $productivity->productivity_k_description_2 ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_heading_3">Key Heading 3:</label>
                              <input class="form-control" id="productivity_k_heading_3" name="productivity_k_heading_3" type="text" value="{{ old('productivity_k_heading_3', $productivity->productivity_k_heading_3 ?? '') }}" placeholder="Key Heading 3">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_description_3">Key Description 3:</label>
                              <textarea id="productivity_k_description_3" name="productivity_k_description_3" class="form-control" rows="3">{{ old('productivity_k_description_3', $productivity->productivity_k_description_3 ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_heading_4">Key Heading 4:</label>
                              <input class="form-control" id="productivity_k_heading_4" name="productivity_k_heading_4" type="text" value="{{ old('productivity_k_heading_4', $productivity->productivity_k_heading_4 ?? '') }}" placeholder="Key Heading 4">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="productivity_k_description_4">Key Description 4:</label>
                              <textarea id="productivity_k_description_4" name="productivity_k_description_4" class="form-control" rows="3">{{ old('productivity_k_description_4', $productivity->productivity_k_description_4 ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Heart Ring Section -->
                      <div class="col-sm-12">
                        <h3>Heart Ring Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="heart_ring_tab_title">Tab Title:</label>
                          <input class="form-control" id="heart_ring_tab_title" name="heart_ring_tab_title" type="text" value="{{ old('heart_ring_tab_title', $heartRing->heart_ring_tab_title ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="heart_ring_heading">Heading:</label>
                          <input class="form-control" id="heart_ring_heading" name="heart_ring_heading" type="text" value="{{ old('heart_ring_heading', $heartRing->heart_ring_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="heart_ring_description">Description:</label>
                          <textarea id="heart_ring_description" name="heart_ring_description" class="form-control ckeditor" rows="6">{{ old('heart_ring_description', $heartRing->heart_ring_description ?? '') }}</textarea>
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="heart_ring_button">Button:</label>
                          <input class="form-control" id="heart_ring_button" name="heart_ring_button" type="text" value="{{ old('heart_ring_button', $heartRing->heart_ring_button ?? '') }}" placeholder="Button Text">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="heart_ring_image_1">Image 1:</label>
                              <input class="form-control" id="heart_ring_image_1" name="heart_ring_image_1" type="file">
                              @if (!empty($heartRing->heart_ring_image_1))
                                <div class="mt-2"><img src="{{ asset($heartRing->heart_ring_image_1) }}" alt="Heart Ring Image 1" style="max-width: 150px;"></div>
                              @endif
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="heart_ring_image_2">Image 2:</label>
                              <input class="form-control" id="heart_ring_image_2" name="heart_ring_image_2" type="file">
                              @if (!empty($heartRing->heart_ring_image_2))
                                <div class="mt-2"><img src="{{ asset($heartRing->heart_ring_image_2) }}" alt="Heart Ring Image 2" style="max-width: 150px;"></div>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>


                                <!-- Contact Form Section -->
                      <div class="col-sm-12">
                        <h3>Contact Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="contact_sections_tab_title">Tab Title:</label>
                          <input class="form-control" id="contact_sections_tab_title" name="contact_sections_tab_title" type="text" value="{{ old('contact_sections_tab_title', $contactSection->contact_sections_tab_title ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="contact_sections_heading">Heading:</label>
                          <input class="form-control" id="contact_sections_heading" name="contact_sections_heading" type="text" value="{{ old('contact_sections_heading', $contactSection->contact_sections_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="contact_sections_description">Description:</label>
                          <textarea id="contact_sections_description" name="contact_sections_description" class="form-control ckeditor" rows="6">{{ old('contact_sections_description', $contactSection->contact_sections_description ?? '') }}</textarea>
                        </div>

                        <div class="row">
                          <div class="col-lg-3">
                            <div class="mb-3 mt-3">
                          <label for="contact_sections_social1">Facebook:</label>
                            <input class="form-control" id="contact_sections_social1" name="contact_sections_social1" type="text" value="{{ old('contact_sections_social1', $contactSection->contact_sections_social1 ?? '') }}" placeholder="Link">

                        </div>
                          </div>
                          <div class="col-lg-3">
                             <div class="mb-3 mt-3">
                          <label for="contact_sections_social2">Twitter:</label>
                            <input class="form-control" id="contact_sections_social2" name="contact_sections_social2" type="text" value="{{ old('contact_sections_social2', $contactSection->contact_sections_social2 ?? '') }}" placeholder="Link">
                        </div>
                          </div>

                         <div class="col-lg-3">
                            <div class="mb-3 mt-3">
                          <label for="contact_sections_social3">Instagram:</label>
                            <input class="form-control" id="contact_sections_social3" name="contact_sections_social3" type="text" value="{{ old('contact_sections_social3', $contactSection->contact_sections_social3 ?? '') }}" placeholder="Link">
                        </div>
                          </div>
                          <div class="col-lg-3">
                             <div class="mb-3 mt-3">
                          <label for="contact_sections_social4">LinkedIn:</label>
                            <input class="form-control" id="contact_sections_social4" name="contact_sections_social4" type="text" value="{{ old('contact_sections_social4', $contactSection->contact_sections_social4 ?? '') }}" placeholder="Link">
                        </div>
                          </div>
                        </div>

                             <div class="mb-3 mt-3">
                          <label for="contact_sections_point1">Point 1:</label>
                          <input class="form-control" id="contact_sections_point1" name="contact_sections_point1" type="text" value="{{ old('contact_sections_point1', $contactSection->contact_sections_point1 ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="contact_sections_point2">Point 2:</label>
                          <input class="form-control" id="contact_sections_point2" name="contact_sections_point2" type="text" value="{{ old('contact_sections_point2', $contactSection->contact_sections_point2 ?? '') }}" placeholder="Heading">
                        </div>
  <div class="mb-3 mt-3">
                          <label for="contact_sections_point3">Point 3:</label>
                          <input class="form-control" id="contact_sections_point3" name="contact_sections_point3" type="text" value="{{ old('contact_sections_point3', $contactSection->contact_sections_point3 ?? '') }}" placeholder="Heading">
                        </div>

                      </div>

                      <!-- Connection Section -->
                      <div class="col-sm-12">
                        <h3>Connection Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="connection_heading">Heading:</label>
                          <input class="form-control" id="connection_heading" name="connection_heading" type="text" value="{{ old('connection_heading', $connection->connection_heading ?? '') }}" placeholder="Connection Heading">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_card_1_h">Card 1 Heading:</label>
                              <input class="form-control" id="connection_card_1_h" name="connection_card_1_h" type="text" value="{{ old('connection_card_1_h', $connection->connection_card_1_h ?? '') }}" placeholder="Card 1 Heading">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_card_1_p">Card 1 Paragraph:</label>
                              <textarea id="connection_card_1_p" name="connection_card_1_p" class="form-control" rows="3">{{ old('connection_card_1_p', $connection->connection_card_1_p ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_card_2_h">Card 2 Heading:</label>
                              <input class="form-control" id="connection_card_2_h" name="connection_card_2_h" type="text" value="{{ old('connection_card_2_h', $connection->connection_card_2_h ?? '') }}" placeholder="Card 2 Heading">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_card_2_p">Card 2 Paragraph:</label>
                              <textarea id="connection_card_2_p" name="connection_card_2_p" class="form-control" rows="3">{{ old('connection_card_2_p', $connection->connection_card_2_p ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_card_3_h">Card 3 Heading:</label>
                              <input class="form-control" id="connection_card_3_h" name="connection_card_3_h" type="text" value="{{ old('connection_card_3_h', $connection->connection_card_3_h ?? '') }}" placeholder="Card 3 Heading">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_card_3_p">Card 3 Paragraph:</label>
                              <textarea id="connection_card_3_p" name="connection_card_3_p" class="form-control" rows="3">{{ old('connection_card_3_p', $connection->connection_card_3_p ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_main_card_h">Main Card Heading:</label>
                              <input class="form-control" id="connection_main_card_h" name="connection_main_card_h" type="text" value="{{ old('connection_main_card_h', $connection->connection_main_card_h ?? '') }}" placeholder="Main Card Heading">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="connection_main_card_p1">Main Card Paragraph 1:</label>
                              <textarea id="connection_main_card_p1" name="connection_main_card_p1" class="form-control" rows="3">{{ old('connection_main_card_p1', $connection->connection_main_card_p1 ?? '') }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="connection_main_card_p2">Main Card Paragraph 2:</label>
                          <textarea id="connection_main_card_p2" name="connection_main_card_p2" class="form-control" rows="3">{{ old('connection_main_card_p2', $connection->connection_main_card_p2 ?? '') }}</textarea>
                        </div>
                      </div>

                      <!-- Blend Section -->
                      <div class="col-sm-12">
                        <h3>Blend Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="blend_tab_title">Tab Title:</label>
                          <input class="form-control" id="blend_tab_title" name="blend_tab_title" type="text" value="{{ old('blend_tab_title', $blend->blend_tab_title ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="blend_heading">Heading:</label>
                          <input class="form-control" id="blend_heading" name="blend_heading" type="text" value="{{ old('blend_heading', $blend->blend_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="blend_button_title">Button Title:</label>
                          <input class="form-control" id="blend_button_title" name="blend_button_title" type="text" value="{{ old('blend_button_title', $blend->blend_button_title ?? '') }}" placeholder="Button Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="blend_image">Image:</label>
                          <input class="form-control" id="blend_image" name="blend_image" type="file">
                          @if (!empty($blend->blend_image))
                            <div class="mt-2"><img src="{{ asset($blend->blend_image) }}" alt="Blend Image" style="max-width: 200px;"></div>
                          @endif
                        </div>
                      </div>

                      <!-- Wellness Section -->
                      <div class="col-sm-12">
                        <h3>Wellness Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="wellness_tab_title">Tab Title:</label>
                          <input class="form-control" id="wellness_tab_title" name="wellness_tab_title" type="text" value="{{ old('wellness_tab_title', $wellness->wellness_tab_title ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="wellness_heading">Heading:</label>
                          <input class="form-control" id="wellness_heading" name="wellness_heading" type="text" value="{{ old('wellness_heading', $wellness->wellness_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="wellness_subheading">Subheading:</label>
                          <input class="form-control" id="wellness_subheading" name="wellness_subheading" type="text" value="{{ old('wellness_subheading', $wellness->wellness_subheading ?? '') }}" placeholder="Subheading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="wellness_card_text">Card Text:</label>
                          <textarea id="wellness_card_text" name="wellness_card_text" class="form-control ckeditor" rows="6">{{ old('wellness_card_text', $wellness->wellness_card_text ?? '') }}</textarea>
                        </div>
                      </div>

                      <!-- Tether Card Section -->
                      <div class="col-sm-12">
                        <h3>Tether Card Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="tether_card_heading">Heading:</label>
                          <input class="form-control" id="tether_card_heading" name="tether_card_heading" type="text" value="{{ old('tether_card_heading', $tetherCard->tether_card_heading ?? '') }}" placeholder="Tether Card Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="tether_card_subheading">Subheading:</label>
                          <input class="form-control" id="tether_card_subheading" name="tether_card_subheading" type="text" value="{{ old('tether_card_subheading', $tetherCard->tether_card_subheading ?? '') }}" placeholder="Tether Card Subheading">
                        </div>
                      </div>

                      <!-- New Feature Section -->
                      <div class="col-sm-12">
                        <h3>New Feature Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="new_feature_title_badge">Title Badge:</label>
                          <input class="form-control" id="new_feature_title_badge" name="new_feature_title_badge" type="text" value="{{ old('new_feature_title_badge', $newFeature->new_feature_title_badge ?? '') }}" placeholder="Title Badge">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="new_feature_heading">Heading:</label>
                          <input class="form-control" id="new_feature_heading" name="new_feature_heading" type="text" value="{{ old('new_feature_heading', $newFeature->new_feature_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="new_feature_subheading">Subheading:</label>
                          <input class="form-control" id="new_feature_subheading" name="new_feature_subheading" type="text" value="{{ old('new_feature_subheading', $newFeature->new_feature_subheading ?? '') }}" placeholder="Subheading">
                        </div>
                      </div>

                      <!-- Relationship Section -->
                      <div class="col-sm-12">
                        <h3>Relationship Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="relationship_tab_title">Tab Title:</label>
                          <input class="form-control" id="relationship_tab_title" name="relationship_tab_title" type="text" value="{{ old('relationship_tab_title', $relationship->relationship_tab_title ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="relationship_heading">Heading:</label>
                          <input class="form-control" id="relationship_heading" name="relationship_heading" type="text" value="{{ old('relationship_heading', $relationship->relationship_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="relationship_subheading">Subheading:</label>
                          <input class="form-control" id="relationship_subheading" name="relationship_subheading" type="text" value="{{ old('relationship_subheading', $relationship->relationship_subheading ?? '') }}" placeholder="Subheading">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="relationship_ios_link">iOS Link:</label>
                              <input class="form-control" id="relationship_ios_link" name="relationship_ios_link" type="text" value="{{ old('relationship_ios_link', $relationship->relationship_ios_link ?? '') }}" placeholder="iOS Link">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="relationship_android_link">Android Link:</label>
                              <input class="form-control" id="relationship_android_link" name="relationship_android_link" type="text" value="{{ old('relationship_android_link', $relationship->relationship_android_link ?? '') }}" placeholder="Android Link">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Border Section -->
                      <div class="col-sm-12">
                        <h3>Border Section</h3>
                        <div class="mb-3 mt-3">
                          <label for="border_tab_title">Tab Title:</label>
                          <input class="form-control" id="border_tab_title" name="border_tab_title" type="text" value="{{ old('border_tab_title', $border->border_tab_title ?? '') }}" placeholder="Tab Title">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="border_heading">Heading:</label>
                          <input class="form-control" id="border_heading" name="border_heading" type="text" value="{{ old('border_heading', $border->border_heading ?? '') }}" placeholder="Heading">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="border_subheading">Subheading:</label>
                          <input class="form-control" id="border_subheading" name="border_subheading" type="text" value="{{ old('border_subheading', $border->border_subheading ?? '') }}" placeholder="Subheading">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="border_north_america">North America:</label>
                              <input class="form-control" id="border_north_america" name="border_north_america" type="text" value="{{ old('border_north_america', $border->border_north_america ?? '') }}" placeholder="North America">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="border_south_america">South America:</label>
                              <input class="form-control" id="border_south_america" name="border_south_america" type="text" value="{{ old('border_south_america', $border->border_south_america ?? '') }}" placeholder="South America">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="border_africa">Africa:</label>
                              <input class="form-control" id="border_africa" name="border_africa" type="text" value="{{ old('border_africa', $border->border_africa ?? '') }}" placeholder="Africa">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="border_north_europe">North Europe:</label>
                              <input class="form-control" id="border_north_europe" name="border_north_europe" type="text" value="{{ old('border_north_europe', $border->border_north_europe ?? '') }}" placeholder="North Europe">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="border_asia">Asia:</label>
                              <input class="form-control" id="border_asia" name="border_asia" type="text" value="{{ old('border_asia', $border->border_asia ?? '') }}" placeholder="Asia">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3 mt-3">
                              <label for="border_australia">Australia:</label>
                              <input class="form-control" id="border_australia" name="border_australia" type="text" value="{{ old('border_australia', $border->border_australia ?? '') }}" placeholder="Australia">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="common-flex justify-content-end mt-3">
                        <button class="btn btn-primary" type="submit">Update All Sections</button>
                        <input class="btn btn-secondary" type="reset" value="Discard">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js" integrity="sha512-OF6VwfoBrM/wE3gt0I/lTh1ElROdq3etwAquhEm2YI45Um4ird+0ZFX1IwuBDBRufdXBuYoBb0mqXrmUA2VnOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.ckeditor').forEach(function (el) {
      CKEDITOR.replace(el, {
        toolbar: [
          { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
          { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
          { name: 'styles', items: ['Format', 'FontSize'] },
          { name: 'links', items: ['Link', 'Unlink'] }
        ],
        removePlugins: 'elementspath',
        resize_enabled: false
      });
    });
  });
</script>
@endsection

