<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Lakás {{auth()->user()->id }} adminisztráció!
    </h1>
</div>

<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Dokumentumok</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Szerződés
        </p>
    <table class="table-auto">
  <thead>
    <tr>
      <th>tétel 1</th>
      <th>tétel d2</th>
      <th>tétel d3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>TLorem ipsum dolor sit amet, .</td>
      <td>Malcolm Lockyer</td>
      <td>1961</td>
    </tr>
    <tr>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
      <td>The Eagles</td>
      <td>1972</td>
    </tr>
    <tr>
      <td>Lorem ipsum dolor sit amet, consectetur</td>
      <td>Earth, Wind, and Fire</td>
      <td>1975</td>
    </tr>
  </tbody>
</table>

           <div>
        <div class="flex items-center gap-4">
                   @for ($i = 1; $i < 4; $i++)

            <img src="{{URL::asset('/storage/0'.   auth()->user()->id  .'-'.$i.'.jpeg')}}" width=33%/>
       @endfor
    </div>


</div>

</div>
       
</div>
