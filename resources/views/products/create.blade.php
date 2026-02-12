<x-layout>
    <form method="post" action="/products/{{$product->id}}">
        @csrf
        @method('PUT')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Create Products</legend>

            <label class="label">name</label>
            <input type="text" class="input" placeholder="name" name="name" required/>

            <label class="label">description</label>
            <input type="text" class="input" placeholder="description" name="description" required/>

            <label class="label">price</label>
            <input type="text" class="input" placeholder="price" name="price" required/>

            <button class="btn btn-neutral mt-4">Create</button>
        </fieldset>
    </form>
</x-layout>

