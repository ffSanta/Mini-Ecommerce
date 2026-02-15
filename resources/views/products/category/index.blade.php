<x-layout>
    <x-sidebar title="Category" :category="$productCategory">
        <div class="grid grid-cols-4 gap-2">
            @foreach($productCategory as $category)
                <div class="card card-border bg-base-100 w-96">
                    <div class="card-body">
                        <h2 class="card-title">{{$category->name}}</h2>
                        <p>A card component has a figure, a body part, and inside body there are title and actions
                            parts</p>
                        @auth
                            <div class="flex flex-row gap-2">
                                <a href="/products/query/{{$category->id}}" class="flex-auto btn btn-primary">View</a>
                                <a href="/products/category/{{$category->id}}/edit" class="flex-auto btn btn-primary">Edit</a>
                            </div>
                            <form method="post" action="/products/category/{{$category->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary w-84">Delete</button>
                            </form>
                        @endauth
                        @guest
                            <div class="flex flex-row gap-2">
                                <a href="/products/showAll/{{$category->id}}" class="flex-auto btn btn-primary">View</a>
                            </div>
                        @endguest

                    </div>
                </div>
            @endforeach

            @auth
                <a href="/products/category/create">
                    <div
                        class="card border-2 border-dashed shadow-sm text-neutral-content w-96 p-10 hover:bg-slate-502">
                        <div class="card-body items-center text-4xl text-center text-shadow-sky-100 p-15">
                            <span>X</span>
                        </div>
                    </div>
                </a>
            @endauth
        </div>
    </x-sidebar>
</x-layout>
