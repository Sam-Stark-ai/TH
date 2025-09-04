<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminRingController extends Controller
{
    public function index()
    {
        $rings = Ring::all();
        return view('admin.rings.index', compact('rings'));
    }

    public function add()
    {
        return view('admin.rings.add');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'icon' => 'required|string|max:255',
                'price' => 'required|string|max:255',
                'rings_count' => 'required|string|max:255',
                'description' => 'required',
                'couples_connected' => 'required',
                'includes' => 'required|array|min:1',
                'includes.*' => 'required|string|max:255'
            ]);

            $ring = Ring::create([
                'title' => $request->title,
                'icon' => $request->icon,
                'rings_count' => $request->rings_count,
                'price' => $request->price,
                'description' => $request->description,
                'couples_connected' => $request->couples_connected,
                'includes' => json_encode($request->includes),
            ]);

            Log::info('Ring created successfully.', ['id' => $ring->id]);

            return redirect()->route('admin.ring.index')->with('success', 'Ring added successfully.');
        } catch (\Exception $e) {
            Log::error('Error while creating ring:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $ring = Ring::findOrFail($id);
        return view('admin.rings.edit', compact('ring'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'icon' => 'required|string|max:255',
                'price' => 'required|string|max:255',
                'rings_count' => 'required|string|max:255',
                'description' => 'required',
                'couples_connected' => 'required',
                'includes' => 'required|array|min:1',
                'includes.*' => 'required|string|max:255'
            ]);

            $ring = Ring::findOrFail($id);
            $ring->update([
                'title' => $request->title,
                'icon' => $request->icon,
                'rings_count' => $request->rings_count,
                'price' => $request->price,
                'description' => $request->description,
                'couples_connected' => $request->couples_connected,
                'includes' => json_encode($request->includes),
            ]);

            return redirect()->route('admin.ring.index')->with('success', 'Ring updated successfully.');
        } catch (\Exception $e) {
            Log::error('Ring update error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $ring = Ring::findOrFail($id);
            $ring->delete();
            return redirect()->route('admin.ring.index')->with('success', 'Ring deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Ring delete error:', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors('Could not delete ring.');
        }
    }
}
