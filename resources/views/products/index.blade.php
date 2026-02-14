<x-layout>
    <x-sidebar>
        <div class="grid grid-cols-4 gap-2">
            @foreach($products as $product)
                <x-card name='{{$product->name}}' description='{{$product->description}}' price="{{$product->price}}"
                        id="{{$product->id}}"/>
            @endforeach
{{--            <a href="/products/create">--}}
{{--                <div class="card border-2 border-dashed shadow-sm text-neutral-content w-100 p-40 m-2 hover:bg-slate-502">--}}
{{--                    <div class="card-body items-center text-4xl text-center text-shadow-sky-100">--}}
{{--                        X--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
        </div>
    </x-sidebar>
</x-layout>
