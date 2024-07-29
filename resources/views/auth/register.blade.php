<x-layout>
    <x-slot name="content">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <h3 class="text-primary text-center my-5">Register Form</h3>
                    <div class="card m-5 p-5 shadow-sm">
                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3">
                            <label  class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value={{old('name')}}>
                            </div>
                            <x-error name="name"/>
                            <div class="mb-3">
                                <label  class="form-label">UserName</label>
                                <input type="text" class="form-control" name="username" required value={{old('username')}} >
                            </div>
                            <x-error name="username"/>
                            <div class="mb-3">
                                <label  class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" required value={{old('email')}}>
                            </div>
                            <x-error name="email"/>
                            <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                            </div>
                            <x-error name="password"/>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>



