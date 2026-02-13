@props([
    'name' => 'NULL',
    'description' => '0.00',
    'id' => '#',
])
<div class="card bg-base-100 w-96 shadow-sm">
    <figure>
        <img
            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
            alt="Shoes"/>
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{$name}}</h2>
        <p>{{$description}}</p>
        <div class="card-actions justify-end">
            @if($id == '#')
                <a href="/products" class="btn btn-primary">Back</a>
            @else
                <a href="/products/{{$id}}" class="btn btn-primary">View</a>
                <a href="/products/{{$id}}/edit" class="btn btn-primary">Edit</a>
                <form method="post" action="/products/{{$id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary">Delete</button>
                </form>
            @endif
            <button type="submit" class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>
