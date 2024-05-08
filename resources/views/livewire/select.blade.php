@props(['multi' => false])

<div class="">
    <select id="tomSelect" placeholder="Selecciona una persona" class="form-control" autocomplete="off" wire:model="user_id"
        {{ $multi == true ? 'multiple' : '' }}>

        <option value="">Selecciona una persona</option>

        @foreach ($options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
    </select>

    <br>
    <button class="btn btn-primary" wire:click="DDSelected">Show</button>
</div>

@vite(['resources/js/app.js'])
