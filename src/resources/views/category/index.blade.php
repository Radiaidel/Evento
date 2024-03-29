<x-app-layout>
    <div class="container mx-auto p-8" x-data="{ isAddCategoryFormOpen: false }">
        <div class="text-right mb-6">
            <button @click="isAddCategoryFormOpen = true" class="bg-red-600 text-white px-4 py-2 rounded-md">Add New Category</button>
        </div>
        <div x-show="isAddCategoryFormOpen" id="AddCategory" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
            <div class="max-w-md mx-auto p-6 bg-white rounded-2xl shadow-md border w-3/5">
                <div class="w-full items-center flex justify-between">
                    <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Category</h1>
                    <button @click="isAddCategoryFormOpen = false" class="text-gray-500 hover:text-gray-300 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form id="addCategoryForm" method="POST" enctype="multipart/form-data" class="items-center space-y-4" action="{{ route('category.store') }}">
                    @csrf
                    <div class="flex flex-row space-x-4 mt-4">

                        <label for="categorypicture" class="w-20 h-12 rounded-md cursor-pointer flex items-center justify-center border border-3 border-dashed  border-gray-800" id="categorypic">
                            <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" id="plusIcon" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path d="M6 12H18M12 6V18" stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>

                            </svg>
                        </label>
                        <input type="file" id="categorypicture" name="categorypicture" accept="image/*" class="hidden" onchange="displayImage('categorypic','categorypicture')">
                        <input type="text" id="categoryName" name="categoryName" placeholder="name" class="p-2 w-full border border-2 border-gray-600 rounded-md " />
                    </div>

                    <button type="submit" id="addCategoryBtn" class="w-full rounded-md m-auto text-white bg-red-600 text-sm px-5 py-2.5">Add Category</button>
                </form>

            </div>
        </div>
        @if($categories->isEmpty())
        <p class="text-center mt-8">Aucune catégorie trouvé.</p>
        @else


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            @foreach($categories as $category)
            <div class="bg-white p-4 rounded-md shadow-md flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img class="w-16 h-16" src="{{ asset('storage/' . $category->photo_url) }}" alt="Category Picture" />
                    <span class="lg:text-lg font-semibold">{{ $category->name }}</span>
                </div>

                <div class="flex flex-col justify-center space-y-2">
                    <button type="button" class="editCategory" onclick="GetButton('.editCategory','ShowEditForm')" data-category-id="{{ $category->id }}" data-category-name="{{ $category->name }}" data-category-picture="{{ asset('storage/' . $category->photo_url) }}">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#004040" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#004040" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>

                        </svg>
                    </button>

                    <form action="{{ route('categories.destroy', $category->id) }}" method="post" id="deleteCategoryForm{{ $category->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete('{{ $category->id }}')">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path d="M10 11V17" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14 11V17" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4 7H20" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>

                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>



        <div id="EditCategory" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
            <div class="max-w-md mx-auto p-6 bg-white rounded-2xl shadow-md border w-3/5">

                <div class="flex justify-end">
                    <button id="closeBtnedit" class="text-gray-500 hover:text-gray-300 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <form id="EditCategoryForm" method="POST" enctype="multipart/form-data" class="items-center space-y-4" action="{{ route('categories.update', ['id' => $category->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-row space-x-4 mt-4">

                        <label for="Inputcategorypicture" class="w-20 h-12 rounded-md cursor-pointer flex items-center justify-center border border-3 border-dashed  border-gray-800" id="categorypictureedit">
                            <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" id="PlusIcon" xmlns="http://www.w3.org/2000/svg" stroke="#e9e9e9">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <path d="M6 12H18M12 6V18" stroke="#e9e9e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>

                            </svg>
                        </label>
                        <!-- <input type="file" id="Inputcategorypicture" name="Inputcategorypicture" accept="image/*" class="hidden" required> -->
                        <input type="file" id="Inputcategorypicture" name="Inputcategorypicture" accept="image/*" class="hidden" onchange="displayImage('categorypictureedit', 'Inputcategorypicture')">
                        <input type="hidden" name="categoryId" id="categoryId">
                        <input type="text" id="categoryNameedit" name="categoryName" placeholder="category name" class="p-2 w-full border border-2 border-gray-600 rounded-md " />
                    </div>

                    <button type="submit" id="updateCat" class="w-full rounded-md m-auto text-white bg-red-600 text-sm px-5 py-2.5">Update Category</button>
                </form>

            </div>
        </div>
        @endif

    </div>

    <script>
        function displayImage(onlabel, inInput) {
            var input = document.getElementById(inInput);
            var label = document.getElementById(onlabel);

            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    label.style.backgroundImage = 'url(' + e.target.result + ')';
                    label.style.backgroundSize = 'cover';
                    label.style.backgroundPosition = 'center';
                    label.style.border = 'none';
                    document.getElementById('plusIcon').style.display = 'none';
                };

                reader.readAsDataURL(file);
            }
        }


        function confirmDelete(categoryId) {
            event.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')) {
                document.getElementById('deleteCategoryForm' + categoryId).submit();
            }
        }

        function ShowEditForm(button) {
            document.getElementById('closeBtnedit').addEventListener('click', () => {
                document.getElementById('EditCategory').classList.add('hidden');
            });

            var editCategoryForm = document.getElementById('EditCategoryForm');
            var overlay = document.getElementById('EditCategory');
            overlay.classList.remove('hidden');
            console.log(button);
            if (editCategoryForm) {
                editCategoryForm.querySelector('#categoryNameedit').value = button.dataset.categoryName || '';
                editCategoryForm.querySelector('#categoryId').value = button.dataset.categoryId || '';
                var imageUrl = button.dataset.categoryPicture || '';
                displayImageforEdit('categorypictureedit', imageUrl);
                editCategoryForm.classList.remove('hidden');
            }

            function displayImageforEdit(labelid, url) {
                const label = document.getElementById(labelid);

                label.style.backgroundImage = 'url(' + url + ')';
                label.style.backgroundSize = 'cover';
                label.style.backgroundPosition = 'center';
                label.style.border = 'none';
                document.getElementById('PlusIcon').style.display = 'none';
            }
        }

        function GetButton(classbtn, functionshow) {
            document.querySelectorAll(classbtn).forEach(button => {
                button.addEventListener('click', function() {
                    window[functionshow](button);
                });
            });
        }
    </script>
</x-app-layout>