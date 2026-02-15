<x-layout>
    <x-sidebar title="Product">
        <x-card name='{{$product->name}}' description='{{$product->description}}' price="{{$product->price}}"
                image="{{$product->image}}"/>
    </x-sidebar>
</x-layout>
