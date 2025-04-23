@php
    function ordinal($number) {
        $suffix = ['th','st','nd','rd','th','th','th','th','th','th'];
        if (($number % 100) >= 11 && ($number % 100) <= 13)
            return $number . 'th';
        return $number . $suffix[$number % 10];
    }
@endphp

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
            <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/'] opacity-50" aria-current="page"><a href="/gradeStudent">Grade Student</a></li>
            <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/']" aria-current="page">Grade {{ $student->lName }}, {{ $student->fName }} {{ $student->mName }}</li>
            </ol>
            <h6 class="mx-6 font-bold text-black capitalize">Student Information</h6>
        </nav>

        <section class=" py-1 bg-blueGray-50">
        <div class="w-full px-4 mx-auto mt-6">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between items-center">
                    <h6 class="text-2xl font-bold"> Grade Student </h6>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

            <form method="POST" action="{{ url('/grading/' . $student->id) }}">
                @csrf
                <!-- Personal Info -->
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Student Grades</h6>

                @php
                    $yearLevel = (int)$student->year;
                    $semester = (int)$student->sem;
                    $totalSem = (($yearLevel - 1) * 2) + $semester;

                @endphp

                @for ($i = 1; $i <= $totalSem; $i++)
                    @php
                        $y = ceil($i/2);
                        $s = $i % 2 === 0 ? 2 : 1;
                    @endphp
                @if ($y == 1 && $s == 1)
                    <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase"> {{ ordinal($y) }} Year {{ ordinal($s) }} Semester</h6>
                @else
                    <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase pt-6"> {{ ordinal($y) }} Year {{ ordinal($s) }} Semester</h6>
                @endif
                    <div class="flex flex-wrap">
                        @php
                            $subcount = 0;
                        @endphp
                                    
                        @foreach ($curricula as $curriculumSubject)
                            @if (strtoupper($curriculumSubject->course) == strtoupper($student->course) && $curriculumSubject->year == $y && $curriculumSubject->sem == $s)
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        {{ $curriculumSubject->subject_name }}
                                    </label>
                                    @foreach ($student->subjects as $subject) 
                                        @if (strtoupper($subject->subjectName) == strtoupper($curriculumSubject->subject_name) && $subject->pivot->grade != NULL)    
                                            <p required type="number" name="grades[{{ $subject->subjectId }}]" placeholder="{{ $subject->pivot->grade }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">{{ $subject->pivot->grade }}</p>
                                        @elseif ((strtoupper($subject->subjectName) == strtoupper($curriculumSubject->subject_name) && $subject->pivot->grade == NULL))
                                            <input required type="number" name="grades[{{ $subject->subjectId }}]" placeholder="e.g. 90" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        @endif   
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                @endfor

                <div class="flex flex-wrap justify-end pt-6">
                    <button type="submit" class="shadow-lg bg-gradient-to-r from-sky-600 to-cyan-400 cursor-pointer group relative flex items-center space-x-4 px-4 py-3 rounded-md font-bold text-white">Submit Grade</button>
                </div>
            </form>
            
            @if (session('success'))
                <div id="success-popover" class="fixed top-10 right-10 z-50 bg-green-500 text-white px-6 py-3 rounded shadow-lg opacity-100 transform translate-y-2 transition-opacity duration-500">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        </div>
        </section>
    </div>  

</x-sideNav>