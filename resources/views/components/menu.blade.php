<div>
    <div class="rounded-lg  bg-gradient-to-br from-purple-100 to-white border-2 border-purple-400 h-full pb-40">
        <div class="flex flex-col items-center">
            <img class="inline-block border border-solid border-1 border-gray-800 rounded-full my-9" src="{{auth()->user()->profile_photo_url}}" alt="">
            <p class="font-bold text-lg leading-7">{{auth()->user()->name}}</p>
            <p class="mt-2 font-normal text-sm leading-5 text-gray-600">{{auth()->user()->email}}</p>
            <!-- <div class="flex flex-col items-center mt-36" style="font-size: 20px; gap: 15px;">
                <a href="{{ route('overview') }}" class="flex items-center gap-4 py-2 text-center text-gray-800 hover:text-blue-500">
                @if(strpos(Request::route()->uri(), "overview") !== false)
                <img src="/image/Polygon 1.png" class="w-6 h-6 ml-auto" alt="">
                @endif
                <span class="font-medium">Tổng quan</span>
                </a>
                <a href="{{ route('DocManagement') }}" class="flex items-center gap-4 py-2 text-center text-gray-800 hover:text-blue-500">
                @if(strpos(Request::route()->uri(), "documents") !== false)
                <img src="/image/Polygon 1.png" class="w-6 h-6 ml-auto" alt="">
                @endif
                <span class="font-medium">Quản lý tài liệu</span>
                </a>
                <a href="{{ route('history.transaction') }}" class="flex items-center gap-4 py-2 text-center text-gray-800 hover:text-blue-500">
                @if(strpos(Request::route()->uri(), "financial") !== false)
                <img src="/image/Polygon 1.png" class="w-6 h-6 ml-auto" alt="">
                @endif
                <span class="font-medium">Quản lý tài chính</span>
                </a>
                <a href="{{ route('information') }}" class="flex items-center py-2 text-center gap-4 text-gray-800 hover:text-blue-500">
                @if(Request::route()->getName()== 'information')
                <img src="/image/Polygon 1.png" class="w-6 h-6 ml-auto" alt="">
                @endif
                <span class="font-medium">Thông tin cá nhân</span>
                </a>
            </div> -->
            <!-- <div class="flex flex-col items-center mt-36 space-y-4">
                <a href="{{ route('overview') }}" class="flex items-center justify-between w-full py-2 px-4 rounded-md text-gray-800 hover:text-blue-500 {{ strpos(Request::route()->uri(), 'overview') !== false ?  : '' }}">
                    @if(strpos(Request::route()->uri(), "overview") !== false)
                    <img src="/image/Polygon 1.png" class="w-6 h-6" alt="">
                    @endif
                    <span class="font-medium">Tổng quan</span>
                </a>
                <a href="{{ route('DocManagement') }}" class="flex items-center justify-between w-full py-2 px-4 rounded-md text-gray-800 hover:text-blue-500 {{ Request::route()->getName() == 'DocManagement' ?  : '' }}">
                    @if(Request::route()->getName() == 'DocManagement')
                    <img src="/image/Polygon 1.png" class="w-6 h-6" alt="">
                    @endif
                    <span class="font-medium">Quản lý tài liệu</span>
                </a>
                <a href="{{ route('history.transaction') }}" class="flex items-center justify-between w-full py-2 px-4 rounded-md text-gray-800 hover:text-blue-500 {{ strpos(Request::route()->uri(), 'financial') !== false ?  : '' }}">
                    @if(strpos(Request::route()->uri(), "financial") !== false)
                    <img src="/image/Polygon 1.png" class="w-6 h-6" alt="">
                    @endif
                    <span class="font-medium">Quản lý tài chính</span>
                </a>
                <a href="{{ route('information') }}" class="flex items-center justify-between w-full py-2 px-4 rounded-md text-gray-800 hover:text-blue-500 {{ Request::route()->getName() == 'information' ?  : '' }}">
                    @if(Request::route()->getName() == 'information')
                        <img src="/image/Polygon 1.png" class="w-6 h-6" alt="">
                    @endif
                    <span class="font-medium">Thông tin cá nhân</span>
                </a>
            </div> -->
            <div class="flex flex-col items-left mt-36" style="font-size: 20px; gap: 15px;">
                <a href="{{ route('overview') }}" class="flex items-center gap-4 py-2 text-center text-gray-800 hover:text-blue-500">
                    <div class="flex justify-between">
                        <!-- @if(strpos(Request::route()->uri(), "overview") !== false)
                        <img src="/image/Polygon 1.png" class="w-6 h-6 mr-2" alt="">
                        @endif -->
                        <span class="font-medium">Tổng quan</span>
                    </div>
                </a>
                <a href="{{ route('dashboard.document') }}" class="flex items-center gap-4 py-2 text-center text-gray-800 hover:text-blue-500">
                    <div class="flex justify-between">
                        <!-- @if(strpos(Request::route()->uri(), "documents") !== false)
                        <img src="/image/Polygon 1.png" class="w-6 h-6 mr-2" alt="">
                        @endif -->
                        <span class="font-medium">Quản lý tài liệu</span>
                    </div>
                </a>
                <a href="{{ route('dashboard.financial') }}" class="flex items-center gap-4 py-2 text-center text-gray-800 hover:text-blue-500">
                    <div class="flex justify-between">
                        <!-- @if(strpos(Request::route()->uri(), "financial") !== false)
                        <img src="/image/Polygon 1.png" class="w-6 h-6 mr-2" alt="">
                        @endif -->
                        <span class="font-medium">Quản lý tài chính</span>
                    </div>
                </a>
                <a href="{{ route('information') }}" class="flex items-center py-2 text-center gap-4 text-gray-800 hover:text-blue-500">
                    <div class="flex justify-between">
                        <!-- @if(Request::route()->getName()== 'information')
                        <img src="/image/Polygon 1.png" class="w-6 h-6 mr-2" alt="">
                        @endif -->
                        <span class="font-medium">Thông tin cá nhân</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
