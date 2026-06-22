<x-layout>
    <form action="/login" method="POST">
        @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
    <legend class="fieldset-legend">Login</legend>

     <label class="label" for="email">Email</label>
    <input class="input" type="email" name="email" placeholder="Your Email" required/>
    <x-forms.error name="email" />

    <label class="label">Password</label>
    <input type="password" class="input" name="password" placeholder="Password" required />

    <button class="btn btn-neutral mt-4">Login</button>
</fieldset>
    </form>
</x-layout>