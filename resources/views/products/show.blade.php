<x-layout>
    <x-sidebar title="Product">
                <div class="card bg-base-100 shadow-sm
                lg:w-300 lg:h-180 lg:mt-10 lg:m-auto ">
                    <figure>
                        <img
                            class="w-full h-3xl"
                            src="{{asset('/images/'.$product->image)}}"
                            alt=""/>
                    </figure>
                    <div class="card-body">
                        <div class="grid grid-cols-6 gap-4">
                            <p class="ml-5 text-xl col-start-1 col-end-5 ">{{$product->name}}</p>
                            <p class="text-xl text-center col-span-2 col-end-7 ">${{$product->price}}</p>
                            <p class="ml-5 text-xl wrap-anywhere col-start-1 col-end-7">{{$product->description}}</p>
                        </div>
                        <div class="card-actions justify-center">
                            <a href="/products/category" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
    </x-sidebar>
</x-layout>
