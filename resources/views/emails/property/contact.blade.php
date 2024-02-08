<x-mail::message>
# Nouvelle demande

Un client est bien intéressé pour le bien <a href="{{route('property.show', ['slug' => $property->get_slug(), 'property' => $property])}}"> {{ $property->title }} </a>.

- Prénom: {{ $data['firstname'] }}
- Nom: {{ $data['lastname'] }}
- Email: {{ $data['email'] }}

**message: ** <br>
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
