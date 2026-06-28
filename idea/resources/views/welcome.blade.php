<x-layout>
    <div class="flex min-h-[calc(100dvh-4rem)] items-center justify-center px-4">
        <div class="w-full max-w-md space-y-4">
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight">Register an account</h1>
                <p class="text-muted-foreground mt-1">Start tracking your ideas today.</p>
            </div>

            <form action="/register" method="POST" class="mt-10 space-y-4">
            @csrf

            <div class="space-y-2">
                <label for="name" class="label">Name</label>
                <input type="text" class="input w-full" id="name" name="name">
            </div> 
            <div>
                <label for="email" class="label">Email</label>
                <input type="email" class="input w-full" id="email" name="email">
            </div>

            <div>
                <label for="password" class="label">Password</label>
                <input type="password" class="input w-full" id="password" name="password">
            </div>

            <button type="submit" class="btn mt-2 h-10 w-full">Crear Cuenta</button>
            </form>
        </div>
    </div>
</x-layout>