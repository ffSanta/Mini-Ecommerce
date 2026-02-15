@props([
    'name' => 'NULL',
    'description' => 'NULL',
    'price' => '0.00',
    'id' => '#',
    'image' => 'NULL',
    'home' => 'NULL'
])
<div class="card bg-base-100 w-100 m-2 shadow-sm">
    <figure>
        <img
            class="w-2xl h-65"
            src="{{asset('/images/'.$image)}}"
            alt="Shoes"/>
    </figure>
    <div class="card-body">
        <div class="grid grid-cols-6">
            <p class="ml-5 text-xl col-start-1 col-end-5 ">{{$name}}</p>
            <p class="text-xl text-center col-span-2 col-end-7 ">${{$price}}</p>
        </div>
        <div class="card-actions justify-center">
            @auth
                @if($id == '#' && $home == 'NULL')
                    <a href="/products/category" class="btn bg-gray-100">Back</a>
                @elseif($home != 'NULL')
                    <a href="/products/{{$id}}" class="btn bg-gray-100">View</a>
                    <button type="submit" class="btn bg-gray-100">Buy Now</button>
                @else
                    <a href="/products/{{$id}}" class="btn bg-gray-100">View</a>
                    <a href="/products/{{$id}}/edit" class="btn bg-gray-100">Edit</a>
                    <form method="post" action="/products/{{$id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn bg-gray-100">Delete</button>
                    </form>
                @endif
            @endauth
            @guest
                <a href="/products/{{$id}}" class="btn bg-gray-100">View</a>
                <button type="submit" class="btn bg-gray-100">Buy Now</button>
            @endguest
        </div>
    </div>
</div>
