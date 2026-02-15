<x-layout>
    <x-sidebar title="Category" :category="$productCategory">
        <div class="grid grid-cols-4 gap-2">
            @foreach($productCategory as $category)

                <div class="card card-border bg-base-100 shadow-sm m-2 w-96">
                    <div class="card-body">
                        <h2 class="text-2xl text-center p-8 ">{{$category->name}}</h2>
                        @auth
                            @can('admin')
                                <div class="flex flex-row gap-2">
                                    <a href="/products/query/{{$category->id}}"
                                       class="flex-auto btn bg-gray-100">View</a>
                                    <a href="/products/category/{{$category->id}}/edit"
                                       class="flex-auto btn bg-gray-100">Edit</a>
                                </div>
                                <form method="post" action="/products/category/{{$category->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn bg-gray-100 w-84">Delete</button>
                                </form>

                            @endcan
                            @cannot('admin')
                                <div class="flex flex-row gap-2">
                                    <a href="/products/query/{{$category->id}}"
                                       class="flex-auto btn bg-gray-100">View</a>
                                </div>
                            @endcannot
                        @endauth
                        @guest
                            <div class="flex flex-row gap-2">
                                <a href="/products/showAll/{{$category->id}}"
                                   class="flex-auto btn bg-gray-100">View</a>
                            </div>
                        @endguest

                    </div>
                </div>
            @endforeach
                <!-- create category -->
            @can('admin')
                <a href="/products/category/create">
                    <div
                        class="card border-2 border-dashed shadow-sm text-neutral-content w-96 p-10 m-2 hover:bg-slate-502">
                        <div class="card-body items-center text-4xl text-center text-shadow-sky-100 p-15">
                            <span>X</span>
                        </div>
                    </div>
                </a>
            @endcan
        </div>
    </x-sidebar>
</x-layout>
