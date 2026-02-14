<x-layout>
    <x-sidebar title="Product">
        <x-card name='{{$product->name}}' description='{{$product->description}}' price="{{$product->price}}"/>
    </x-sidebar>
</x-layout>
