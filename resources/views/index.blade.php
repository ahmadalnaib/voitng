
<x-app-layout>
<div class="filters flex space-x-6">
    <div class="w-1/3">
        <select class="w-full rounded-xl px-4 py-2 border-none" name="category" id="category">
         <option value="Category One">Category One</option>
            <option value="Category Two">Category Two</option>
            <option value="Category Three">Category Three</option>
            <option value="Category Four">Category Four</option>
        </select>
    </div>
    <div class="w-1/3">
        <select class="w-full rounded-xl px-4 py-2 border-none" name="other-filters" id="other-filters">
            <option value="Filter  One">Filter One</option>
            <option value="Filter  Two">Filter  Two</option>
            <option value="Filter  Three">Filter  Three</option>
            <option value="Filter  Four">Filter  Four</option>
        </select>
    </div>

    <div class="w-2/3 relative">

        <input type="search" placeholder="Find an Job" class="w-full rounded-xl border-none pg-white px-4 py-2 pl-8 placeholder-gray-900">
        <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="w-4 text-gray-700 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        </div>
    </div>
</div>

{{--    job container--}}
    <div class="ideas-container space-y-6 my-6">
      <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
          <div class="border-r border-gray-100 px-5 py-8">
              <div class="text-center">
                  <div class="font-semibold text-2xl">12</div>
                  <div class="text-gray-500">Votes</div>
              </div>

              <div class="mt-8">
                  <button class="w-20 bg-gray-200 font-bold text-xs uppercase rounded-xl px-4 py-3  border-gray-200 hover:border-gray-400 transition duration-150 ease-in">Vote</button>
              </div>
          </div>

          <div class="flex px-2 py-6">
              <a href="#" class="flex-none">
                  <img src="{{asset('img/profile.png')}}" alt="image" class="w-14 h-14 rounded-xl">
              </a>
              <div class="mx-4">
                  <h4 class="text-xl font-semibold">
                      <a href="#" class="hover:underline">Lorem ipsum dolor sit amet.</a>
                  </h4>
                  <p class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aperiam assumenda dicta doloremque doloribus error et facere in itaque, iure mollitia, officia porro praesentium quod repellat sunt. Autem doloribus dolorum eaque est, expedita explicabo illo impedit ipsa maiores minima nam omnis praesentium quod quos similique sit tenetur? Distinctio, dolorem eius fuga fugiat, laborum laudantium molestiae nobis placeat porro, possimus quae qui quidem repellat sed suscipit temporibus voluptatibus! Cum delectus dicta, dolor ea error explicabo, fugiat nihil nobis nulla odit porro repudiandae sit tempora ut vel veritatis voluptatum. Accusantium beatae cumque dignissimos dolore illum iste nam possimus quae temporibus ut.</p>

                  <div class="flex items-center justify-between mt-6">
                      <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                          <div>10 hours ago</div>
                          <div>&bull;</div>
                          <div>Category 1</div>
                          <div class="text-blue-900">3 comments</div>
                      </div>
                      <div class="flex item-center space-x-2">
                          <div class="bg-gray-200 text-xxs font-semibold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                              Open
                          </div>
                          <button class="relative bg-gray-100 ml-8 hover:bg-gray-200 rounded-full h-7 px-2 px-3">
                              <svg class="w-4 text-gray-700 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              <ul class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3">
                                <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">Mark as Spam</a></li>
                                  <li><a href="#" class="hover:bg-gray-100 transition duration-150 ease-in px-5 py-3 block">Delete </a></li>
                              </ul>
                          </button>
                      </div>
                  </div>
              </div>

          </div>
      </div>
    </div>
</x-app-layout>
