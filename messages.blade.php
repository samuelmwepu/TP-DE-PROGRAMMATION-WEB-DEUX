@extends('layouts.app')

@section('title', 'Administration - Messages reçus')

@section('content')
<div class="skills-section">
    <h1 class="section-title">Messages reçus</h1>

    @if($unreadCount > 0)
        <div style="background: #d4a37320; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
            📬 Vous avez <strong>{{ $unreadCount }}</strong> message(s) non lu(s)
        </div>
    @endif

    <div class="projects-grid" style="grid-template-columns: 1fr;">
        @forelse($messages as $message)
        <div class="project-card" style="border-left: 4px solid {{ $message->is_read ? '#28a745' : '#d4a373' }}">
            <div class="project-content">
                <div style="display: flex; justify-content: space-between; align-items: start;">
                    <div>
                        <h2>{{ $message->name }}</h2>
                        <p style="color: #666; margin-bottom: 0.5rem;">📧 {{ $message->email }}</p>
                        <p style="color: #999; font-size: 0.85rem;">📅 {{ $message->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div style="display: flex; gap: 0.5rem;">
                        @if(!$message->is_read)
                            <a href="{{ route('admin.message.read', $message->id) }}" style="background: #28a745; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-size: 0.85rem;">✓ Marquer lu</a>
                        @endif
                        <form action="{{ route('admin.message.destroy', $message->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #dc3545; color: white; padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.85rem;" onclick="return confirm('Supprimer ce message ?')">🗑️ Supprimer</button>
                        </form>
                    </div>
                </div>
                <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #eee;">
                    <p style="color: #555;"><strong>Message :</strong></p>
                    <p style="background: #f8f8f8; padding: 1rem; border-radius: 4px; margin-top: 0.5rem;">{{ nl2br(e($message->message)) }}</p>
                </div>
            </div>
        </div>
        @empty
            <p>Aucun message reçu pour le moment.</p>
        @endforelse
    </div>

    <div style="margin-top: 2rem;">
        {{ $messages->links() }}
    </div>
</div>
@endsection
