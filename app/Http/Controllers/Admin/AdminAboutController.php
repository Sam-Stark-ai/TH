<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminAboutController extends Controller
{
    public function index()
    {
        $aboutSection = AboutSection::first();
        return view('admin.cms.about.index', compact('aboutSection'));
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'tab_title' => 'nullable|string|max:255',
                'heading' => 'nullable|string|max:255',
                'paragraph' => 'nullable|string',
                'user' => 'nullable|string|max:255',
                'countries' => 'nullable|string|max:255',
                'satisfaction' => 'nullable|string|max:255',
                'connections' => 'nullable|string|max:255',
                'growth' => 'nullable|string|max:255',
                'map_tab_title' => 'nullable|string|max:255',
                'map_heading' => 'nullable|string|max:255',
                'map_paragraph' => 'nullable|string',
            ]);

            $aboutSection = AboutSection::first();

            if (!$aboutSection) {
                // Create new record if none exists
                $aboutSection = AboutSection::create([
                    'tab_title' => $request->tab_title,
                    'heading' => $request->heading,
                    'paragraph' => $request->paragraph,
                    'user' => $request->user,
                    'countries' => $request->countries,
                    'satisfaction' => $request->satisfaction,
                    'connections' => $request->connections,
                    'growth' => $request->growth,
                    'map_tab_title' => $request->map_tab_title,
                    'map_heading' => $request->map_heading,
                    'map_paragraph' => $request->map_paragraph,
                ]);
                Log::info('About section created successfully', ['id' => $aboutSection->id]);
            } else {
                // Update existing record
                $aboutSection->update([
                    'tab_title' => $request->tab_title,
                    'heading' => $request->heading,
                    'paragraph' => $request->paragraph,
                    'user' => $request->user,
                    'countries' => $request->countries,
                    'satisfaction' => $request->satisfaction,
                    'connections' => $request->connections,
                    'growth' => $request->growth,
                    'map_tab_title' => $request->map_tab_title,
                    'map_heading' => $request->map_heading,
                    'map_paragraph' => $request->map_paragraph,
                ]);
                Log::info('About section updated successfully', ['id' => $aboutSection->id]);
            }

            return redirect()->route('admin.about.index')->with('success', 'About section updated successfully.');
        } catch (\Exception $e) {
            Log::error('About section update error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }
}
