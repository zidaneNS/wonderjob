<x-app-layout>
    <section class="px-40">
        <h1 class="text-4xl text-white/40 mb-3">Sign Up</h1>
        <form action="/register" method="POST">
            @csrf
            <x-form.input placeholder="John Doe..." type="text" idty="name">Name :</x-form.input>
            <x-form.input placeholder="example@gmail.com" type="email" idty="email">Email :</x-form.input>
            <x-form.input type="password" idty="password">Password :</x-form.input>
            <x-form.input type="password" idty="password_confirmation">Confirm Password :</x-form.input>
            <a href="/register" class="text-sm text-blue-700 hover:underline">Already have an account ? Sign In Here</a>
            <div class="flex justify-between mt-3">
                <a href="/jobs" class="border-2 border-white/40 px-4 py-2 rounded-xl">Close</a>
                <x-form.submit />
            </div>
        </form>
    </section>
</x-app-layout>