<x-sideNav>

    <style>
        input required[type="number"]::-webkit-outer-spin-button,
        input required[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    <div class="p-0 sm:pl-64 w-full h-screen">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mx-6 mt-4 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
                <a class="text-black opacity-50" href="/homepage">Home</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/']" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="mx-6 font-bold text-black capitalize">Enroll Student</h6>
        </nav>

        <section class=" py-1">
        <div class="w-full px-4 mx-auto mt-6">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-xl rounded-lg">
            <div class="rounded-t-lg bg-sky-500 mb-0 px-6 py-6">
                <div class="text-center flex justify-between items-center">
                    <h6 class="text-2xl font-bold"> Enroll Student </h6>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

            <form method="POST" action="{{ url('/enrollStudent') }}">
                @csrf
                <!-- Personal Info -->
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Student Personal Information</h6>
                <div class="flex flex-wrap">
                    <!-- Full Name -->
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Last Name
                        </label>
                        <input required type="text" name="lName" placeholder="e.g. Dela Cruz" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            First Name
                        </label>
                        <input required type="text" name="fName" placeholder="e.g. Juan" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Middle Name
                        </label>
                        <input required type="text" name="mName" placeholder="e.g. Santo" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Date of Birth
                        </label>
                        <input required type="date" name="dob" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Nationality
                        </label>
                        <input required type="text" name="nationality" placeholder="e.g. Filipino" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Gender
                        </label>
                        <select type="text" name="gender" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Civil Status
                        </label>
                        <select type="text" name="civilStatus" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Contact Number
                        </label>
                        <input required type="number" name="contactNo" placeholder="e.g. 09123456789" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-7/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Place of Birth
                        </label>
                        <input required type="text" name="pob" placeholder="e.g. Legazpi City, Albay" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Student LRN
                        </label>
                        <input required type="text" name="lrn" placeholder="e.g. 41209412" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
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
                        <input readonly type="text" name="college" value="College of Science" placeholder="e.g. Dela Cruz" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Course
                        </label>
                        <select name="course" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="">--Selece Course--</option>
                            <option value="BS Biology">BS BIOLOGY</option>
                            <option value="BS Chemistry">BS CHEMISTRY</option>
                            <option value="BS Computer Science">BS COMPUTER SCIENCE</option>
                            <option value="BS Information Technology">BS INFORMATION TECHNOLOGY</option>
                            <option value="BS Meteorology">BS METEOROLOGY</option>
                        </select>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Year
                        </label>
                        <input readonly name="year" value="1" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></input>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Block
                        </label>
                        <select name="block" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="">--Select Block--</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Semester
                        </label>
                        <input readonly name="sem" value="1" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></input>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-12/12 px-4 flex flex-wrap" id="subjectsContainer">
                        <!-- JS Fills this -->
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
                        <input required type="text" id="permStreet" name="permStreet" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. Apple St.">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            City/Municipality
                        </label>
                        <input required type="text" id="permCity" name="permCity" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. Legazpi City">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Province
                        </label>
                        <input required type="text" id="permProvince" name="permProvince" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. Albay">
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Postal Code
                        </label>
                        <input required type="number" id="permPostal" name="permPostal" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. 4501">
                        </div>
                    </div>    
                </div>
                <!-- End Permanent Address -->

                <!-- Current Address -->
                <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase">Current Address</h6>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                <input type="checkbox" class="mr-2 mb-2" onchange="copyAddress()" id="sameAddress"> Check this if current Address is the Same as Permanent Address
                            </label>
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Street
                        </label>
                        <input required type="text" id="currStreet" name="currStreet" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. Apple St.">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            City/Municipality
                        </label>
                        <input required type="text" id="currCity" name="currCity" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. Legazpi City">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Province
                        </label>
                        <input required type="text" id="currProvince" name="currProvince" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. Albay">
                        </div>
                    </div>
                    <div class="w-full lg:w-2/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Postal Code
                        </label>
                        <input required type="number" id="currPostal" name="currPostal" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="e.g. 4501">
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
                        <input required type="text" name="mLName" placeholder="e.g. Dela Cruz" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Mother's First Name
                        </label>
                        <input required type="text" name="mFName" placeholder="e.g. Juan" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Mother's Middle Name
                        </label>
                        <input required type="text" name="mMName" placeholder="e.g. Santo" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Date of Birth
                        </label>
                        <input required type="date" name="mDOB" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Nationality
                        </label>
                        <input required type="text" name="mNationality" placeholder="e.g. Filipino" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 pb-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Contact Number
                        </label>
                        <input required type="number" name="mContact" placeholder="e.g. 09123456789" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
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
                        <input required type="text" name="fLName" placeholder="e.g. Dela Cruz" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Father's First Name
                        </label>
                        <input required type="text" name="fFName" placeholder="e.g. Juan" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"> 
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Father's Middle Name
                        </label>
                        <input required type="text" name="fMName" placeholder="e.g. Santo" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Date of Birth
                        </label>
                        <input required type="date" name="fDOB" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Nationality
                        </label>
                        <input required type="text" name="fNationality" placeholder="e.g. Filipino" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 pb-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Contact Number
                        </label>
                        <input required type="number" name="fContact" placeholder="e.g. 09123456789" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
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
                        <input required type="text" name="gLName" placeholder="e.g. Dela Cruz" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Guardian's First Name
                        </label>
                        <input required type="text" name="gFName" placeholder="e.g. Juan" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Guardian's Middle Name
                        </label>
                        <input required type="text" name="gMName" placeholder="e.g. Santo" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 pb-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Contact Number
                        </label>
                        <input required type="number" name="gContact" placeholder="e.g. 09123456789" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                        </div>
                    </div>
                    <!-- End Guardian Details -->
                </div>  
                 
                <div class="flex flex-wrap justify-end">
                    <button type="submit" class="shadow-lg bg-gradient-to-r from-sky-600 to-cyan-400 cursor-pointer group relative flex items-center space-x-4 px-4 py-3 rounded-md font-bold text-white">Enroll Student</button>
                </div>
            </form>
            </div>
        </div>
        </div>
        </section>
    </div>  

</x-sideNav>