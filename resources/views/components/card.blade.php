@props([
    'name' => 'NULL',
    'description' => 'NULL',
    'price' => '0.00',
    'id' => '#',
])
<div class="card bg-base-100 w-100 m-2 shadow-sm">
    <figure>
        <img
            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
            alt="Shoes"/>
    </figure>
    <div class="card-body">
        <div class="grid grid-cols-6">
            <p class="ml-5 text-xl col-start-1 col-end-5 ">{{$name}}</p>
            <p class="text-xl text-center col-span-2 col-end-7 ">{{$price}}</p>
            <p class="ml-5 text-xl  col-start-1 col-end-7 ">{{$description}}</p>
        </div>
        <div class="card-actions justify-end">
            @auth
                @if($id == '#')
                    <a href="/products/category" class="btn btn-primary">Back</a>
                @else
                    <a href="/products/{{$id}}" class="btn btn-primary">View</a>
                    <a href="/products/{{$id}}/edit" class="btn btn-primary">Edit</a>
                    <form method="post" action="/products/{{$id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary">Delete</button>
                    </form>
                @endif
            @endauth
            @guest
                <button type="submit" class="btn btn-primary">Buy Now</button>
            @endguest
        </div>
    </div>
</div>
