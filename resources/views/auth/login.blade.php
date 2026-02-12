<x-layout>
    <form method="post" action="/login">
        @csrf
        @method('PUT')
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
        <legend class="fieldset-legend">Login</legend>

        <label class="label">Email</label>
        <input type="email" class="input" placeholder="Email" name="email"  required/>

        <label class="label">Password</label>
        <input type="password" class="input" placeholder="Password" name="password" required/>

        <p><a href="/register">Register</a></p>
        <button class="btn btn-neutral mt-4">Login</button>
    </fieldset>
    </form>
</x-layout>
