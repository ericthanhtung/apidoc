<div class="container mx-auto py-10">
    <div class="flex justify-between w-full mb-5">
        <div class="my-auto font-bold text-3xl dark:text-white">
            {{__('Projects')}}
        </div>
        <a href="{{route('project.create')}}" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">{{__('New Project')}}</a>
    </div>
    <div>
        <a href="" class="flex gap-6 py-4">
            <img class="rounded-md" src="https://ui-avatars.com/api/?name=A&color=FFFFFF&background=111827" alt="">
            <div class="flex gap-4 my-auto">
                <div>{{Auth::user()->username}}/<span class="font-bold">Apidoc</span></div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
                <div class="px-3 py-1 rounded-full border-gray-300 border">Owner</div>
            </div>
        </a>
    </div>
</div>
