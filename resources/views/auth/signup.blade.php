<x-base title="Signup" bodyClass="page-signup">
    <x-register-layout textTitle="Signup">
        <form action="" method="post">
            <div class="form-group">
                <input type="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
                <input type="password" placeholder="Your Password" />
            </div>
            <div class="form-group">
                <input type="password" placeholder="Repeat Password" />
            </div>
            <hr />
            <div class="form-group">
                <input type="text" placeholder="First Name" />
            </div>
            <div class="form-group">
                <input type="text" placeholder="Last Name" />
            </div>
            <div class="form-group">
                <input type="text" placeholder="Phone" />
            </div>
            <button class="btn btn-primary btn-login w-full">Register</button>
    
            <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                <x-register-button file='google'>Google</x-register-button>
                <x-register-button file='facebook'>Facebook</x-register-button>
            </div>
            <div class="login-text-dont-have-account">
                Already have an account? -
                <a href="/login.html"> Click here to login </a>
            </div>
        </form>
    </x-register-layout>
</x-base>