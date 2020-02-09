@extends('layouts.app')


@section('content')
    <div class="flex items-center ">
        <div class="md:w-1/2 md:mx-auto">
            <div class="mb-4 p-4 break-words bg-white border border-2 rounded shadow-md">
                <div class="flex flex-col ">
                    <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                        {{ $thread->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ $thread->description }}
                    </p>

                </div>

                <div class="flex mt-4 items-start">
                    <div class="avatar flex-shrink-0 w-8 h-8 rounded-full border-2 border-grey-300 overflow-hidden">
                        <img src="{{ $thread->user->avatarUrl() }}" alt="">
                    </div>
                    <p class="mt-1 ml-4 tex t-sm text-gray-600">
                        {{ $thread->user->name }} posted {{ $thread->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>
            @auth
                <form action="" class="w-full bg-white border-2 border-gray-300">
                    <textarea name="" id="" rows="4" class="w-full p-4 outline-none" placeholder="Reply to this thread"></textarea>
                    <div class="submit text-right">
                        <button class="px-6 py-2 bg-blue-500 text-white border-0 ">Reply</button>
                    </div>
                </form>
            @else
                <h1 class="text-red-500 text-lg">Please login to reply to this thread

                </h1>
            @endauth

            <h1 class="text-gray-500 text-lg font-bold mt-6">{{ $thread->replies->count() }}  replies</h1>

            <div class="reply mt-6 border-2 border-gray-300 bg-white p-6">
                @foreach($thread->replies as $reply)
                    <div class="flex mb-4 p-4 items-center break-words bg-white border border-2 rounded shadow-md">
                        <div class="avatar flex-shrink-0 w-12 h-12 rounded-full border-4 border-grey-300 overflow-hidden">
                            <img src="{{ $reply->user->avatarUrl() }}" alt="">
                        </div>
                        <div class="flex flex-col ml-4">
                            <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                                {{ $reply->user->name }}
                            </a>
                            <p class="mt-4 text-md text-gray-700">
                                {{ $reply->message }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@endsection
@extends('layouts.app')


@section('content')
    <div class="flex items-center ">
        <div class="md:w-1/2 md:mx-auto">
            <div class="mb-4 p-4 break-words bg-white border border-2 rounded shadow-md">
                <div class="flex flex-col ">
                    <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                        {{ $thread->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ $thread->description }}
                    </p>

                </div>

                <div class="flex mt-4 items-start">
                    <div class="avatar flex-shrink-0 w-8 h-8 rounded-full border-2 border-grey-300 overflow-hidden">
                        <img src="{{ $thread->user->avatarUrl() }}" alt="">
                    </div>
                    <p class="mt-1 ml-4 tex t-sm text-gray-600">
                        {{ $thread->user->name }} posted {{ $thread->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>
            @auth
                <form action="" class="w-full bg-white border-2 border-gray-300">
                    <textarea name="" id="" rows="4" class="w-full p-4 outline-none" placeholder="Reply to this thread"></textarea>
                    <div class="submit text-right">
                        <button class="px-6 py-2 bg-blue-500 text-white border-0 ">Reply</button>
                    </div>
                </form>
            @else
                <h1 class="text-red-500 text-lg">Please login to reply to this thread

                </h1>
            @endauth

            <h1 class="text-gray-500 text-lg font-bold mt-6">{{ $thread->replies->count() }}  replies</h1>

            <div class="reply mt-6 border-2 border-gray-300 bg-white p-6">
                @foreach($thread->replies as $reply)
                    <div class="flex mb-4 p-4 items-center break-words bg-white border border-2 rounded shadow-md">
                        <div class="avatar flex-shrink-0 w-12 h-12 rounded-full border-4 border-grey-300 overflow-hidden">
                            <img src="{{ $reply->user->avatarUrl() }}" alt="">
                        </div>
                        <div class="flex flex-col ml-4">
                            <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                                {{ $reply->user->name }}
                            </a>
                            <p class="mt-4 text-md text-gray-700">
                                {{ $reply->message }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@endsection
@extends('layouts.app')


@section('content')
    <div class="flex items-center ">
        <div class="md:w-1/2 md:mx-auto">
            <div class="mb-4 p-4 break-words bg-white border border-2 rounded shadow-md">
                <div class="flex flex-col ">
                    <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                        {{ $thread->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ $thread->description }}
                    </p>

                </div>

                <div class="flex mt-4 items-start">
                    <div class="avatar flex-shrink-0 w-8 h-8 rounded-full border-2 border-grey-300 overflow-hidden">
                        <img src="{{ $thread->user->avatarUrl() }}" alt="">
                    </div>
                    <p class="mt-1 ml-4 tex t-sm text-gray-600">
                        {{ $thread->user->name }} posted {{ $thread->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>
            @auth
                <form action="" class="w-full bg-white border-2 border-gray-300">
                    <textarea name="" id="" rows="4" class="w-full p-4 outline-none" placeholder="Reply to this thread"></textarea>
                    <div class="submit text-right">
                        <button class="px-6 py-2 bg-blue-500 text-white border-0 ">Reply</button>
                    </div>
                </form>
            @else
                <h1 class="text-red-500 text-lg">Please login to reply to this thread

                </h1>
            @endauth

            <h1 class="text-gray-500 text-lg font-bold mt-6">{{ $thread->replies->count() }}  replies</h1>

            <div class="reply mt-6 border-2 border-gray-300 bg-white p-6">
                @foreach($thread->replies as $reply)
                    <div class="flex mb-4 p-4 items-center break-words bg-white border border-2 rounded shadow-md">
                        <div class="avatar flex-shrink-0 w-12 h-12 rounded-full border-4 border-grey-300 overflow-hidden">
                            <img src="{{ $reply->user->avatarUrl() }}" alt="">
                        </div>
                        <div class="flex flex-col ml-4">
                            <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                                {{ $reply->user->name }}
                            </a>
                            <p class="mt-4 text-md text-gray-700">
                                {{ $reply->message }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@endsection
@extends('layouts.app')


@section('content')
    <div class="flex items-center ">
        <div class="md:w-1/2 md:mx-auto">
            <div class="mb-4 p-4 break-words bg-white border border-2 rounded shadow-md">
                <div class="flex flex-col ">
                    <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                        {{ $thread->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ $thread->description }}
                    </p>

                </div>

                <div class="flex mt-4 items-start">
                    <div class="avatar flex-shrink-0 w-8 h-8 rounded-full border-2 border-grey-300 overflow-hidden">
                        <img src="{{ $thread->user->avatarUrl() }}" alt="">
                    </div>
                    <p class="mt-1 ml-4 tex t-sm text-gray-600">
                        {{ $thread->user->name }} posted {{ $thread->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>
            @auth
                <form action="" class="w-full bg-white border-2 border-gray-300">
                    <textarea name="" id="" rows="4" class="w-full p-4 outline-none" placeholder="Reply to this thread"></textarea>
                    <div class="submit text-right">
                        <button class="px-6 py-2 bg-blue-500 text-white border-0 ">Reply</button>
                    </div>
                </form>
            @else
                <h1 class="text-red-500 text-lg">Please login to reply to this thread

                </h1>
            @endauth

            <h1 class="text-gray-500 text-lg font-bold mt-6">{{ $thread->replies->count() }}  replies</h1>

            <div class="reply mt-6 border-2 border-gray-300 bg-white p-6">
                @foreach($thread->replies as $reply)
                    <div class="flex mb-4 p-4 items-center break-words bg-white border border-2 rounded shadow-md">
                        <div class="avatar flex-shrink-0 w-12 h-12 rounded-full border-4 border-grey-300 overflow-hidden">
                            <img src="{{ $reply->user->avatarUrl() }}" alt="">
                        </div>
                        <div class="flex flex-col ml-4">
                            <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                                {{ $reply->user->name }}
                            </a>
                            <p class="mt-4 text-md text-gray-700">
                                {{ $reply->message }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@endsection
@extends('layouts.app')


@section('content')
    <div class="flex items-center ">
        <div class="md:w-1/2 md:mx-auto">
            <div class="mb-4 p-4 break-words bg-white border border-2 rounded shadow-md">
                <div class="flex flex-col ">
                    <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                        {{ $thread->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ $thread->description }}
                    </p>

                </div>

                <div class="flex mt-4 items-start">
                    <div class="avatar flex-shrink-0 w-8 h-8 rounded-full border-2 border-grey-300 overflow-hidden">
                        <img src="{{ $thread->user->avatarUrl() }}" alt="">
                    </div>
                    <p class="mt-1 ml-4 tex t-sm text-gray-600">
                        {{ $thread->user->name }} posted {{ $thread->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>
            @auth
                <form action="" class="w-full bg-white border-2 border-gray-300">
                    <textarea name="" id="" rows="4" class="w-full p-4 outline-none" placeholder="Reply to this thread"></textarea>
                    <div class="submit text-right">
                        <button class="px-6 py-2 bg-blue-500 text-white border-0 ">Reply</button>
                    </div>
                </form>
            @else
                <h1 class="text-red-500 text-lg">Please login to reply to this thread

                </h1>
            @endauth

            <h1 class="text-gray-500 text-lg font-bold mt-6">{{ $thread->replies->count() }}  replies</h1>

            <div class="reply mt-6 border-2 border-gray-300 bg-white p-6">
                @foreach($thread->replies as $reply)
                    <div class="flex mb-4 p-4 items-center break-words bg-white border border-2 rounded shadow-md">
                        <div class="avatar flex-shrink-0 w-12 h-12 rounded-full border-4 border-grey-300 overflow-hidden">
                            <img src="{{ $reply->user->avatarUrl() }}" alt="">
                        </div>
                        <div class="flex flex-col ml-4">
                            <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                                {{ $reply->user->name }}
                            </a>
                            <p class="mt-4 text-md text-gray-700">
                                {{ $reply->message }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@endsection
@extends('layouts.app')


@section('content')
    <div class="flex items-center ">
        <div class="md:w-1/2 md:mx-auto">
            <div class="mb-4 p-4 break-words bg-white border border-2 rounded shadow-md">
                <div class="flex flex-col ">
                    <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                        {{ $thread->title }}
                    </a>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ $thread->description }}
                    </p>

                </div>

                <div class="flex mt-4 items-start">
                    <div class="avatar flex-shrink-0 w-8 h-8 rounded-full border-2 border-grey-300 overflow-hidden">
                        <img src="{{ $thread->user->avatarUrl() }}" alt="">
                    </div>
                    <p class="mt-1 ml-4 tex t-sm text-gray-600">
                        {{ $thread->user->name }} posted {{ $thread->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>
            @auth
                <form action="" class="w-full bg-white border-2 border-gray-300">
                    <textarea name="" id="" rows="4" class="w-full p-4 outline-none" placeholder="Reply to this thread"></textarea>
                    <div class="submit text-right">
                        <button class="px-6 py-2 bg-blue-500 text-white border-0 ">Reply</button>
                    </div>
                </form>
            @else
                <h1 class="text-red-500 text-lg">Please login to reply to this thread

                </h1>
            @endauth

            <h1 class="text-gray-500 text-lg font-bold mt-6">{{ $thread->replies->count() }}  replies</h1>

            <div class="reply mt-6 border-2 border-gray-300 bg-white p-6">
                @foreach($thread->replies as $reply)
                    <div class="flex mb-4 p-4 items-center break-words bg-white border border-2 rounded shadow-md">
                        <div class="avatar flex-shrink-0 w-12 h-12 rounded-full border-4 border-grey-300 overflow-hidden">
                            <img src="{{ $reply->user->avatarUrl() }}" alt="">
                        </div>
                        <div class="flex flex-col ml-4">
                            <a href="{{ route('thread.show',['thread' => $thread->id]) }}" class="title font-bold text-lg text-grey-800 ">
                                {{ $reply->user->name }}
                            </a>
                            <p class="mt-4 text-md text-gray-700">
                                {{ $reply->message }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@endsection
