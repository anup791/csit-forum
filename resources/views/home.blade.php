@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            @foreach($threads as $thread)
            <div class="flex mb-4 p-4 break-words bg-white border border-2 rounded shadow-md p-4">
                    <div class="avatar w-12 h-12 rounded-full border-4 border-grey-300 flex-shrink-0 overflow-hidden">
                        <img src="{{ $thread->user->avatarUrl() }}" alt="">
                    </div>
                        <div class="flex flex-col ml-4">
                            <a href="{{route('thread.show',['thread'=>$thread->id])}}" class="title font-bold text-lg text-grey-800 ">{{$thread->title}}</a>
                                <p class="mt-4 text-md text-gray-700">
                                    {{$thread->description}}
                                </p>
                            <div class="mt-4 text-gray-500">
                                {{ $thread->replies->count() }} replies
                            </div>
                        </div>
            </div>
                @endforeach
        </div>
    </div>
@endsection
