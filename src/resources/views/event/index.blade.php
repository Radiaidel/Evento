<x-app-layout>

    <div class="container mx-auto p-12">
        @if (auth()->user()->role == "organizer")
        <div class="text-right mb-6">
            <a href="{{ route('events.create') }}" class="bg-red-600 text-white px-4 py-2 rounded-md">Add New Event</a>

        </div>
        <div class="text-center mt-4">
        </div>
        @endif
        @if ($events->isEmpty())
        <p class="text-center text-gray-700">no events yet.</p>
        @else
        @foreach ($events as $event)
        <a href="{{ route('event.details', $event->id) }}" class="block mb-4">
            <div class="bg-white p-4 mb-4 shadow-md rounded-lg flex">
                <div class="w-1/2">
                    <img src="{{ asset('storage/' . $event->image_path) }}" alt="Event Image" class="w-full h-64 object-cover rounded-lg">
                </div>
                <div class="w-1/2 ml-4 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mt-2 justify-between">
                            <h2 class="text-lg font-semibold">{{ $event->title }}</h2>
                            @if ($event->status === 'pending')
                            <span class="bg-yellow-400 text-xs text-white px-2 py-1 rounded-full mr-2">Pending</span>
                            @elseif ($event->status === 'accepted')
                            <span class="bg-green-500 text-white px-2 py-1 rounded-full mr-2">Accepted</span>
                            @elseif ($event->status === 'rejected')
                            <span class="bg-red-500 text-white px-2 py-1 rounded-full mr-2">Rejected</span>
                            @endif
                        </div>
                        <p>{{ substr($event->description, 0, 700) }}</p>
                        <div class="flex mt-2 space-between">
                            <div class="mr-4 flex items-center gap-2">
                                <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 32 32" xml:space="preserve" fill="#000000">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <style type="text/css">
                                            .avocado_een {
                                                fill: #231F20;
                                            }

                                            .avocado_zeventien {
                                                fill: #CC4121;
                                            }

                                            .avocado_zes {
                                                fill: #FFFAEE;
                                            }

                                            .avocado_acht {
                                                fill: #A3AEB5;
                                            }

                                            .st0 {
                                                fill: #EAD13F;
                                            }

                                            .st1 {
                                                fill: #E0A838;
                                            }

                                            .st2 {
                                                fill: #D1712A;
                                            }

                                            .st3 {
                                                fill: #788287;
                                            }

                                            .st4 {
                                                fill: #C3CC6A;
                                            }

                                            .st5 {
                                                fill: #6F9B45;
                                            }

                                            .st6 {
                                                fill: #248EBC;
                                            }

                                            .st7 {
                                                fill: #8D3E93;
                                            }

                                            .st8 {
                                                fill: #3D3935;
                                            }

                                            .st9 {
                                                fill: #D36781;
                                            }

                                            .st10 {
                                                fill: #E598A3;
                                            }

                                            .st11 {
                                                fill: #716558;
                                            }

                                            .st12 {
                                                fill: #AF9480;
                                            }

                                            .st13 {
                                                fill: #DBD2C1;
                                            }

                                            .st14 {
                                                fill: #231F20;
                                            }
                                        </style>
                                        <g>
                                            <polygon class="avocado_zes" points="2.5,29.5 2.5,8.5 4.5,8.5 4.5,6.5 29.5,6.5 29.5,27.5 27.5,27.5 27.5,29.5 " />
                                            <polygon class="avocado_zeventien" points="2.5,15.5 2.5,8.5 4.5,8.5 4.5,6.5 29.5,6.5 29.5,13.5 4.5,13.5 4.5,15.5 " />
                                            <g>
                                                <path class="avocado_acht" d="M24,9.5c-0.827,0-1.5-0.673-1.5-1.5V4c0-0.827,0.673-1.5,1.5-1.5s1.5,0.673,1.5,1.5v4 C25.5,8.827,24.827,9.5,24,9.5z M10,9.5C9.173,9.5,8.5,8.827,8.5,8V4c0-0.827,0.673-1.5,1.5-1.5s1.5,0.673,1.5,1.5v4 C11.5,8.827,10.827,9.5,10,9.5z" />
                                            </g>
                                            <path class="avocado_een" d="M13,19v-2h3v7h-2v-5L13,19z M19,24h2v-7h-3v2l1,0V24z M30,6v22h-2v2H2V8h2V6h4V4 c0-1.105,0.895-2,2-2c1.105,0,2,0.895,2,2v2h10V4c0-1.105,0.895-2,2-2c1.105,0,2,0.895,2,2v2H30z M23,8c0,0.551,0.449,1,1,1 s1-0.449,1-1V4c0-0.551-0.449-1-1-1s-1,0.449-1,1V8z M9,8c0,0.551,0.449,1,1,1s1-0.449,1-1V4c0-0.551-0.449-1-1-1S9,3.449,9,4V8z M3,15h1V9H3V15z M27,28H4V16H3v13h24V28z M29,14H5v13h24V14z M29,13V7h-3v1c0,1.105-0.895,2-2,2c-1.105,0-2-0.895-2-2V7H12v1 c0,1.105-0.895,2-2,2c-1.105,0-2-0.895-2-2V7H5v6H29z" />
                                        </g>
                                    </g>

                                </svg>
                                <p class="text-sm">{{ $event->date }}</p>
                            </div>
                            <div class="mr-4 flex items-center gap-2">
                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path fill="#394240" d="M32,0C18.745,0,8,10.745,8,24c0,5.678,2.502,10.671,5.271,15l17.097,24.156C30.743,63.686,31.352,64,32,64 s1.257-0.314,1.632-0.844L50.729,39C53.375,35.438,56,29.678,56,24C56,10.745,45.255,0,32,0z M48.087,39h-0.01L32,61L15.923,39 h-0.01C13.469,35.469,10,29.799,10,24c0-12.15,9.85-22,22-22s22,9.85,22,22C54,29.799,50.281,35.781,48.087,39z" />
                                                <path fill="#394240" d="M32,14c-5.523,0-10,4.478-10,10s4.477,10,10,10s10-4.478,10-10S37.523,14,32,14z M32,32 c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z" />
                                                <path fill="#394240" d="M32,10c-7.732,0-14,6.268-14,14s6.268,14,14,14s14-6.268,14-14S39.732,10,32,10z M32,36 c-6.627,0-12-5.373-12-12s5.373-12,12-12s12,5.373,12,12S38.627,36,32,36z" />
                                            </g>
                                            <g>
                                                <path fill="#F76D57" d="M32,12c-6.627,0-12,5.373-12,12s5.373,12,12,12s12-5.373,12-12S38.627,12,32,12z M32,34 c-5.522,0-10-4.477-10-10s4.478-10,10-10s10,4.477,10,10S37.522,34,32,34z" />
                                                <path fill="#F76D57" d="M32,2c-12.15,0-22,9.85-22,22c0,5.799,3.469,11.469,5.913,15h0.01L32,61l16.077-22h0.01 C50.281,35.781,54,29.799,54,24C54,11.85,44.15,2,32,2z M32,38c-7.732,0-14-6.268-14-14s6.268-14,14-14s14,6.268,14,14 S39.732,38,32,38z" />
                                            </g>
                                            <path opacity="0.2" fill="#231F20" d="M32,12c-6.627,0-12,5.373-12,12s5.373,12,12,12s12-5.373,12-12S38.627,12,32,12z M32,34 c-5.522,0-10-4.477-10-10s4.478-10,10-10s10,4.477,10,10S37.522,34,32,34z" />
                                        </g>
                                    </g>

                                </svg>
                                <p class="text-sm">{{ $event->location }}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="20px" height="20px" fill="#000000">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path style="fill:#FFD782;" d="M164.611,52.008c8.726,30.748,0.993,65.184-23.214,89.391s-58.641,31.939-89.391,23.214 L9.036,207.583l295.381,295.381l42.972-42.972c-8.726-30.749-0.993-65.185,23.214-89.391c24.206-24.206,58.642-31.939,89.391-23.214 l42.972-42.972L207.583,9.036L164.611,52.008z" />
                                        <rect x="188.026" y="169.399" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 663.3517 274.7582)" style="fill:#FF6465;" width="173.49" height="210.73" />
                                        <polygon style="fill:#FFFFFF;" points="233.783,233.783 270.239,246.145 301.092,223.122 300.599,261.614 332.03,283.841 295.269,295.269 283.841,332.03 261.615,300.599 223.121,301.092 246.145,270.239 " />
                                        <g style="opacity:0.1;">
                                            <path d="M71.596,167.913c-6.605-0.388-13.177-1.481-19.589-3.301L9.036,207.583l295.381,295.381l42.972-42.972 c-1.819-6.411-2.912-12.983-3.301-19.589L71.596,167.913z" />
                                        </g>
                                        <path d="M509.353,298.028L275.837,64.511c-0.002-0.002-0.004-0.004-0.006-0.006c-0.002-0.002-0.004-0.004-0.006-0.006L213.972,2.647 c-3.528-3.53-9.249-3.529-12.778,0l-42.972,42.972c-2.317,2.316-3.198,5.705-2.304,8.857c8.13,28.648,0.117,59.507-20.911,80.534 c-15.5,15.5-36.11,24.037-58.033,24.037c-7.622,0-15.191-1.052-22.501-3.126c-3.148-0.894-6.54-0.013-8.857,2.304L2.647,201.194 c-3.529,3.529-3.529,9.25,0,12.778l61.852,61.852c0.002,0.002,0.004,0.004,0.006,0.006s0.004,0.004,0.006,0.006l233.517,233.517 c1.764,1.765,4.077,2.647,6.389,2.647c2.312,0,4.625-0.882,6.389-2.647l42.972-42.972c2.317-2.316,3.198-5.705,2.304-8.857 c-8.13-28.647-0.118-59.505,20.911-80.534c15.5-15.5,36.11-24.037,58.033-24.037c7.622,0,15.191,1.052,22.501,3.126 c3.153,0.896,6.541,0.014,8.857-2.304l42.972-42.972C512.882,307.278,512.882,301.557,509.353,298.028z M457.238,337.365 c-7.277-1.648-14.725-2.482-22.213-2.482c-26.75,0-51.898,10.417-70.811,29.33c-24.384,24.383-34.425,59.594-26.849,93.025 l-32.948,32.947L83.674,269.442l8.519-8.519c3.529-3.529,3.529-9.25,0-12.778c-3.529-3.529-9.25-3.529-12.778,0l-8.519,8.519 l-49.08-49.08l32.948-32.948c7.277,1.648,14.725,2.482,22.213,2.482c26.75,0,51.899-10.417,70.811-29.33 c24.383-24.383,34.425-59.593,26.849-93.024l32.948-32.948l49.08,49.08l-8.519,8.519c-3.529,3.529-3.529,9.25,0,12.778 c1.764,1.764,4.077,2.647,6.389,2.647s4.625-0.882,6.389-2.647l8.519-8.519l220.743,220.743L457.238,337.365z" />
                                        <path d="M267.994,132.541c-3.529-3.529-9.25-3.529-12.778,0L132.541,255.215c-3.529,3.529-3.529,9.25,0,12.778l149.013,149.013 c1.764,1.764,4.077,2.647,6.389,2.647s4.625-0.882,6.389-2.647l122.674-122.674c3.529-3.529,3.529-9.25,0-12.778L267.994,132.541z M287.942,397.839L151.709,261.604l109.896-109.896l136.233,136.235L287.942,397.839z" />
                                        <path d="M227.393,227.393c-2.432,2.432-3.272,6.034-2.167,9.291l10.837,31.957l-20.182,27.045c-2.058,2.757-2.371,6.442-0.81,9.506 s4.74,4.978,8.166,4.934l33.743-0.431l19.484,27.553c1.71,2.417,4.472,3.818,7.377,3.818c0.469,0,0.942-0.036,1.414-0.111 c3.398-0.539,6.194-2.958,7.216-6.243l10.017-32.225l32.225-10.017c3.285-1.022,5.705-3.818,6.243-7.216s-0.9-6.805-3.707-8.791 l-27.553-19.484l0.431-33.743c0.045-3.439-1.869-6.605-4.934-8.166c-3.064-1.563-6.751-1.248-9.506,0.81l-27.045,20.182 l-31.957-10.837C233.427,224.122,229.825,224.96,227.393,227.393z M254.702,267.337l-6.483-19.118l19.118,6.483 c2.816,0.954,5.923,0.464,8.306-1.316l16.179-12.073l-0.258,20.185c-0.037,2.975,1.39,5.776,3.818,7.494l16.482,11.655 l-19.277,5.992c-2.84,0.883-5.064,3.107-5.947,5.947l-5.992,19.277l-11.655-16.482c-1.695-2.396-4.447-3.818-7.377-3.818 c-0.039,0-0.077,0-0.117,0l-20.185,0.258l12.073-16.179C255.166,273.26,255.657,270.154,254.702,267.337z" />
                                        <path d="M187.041,162.332c2.312,0,4.625-0.882,6.389-2.647l33.745-33.745c3.529-3.529,3.529-9.25,0-12.778 c-3.529-3.529-9.25-3.529-12.778,0l-33.745,33.745c-3.529,3.529-3.529,9.25,0,12.778 C182.416,161.449,184.729,162.332,187.041,162.332z" />
                                        <path d="M159.685,180.652c-3.529-3.529-9.251-3.529-12.778,0l-33.745,33.745c-3.529,3.529-3.529,9.25,0,12.778 c1.764,1.764,4.077,2.647,6.389,2.647c2.312,0,4.625-0.882,6.389-2.647l33.745-33.745 C163.214,189.903,163.214,184.181,159.685,180.652z" />
                                    </g>

                                </svg>
                                <p class="text-sm">{{ $event->nb_available_places }} Available Places</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <strong class="text-xl font-semibold">Price: ${{ $event->price }}</strong>
                    </div>
                    @if(auth()->user()->role == 'admin')
                    <div class="flex justify-center mt-4">
                        <form action="{{ route('event.accept', $event->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md mr-2">Accept</button>
                        </form>
                        <form action="{{ route('event.reject', $event->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Reject</button>
                        </form>
                    </div>
                    @endif
                    @if(auth()->user()->id == $event->organizer->id)
                    <div class="flex justify-center mt-4 gap-4 ">
                        <form action="{{ route('event.edit') }}" method="POST" class="inline">
                            @csrf
                            <input type="hidden" name="event_id" value="{{$event->id}}">
                            <button type="submit"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#004040" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#004040" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>

                                </svg></button>
                        </form>
                        @if($event->status === 'pending')
                        <form action="{{ route('event.delete') }}" method="POST" class="inline">
                            @csrf
                            <input type="hidden" name="event_id" value="{{$event->id}}">
                            <button type="submit"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M10 11V17" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14 11V17" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4 7H20" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#004040" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>

                                </svg></button>
                        </form>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </a>
        @endforeach
        @endif
    </div>
</x-app-layout>