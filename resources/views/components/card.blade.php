@props([
    'name' => 'NULL',
    'description' => '0.00',
    'id' => '#',
])
<div class="card bg-base-100 w-96 shadow-sm">
    <figure>
        <img
            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
            alt="Shoes" />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{$name}}</h2>
        <p>{{$description}}</p>
        <div class="card-actions justify-end">
            <a href="/products/{{$id}}/edit" class="btn btn-primary">Edit</a>
        </div>
        <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>
