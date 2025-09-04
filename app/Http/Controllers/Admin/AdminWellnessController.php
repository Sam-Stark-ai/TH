<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wellness;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminWellnessController extends Controller
{
    public function index()
    {
        $wellnesses = Wellness::all();
        return view('admin.crud.wellnesses.index', compact('wellnesses'));
    }

    public function add()
    {
        return view('admin.crud.wellnesses.add');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'icon' => 'nullable|string|max:255',
                'visibility' => 'nullable|integer',
            ]);

            $validatedData = $request->only(['title', 'description', 'image', 'icon', 'visibility']);

            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = $image->storeAs('uploads', $imageName, 'public');
                $validatedData['image'] = $imagePath;
            }

            Log::info('Validated Wellness data:', $validatedData);

            $wellness = Wellness::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => $validatedData['image'] ?? null,
                'icon' => $validatedData['icon'] ?? null,
                'visibility' => $validatedData['visibility'] ?? 1,
            ]);

            Log::info('Wellness created successfully:', ['id' => $wellness->id]);

            return redirect()->route('admin.wellness.index')->with('success', 'Wellness added successfully.');
        } catch (\Exception $e) {
            Log::error('Error while creating wellness:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $wellness = Wellness::findOrFail($id);
        return view('admin.crud.wellnesses.edit', compact('wellness'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'icon' => 'nullable|string|max:255',
                'visibility' => 'nullable|integer',
            ]);

            $wellness = Wellness::findOrFail($id);
            $updateData = [
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon ?? null,
                'visibility' => $request->visibility ?? 1,
            ];

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($wellness->image && Storage::disk('public')->exists($wellness->image)) {
                    Storage::disk('public')->delete($wellness->image);
                }

                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = $image->storeAs('uploads', $imageName, 'public');
                $updateData['image'] = $imagePath;
            }

            $wellness->update($updateData);

            return redirect()->route('admin.wellness.index')->with('success', 'Wellness updated successfully.');
        } catch (\Exception $e) {
            Log::error('Wellness update error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $wellness = Wellness::findOrFail($id);

            // Delete image if exists
            if ($wellness->image && Storage::disk('public')->exists($wellness->image)) {
                Storage::disk('public')->delete($wellness->image);
            }

            $wellness->delete();
            return redirect()->route('admin.wellness.index')->with('success', 'Wellness deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Wellness delete error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors('Could not delete wellness.');
        }
    }

    public function toggleVisibility(Request $request, $id)
    {
        $wellness = Wellness::findOrFail($id);
        $wellness->visibility = $request->has('visibility') ? 1 : 0;
        $wellness->save();
        return redirect()->route('admin.wellness.index')->with('success', 'Wellness visibility updated.');
    }
}
