<x-layout>
    <form method="post" action="/products" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Create Products</legend>

            <label class="label">name</label>
            <input type="text" class="input" placeholder="name" name="name" value="{{old('name')}}" autocomplete="off"/>
            @error('name')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <label class="label">description</label>
            <textarea class="textarea" placeholder="description" name="description" autocomplete="off">{{old('description')}}</textarea>
            @error('description')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <label class="label">price</label>
            <input type="text" class="input" placeholder="price" name="price" value="{{old('price')}}" autocomplete="off"/>
            @error('price')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <label class="label">Image</label>
            <input type="file" class="file-input" name="image"/>
            <label class="label">Max size 1024MB</label>
            @error('image')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <!---- category ---->
            <input type="hidden" name="category_id" value="{{$category}}"/>

            <button class="btn btn-neutral mt-4">Create</button>
        </fieldset>
    </form>
</x-layout>

