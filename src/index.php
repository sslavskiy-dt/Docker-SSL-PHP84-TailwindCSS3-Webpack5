<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/app/basic.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo</title>
	<link rel="stylesheet" href="/css/main.css?v=<?php echo filemod("/css/main.css"); ?>">
</head>

<body>
	<!-- navigation -->
	<nav class="sticky top-0 z-50 bg-gray-800 text-white text-base">
		<div class="container mx-auto px-4 flex items-center flex-wrap gap-6 md:flex-nowrap">
			<!-- hamburger -->
			<div class="md:hidden flex items-center">
				<button id="hamburger">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<g fill="none">
							<path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>
				</button>
			</div>
			<!-- logo -->
			<div class="flex items-center justify-between w-auto">
				<a href="#" class="flex items-center py-5 px-2 text-white flex-1">
					<span class="font-bold">Site Logo</span>
				</a>
			</div>
			<!-- menu -->
			<div id="navigation-menu" class="hidden absolute left-0 top-16 flex-col justify-start bg-gray-800 md:relative md:top-0 md:w-auto md:flex md:flex-row md:space-x-1">
				<!-- Home -->
				<a href="#" class="py-2 px-3 block">Home</a>
				<!-- About -->
				<a href="#" class="py-2 px-3 block">About</a>
				<!-- Services -->
				<div class="relative">
					<button class="dropdown-toggle py-2 px-3 hover:bg-gray-700 flex items-center gap-2 rounded">
						<span class="pointer-events-none">Services</span>
						<svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<g fill="none">
								<path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
						</svg>
					</button>
					<div class="dropdown-menu absolute hidden bg-gray-700 text-white rounded-b-lg pb-2">
						<a href="#" class="block px-6 py-2 hover:bg-gray-800">Web Design</a>
						<a href="#" class="block px-6 py-2 hover:bg-gray-800">Development</a>
						<a href="#" class="block px-6 py-2 hover:bg-gray-800">SEO</a>
					</div>
				</div>
				<!-- Contacts -->
				<a href="#" class="py-2 px-3 block">Contacts</a>
			</div>
			<!-- languages -->
			<div class="relative ml-auto text-sm">
				<button class="dropdown-toggle py-2 px-3 hover:bg-gray-700 flex items-center gap-2 rounded">
					<span id="current-language" class="pointer-events-none uppercase">en</span>
					<svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<g fill="none">
							<path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
					</svg>
				</button>
				<div id="languages" class="dropdown-menu hidden absolute bg-gray-700 text-white rounded-b-lg pb-2">
					<a href="#" class="language block px-6 py-2 hover:bg-gray-800 uppercase">es</a>
					<a href="#" class="language block px-6 py-2 hover:bg-gray-800 uppercase">fr</a>
					<a href="#" class="language block px-6 py-2 hover:bg-gray-800 uppercase">it</a>
					<a href="#" class="language block px-6 py-2 hover:bg-gray-800 uppercase">tr</a>
					<a href="#" class="language block px-6 py-2 hover:bg-gray-800 uppercase">ru</a>
					<a href="#" class="language block px-6 py-2 hover:bg-gray-800 uppercase">ua</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- end navigation -->
	<!-- block 1 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 2 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				SELECT
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 3 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 4 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 5 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 6 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 7 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 8 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- block 9 -->
	<div class="container mx-auto bg-gray-400">
		<div class="columns-3">
			<div class="p-2">
				<button class="btn btn-success">Success</button>
			</div>
			<div class="p-2">
				<button class="btn btn-danger">Danger</button>
			</div>
			<div class="p-2">
				<button class="btn btn-info">Info</button>
			</div>
		</div>
		<div class="columns-3">
			<div class="p-2">
				<input type="text" placeholder="Type = TEXT" class="form-input rounded-md" />
			</div>
			<div class="p-2">
				<input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
			</div>
			<div class="p-2">
				<label class="inline-flex items-center">
					<input type="checkbox" id="cb1" class="rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-300 focus:ring-opacity-50" checked />
					<span class="ml-2 font-bold text-black">Checkbox</span>
				</label>
			</div>
		</div>
	</div>
	<!-- scripts -->
	<script src="/js/main.js?v=<?php echo filemod("/js/main.js"); ?>"></script>
</body>

</html>
