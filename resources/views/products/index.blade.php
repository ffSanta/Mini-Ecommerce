<x-layout>
    <x-sidebar :category="$categories">
        <div class="grid grid-cols-4 gap-2">
            @foreach($products as $product)
                <x-card name='{{$product->name}}' description='{{$product->description}}' price="{{$product->price}}"
                        id="{{$product->id}}" image="{{$product->image}}"/>
            @endforeach
        </div>
    </x-sidebar>
</x-layout>
