@php
    function ordinal($number) {
        $suffix = ['th','st','nd','rd','th','th','th','th','th','th'];
        if (($number % 100) >= 11 && ($number % 100) <= 13)
            return $number . 'th';
        return $number . $suffix[$number % 10];
    }
@endphp

<x-sideNav>

    <div class="p-0 sm:pl-64 w-full h-screen">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mx-6 mt-4 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
                <a class="text-black opacity-50" href="/homepage">Home</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/'] opacity-50" aria-current="page"><a href="/studentInformation">Student Information</a></li>
            <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/']" aria-current="page">{{ $student->lName }}, {{ $student->fName }} {{ $student->mName }}</li>
            </ol>
            <h6 class="mx-6 font-bold text-black capitalize">Student Information</h6>
        </nav>

        <section class=" py-1 bg-blueGray-50">
            <div class="w-full px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between items-center">
                        <h6 class="text-2xl font-bold"> {{ $student->lName }}, {{ $student->fName }} {{ $student->mName }} | {{ $student->id }}</h6>
                        <a href="/studentInfoSpecific/{{ $student->id }}" class="shadow-lg bg-gradient-to-r from-sky-600 to-cyan-400 cursor-pointer group relative flex items-center space-x-4 px-4 py-3 rounded-md font-bold text-white">Back</a>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <form action="{{ route('studentInfoSpecific', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Personal Info -->
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Student Personal Information</h6>
                    <div class="flex flex-wrap">
                        <!-- Full Name -->
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Last Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->lName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                First Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->fName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Middle Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->mName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Date of Birth
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->dob }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Nationality
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->nationality }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Gender
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->gender }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Civil Status
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->civilStatus }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Contact Number
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->contactNo }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-7/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Place of Birth
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->pob }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Student LRN
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->lrn }} </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap">
                        <!-- Full Name -->
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                College Enrolled
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->college }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Course
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->course }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Year
                            </label>
                            <select name="year" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                @php
                                    $currYear = $student->year;
                                    $currSem = $student->sem
                                @endphp

                                @if ($currYear == 1 && $currSem == 2)
                                    <option value="2">2</option>
                                @elseif ($currYear == 2 && $currSem == 2)
                                    <option value="3">3</option>
                                @elseif ($currYear == 3 && $currSem == 2)
                                    <option value="4">4</option>
                                @endif

                                @if ($currYear == 1 && $currSem == 1)
                                    <option value="1">1</option>
                                @elseif ($currYear == 2 && $currSem == 1)
                                    <option value="2">2</option>
                                @elseif ($currYear == 3 && $currSem == 1)
                                    <option value="3">3</option>
                                @elseif ($currYear == 4 && $currSem == 1)
                                    <option value="4">4</option>
                                @endif
                                
                            </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Block
                            </label>
                            <select name="block" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Sem
                            </label>
                            <select name="sem" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                @php
                                    $currSem = $student->sem;
                                @endphp    
                            
                                @if ($currSem == 1)
                                    <option value="2">2</option>
                                @else
                                    <option value="1">1</option>
                                @endif
                            </select>
                            </div>
                        </div>
                    </div>

                    <!-- End Personal Information -->

                    <!-- Address Information -->

                    <hr class="mt-6 border-b-1 border-blueGray-300">

                    <!-- Permanent Address -->
                    <h6 class="text-sm mt-3 font-bold uppercase">Address</h6>
                    <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase">Permanent Address</h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Street
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->permStreet }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                City/Municipality
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->permCity }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Province
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->permProvince }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Postal Code
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->permPostal }} </p>
                            </div>
                        </div>    
                    </div>
                    <!-- End Permanent Address -->

                    <!-- Current Address -->
                    <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase">Current Address</h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Street
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->currStreet }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                City/Municipality
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->currCity }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Province
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->currProvince }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Postal Code
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->address->currPostal }} </p>
                            </div>
                        </div>    
                    </div>
                    <!-- End Current Address -->
                    <!-- End Address -->

                    <hr class="mt-6 border-b-1 border-blueGray-300">

                    <!-- Parental Information -->

                    <h6 class="text-sm mt-3 font-bold uppercase">Parents Information</h6>
                    <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase">Mother Information</h6>
                    <div class="flex flex-wrap">
                        <!-- Parent Details -->
                        <!-- Mother's Information -->
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Mother's Last Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->mLName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Mother's First Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->mFName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Mother's Middle Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->mMName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Date of Birth
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->mDOB }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Nationality
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->mNationality }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/12 px-4 pb-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Contact Number
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->mContact }} </p>
                            </div>
                        </div>
                        <!-- End Mother Details -->
                    </div>  

                    <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase">Father Information</h6>
                    <div class="flex flex-wrap">
                        <!-- Father's Information -->
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Father's Last Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->fLName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Father's First Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->fFName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Father's Middle Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->fMName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Date of Birth
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->fDOB }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Nationality
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->fNationality }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/12 px-4 pb-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Contact Number
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->fContact }} </p>
                            </div>
                        </div>
                        <!-- End Father Details -->
                    </div>  

                    <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase">Guardian Information</h6>
                    <div class="flex flex-wrap">
                        <!-- Guardian's Information -->
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Guardian's Last Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->gLName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Guardian's First Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->gFName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Guardian's Middle Name
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->gMName }} </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-3/12 px-4 pb-4">
                            <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Contact Number
                            </label>
                            <p class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 capitalize"> {{ $student->parentinfo->gContact }} </p>
                            </div>
                        </div>
                        <!-- End Guardian Details -->
                    </div>  

                    <div class="flex flex-wrap justify-end">
                        <button type="submit" class="shadow-lg bg-gradient-to-r from-sky-600 to-cyan-400 cursor-pointer group relative flex items-center space-x-4 px-4 py-3 rounded-md font-bold text-white">Confirm update</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
    </section>
    </div>

</x-sideNav>