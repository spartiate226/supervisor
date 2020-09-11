@component('mail::message')
<h1>Nouvel Programme</h1>
<p>L'emploi de temp de la semaine est disponible!!!</p>
@component('mail::button', ['url' => 'supervisor.test'])
Voir l'emploi du temps
@endcomponent

{{ config('app.name') }}
@endcomponent
