<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">
        @if(session('success'))
            <span class="px-3 py-3 bg-green-600 text-white rounded">{{session('success')}}</span>
        @endif
        <form wire:submit="createNewUser" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                <div class="mt-2">
                    <input wire:model="name" type="text"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('name')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                    <input wire:model="email" type="email"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('email')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input wire:model="password" type="password"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('password')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Foto do Perfil</label>
                </div>
                <div class="mt-2">
                    <input wire:model="image" accept="image/png, image/jpeg" type="file" id="image">
                    @error('image')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                    @enderror
                    @if($image)
                        <img class="rounded w-10 h-10 mt-5 block" src="{{$image->temporaryUrl()}}" alt="">
                    @endif

                    <div wire:loading wire:target="image">
                        <span class="text-green-500">Uploading...</span>
                    </div>

                    <div wire:loading>
                        <span class="text-green-500">Sending...</span>
                    </div>
                </div>
            </div>
            <div>
                <button wire:click.prevent="ReloadList" type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Recarregar Lista
                </button>
                <button wire:loading.class.remove="bg-blue-500" wire:loading.attr="disabled" type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 mt-3 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</div>

