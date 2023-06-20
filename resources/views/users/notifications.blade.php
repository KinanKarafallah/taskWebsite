<x-layout>
    <div id="last-tasks">
        <h1 class="font-bold py-4 uppercase">Notifications</h1>
        <div class="overflow-x-scroll">
            <table class="w-full space-y-2">
                @forelse (auth()->user()->unreadNotifications as $notify)
                    <div class="bg-black/60">
                        <p class="text-left py-3 px-2 rounded-l-lg">{{$notify->data['message']}} <a href="{{ url('ReadNotification') }}/{{ $notify->id }}" class=" float-right text-indigo-400 underline">Masrk as read</a></p>
                    </div>
                    <div class="border-b border-slate-300"></div>
                @empty
                <p>No items found.</p>  
                @endforelse
            </table>
        </div>
    </div>
</x-layout>