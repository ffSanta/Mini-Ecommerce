<x-layout>
    @foreach($products as $product)
        <x-card name='{{$product->name}}' description='{{$product->description}}' price="{{$product->price}}" id="{{$product->id}}"/>
    @endforeach
    <div class="card bg-neutral text-neutral-content w-96 p-40">
        <div class="card-body items-center text-center">
            <a href="/products/create" class="btn btn-secondary">X</a>
        </div>
    </div>

</x-layout>
