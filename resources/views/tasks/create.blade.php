<x-layout>
    <div class="max-w-md mx-auto mt-5">
        <div class="flex items-center space-x-5">
          <div class="h-14 w-14 bg-green-200 rounded-full flex flex-shrink-0 justify-center items-center text-green-500 text-2xl font-mono">i</div>
          <div class="block pl-2 font-semibold text-xl self-start text-slate-200">
            <h2 class="leading-relaxed">Create a Task</h2>
            <p class="text-sm text-slate-400 font-normal leading-relaxed">What you want to do next?</p>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 text-base leading-6 space-y-4 text-slate-400 sm:text-lg sm:leading-7">
            <form method="POST" action="{{ route('task.store') }}">
                @csrf
                <div class="flex flex-col">
                <label class="leading-loose">Task Title</label>
                <input name="title" type="text" class="px-4 py-2 border focus:ring-indigo-400 focus:border-indigo-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Task title">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
                <div class="flex flex-col">
                <label class="leading-loose">Task Status</label>
                <select name="status" type="text" class="px-4 py-2 border focus:ring-indigo-400 focus:border-indigo-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Task Status">
                    <option value="">Select a status</option>
                    <option value="Completed">Completed</option>
                    <option value="In progress">In progress</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>

                <div class="flex flex-col">
                <label class="leading-loose">Task Description</label>
                <input name="description" type="text" class="px-4 py-2 border focus:ring-indigo-400 focus:border-indigo-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Task Description">
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>

                <div class="flex flex-col">
                    <label class="leading-loose" for="assigned_to">Assign to:</label>
                    <select name="assigned_to" id="assigned_to" class="px-4 py-2 border focus:ring-indigo-400 focus:border-indigo-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                        <option value="">Select a user</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" >{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="pt-4 flex items-center space-x-4">
                <a href="/" class="flex justify-center items-center w-full text-red-600 px-4 py-3 rounded-md focus:outline-none">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                </a>
                <button type="submit" class="bg-indigo-400 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
            </div>
          <form>
        </div>
      </div>
</x-layout>