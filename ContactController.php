<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Afficher le formulaire de contact
    public function index()
    {
        return view('pages.contact');
    }

    // Enregistrer un message de contact
    public function store(ContactRequest $request)
    {
        ContactMessage::create($request->validated());

        return redirect()->route('contact.success')
            ->with('success', 'Message envoyé avec succès !')
            ->with('messageData', $request->validated());
    }

    // Afficher la page de succès
    public function success()
    {
        if (!session('success')) {
            return redirect()->route('contact');
        }

        return view('pages.contact-success');
    }

    // Admin: Afficher tous les messages
    public function messages()
    {
        $messages = ContactMessage::latest()->paginate(10);
        $unreadCount = ContactMessage::where('is_read', false)->count();

        return view('admin.messages', compact('messages', 'unreadCount'));
    }

    // Admin: Marquer un message comme lu
    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->markAsRead();

        return redirect()->route('admin.messages')
            ->with('success', 'Message marqué comme lu');
    }

    // Admin: Supprimer un message
    public function destroyMessage($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages')
            ->with('success', 'Message supprimé avec succès');
    }
}
