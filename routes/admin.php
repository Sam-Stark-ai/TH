use App\Http\Controllers\Admin\AdminWebsiteController;
use App\Http\Controllers\Admin\AdminContactController;

Route::put('/website/sections/update', [AdminWebsiteController::class, 'updateAllSections'])->name('admin.website.sections.update');

// Contact Routes
Route::get('/contact', [AdminContactController::class, 'index'])->name('admin.contact.index');
Route::put('/contact/update', [AdminContactController::class, 'updateContact'])->name('admin.contact.update');

