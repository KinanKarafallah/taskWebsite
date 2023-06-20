<x-layout> 
    <div id="last-tasks">
        <h1 class="font-bold py-4 uppercase">Last Tasks</h1>
        <div class="overflow-x-scroll">
            <div class="space-x-2 space-y-2 mb-4">
                <span class="flex mb-2">Filter by: </span>
                <a href="/" class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full {{ request()->get('status') === '' ?  'bg-indigo-800 ring-2 pointer-events-none' : 'bg-indigo-600 text-white hover:bg-indigo-800' }} duration-300 shadow-md font-semibold ">All</a>
                <a href="/?status=completed" class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full {{ request()->get('status') === 'completed' ?  'bg-green-600 text-white  ring-2 pointer-events-none' : 'bg-green-400 text-white hover:bg-green-800' }} transition-all duration-300 shadow-md font-semibold ">Completed</a>
                <a href="/?status=in progress" class="text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full {{ request()->get('status') === 'in progress' ?  'bg-amber-700 text-white ring-2 pointer-events-none' : 'bg-amber-500 text-white hover:bg-amber-700' }} transition-all duration-300 shadow-md font-semibold ">In progress</a>
              </div>
            <table class="w-full whitespace-nowrap">
                @if($tasks && $tasks->count() > 0)
                    <thead class="bg-black/60">
                        <th class="text-left py-3 px-2 rounded-l-lg">Title</th>
                        <th class="text-left py-3 px-2">Description</th>
                        <th class="text-left py-3 px-2">Status</th>
                        <th class="text-left py-3 px-2">Assigned to</th>
                        <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
                    </thead>
                    @foreach ($tasks as $task)
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-2 font-bold">
                            <div class="inline-flex space-x-3 items-center">
                                <span>{{$task->title}}</span>
                            </div>
                        </td>

                        <td class="py-3 px-2">{{$task->description}}</td>
                        <td class="py-3 px-2">{{$task->status}}</td>
                        <td class="py-3 px-2">{{$task->assignedTo->name}}</td>
                        <td class="py-3 px-2">
                            <div class="inline-flex items-center space-x-3">
                                <a href="/task/{{$task->id}}/edit" title="Edit task" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                </a>
                                <form method="POST" action="/task/{{$task->id}}/delete">
                                    @csrf
                                    @method('DELETE')
                                    <button title="Delete task" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr> 
                    @endforeach 
                </table> 
                @else
                <p>No items found.</p>
                    
            @endif
        </div>
    </div>
  
</x-layout>