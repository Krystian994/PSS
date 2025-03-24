<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.panel', compact('users'));
    }

    public function zmienRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->rola = $request->rola;
        $user->save();

        return redirect()->route('panelAdmin')->with('success', 'Rola użytkownika została zmieniona.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Nie pozwól adminowi usunąć samego siebie
        if (auth()->user()->id === $user->id) {
            return redirect()->route('panelAdmin')->with('error', 'Nie możesz usunąć siebie!');
        }

        $user->delete();

        return redirect()->route('panelAdmin')->with('success', 'Użytkownik został usunięty.');
    }
}
