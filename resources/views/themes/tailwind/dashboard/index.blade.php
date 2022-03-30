@extends('theme::layouts.app')


@section('content')

<!-- Section 1 -->
<section class="w-full bg-white">
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
    </div>
	<script src="https://unpkg.com/vue@3.0.2"></script>
	<script type = "text/javascript" src="themes/tailwind/js/app.js"></script>
</header>

<br>
	<div class="relative w-full bg-cover lg:w-12/12 xl:w-12/12">
		<div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
			<div class="relative">
				<p class="mb-2 font-medium text-gray-700 uppercase">Work smarter</p>
				<h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Create your ad copy in seconds</h2>
			</div>
			<p class="text-2xl text-gray-700">We've created a simple formula to follow in order to gain more out of your business.</p>
		</div>
	</div>
	<br>
	<div class="relative mx-auto" id="app">

    	<div class="mx-auto max-w-7xl">
			<div class="py-3">
				<textarea v-model="productDescription" row="4" class="w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" name="message" placeholder="Enter your product description" ref="productDescription"></textarea>
			</div>     
			<ul>
				<li v-for="adCopy in adCopies">
					<p> </p>
				</li>
			</ul>
			<p>	@{{response}} </p>
			<button @click="createAdCopy()" class="inline-block w-full px-5 py-4 mt-3 text-lg font-bold text-center text-gray-900 transition duration-200 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 ease">Generate</button>
		</div>

    </div>

</section>

@endsection
