@component('mail::message')
# Nouveau message de contact

**Nom :** {{ $c->nom }}  
**Email :** {{ $c->email }}  
**Sujet :** {{ $c->sujet ?? '—' }}

@component('mail::panel')
{{ $c->message }}
@endcomponent

*Reçu le {{ $c->created_at->format('d/m/Y H:i') }}*
@endcomponent
