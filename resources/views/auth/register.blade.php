<x-layout>
    <form method="post" action="/register">
        @csrf
        @method('PUT')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">username</label>
            <input type="text" class="input" placeholder="Username" name="name" value="{{old('name')}}" autocomplete="off"/>
            @error('name')
            <span class="text-red-400">{{ $message }}</span>
            @enderror

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

            <input type="hidden" class="input" placeholder="Password" name="role" value="user"/>

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>
