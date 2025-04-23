<x-sideNav>

    <div class="p-0 sm:pl-64 w-full h-screen">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mx-6 mt-4 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                    <a class="text-black opacity-50" href="/homepage">Home</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/']" aria-current="page">Student Information</li>
            </ol>
            <h6 class="mx-6 font-bold text-black capitalize">Student Information</h6>
        </nav>

        <section class="py-1">
            <div class="w-full px-4 mx-auto mt-6">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg border-0">
                    <div class="rounded-t-lg bg-sky-500 mb-0 px-6 py-6">
                        <div class="text-center flex justify-between items-center">
                            <h6 class="text-3xl font-bold"> College of Science </h6>
                            <select name="course" id="courseFilter" class="px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-1/5 ease-linear transition-all duration-150">
                                <option value="all">All Courses</option>
                                <option value="bs-biology">BS Biology</option>
                                <option value="bs-chemistry">BS Chemistry</option>
                                <option value="bs-computer-science">BS Computer Science</option>
                                <option value="bs-information-technology">BS Information Technology</option>
                                <option value="bs-meteorology">BS Meteorology</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                        <!-- BS BIO -->
                        @php
                            $courses = ['BS Biology', 'BS Chemistry', 'BS Computer Science', 'BS Information Technology', 'BS Meteorology'];
                        @endphp

                        @foreach ($courses as $course)
                        <div class="course" data-course="{{ Str::slug($course, '-') }}">
                            <h6 class="text-sm mt-3 font-bold uppercase">{{ strtoupper($course) }}</h6>

                            @php
                                $years = $students->where('course', $course)->pluck('year')->unique();
                                $blocks = $students->where('course', $course)->pluck('block')->unique();
                            @endphp

                            @foreach ($years as $year)
                                @foreach ($blocks as $block)
                            <h6 class="text-gray-400 text-xs mt-2 mb-2 ml-4 font-bold uppercase">{{ strtoupper($course) }} {{ strtoupper($year) }}{{ strtoupper($block) }}</h6>
                            <table class="table-auto border border-gray-400 border-collapse w-full text-center">
                                <thead>
                                    <tr>
                                        <th class="border">Name</th>
                                        <th class="border">Name</th>
                                        <th class="border">Name</th>
                                        <th class="border">Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $filteredStudents = $students
                                            ->where('course', $course)
                                            ->where('year', $year)
                                            ->where('block', $block);
                                    @endphp
                                    
                                    @foreach ($filteredStudents->chunk(4) as $chunk)
                                        <tr>
                                            @foreach ($chunk as $student)
                                                <td class="border px-4 py-2 font-bold w-1/4">
                                                    <a href="/studentInfoSpecific/{{ $student->id }}">{{ $student->lName }}, {{ $student->fName }} {{ $student->mName }}</a>
                                                </td>
                                            @endforeach

                                            @for ($i =$chunk->count(); $i < 4; $i++)
                                                <td class="border px-4 py-2 w-1/4"></td>
                                            @endfor
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @endforeach
                            @endforeach
                        </div>
                        @endforeach                  
                    </div>
                </div>
            </div>
        </section>

        <!-- pop over -->
    </div>
</x-sideNav>