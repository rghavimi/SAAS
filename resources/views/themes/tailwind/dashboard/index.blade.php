@extends('theme::layouts.app')


@section('content')

<!-- Section 1 -->
<section class="w-full bg-white">
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
    </div>
  </header>
<div class="mx-auto max-w-7xl">
	<div class="flex flex-col lg:flex-row">
		<div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
			<div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
				<div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
					<div class="relative">
						<p class="mb-2 font-medium text-gray-700 uppercase">Work smarter</p>
						<h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Create your ad copy in seconds</h2>
					</div>
					<p class="text-2xl text-gray-700">We've created a simple formula to follow in order to gain more out of your business.</p>
					<a href="#_" class="inline-block px-8 py-5 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Get Started Today</a>
				</div>
			</div>
		</div>
	</div>
</div>
    <div class="mx-auto max-w-7xl">
        <div class="py-3">
            <textarea row="4" class="w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" name="message" placeholder="Your message here..."></textarea>
        </div>

        <div class="py-3">
            <textarea row="4" class="w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" name="message" placeholder="Your message here..."></textarea>
        </div>      
		        
		<div class="relative">
            <a onClick="createAdCopy()" class="inline-block w-full px-5 py-4 mt-3 text-lg font-bold text-center text-gray-900 transition duration-200 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 ease">Submit</a>
        </div>
    </div>



</section>


<script type = "text/javascript" src="themes/tailwind/js/app.js"></script>


@endsection
