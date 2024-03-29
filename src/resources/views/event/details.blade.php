<x-app-layout>
    <div class="container mx-auto p-12 ">
        <div class="grid grid-cols-3 gap-8">
            <!-- Partie gauche -->
            <div class="col-span-2 bg-white shadow-md rounded-lg border border-gray-200 p-6">
                <!-- Image -->
                <img src="{{ asset('storage/'.$event->image_path) }}" alt="Event Image" class="w-full  h-64 rounded-lg mb-4">
                <h2 class="text-2xl font-semibold mb-2">{{ $event->title }}</h2>
                <p class="mb-8">{{ $event->description }}</p>
            </div>

            <!-- Partie droite -->
            <div class="col-span-1">

                <div class="bg-white shadow-md rounded-lg border border-gray-200 p-6 mb-6">
                    <div class="flex items-center mb-4 gap-2">
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
                        <p>{{ $event->location }}</p>
                    </div>
                    <div class="flex items-center mb-4 gap-2">
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
                        <p>{{ $event->date }}</p>
                    </div>
                    <div class="flex items-center  gap-2">
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
                        <p>{{ $event->nb_available_places }} Available Places</p>
                    </div>
                    <div class="flex items-center  gap-2 mt-4">
                        <svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path style="fill:#FF2C47;" d="M251.609,484.281c83.241-83.241,166.483-166.48,249.723-249.721V69.129 c0-32.153-26.308-58.46-58.462-58.462H277.441C194.201,93.907,110.959,177.149,27.72,260.389 c-22.736,22.736-22.736,59.941,0,82.675c47.07,47.07,94.144,94.145,141.215,141.216 C191.671,507.014,228.875,507.014,251.609,484.281L251.609,484.281z M389.385,90.612c17.674,0,32.001,14.33,32.001,32.003 c0,17.669-14.327,31.997-32.001,31.997c-17.669,0-31.999-14.327-31.999-31.999C357.386,104.94,371.714,90.612,389.385,90.612z" />
                                    <path style="fill:#FF9600;" d="M389.385,47.946c41.239,0,74.668,33.428,74.668,74.668c0,41.236-33.428,74.666-74.668,74.666 c-41.238,0-74.666-33.429-74.666-74.666C314.72,81.374,348.147,47.946,389.385,47.946L389.385,47.946z M389.383,90.612 c-17.671,0-31.999,14.327-31.997,32.001c0,17.671,14.327,31.997,31.999,31.997s31.999-14.325,32.001-31.995 C421.386,104.94,407.057,90.612,389.383,90.612z" />
                                </g>
                                <g>
                                    <path style="fill:#000003;" d="M442.871,0h-165.43c-2.829,0-5.541,1.124-7.542,3.124l-32.337,32.337 c-5.529-0.46-11.108-0.832-16.73-1.104C149.686,30.909,88.978,43.321,66.169,65.97c-9.138,9.075-10.757,18.199-10.507,24.255 c0.906,21.842,27.039,41.486,72.316,54.82L20.177,252.847c-13.01,13.011-20.175,30.37-20.175,48.881 c0,18.511,7.165,35.87,20.175,48.879l140.06,140.06h-10.902c-5.89,0-10.667,4.775-10.667,10.667 c0,5.891,4.777,10.667,10.667,10.667h213.332c5.89,0,10.667-4.775,10.667-10.667c0-5.891-4.777-10.667-10.667-10.667H260.309 l248.565-248.565c2-2.001,3.124-4.714,3.124-7.542V69.129C511.998,31.013,480.988,0.002,442.871,0z M76.977,89.342 c-0.039-0.96-0.16-3.881,4.224-8.235c14.713-14.608,63.535-28.706,136.253-25.538l-72.097,72.097 C95.898,115.222,77.336,97.99,76.977,89.342z M490.665,230.14L244.067,476.738c-8.98,8.98-20.981,13.926-33.794,13.926 c-12.813,0-24.815-4.946-33.796-13.926L35.262,335.522c-8.981-8.98-13.927-20.982-13.927-33.794 c0-12.812,4.946-24.815,13.927-33.796L245.55,57.642c30.864,3.229,59.362,9.437,82.053,18.02 c15.05,5.693,25.199,11.572,31.566,16.863c-7.689,7.721-12.448,18.359-12.448,30.09c0,3.31,0.391,6.528,1.108,9.623 c0.047,0.258,0.111,0.514,0.178,0.77c0.029,0.115,0.055,0.231,0.084,0.346c0.002,0.006,0.004,0.013,0.006,0.02 c4.781,18.333,21.479,31.904,41.29,31.904c23.525,0,42.665-19.138,42.665-42.663c0-23.527-19.139-42.668-42.665-42.668 c-3.785,0-7.452,0.501-10.948,1.43c-9.034-9.546-23.582-18.214-43.289-25.668c-20.087-7.599-44.272-13.446-70.478-17.189 l17.185-17.186H442.87c26.355,0.001,47.796,21.442,47.796,47.795V230.14H490.665z M389.309,104.462 c-0.044-1.06-0.154-2.114-0.311-3.163c0.131-0.002,0.259-0.02,0.39-0.02c11.762,0,21.331,9.57,21.331,21.334 c0,11.761-9.569,21.33-21.331,21.33c-7.337,0-13.818-3.723-17.659-9.376C386.606,123.998,389.649,112.637,389.309,104.462z" />
                                    <path style="fill:#000003;" d="M457.453,90.13c-5.622,1.76-8.752,7.745-6.992,13.367c1.938,6.189,2.921,12.621,2.921,19.117 c0,35.287-28.709,63.997-63.997,63.997s-63.997-28.709-63.997-63.997c0-5.891-4.777-10.667-10.667-10.667 s-10.667,4.775-10.667,10.667c0,47.051,38.279,85.33,85.33,85.33s85.33-38.279,85.33-85.33c0-8.661-1.311-17.238-3.895-25.492 C469.059,91.499,463.072,88.369,457.453,90.13z" />
                                    <path style="fill:#000003;" d="M443.238,81.562c2.656,0,5.315-0.986,7.383-2.97c4.251-4.078,4.39-10.83,0.313-15.082 c-1.726-1.799-3.564-3.552-5.461-5.211c-4.436-3.875-11.177-3.422-15.051,1.017c-3.876,4.436-3.421,11.175,1.015,15.051 c1.429,1.248,2.81,2.564,4.103,3.913C437.636,80.463,440.434,81.562,443.238,81.562z" />
                                    <path style="fill:#000003;" d="M311.213,327.952c1.967-2.758,3.725-5.594,5.222-8.468c9.554-18.351,7.794-40.861-4.484-57.348 c-11.115-14.924-28.317-21.808-46.009-18.414c-12.663,2.431-24.738,9.28-36.417,15.904c-2.685,1.523-5.22,2.961-7.773,4.354 c-15.612,8.522-30.521,9.125-39.879,1.611c-7.724-6.201-10.295-16.947-6.88-28.745c0.987-3.405,2.736-6.727,5.045-9.898 l17.646,17.644c2.082,2.083,4.812,3.124,7.541,3.124c2.73,0,5.46-1.042,7.542-3.124c4.165-4.165,4.165-10.919-0.001-15.085 l-17.014-17.013c7.679-5.077,16.42-8.944,24.505-10.932c5.721-1.407,9.218-7.185,7.811-12.906 c-1.408-5.721-7.182-9.218-12.906-7.811c-11.379,2.799-23.942,8.379-34.806,16.254l-8.153-8.151 c-4.164-4.165-10.919-4.165-15.085,0.001c-4.165,4.165-4.165,10.919,0.001,15.085l7.665,7.665 c-4.646,5.781-8.256,12.211-10.285,19.216c-5.804,20.049-0.434,39.711,14.016,51.313c16.303,13.089,40.026,13.269,63.454,0.481 c0.819-0.447,1.639-0.908,2.461-1.364l47.167,47.167c-10.256,8.062-21.898,12.005-29.134,9.717 c-5.616-1.778-11.611,1.332-13.39,6.948c-1.779,5.616,1.332,11.611,6.948,13.389c3.595,1.138,7.325,1.668,11.119,1.668 c13.509,0,27.81-6.724,39.563-16.619l11.264,11.265c2.083,2.083,4.813,3.124,7.542,3.124c2.73,0,5.46-1.042,7.542-3.124 c4.165-4.165,4.165-10.919,0-15.085L311.213,327.952z M269.962,264.673c9.609-1.842,18.677,1.877,24.878,10.205 c7.425,9.969,8.474,23.611,2.673,34.752c-0.523,1.004-1.088,1.984-1.673,2.95l-41.934-41.935 C259.469,267.876,264.914,265.642,269.962,264.673z" />
                                    <path style="fill:#000003;" d="M136.52,363.733c-4.164-4.165-10.919-4.165-15.085,0.001c-4.165,4.166-4.165,10.919,0.001,15.085 l4.367,4.366c2.082,2.083,4.812,3.124,7.541,3.124s5.46-1.042,7.542-3.124c4.165-4.166,4.165-10.919-0.001-15.085L136.52,363.733z" />
                                    <path style="fill:#000003;" d="M232.904,414.863l-22.627,22.63l-45.259-45.259c-4.166-4.165-10.918-4.165-15.086,0 c-4.165,4.165-4.165,10.919,0,15.086l45.259,45.259c4.158,4.158,9.621,6.238,15.084,6.238c5.463,0,10.926-2.079,15.085-6.238 l22.63-22.63c4.165-4.165,4.165-10.919,0-15.086C243.822,410.697,237.07,410.697,232.904,414.863z" />
                                </g>
                            </g>

                        </svg>
                        <p>{{ $event->price }}$</p>
                    </div>

                </div>

                <div class="bg-white shadow-md rounded-lg border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold mb-2">Organizer</h3>
                    <div class="flex items-center mb-2 gap-3">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('storage/' . $event->organizer->profile_photo) }}" alt="{{ $event->organizer->name }}" class="w-16 h-16 rounded-full">
                        </div>
                        <div>
                            <p class="font-semibold">{{ $event->organizer->name }}</p>
                            <p>{{ $event->organizer->email }}</p>
                        </div>
                    </div>
                </div>

                <!-- Bouton "Get Ticket" -->
                @if(auth()->user()->role == 'user')
                <div class="fixed bottom-12 right-12  rounded-full bg-red-500 py-2 text-center">
                    <form action="{{ route('event.reserve') }}" method="POST">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        <input type="hidden" name="mode" value="{{ $event->reservation_mode }}">

                        @if($event->date < now()) <button type="button" class="text-white font-semibold py-2 px-8 rounded-lg" disabled>Événement passé</button>
                            @elseif($reservationStatus === 'accepted')
                            <button type="submit" class="text-white font-semibold py-2 px-8 rounded-lg">Voir le billet</button>
                            @elseif($reservationStatus === 'pending')
                            <a href="{{ route('ticket.index') }}" class="text-white font-semibold py-2 px-8 rounded-lg">Voir les réservations</a>
                            @elseif($availablePlaces > 0)
                            <button type="submit" class="text-white font-semibold py-2 px-8 rounded-lg">Réserver</button>

                            @else
                            <p class="text-white font-semibold py-2 px-8 rounded-lg">Plus de places disponibles</p>
                            @endif
                    </form>

                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>