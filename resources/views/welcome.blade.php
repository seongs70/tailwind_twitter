<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Example - Twitter</title>

</head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href={{ asset('css/main.css') }}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="bg-gray-100 font-sans">
<div class="bg-yellow-100">
    <div class="container mx-auto flex flex-col lg:flex-row items-center py-4">
        <nav class="w-full lg:w-2/5">
            <a href="" class="top-nav-item"><i class="fa fa-home fa-lg"></i>Home</a>
            <a href="" class="top-nav-item"><i class="fa fa-bolt fa-lg"></i>Moment</a>
            <a href="" class="top-nav-item"><i class="fa fa-bell fa-lg"></i>Notification</a>
            <a href="" class="top-nav-item"><i class="fa fa-envelope fa-lg"></i>Messages</a>
        </nav>
        <div class="w-full lg:w-1/5 text-center my-4 lg:my-0"><a href=""><i class="fa fa-twitter fa-lg text-blue"></i></a></div>
        <div class="w-full lg:w-2/5 flex lg:justify-end">
            <div class="mr-4 relative">
                <input type="text" class="bg-gray-300 h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search twitter">
                <span class="flex items-center absolute right-0 inset-y-0 mr-3"><i class="fa fa-search text-grey-100"></i></span>
            </div>
            <div class="mr-4"><a href=""><img src="/img/twitter/avatar.jpg" alt="avatar.jpg" class="h-8 w-8 rounded-full"></a></div>
            <div><button class="bg-teal-400 hover:bg-teal-dark-200 text-white font-medium py-2 px-4 rounded-full">Tweet</button></div>
        </div> {{-- end container--}}
    </div>

    <div class="hero h-112 bg-cover"></div>

    <div class="bg-gray-300 shadow">
        <div class="container mx-auto flex flex-col lg:flex-row items-center lg:relative">
            <div class="w-full lg:w-1/4">
                <img src="/img/twitter/tailwind_logo.jpg" alt="" class="rounded-full h-48 lg:absolute lg:pin-l lg:pin-t lg:-mt-24">
            </div>
            <div class="w-full w-1/2">
                <ul class="flex">
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-300 border-teal-300">
                        <a href="" class="text-gray-500 hover:no-underline">
                        <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                        <div class="text-lg tracking-tight font-bold hover:text-teal-400">60</div>
                    </a></li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-300">
                        <a href="" class="text-gray-500 hover:no-underline">
                        <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                        <div class="text-lg tracking-tight font-bold hover:text-teal-400">4</div>
                    </a></li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-300">
                        <a href="" class="text-gray-500 hover:no-underline">
                        <div class="text-sm font-bold tracking-tight mb-1">Follower</div>
                        <div class="text-lg tracking-tight font-bold hover:text-teal-400">3,810</div>
                    </a></li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal-300">
                        <a href="" class="text-gray-500 hover:no-underline">
                        <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                        <div class="text-lg tracking-tight font-bold hover:text-teal-400">9</div>
                    </a></li>

                </ul>
               </div>
            <div class="w-full lg:w-1/4 flex lg:my-0 my-4 lg:justify-end items-center">
                <div class="mr-6">
                    <button class="bg-teal-400 hover:bg-teal-600 text-white font-medium py-2 px-4 rounded-full">
                        Following
                    </button>
                </div>
                <div>
                    <a class="text-gray-600" href=""><i class="fa fa-ellipsis-v fa-lg"></i></a>
                </div>
            </div>
        </div>{{-- end container --}}
    </div>
    <div class="container mx-auto flex flex-col lg:flex-row mt-3 text-sm leading-normal">
        <div class="w-full lg:w-1/4 pr-6 mt-16 mb-4">
            <h1><a href="" class="text-black text-3xl font-bold">Tailwind Css</a></h1>
            <div class="mb-4"><a href="" class="text-gray-400 ">@tailwindcss</a></div>

            <div class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing. <a href="">@adamathan</a>, <a href="">@klaus</a>, <a href="">@Lobo</a>, and <a href="">@ksh</a>
            </div>

            <div class="mb-2"><i class="fa fa-link fa-lg text-grey-600 mr-1"></i><a href="">tailwindcss.com</a></div>
            <div class="mb-4"><i class="fa fa-calendar fa-lg text-grey-600 mr-1"></i><a href="">Joined Auguest 2019</a></div>

            <div class="mb-4">
                <button class="bg-teal-600 hover:bg-blue-400 text-white font-medium py-2 px-4 rounded-full w-full h-10">Tweet to Tailwind CSS</button>
            </div>

            <div class="mb-4"><i class="fa fa-user fa-lg text-grey-600 mr-1"></i><a href="">27 Fllowers you know</a></div>

            <div class="mb-4">
                <a href=""><img src="/img/twitter/follower01.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower02.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower03.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower04.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower05.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower06.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower07.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower08.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower09.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                <a href=""><img src="/img/twitter/follower10.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
            </div>

            <div class="mb-4"><i class="fa fa-picture-o fa-lg text-grey-600 mr-1"></i><a href="">Photos and videos</a></div>

            <div class="mb-4">
                <a href=""><img src="/img/twitter/photo1.jpg" alt="photo" class="h20 w-20 mr-1 mb-1"></a>
                <a href=""><img src="/img/twitter/photo1.jpg" alt="photo" class="h20 w-20 mr-1 mb-1"></a>
                <a href=""><img src="/img/twitter/photo1.jpg" alt="photo" class="h20 w-20 mr-1 mb-1"></a>
                <a href=""><img src="/img/twitter/photo1.jpg" alt="photo" class="h20 w-20 mr-1 mb-1"></a>
                <a href=""><img src="/img/twitter/photo1.jpg" alt="photo" class="h20 w-20 mr-1 mb-1"></a>
            </div>
        </div>

        <div class="w-full lg:w-1/2 bg-white mb-4">
            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                <a href="" class="text-black mr-6">Tweets</a>
                <a href="" class="mr-6">Tweets &amp; Replies</a>
                <a href="" class="">Media</a>
            </div>

            <div class="flex border-b border-solid border-grey-200">
                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><i class="fa fa-thumb-tack text-teal-400 mr-2"></i></div>
                    <div><a href=""><img src="{{'img/twitter/avatar_tailwind.jpg'}}" alt="avatar" class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>
                <div class="w-7/8 p-3 pl-0">
                    <div class="text-xs text-grey-600">Pinned Tweet</div>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="" class="text-black">Tailwind Css</a></span>
                            <span class="text-grey-600">@tailwindcss</span>
                            <span class="text-grey-600">&middot;</span>
                            <span class="text-grey-600">15 DEc 2017</span>
                        </div>
                        <div>
                            <a href="" class="text-grey-400 hover:text-teal-400"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">Tailwind Css is out</p>
                            <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            <p class="mb-4"><a href="">github.com/soengs70</a></p>
                            <p><a href="/img/twitter/twweter1.jpg" class="boder border-solid border-gray-400 rounded-sm"></a></p>

                        </div>
                    </div>
                    <div class="pb-2">
                        <span class="mr-8"><a href="" class="text-gray-800 hover:no-underline hover:text-blue-500"><i class="fa fa-comment fa-lg mr-2"></i>9</a></span>
                        <span class="mr-8"><a href="" class="text-gray-800 hover:no-underline hover:text-blue-500"><i class="fa fa-retweet fa-lg mr-2"></i>29</a></span>
                        <span class="mr-8"><a href="" class="text-gray-800 hover:no-underline hover:text-blue-500"><i class="fa fa-heart fa-lg mr-2"></i>135</a></span>
                        <span class="mr-8"><a href="" class="text-gray-800 hover:no-underline hover:text-blue-500"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/4 lg:ml-4">
            <div class="p-3 bg-white">
                <div>
                    <span class="text-lg font-bold">Who to follow</span>
                    <span>&middot;</span>
                    <span><a href="" class="text-xs">Refresh</a></span>
                    <span>&middot;</span>
                    <span><a href="" class="text-xs">View All</a></span>
                </div>
            </div>

            <div class="flex border-b border-solid border-grey-400 p-3 bg-white">
                <div class="py-2">
                    <a href=""><img src="/img/twitter/follow1.jpg" class="rounded-full h-12 w-12" alt=""></a>
                </div>
                <div class="py-2 pl-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="" class="font-bold text-black">Nuxt.js</a> <a href="" class="text-grey-600">@nuxt_js</a>
                        </div>

                        <div>
                            <a href="" class="text-grey-400 hover:text-grey-600"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div>
                        <button class="bg-transparent text-xs hover:bg-teal-600 text-teal-600 font-semibold hover:text-white py-2 px-6 border border-teal-600 hover:border-transparent rounded-full">Follow</button>
                    </div>
                </div>
            </div>
            <div class="flex border-b border-solid border-grey-400 p-3 bg-white">
                <div class="py-2">
                    <a href=""><img src="/img/twitter/follow2.jpg" class="rounded-full h-12 w-12" alt=""></a>
                </div>
                <div class="py-2 pl-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="" class="font-bold text-black">LOBO</a> <a href="" class="text-grey-600">@LOBO</a>
                        </div>

                        <div>
                            <a href="" class="text-grey-400 hover:text-grey-600"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div>
                        <button class="bg-transparent text-xs hover:bg-teal-600 text-teal-600 font-semibold hover:text-white py-2 px-6 border border-teal-600 hover:border-transparent rounded-full">Follow</button>
                    </div>
                </div>
            </div>
            <div class="flex border-b border-solid border-grey-400 p-3 bg-white">
                <div class="py-2">
                    <a href=""><img src="/img/twitter/follow3.jpg" class="rounded-full h-12 w-12" alt=""></a>
                </div>
                <div class="py-2 pl-2 w-full">
                    <div class="flex justify-between mb-1">
                        <div>
                            <a href="" class="font-bold text-black">LARACON</a> <a href="" class="text-grey-600">@LARACON</a>
                        </div>

                        <div>
                            <a href="" class="text-grey-400 hover:text-grey-600"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div>
                        <button class="bg-transparent text-xs hover:bg-teal-600 text-teal-600 font-semibold hover:text-white py-2 px-6 border border-teal-600 hover:border-transparent rounded-full">Follow</button>
                    </div>
                </div>
            </div>
            <div class="flex border-b border-solid border-grey-400 p-3 bg-white">
                <div class="py-4">
                    <a href=""><img src="/img/twitter/outlook.png" class="rounded h-6 w-6" alt=""></a>
                </div>
                <div class="py-2 pl-2 w-full">
                    <div class="flex justify-between">
                        <div>
                            <a href="" class="font-bold text-black">Find people you know</a>
                        </div>
                        <div class="text-xs">
                            Import your contacts from Outlook
                        </div>
                    </div>
                </div>

            </div>
            <div class="pt-2 bg-white mb-5 p-3">
                <a href="#" class="text-xs">Connect other address book</a>
            </div>
            <div class="bg-white p-3 mb-3">
                <div class="mb-3">
                    <span class="text-lg font-bold">Trends for you</span>
                    <span>&middot;</span>
                    <span><a href="#" class="text-xs">Change</a></span>
                </div>

                <div class="mb-3 leading-tight">
                    <div><a href="#" class="font-bold">Happy New Year</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">645K Tweets</a></div>
                </div>

                <div class="mb-3 leading-tight">
                    <div><a href="#" class="font-bold">Happy 2018</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">NYE 2018 Celebrations</a></div>
                </div>

                <div class="mb-3 leading-tight">
                    <div><a href="#" class="font-bold">#ByeBye2017</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">21.7K Tweets</a></div>
                </div>

                <div class="mb-3 leading-tight">
                    <div><a href="#" class="font-bold">#SomeHashTag</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">45K Tweets</a></div>
                </div>

                <div class="mb-3 leading-tight">
                    <div><a href="#" class="font-bold">Something Trending</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">36K Tweets</a></div>
                </div>

                <div class="mb-3 leading-tight">
                    <div><a href="#" class="font-bold">#ColdAF</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">100K Tweets</a></div>
                </div>

            </div>

            <div class="mb-3 text-xs">
                <span class="mr-2"><a href="#" class="text-grey-darker">&copy; 2018 Twitter</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">About</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Help Center</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Terms</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Privacy policy</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Cookies</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Ads info</a></span>
            </div>
        </div>
    </div>
</div>
</body>
</html>



