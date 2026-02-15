<x-layout>
    @error('err')
    <p class="bg-red-300 border-base-300 rounded-box w-xs border p-4 m-auto mt-5">{{ $message }}</p>
    @enderror
    <form method="post" action="/login">
        @csrf
        @method('PUT')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Login</legend>

            <label class="label">Email</label>
            <input type="email" class="input" placeholder="Email" name="email" value="{{old('email')}}" autocomplete="off"/>
            @error('email')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <label class="label">Password</label>
            <input type="password" class="input" placeholder="Password" name="password"/>
            @error('password')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

            <p><a href="/register">Register</a></p>
            <button class="btn btn-neutral mt-4">Login</button>
        </fieldset>
    </form>
</x-layout>
