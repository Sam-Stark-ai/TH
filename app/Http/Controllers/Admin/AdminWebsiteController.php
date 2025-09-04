<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminWebsiteController extends Controller
{

  
    public function index()
    {
        $hero = \App\Models\HeroSection::first();
        $feature = \App\Models\FeatureSection::first();
        $tetherheart = \App\Models\TetherheartSection::first();
        $download = \App\Models\DownloadSection::first();
        $productivity = \App\Models\ProductivitySection::first();
        $heartRing = \App\Models\HeartRing::first();
        $contactSection = \App\Models\ContactSection::first();
        $connection = \App\Models\ConnectionSection::first();
        $blend = \App\Models\BlendSection::first();
        $wellness = \App\Models\WellnessSection::first();
        $tetherCard = \App\Models\TetherCardSection::first();
        $newFeature = \App\Models\NewFeatureSection::first();
        $relationship = \App\Models\RelationshipSection::first();
        $border = \App\Models\BorderSection::first();

        return view('admin.cms.home.index', compact(
            'hero', 'feature', 'tetherheart', 'download', 'productivity',
            'heartRing', 'connection', 'blend', 'wellness', 'tetherCard',
            'newFeature', 'relationship', 'border','contactSection'
        ));
    }

    /**
     * Update all homepage sections at once.
     */
    public function updateAllSections(\Illuminate\Http\Request $request)
    {
        \Log::info('updateAllSections called', ['request' => $request->except(['hero_image', 'feature_image', 'download_image_1', 'download_image_2', 'download_image_3', 'productivity_image', 'heart_ring_image_1', 'heart_ring_image_2', 'blend_image'])]);
        try {
            // Hero Section
            $hero = \App\Models\HeroSection::firstOrCreate([], []);
            $heroData = [
                'hero_heading' => $request->input('hero_heading'),
                'hero_subheading' => $request->input('hero_subheading'),
                'hero_button1_text' => $request->input('hero_button1_text'),
                'hero_button1_link' => $request->input('hero_button1_link'),
                'hero_button2_text' => $request->input('hero_button2_text'),
                'hero_button2_link' => $request->input('hero_button2_link'),
            ];
            if ($request->hasFile('hero_image')) {
                $image = $request->file('hero_image');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $heroData['hero_image'] = 'uploads/' . $imageName;
            }
            $hero->update($heroData);
            \Log::info('Hero section updated', ['hero' => $heroData]);

            // Feature Section
            $feature = \App\Models\FeatureSection::firstOrCreate([], []);
            $featureData = [
                'feature_badge' => $request->input('feature_badge'),
                'feature_heading' => $request->input('feature_heading'),
                'feature_subheading' => $request->input('feature_subheading'),
            ];
            if ($request->hasFile('feature_image')) {
                $image = $request->file('feature_image');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $featureData['feature_image'] = 'uploads/' . $imageName;
            }
            $feature->update($featureData);
            \Log::info('Feature section updated', ['feature' => $featureData]);

            // Tetherheart Section
            $tetherheart = \App\Models\TetherheartSection::firstOrCreate([], []);
            $tetherheart->update([
                'tetherheart_title_badge' => $request->input('tetherheart_title_badge'),
                'tetherheart_heading' => $request->input('tetherheart_heading'),
                'tetherheart_description' => $request->input('tetherheart_description'),
            ]);
            \Log::info('Tetherheart section updated', ['tetherheart' => $request->only(['tetherheart_title_badge', 'tetherheart_heading', 'tetherheart_description'])]);

            // Download Section
            $download = \App\Models\DownloadSection::firstOrCreate([], []);
            $downloadData = [
                'download_heading' => $request->input('download_heading'),
                'download_subject' => $request->input('download_subject'),
                'app_store_link' => $request->input('app_store_link'),
                'play_store_link' => $request->input('play_store_link'),
            ];
            if ($request->hasFile('download_image_1')) {
                $image = $request->file('download_image_1');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $downloadData['download_image_1'] = 'uploads/' . $imageName;
            }
            if ($request->hasFile('download_image_2')) {
                $image = $request->file('download_image_2');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $downloadData['download_image_2'] = 'uploads/' . $imageName;
            }
            if ($request->hasFile('download_image_3')) {
                $image = $request->file('download_image_3');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $downloadData['download_image_3'] = 'uploads/' . $imageName;
            }
            $download->update($downloadData);
            \Log::info('Download section updated', ['download' => $downloadData]);

            // Productivity Section
            $productivity = \App\Models\ProductivitySection::firstOrCreate([], []);
            $productivityData = [
                'productivity_tab_title' => $request->input('productivity_tab_title'),
                'productivity_heading' => $request->input('productivity_heading'),
                'productivity_subheading' => $request->input('productivity_subheading'),
                'productivity_k_heading_1' => $request->input('productivity_k_heading_1'),
                'productivity_k_description_1' => $request->input('productivity_k_description_1'),
                'productivity_k_heading_2' => $request->input('productivity_k_heading_2'),
                'productivity_k_description_2' => $request->input('productivity_k_description_2'),
                'productivity_k_heading_3' => $request->input('productivity_k_heading_3'),
                'productivity_k_description_3' => $request->input('productivity_k_description_3'),
                'productivity_k_heading_4' => $request->input('productivity_k_heading_4'),
                'productivity_k_description_4' => $request->input('productivity_k_description_4'),
            ];
            if ($request->hasFile('productivity_image')) {
                $image = $request->file('productivity_image');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $productivityData['productivity_image'] = 'uploads/' . $imageName;
            }
            $productivity->update($productivityData);
            \Log::info('Productivity section updated', ['productivity' => $productivityData]);

            // Heart Ring Section
            $heartRing = \App\Models\HeartRing::firstOrCreate([], []);
            $heartRingData = [
                'heart_ring_tab_title' => $request->input('heart_ring_tab_title'),
                'heart_ring_heading' => $request->input('heart_ring_heading'),
                'heart_ring_description' => $request->input('heart_ring_description'),
                'heart_ring_button' => $request->input('heart_ring_button'),
            ];
            if ($request->hasFile('heart_ring_image_1')) {
                $image = $request->file('heart_ring_image_1');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $heartRingData['heart_ring_image_1'] = 'uploads/' . $imageName;
            }
            if ($request->hasFile('heart_ring_image_2')) {
                $image = $request->file('heart_ring_image_2');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $heartRingData['heart_ring_image_2'] = 'uploads/' . $imageName;
            }
            $heartRing->update($heartRingData);
            \Log::info('Heart Ring section updated', ['heartRing' => $heartRingData]);


                      // Contact Section
            $contactsection = \App\Models\ContactSection::firstOrCreate([], []);
            $contactsectionData = [
                'contact_sections_tab_title' => $request->input('contact_sections_tab_title'),
                'contact_sections_heading' => $request->input('contact_sections_heading'),
                'contact_sections_description' => $request->input('contact_sections_description'),
                'contact_sections_social1' => $request->input('contact_sections_social1'),
                'contact_sections_social2' => $request->input('contact_sections_social2'),
                'contact_sections_social3' => $request->input('contact_sections_social3'),
                'contact_sections_social4' => $request->input('contact_sections_social4'),
                'contact_sections_point1' => $request->input('contact_sections_point1'),
                'contact_sections_point2' => $request->input('contact_sections_point2'),
                'contact_sections_point3' => $request->input('contact_sections_point3'),
            ];

            $contactsection->update($contactsectionData);
            \Log::info('Heart Ring section updated', ['contactsection' => $contactsectionData]);



            // Connection Section
            $connection = \App\Models\ConnectionSection::firstOrCreate([], []);
            $connection->update([
                'connection_heading' => $request->input('connection_heading'),
                'connection_card_1_h' => $request->input('connection_card_1_h'),
                'connection_card_1_p' => $request->input('connection_card_1_p'),
                'connection_card_2_h' => $request->input('connection_card_2_h'),
                'connection_card_2_p' => $request->input('connection_card_2_p'),
                'connection_card_3_h' => $request->input('connection_card_3_h'),
                'connection_card_3_p' => $request->input('connection_card_3_p'),
                'connection_main_card_h' => $request->input('connection_main_card_h'),
                'connection_main_card_p1' => $request->input('connection_main_card_p1'),
                'connection_main_card_p2' => $request->input('connection_main_card_p2'),
            ]);
            \Log::info('Connection section updated', ['connection' => $request->only(['connection_heading', 'connection_card_1_h', 'connection_card_1_p', 'connection_card_2_h', 'connection_card_2_p', 'connection_card_3_h', 'connection_card_3_p', 'connection_main_card_h', 'connection_main_card_p1', 'connection_main_card_p2'])]);

            // Blend Section
            $blend = \App\Models\BlendSection::firstOrCreate([], []);
            $blendData = [
                'blend_tab_title' => $request->input('blend_tab_title'),
                'blend_heading' => $request->input('blend_heading'),
                'blend_button_title' => $request->input('blend_button_title'),
            ];
            if ($request->hasFile('blend_image')) {
                $image = $request->file('blend_image');
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $blendData['blend_image'] = 'uploads/' . $imageName;
            }
            $blend->update($blendData);
            \Log::info('Blend section updated', ['blend' => $blendData]);

            // Wellness Section
            $wellness = \App\Models\WellnessSection::firstOrCreate([], []);
            $wellness->update([
                'wellness_tab_title' => $request->input('wellness_tab_title'),
                'wellness_heading' => $request->input('wellness_heading'),
                'wellness_subheading' => $request->input('wellness_subheading'),
                'wellness_card_text' => $request->input('wellness_card_text'),
            ]);
            \Log::info('Wellness section updated', ['wellness' => $request->only(['wellness_tab_title', 'wellness_heading', 'wellness_subheading', 'wellness_card_text'])]);

            // Tether Card Section
            $tetherCard = \App\Models\TetherCardSection::firstOrCreate([], []);
            $tetherCard->update([
                'tether_card_heading' => $request->input('tether_card_heading'),
                'tether_card_subheading' => $request->input('tether_card_subheading'),
            ]);
            \Log::info('Tether Card section updated', ['tetherCard' => $request->only(['tether_card_heading', 'tether_card_subheading'])]);

            // New Feature Section
            $newFeature = \App\Models\NewFeatureSection::firstOrCreate([], []);
            $newFeature->update([
                'new_feature_title_badge' => $request->input('new_feature_title_badge'),
                'new_feature_heading' => $request->input('new_feature_heading'),
                'new_feature_subheading' => $request->input('new_feature_subheading'),
            ]);
            \Log::info('New Feature section updated', ['newFeature' => $request->only(['new_feature_title_badge', 'new_feature_heading', 'new_feature_subheading'])]);

            // Relationship Section
            $relationship = \App\Models\RelationshipSection::firstOrCreate([], []);
            $relationship->update([
                'relationship_tab_title' => $request->input('relationship_tab_title'),
                'relationship_heading' => $request->input('relationship_heading'),
                'relationship_subheading' => $request->input('relationship_subheading'),
                'relationship_ios_link' => $request->input('relationship_ios_link'),
                'relationship_android_link' => $request->input('relationship_android_link'),
            ]);
            \Log::info('Relationship section updated', ['relationship' => $request->only(['relationship_tab_title', 'relationship_heading', 'relationship_subheading', 'relationship_ios_link', 'relationship_android_link'])]);

            // Border Section
            $border = \App\Models\BorderSection::firstOrCreate([], []);
            $border->update([
                'border_tab_title' => $request->input('border_tab_title'),
                'border_heading' => $request->input('border_heading'),
                'border_subheading' => $request->input('border_subheading'),
                'border_north_america' => $request->input('border_north_america'),
                'border_south_america' => $request->input('border_south_america'),
                'border_africa' => $request->input('border_africa'),
                'border_north_europe' => $request->input('border_north_europe'),
                'border_asia' => $request->input('border_asia'),
                'border_australia' => $request->input('border_australia'),
            ]);
            \Log::info('Border section updated', ['border' => $request->only(['border_tab_title', 'border_heading', 'border_subheading', 'border_north_america', 'border_south_america', 'border_africa', 'border_north_europe', 'border_asia', 'border_australia'])]);

            \Log::info('All sections updated successfully');
            return redirect()->route('admin.website.index')->with('success', 'All sections updated successfully.');
        } catch (\Throwable $e) {
            \Log::error('Error updating sections', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return back()->with('error', 'Failed to update sections.');
        }
    }
}
