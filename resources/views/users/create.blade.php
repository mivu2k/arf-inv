@extends('layouts.app')

@section('content')
    <div class="md:flex md:items-center md:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Add New User
            </h2>
        </div>
    </div>

    <div class="mt-8">
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                            <input type="text" name="name" id="name" required
                                class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <input type="email" name="email" id="email" required
                                class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="role_id" class="block text-sm font-medium leading-6 text-gray-900">Role</label>
                            <select id="role_id" name="role_id" required
                                class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->label }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <input type="password" name="password" id="password" required
                                class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="password_confirmation"
                                class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="{{ route('users.index') }}"
                            class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-primary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection