<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use Spatie\Permission\Models\Role;
use App\Models\Message;
use App\Models\Ticket;
use App\Events\NewMessage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = $user->role_id;
        // dd($role);
        return view('dashboard', compact('role'));
    }

    public function tickets()
    {
        $categories = Category::all();
        $user = Auth::user();
        $ticketsAdmin = Ticket::all(['id', 'title']);
        $tickets = Ticket::whereHas('assignedUsers', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->with('messages')->get();

        return view('tickets', compact('tickets', 'categories', 'ticketsAdmin'));
    }

    public function newTicket(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'file_input' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,zip|max:2048',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = 'Error creating ticket: ' . implode(' ', $errors);
            return redirect()->back()->with('error', $errorMessage)->withInput();
        }

        try {
            $ticket = Ticket::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'status' => 'open',
            ]);

            $ticket->categories()->attach($request->category_id);
            $ticket->assignedUsers()->attach(Auth::id());

            return redirect()->back()->with('success', 'Ticket created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating ticket. ' . $e->getMessage())->withInput();
        }
    }

    public function sendMessage(Request $request)
    {
        // $request->validate([
        //     'ticket_id' => 'required|exists:tickets,id',
        //     'message' => 'required',
        //     'file_input' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,zip|max:2048',
        // ]);

        $file = Storage::disk('public')->put('images', $request->file('file_input'));
        $path = "storage/" . $file;

        Message::create([
            'user_id' => Auth::id(),
            'ticket_id' => $request->ticket_id,
            'message' => $request->message,
            'file_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function users()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users', compact('users', 'roles'));
    }

    public function updateUser(Request $request)
    {
        $user = User::find($request->id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $role = Role::find($request->selectRole);
        if ($role) {
            $user->syncRoles($role);
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->delete();
        return redirect()->back()->with('success', 'User deleted succesfully!');
    }
}
