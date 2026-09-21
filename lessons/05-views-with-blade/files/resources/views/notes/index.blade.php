<x-layout>
    <h1 class="text-4xl font-bold">My notes</h1>

    <ul class="mt-8 space-y-3">
        @foreach ($notes as $note)
            <li class="rounded-xl bg-slate-800 p-5 text-xl">
                {{ $note }}
            </li>
        @endforeach
    </ul>
</x-layout>
