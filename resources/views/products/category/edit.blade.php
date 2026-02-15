<x-layout>
    <form method="post" action="/products/category/{{$productCategory->id}}">
        @csrf
        @method('PATCH')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Update Products</legend>

            <label class="label">name</label>
            <input type="text" class="input" placeholder="name" name="name"  value="{{$productCategory->name}}"/>
            @error('name')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <button class="btn btn-neutral mt-4">Update</button>
        </fieldset>
    </form>
</x-layout>

