<x-layout>
    <form method="post" action="/products">
        @csrf
        @method('PUT')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Create Products</legend>

            <label class="label">name</label>
            <input type="text" class="input" placeholder="name" name="name" value="{{old('name')}}"/>
            @error('name')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <label class="label">description</label>
            <input type="text" class="input" placeholder="description" name="description" value="{{old('description')}}"/>
            @error('description')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <label class="label">price</label>
            <input type="text" class="input" placeholder="price" name="price" value="{{old('price')}}"/>
            @error('price')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <!---- category ---->
            <input type="hidden" name="category_id" value="{{$category}}"/>

            <button class="btn btn-neutral mt-4">Create</button>
        </fieldset>
    </form>
</x-layout>

